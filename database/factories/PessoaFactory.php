<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pessoa;
use HasFactory;

class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $qtd = rand(0, 3); 
        switch ($qtd) {
            case 0:
                $phone = null;
                break;
            case 1:
                $phone = $this->faker->numerify('###-####');
                break;
            case 2:
                $phone = $this->faker->numerify('###-####').','.$this->faker->numerify('###-####');
                break;
            case 3:
                $phone = $this->faker->numerify('###-####').','.$this->faker->numerify('###-####').','.$this->faker->numerify('###-####');
                break;
        }
        
        return [
            'nome' => $this->faker->name(),
            'cpf' => $faker->cpf,
            'email' => $this->faker->unique()->safeEmail(),
            'data_nasc' => \Faker\Provider\DateTime::dateTimeThisCentury()->format('Y-m-d'),
            'nacionalidade' => $this->faker->country(),
            'telefones' => $phone,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
