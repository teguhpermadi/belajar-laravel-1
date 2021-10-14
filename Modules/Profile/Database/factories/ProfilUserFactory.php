<?php
namespace Modules\Profile\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Profile\Entities\ProfilUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alamat' => $this->faker->address(),
        ];
    }
}

