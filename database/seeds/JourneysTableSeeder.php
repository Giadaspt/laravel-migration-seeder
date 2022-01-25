<?php

use Faker\Generator as Faker;
use App\Journey;
use Illuminate\Database\Seeder;

class JourneysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++ ){

            $newJourney = new Journey();
            $newJourney->journey_promo = $faker->word();
            $newJourney->location = $faker->city();
            $newJourney->duration = $faker->numberBetween(2, 60);
            $newJourney->beginning_holiday = $faker->dateTimeInInterval('0 year', '+10  days' );;
            $newJourney->end_holiday = $faker->dateTimeInInterval('0 year', '+300  days' );
            $newJourney->location_to_stay = $faker->company();
            $newJourney->description = $faker->text();
            $newJourney->price = $faker->numberBetween(300, 5000);
            $newJourney->meals_included = $faker->boolean(50);
            $newJourney->people_per_journey = $faker->randomDigit();

            $newJourney->save();

        }


    }
}
