<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lexicon>
 */
class LexiconFactory extends Factory
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
                'title' => 'Teknika 1 EN',
                'description' => 'Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio. Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio. Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, restinv consequati abo. Icil modi au',
                'active' => true

            ],
            'hu' => [
                'title' => 'Teknika 1 HU',
                'description' => 'Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio. Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, consequati abo. Icil modi aut ese modignis aut dolor ad et restinv enditiam sam dercill aturepro exerovit as poressum exerferfero eumqui aut quamumaio. Periorem vid ma digendicia sam verchit quam re modisiti idelluptati autatquatis re, restinv consequati abo. Icil modi au',
                'active' => true
            ],
            'published' => 1,
        ];
    }
}
