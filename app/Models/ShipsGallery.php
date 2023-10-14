<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipsGallery extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'ships_gallery';
}
