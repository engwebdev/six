<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ShopFactory extends Factory {
	protected $model = Shop::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'parent_id' => $this->faker->randomNumber(),
			'name' => $this->faker->name,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
			'category_id' => $this->faker->randomNumber(),
		];
	}
}
