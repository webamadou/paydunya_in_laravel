<?php

namespace Database\Factories;

use App\Models\Formule;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name,
            'price'     => $this->faker->numberBetween(20000,100000),
            'storage'   => $this->faker->text(200),
            'nbr_user'  => $this->faker->numberBetween(1,10),
            'help_center' => $this->faker->numberBetween(0,1),
        ];
    }
}
