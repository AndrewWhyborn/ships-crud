<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ship extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'spec', 'description', 'ordering', 'state'];

    public function cabinCategories(): HasMany
    {
        return $this->hasMany(CabinCategory::class)->orderBy("ordering");
    }

    public function shipImages(): HasMany
    {
        return $this->hasMany(ShipsGallery::class)->orderBy("ordering");
    }

    protected $casts = [
        'spec' => 'array'
    ];
}
