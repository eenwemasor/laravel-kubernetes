<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, HasUuids;
    protected $appends = [
        'slug'
    ];

    public function getSlugAttribute(){
        return Str::lower(str_replace(' ', '-', $this->name));
    }

    public function files(): HasMany
    {
        return $this->hasMany(ProductFile::class);
    }
}
