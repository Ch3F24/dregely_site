<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'en' => [
                'title' => 'Fotóművészet magazin – 2011',
                'description' => 'Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio.',
                'active' => true

            ],
            'hu' => [
                'title' => 'Fotóművészet magazin Angol – 2011',
                'description' => 'Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio.',
                'active' => true
            ],
            'published' => true,
        ];
    }
}
