<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <hr class="my-6">

        <!-- Pizza List Section -->
        <h1 class="text-2xl font-semibold mb-4">Pizza List</h1>
        <ul>
            @foreach ($pizzas as $pizza)
                <li class="mb-4">
                    <strong>{{ $pizza->name }}</strong> - ${{ number_format($pizza->price, 2) }}
                    <ul class="ml-4">
                        <h3 class="font-medium text-lg">Toppings:</h3>
                        @foreach ($pizza->toppings as $topping)
                            <li>{{ $topping->name }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

        <hr class="my-6">

        <!-- Topping List Section -->
        <h1 class="text-2xl font-semibold mb-4">Topping List</h1>
        <ul>
            @foreach ($toppings as $topping)
                <li>{{ $topping->name }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
