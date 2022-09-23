<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyid' => rand(1,2),
            'name' => 'User Group '.rand(1,50),
            'departementid' => rand(1,2),
        ];
    }
}
