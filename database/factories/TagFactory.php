<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TagFactory extends Factory {
	protected $model = Tag::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'tag_name' => $this->faker->name,
			'tag_accept_status' => $this->faker->boolean,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		];
	}
}
