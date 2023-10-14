<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ship extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'spec', 'description', 'type', 'ordering', 'state'];

    public function cabinCategories(): HasMany
    {
        return $this->hasMany(CabinCategory::class)->orderBy("ordering");
    }

    public function shipPreview()
    {
        if (count($this->shipsGalleries) > 0) return $this->shipsGalleries[0];
        return null;
    }
}
