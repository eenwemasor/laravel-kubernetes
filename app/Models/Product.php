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

    protected $casts = [
        'settings'  => 'json',
        'active'    => 'boolean'
    ];

    protected $appends = [
        'slug'
    ];

    public function getSlugAttribute()
    {
        $slug = str_replace(',', '-', $this->name);
        $slug = str_replace('”', '-', $slug);
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('.', '-', $slug);

        return Str::lower($slug);
    }

    public function files(): HasMany
    {
        return $this->hasMany(ProductFile::class);
    }
}
