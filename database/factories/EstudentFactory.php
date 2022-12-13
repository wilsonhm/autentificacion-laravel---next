<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;


class EstudentFactory extends Factory
{
    public function definition()
    {   
 
        $name=$this->faker->unique()->name(60);

    return [
        'codigEstudent'=>$this->faker->randomNumber(9),
        'name'=>$name,
        'fatherlastname'=>$this->faker->lastName,
        'motherlastname'=>$this->faker->lastName,
        'dni'=>$this->faker->randomNumber(8),
        'phone'=>$this->faker->unique->phoneNumber(9),
        'email' => $this->faker->unique()->email(),
        'address'=>$this->faker->address(),
    ];
}
}
