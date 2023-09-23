<?php

namespace App\Http\Controllers\device;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('purchases.device.index',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('purchases.device.create');
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
                Device::create($input);

                $request->session()->flash('success', 'Device added successfully');
                return response()->json([
                    'status' => true,
                    'message' =>'Device added successfully'
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
        $device = Device::find($id);
        // dd($supplier);
        return view('purchases.device.edit',compact('device'));
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
        $device = Device::find($id);
        if ($validator->passes()) {
            $input = $request->all();
            $device->update($input);

            $request->session()->flash('success', 'Device Updated successfully');
            return response()->json([
                'status' => true,
                'message' =>'Device Updated successfully'
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
        Device::find($id)->delete();

        return response()->json(['success'=>'Device Deleted Successfully!']);
    }
}
