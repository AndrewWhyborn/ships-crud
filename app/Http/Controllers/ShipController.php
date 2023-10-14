<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Services\ShipServices;
use App\ViewModels\ShipView;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function update(Ship $ship, Request $request, ShipServices $shipServices): RedirectResponse
    {
        $shipServices->updateShip($ship, $request);
        session()->flash('message', "Лайнер {$ship->title} обновлен");
        return redirect(route("ships.edit", ["ship" => $ship]));
    }
}
