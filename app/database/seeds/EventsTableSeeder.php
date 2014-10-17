<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            $eventDate = $faker->dateTimeThisYear();
            $updatedAt = $faker->dateTimeThisYear($eventDate);
            $createdAt = $faker->dateTimeThisYear($updatedAt);
            Event::create([
                'title'      => $faker->catchPhrase,
                'body'       => $faker->paragraph(4),
                'updated_at' => $updatedAt,
                'created_at' => $createdAt,
                'event_date' => $eventDate,
                'image_path' => "http://lorempixel.com/400/200/",
                'price'      => 0
            ]);
        }
    }

}