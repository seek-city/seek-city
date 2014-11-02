<?php

use Faker\Factory as Faker;

class VenuesTableSeeder extends Seeder {
 
       public function run()
       {
        $faker = Faker::create();
        $close_hour = $faker->time('H');
        $updatedAt = $faker->dateTimeThisYear();
        $createdAt = $faker->dateTimeThisYear($updatedAt);
        

        DB::table('venues')->insert(array(
            array('name'=>'Tobin Art Center','address'=>'100 Auditorium Circle','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Majestic Theater','address'=>'224 E. Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Childrens Museum','address'=>'305 E. Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Geekdom','address'=>'110 E. Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'The Alamo','address'=>'300 Alamo Plaza','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Henry B. Gonzalas Convention Center','address'=>'200 E. Market Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Travis Park','address'=>'301 E. Travis St.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Brackenridge Park','address'=>'3700 North St. Marys Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78209','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Incarnate Word University','address'=>'4301 Broadway','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78209','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'O Henry Museum','address'=>'601 Dolorosa Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78207','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Buckhorn Museum','address'=>'318 E. Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Ripleys Museum','address'=>'301 Alamo Plaza','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Wax Museum','address'=>'600 Soledad Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Dinosaur Quest','address'=>'849 E. Commerce Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78201','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Hertzberg Circus Museum','address'=>'600 Soledad Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'San Antonio Art League','address'=>'130 King Ave.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78204','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Holocaust Memorial Museum','address'=>'12500 N.W. Military Highway','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78231','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Steve Homestead Museum','address'=>'509 King William Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78201','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Club Venum Rock','address'=>'2407 N. St. Marys Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Graham Cental Station','address'=>'4902 Fredericksberg Rd.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Silver Dollar Saloon','address'=>'1814 N. Main St.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Irish Pub San Antonio','address'=>'9726 Datapoint Drive','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78229','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Alibis Sports','address'=>'1141 E. Commerce Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Alamo Dome','address'=>'100 Montana Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78203','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'AT & T Center','address'=>'1 AT&T Center Parkway ','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78219','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            ),
            array('name'=>'Harlequin Dinner Theater','address'=>'2652 Harney Road','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78234','phone_number'=>'867-5309','parking_available'=> 1,
                'open_hour'=>$faker->time('H', $close_hour), 'close_hour'=>$close_hour, 'website_url'=> $faker->url, 'facebook_url'=> $faker->url, 'google_url'=> $faker->url, 'twitter_handle'=> $faker->url,
                'image_url'=> 'http://lorempixel.com/400/200/','created_at'=>$createdAt,'updated_at'=>$updatedAt
            )   
        ));
    }
 
}