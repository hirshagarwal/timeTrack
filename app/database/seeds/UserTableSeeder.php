<?php
class UserTableSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "name"     => "DC",
        "username" => "dc",
        "password" => Hash::make("password"),
        "email"    => "dc@example.com"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}