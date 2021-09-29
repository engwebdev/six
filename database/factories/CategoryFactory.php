<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoryFactory extends Factory {
	protected $model = Category::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'category_name' => $this->faker->name,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		];
	}
}
