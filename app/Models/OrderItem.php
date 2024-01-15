<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderItem extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'sizes'     => 'json',
        'length'    => 'float',
        'width'     => 'float',
        'height'    => 'float',
        'quantity'  => 'float',
        'amount'  => 'float',
    ];
    
    protected $guarded = [];
    
    /**
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return HasOne
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    /**
     * @return HasOne
     */
    public function artwork(): HasOne
    {
        return $this->hasOne(File::class, 'id', 'artwork_id');
    }
}
