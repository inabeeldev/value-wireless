<?php

namespace App\Http\Controllers\color;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('purchases.Color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.Color.create');
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
            Color::create($input);

            $request->session()->flash('success', 'Color added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Color added successfully'
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
        $color = Color::find($id);
        // dd($supplier);
        return view('purchases.Color.edit',compact('color'));
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
        $Color = Color::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $Color->update($input);

            $request->session()->flash('success', 'Color Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Color Updated successfully'
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
        Color::find($id)->delete();

        return response()->json(['success'=>'Color Deleted Successfully!']);
    }
}
