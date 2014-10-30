<?php

class VenuesTableSeeder extends Seeder {
 
       public function run()
       {
        //delete users table records
        DB::table('venues')->truncate();
        //insert some dummy records
        DB::table('venues')->insert(array(
            array('name'=>'Tobin Art Center','address'=>'100 Auditorium Circle','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
             	'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Majestic Theater','address'=>'224 East Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Childrens Museum','address'=>'305 East Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Geekdom','address'=>'110 East Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'The Alamo','address'=>'300 Alamo Plaza','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Henry B. Gonzalas Convention Center','address'=>'200 East Market Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Travis Park','address'=>'301 East Travis ','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Brackenridge Park','address'=>'3700 North St. Marys Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78209','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Incarnate Word University','address'=>'4301 Broadway','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78209','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'O Henry Museum','address'=>'601 Dolorosa Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78207','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Buckhorn Museum','address'=>'318 East Houston Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Ripleys Museum','address'=>'301 Alamo Plaza','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Wax Museum','address'=>'600 Soledad Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Dinosaur Quest','address'=>'849 East Commerce Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78201','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Hertzberg Circus Museum','address'=>'600 Soledad Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'San Antonio Art League','address'=>'130 King Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78204','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Holocaust Memorial Museum','address'=>'12500 N.W. Military Highway','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78231','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Steve Homestead Museum','address'=>'509 King William Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78201','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Club Venum Rock','address'=>'2407 N. St. Marys Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Graham Cental Station','address'=>'4902 Fredericksberg Rd.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Silver Dollar Saloon','address'=>'1814 N. Main St.','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78212','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Irish Pub San Antonio','address'=>'9726 Datapoint Drive','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78229','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Alibis Sports','address'=>'1141 East Commerce Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78205','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Alamo Dome','address'=>'100 Montana Street','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78203','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'AT & T Center','address'=>'1 AT&T Center Parkway ','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78219','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            ),
            array('name'=>'Harlequin Dinner Theater','address'=>'Bldg. 2652 Harney Road','city'=>'San Antonio', 'state'=>'TX','zipcode'=>'78234','phone_number'=>'867-5304','parking_available'=> 1,
				'open_hour'=>'8am', 'close_hour'=>'8pm', 'website_url'=>'Url', 'facebook_url'=>'Url', 'google_url'=>'Url', 'twitter_handle'=>'Url', 'image_url'=>'Url'
            )	
        ));
    }
 
}