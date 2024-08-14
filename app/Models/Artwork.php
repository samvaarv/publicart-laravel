<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'imageURL',
        'yearInstalled',
        'description',
        'artist_id',
        'location_id'
    ];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
