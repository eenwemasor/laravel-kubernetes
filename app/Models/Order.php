<?php

namespace App\Models;

use App\Observers\OrderObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [];
    
    protected $guarded = [];

    protected $appends = [
        'formatted_created_at'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasOne
     */
    public function shipping(): HasOne
    {
        return $this->hasOne(OrderShipping::class, 'id', 'shipping_info_id');
    }

    /**
     * @return HasOne
     */
    public function billing(): HasOne
    {
        return $this->hasOne(OrderBilling::class, 'id', 'billing_info_id');
    }

    /**
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedCreatedAtAttribute(){
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }

    protected static function boot()
    {
        parent::boot();
        static::observe(OrderObserver::class);
    }
}
