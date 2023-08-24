<?php

namespace App\Http\Controllers\supplier;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers =  Supplier::all();
        return view('purchases.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('purchases.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        if ($validator->passes()) {
            $input = $request->all();
            Supplier::create($input);

            $request->session()->flash('success', 'Supplier added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Supplier added successfully'
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
        $supplier = Supplier::find($id);
        // dd($supplier);
        return view('purchases.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $supplier = Supplier::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $supplier->update($input);

            $request->session()->flash('success', 'Supplier Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Supplier Updated successfully'
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
        Supplier::find($id)->delete();

        return response()->json(['success'=>'Supplier Deleted Successfully!']);
    }
}
