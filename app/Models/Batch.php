<?php

namespace App\Models;

use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class , 'supplier_id' ,'id');
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class , 'warehouse_id' ,'id');
    }
}
