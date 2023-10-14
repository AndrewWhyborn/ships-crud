<?php


namespace App\ViewModels;


use App\Models\Ship;

class ShipView
{
    public function getShips()
    {
        return Ship::where("state", 1)->get();
    }
}
