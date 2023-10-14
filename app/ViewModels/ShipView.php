<?php


namespace App\ViewModels;


use App\Models\Ship;

class ShipView
{
    public function getShips()
    {
        return Ship::orderBy('ordering')->get();
    }
}
