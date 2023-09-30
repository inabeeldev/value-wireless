<?php

namespace App\Http\Controllers\grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('purchases.grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('purchases.grade.create');
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
            Grade::create($input);

            $request->session()->flash('success', 'Grade added successfully');
            return response()->json([
                'status' => true,
                'message' =>'Grade added successfully'
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
        $grade = Grade::find($id);
        // dd($supplier);
        return view('purchases.grade.edit',compact('grade'));
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
        $Grade = Grade::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $Grade->update($input);

            $request->session()->flash('success', 'Grade Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Grade Updated successfully'
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
        Grade::find($id)->delete();

        return response()->json(['success'=>'Grade Deleted Successfully!']);
    }
}
