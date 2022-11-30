<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function menu()
    {
        return view('end-user.menu', [
            'foods' => Food::all()
        ]);
    }

    public function show(Food $food)
    {
        return view ('end-user.item', [
            'food' => $food
        ]);
    }
}
