<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory, HasUuids;

    protected $appends = [
        'url'
    ];

    protected $guarded =  [];

    public function getUrlAttribute(){
        return Storage::disk($this->disk)->url($this->path);
    }
}
