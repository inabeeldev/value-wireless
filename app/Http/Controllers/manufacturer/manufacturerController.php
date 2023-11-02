<?php

namespace App\Http\Controllers\manufacturer;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('purchases.manufacturer.index', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.manufacturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);
        if ($validator->passes()) {
            $input = $request->all();
            Manufacturer::create($input);

            $request->session()->flash('success', 'Manufacturer added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Manufacturer added successfully'
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
        $manufacturer = Manufacturer::find($id);
        // dd($supplier);
        return view('purchases.manufacturer.edit',compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);
        $manufacturer = Manufacturer::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $manufacturer->update($input);

            $request->session()->flash('success', 'Manufacturer Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Manufacturer Updated successfully'
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
        Manufacturer::find($id)->delete();

        return response()->json(['success'=>'Manufacturer Deleted Successfully!']);
    }
}
