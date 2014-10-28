<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActivitiesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        


        foreach(range(1, 30) as $index)
        {
            $activityDate = $faker->dateTimeThisYear();
            $updatedAt = $faker->dateTimeThisYear($activityDate);
            $createdAt = $faker->dateTimeThisYear($updatedAt);
            Activity::create([
                'title'      => $faker->catchPhrase,
                'body'       => $faker->paragraph(4),
                'updated_at' => $updatedAt,
                'created_at' => $createdAt,
                'activity_date' => $activityDate,
                'image_path' => "http://lorempixel.com/400/200/",
                'price'      => 0,
                'user_id'    => 1
            ]);
        }
    }

}