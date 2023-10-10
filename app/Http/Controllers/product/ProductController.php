<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Product;
use App\Models\PurchasedDevice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $device = PurchasedDevice::create([
            'device_id' => $request->input('device_id'),
            'batch_id' => 12,
            'grade_id' => $request->input('grade_id'),
            'purchase_price' => $request->input('purchase_price'),
            'quantity' => 5,
        ]);

        $dv = Device::where('id', $device->device_id)->first();

        return response()->json(['device_id' => $device->id,'deviceName' => $dv->name]);
    }

    public function storeImei(Request $request)
    {
        // dd($request->all());
        // Store IMEI number for a device
        $deviceID = $request->input('device_id');
        $imei = $request->input('imei');

        $imeiNumber = new Product();
        $imeiNumber->purchased_device_id = $deviceID;
        $imeiNumber->imei = $imei;
        $imeiNumber->save();

        return response()->json(['imei' => $imei]);
    }
}
