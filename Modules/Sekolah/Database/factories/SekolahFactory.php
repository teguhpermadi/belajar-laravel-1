<?php
namespace Modules\Sekolah\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SekolahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Sekolah\Entities\Sekolah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namasekolah' => $this->faker->company(),
            'bentuk' => $this->faker->randomElement(['tk', 'sd', 'smp', 'sma']),
            'alamat' => $this->faker->address(),
            'npsn' => $this->faker->randomNumber(6),
        ];
    }
}

