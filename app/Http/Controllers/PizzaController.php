<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Topping;

class PizzaController extends Controller
{
    public function index()
    {
        // Fetch all pizzas and toppings
        $pizzas = Pizza::all();
        $toppings = Topping::all();

        return view('pizzas.index', compact('pizzas', 'toppings'));
    }
}