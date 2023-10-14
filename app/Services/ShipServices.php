<?php


namespace App\Services;


use App\Models\Ship;
use Illuminate\Http\Request;

class ShipServices
{
    public function updateShip(Ship $ship, Request $request)
    {
        $spec = [];

        $specNames = $request->input("specName");
        $specValue = $request->input("specValue");

        for ($i = 0; $i < count($specNames); $i++) {
            $spec[] = [
                "name" => $specNames[$i],
                "value" => $specValue[$i]
            ];
        }

        $ship->update([
            "title" => $request->input("title"),
            "spec" => $spec,
            "description" => $request->input("description"),
            "ordering" => $request->input("ordering"),
            "state" => $request->input("state"),
        ]);
    }
}
