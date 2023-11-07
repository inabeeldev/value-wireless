<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Device;
use App\Models\Gb;
use App\Models\Grade;
use App\Models\Product;
use App\Models\PurchasedDevice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $device = PurchasedDevice::create([
            'device_id' => $request->input('device_id'),
            'batch_id' => $request->input('batch_id'),
            'gb_id' => $request->input('gb_id'),
            'color_id' => $request->input('color_id'),
            'manufacturer_id' => $request->input('manufacturer_id'),
            'grade_id' => $request->input('grade_id'),
            'purchase_price' => $request->input('purchase_price'),
            'quantity' => 5,
        ]);

        $dv = Device::where('id', $device->device_id)->first();
        $color = Color::where('id', $device->color_id)->first();
        $gb = Gb::where('id', $device->gb_id)->first();
        $grade = Grade::where('id', $device->grade_id)->first();

        return response()->json(['device_id' => $device->id,'deviceName' => $dv->name,'colorName' => $color->name,
                                'gbName' => $gb->name,'gradeName' => $grade->name,'quantity' => $device->quantity,'purchasedPrice' => $device->purchase_price]);
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
