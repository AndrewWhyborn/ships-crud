<?php

namespace App\Http\Controllers;

use App\Models\CabinCategory;
use App\Services\CabinCategoryServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CabinCategoryController extends Controller
{
    public function edit(CabinCategory $cabinCategory): View
    {
        return view("cabinCategories/edit", ["cabinCategory" => $cabinCategory]);
    }

    public function update(CabinCategory $cabinCategory, Request $request, CabinCategoryServices $cabinCategoryServices): RedirectResponse
    {
        $cabinCategoryServices->updateCabinCategory($cabinCategory, $request);
        session()->flash('message', "Категория {$cabinCategory->title} лайнера {$cabinCategory->ship->title} обновлена");

        return redirect(route("cabinCategories.edit", ["cabinCategory" => $cabinCategory]));
    }
}
