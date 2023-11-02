<?php

namespace App\Http\Controllers\gb;

use App\Models\Gb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gbs = Gb::all();
        return view('purchases.gb.index', compact('gbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.gb.create');
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
            Gb::create($input);

            $request->session()->flash('success', 'Gb added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Gb added successfully'
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
        $gb = Gb::find($id);
        // dd($supplier);
        return view('purchases.gb.edit',compact('gb'));
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
        $gb = Gb::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $gb->update($input);

            $request->session()->flash('success', 'Gb Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Gb Updated successfully'
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
        Gb::find($id)->delete();

        return response()->json(['success'=>'Gb Deleted Successfully!']);
    }
}
