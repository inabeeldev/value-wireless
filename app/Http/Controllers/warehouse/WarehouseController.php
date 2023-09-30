<?php

namespace App\Http\Controllers\warehouse;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warehouses = Warehouse::all();
        return view('purchases.warehouse.index' , compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'location' => 'required'
        ]);
        if ($validator->passes()) {
            $input = $request->all();
            Warehouse::create($input);

            $request->session()->flash('success', 'Warehouse added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Warehouse added successfully'
            ]);
        }
        else {
            // return redirect()->route('warehouse.create')->withErrors($validator)->withInput();
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
        $warehouse = Warehouse::find($id);
        // dd($supplier);
        return view('purchases.warehouse.edit',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'location' => 'required'
        ]);
        $warehouse = Warehouse::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $warehouse->update($input);

            $request->session()->flash('success', 'Warehouse Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Warehouse Updated successfully'
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Warehouse::find($id)->delete();

        return response()->json(['success'=>'Warehouse Deleted Successfully!']);
    }
}
