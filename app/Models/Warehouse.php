<?php

namespace App\Models;

use App\Models\Batch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function batch(): HasMany
    {
        return $this->hasMany(Batch::class , 'id','warehouse_id');
    }
}
