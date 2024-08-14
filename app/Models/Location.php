<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'ward',
        'wardFullName'
    ];

    public function artwork() {
        return $this->hasOne(Artwork::class);
    }
}
