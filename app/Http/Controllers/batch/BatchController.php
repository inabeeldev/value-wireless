<?php

namespace App\Http\Controllers\batch;

use App\Models\Batch;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Device;
use App\Models\Gb;
use App\Models\Grade;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::with(['supplier','warehouse'])->get();
        // dd($batches);
        return view('Purchases.batch.index', compact('batches'));

    }
    public function forget()
    {
        session()->forget('batch_detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warehouses = Warehouse::all();
        $suppliers = Supplier::all();
    return view('Purchases.batch.create', compact('suppliers','warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'batch_no' => 'required',
            'warehouse_id' => 'required',
            'supplier_id' => 'required',
            'paid' => 'required',
            'comment' => 'required'
        ]);
        if ($validator->passes()) {
            $input = $request->all();

            // $input['status'] = 'disbale';
            $input['user_id'] = auth()->user()->id;
            $batch =  Batch::create($input);
            Session::put('batch_detail', $batch);

            $request->session()->flash('success', 'Batch added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Batch added successfully'
            ]);
        }
        else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    public function batch_detail()
    {
        $batch_detail = Session::get('batch_detail');
        $supplier = Supplier::where('id',$batch_detail['supplier_id'])->first();
        $warehouse = Warehouse::where('id',$batch_detail['warehouse_id'])->first();

        $devices = Device::all();
        $grades = Grade::all();
        $gbs = Gb::all();
        $manufacturers = Manufacturer::all();
        $colors = Color::all();
        //   dd($warehouse);
        return view('purchases.batch.batch_detail',compact('batch_detail','supplier','warehouse',
                    'devices','grades','gbs','manufacturers','colors'));

    }

    public function addBatchDevice(Request $request)
    {
        // Retrieve data from the request
        $deviceId = $request->input('device_id');
        $gradeId = $request->input('grade_id');
        $purchasePrice = $request->input('purchase_price');

        // Retrieve device and grade names from the database
        $device = Device::where('id', $deviceId)->first();
        $grade = Grade::where('id', $gradeId)->first();

        // Validate and process the data as needed
        // For example, you can store the device information in the session

        // Create an HTML representation of the added device with device name and grade name
        $deviceHtml = "<td class='device1'></td><td class='grade1'></td><td>{$purchasePrice}</td>";

        // Return a JSON response with the HTML, device name, and grade name
        return response()->json([
            'success' => true,
            'html' => $deviceHtml,
            'deviceName' => $device->name,
            'gradeName' => $grade->name,
        ]);
    }

    public function updateStatus(Request $request, $batchId)
    {
        $batch = Batch::find($batchId);

        if (!$batch) {
            return redirect()->route('batch.index');
        }

        // Check which button was clicked
        if ($request->has('create_batch')) {
            $batch->status = 'enable';
            $batch->save();
            session()->forget('batch_detail');
            return redirect()->route('batch.index')->with('success', 'Batch created successfully');

        } elseif ($request->has('cancel_batch')) {
            $batch->status = 'disable';
            $batch->save();
            session()->forget('batch_detail');
            return redirect()->route('batch.index')->with('success', 'Batch saved in draft successfully');

        }
        else{
            session()->forget('batch_detail');
            return redirect()->route('batch.index')->with('success', 'Batch created successfully');
        }

    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
