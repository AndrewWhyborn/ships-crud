<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\ViewModels\ShipView;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index(ShipView $shipView): View
    {
        return view("ships/index", ["ships" => $shipView->getShips()]);
    }

    public function edit(Ship $ship): View
    {
        return view("ships/edit", ["ship" => $ship]);
    }

    public function update(Request $request): View
    {
        dd($request);
    }
}
