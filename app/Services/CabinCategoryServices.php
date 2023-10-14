<?php


namespace App\Services;


use App\Models\CabinCategory;
use Illuminate\Http\Request;

class CabinCategoryServices
{
    public function updateCabinCategory(CabinCategory $cabinCategory, Request $request)
    {
        $cabinCategory->update([
            'vendor_code' => $request->input("vendor_code"),
            'title' => $request->input("title"),
            'type' => $request->input("type"),
            'description' => $request->input("description"),
            'ordering' => $request->input("ordering"),
            'state' => $request->input("state")
        ]);
    }
}
