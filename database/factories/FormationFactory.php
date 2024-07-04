<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filieres = ["Web Development" , "Marketing" , "CyberSecurity" , "IA"];
        $followers = $this->faker->numberBetween(100, 10000);
        return [
            "image"=>"images/formations/formation" . $this->faker->numberBetween(1 , 5) . ".jpg",
            "filiere" => $this->faker->randomElement($filieres),
            "prix" => $this->faker->numberBetween(1000,10000),
            "title"=>$this->faker->sentence(),
            "description"=>$this->faker->paragraph(),
            "image_formateur"=>"images/formateurs/formateur" . $this->faker->numberBetween(1,5) . ".png",
            "nom_formateur"=>$this->faker->name(),
            "followers"=>$followers,
            "favoris"=>$this->faker->numberBetween(0,$followers),
        ];
    }
}
