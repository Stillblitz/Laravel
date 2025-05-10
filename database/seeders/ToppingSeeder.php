<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topping;

class ToppingSeeder extends Seeder
{
    public function run(): void
    {
        $toppings = ['Cheese', 'Pepperoni', 'Mushrooms', 'Onions', 'Bacon', 'Olives'];

        foreach ($toppings as $name) {
            Topping::create(['name' => $name]);
        }
    }
}
