<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $user = new User();
        $user->email = $_ENV['USER_EMAIL'];
        $user->password = $_ENV['USER_PASSWORD'];
        $user->username = $_ENV['USER_USERNAME'];
        $user->image_path = 'http://lorempixel.com/200/200/';
        $user->first_name = $_ENV['USER_FIRST_NAME'];
        $user->last_name = $_ENV['USER_LAST_NAME'];
        $user->save();
    }
}