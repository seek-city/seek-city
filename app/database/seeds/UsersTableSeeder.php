<?php

class UsersTableSeeder extends Seeder {

  public function run()
  {
    $user = new User;
    $user->username = $_ENV['USER_USERNAME'];
    $user->email = $_ENV['USER_EMAIL'];
    $user->password = $_ENV['USER_PASSWORD'];
    $user->password_confirmation = $_ENV['USER_PASSWORD_CONFIRM'];
    $user->confirmation_code = md5(uniqid(mt_rand(), true));
    $user->first_name = $_ENV['USER_FIRST_NAME'];
    $user->last_name = $_ENV['USER_LAST_NAME'];
    $user->image_path = 'http://lorempixel.com/200/200/';

    if(! $user->save()) {
      Log::info('Unable to create user '.$user->username, (array)$user->errors());
    } else {
      Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
    }
  }
}