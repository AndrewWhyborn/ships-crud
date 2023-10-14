<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinCategory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['ship_id', 'vendor_code', 'title', 'type', 'description', 'photos', 'ordering', 'state'];
}
