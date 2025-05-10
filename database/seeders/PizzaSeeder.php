<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;
use App\Models\Topping;

class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        $pizzaData = [
            ['name' => 'Margherita', 'price' => 8.99, 'toppings' => ['Cheese']],
            ['name' => 'Pepperoni Feast', 'price' => 10.99, 'toppings' => ['Cheese', 'Pepperoni']],
            ['name' => 'Veggie Delight', 'price' => 9.99, 'toppings' => ['Mushrooms', 'Onions', 'Olives']],
            ['name' => 'Meat Lovers', 'price' => 12.49, 'toppings' => ['Cheese', 'Bacon', 'Pepperoni']],
        ];

        foreach ($pizzaData as $data) {
            $pizza = Pizza::create([
                'name' => $data['name'],
                'price' => $data['price'],
            ]);

            // Attach toppings by name
            $toppingIds = Topping::whereIn('name', $data['toppings'])->pluck('id');
            $pizza->toppings()->attach($toppingIds);
        }
    }
}
