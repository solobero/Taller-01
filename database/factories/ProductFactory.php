<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Smartphone X200',
                'UltraHD 4K Monitor',
                'Wireless Headphones Pro',
                'Gaming Laptop Elite',
                'Smartwatch V2',
                '4G LTE Router',
                'Bluetooth Speaker Mini',
                'Tablet Pro Max',
                'External SSD 1TB',
                'Smart Home Hub',
            ]),
            'description' => $this->faker->paragraph,
            'image' => 'images/default.jpeg',
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
            'warranty' => $this->faker->numberBetween($min = 3, $max = 24),
        ];
    }
}