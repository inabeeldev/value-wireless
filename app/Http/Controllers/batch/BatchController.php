<?php

namespace App\Http\Controllers\batch;

use App\Models\Batch;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            Batch::create($input);

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
