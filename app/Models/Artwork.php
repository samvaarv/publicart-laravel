<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{

    public function artist() {
        return $this->belongsTo(Artist::class);
    }
    
    use HasFactory;
    protected $fillable = [
        'title',
        'imageURL',
        'yearInstalled',
        'description',
        'artist_id',
    ];
}
