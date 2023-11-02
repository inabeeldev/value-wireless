<?php

namespace App\Models;

use App\Models\Device;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturer extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
