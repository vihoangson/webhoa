<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(\App\Role::all()->count()==0){
            $role = new \App\Role;
            $role->title = 'Administrator';
            $role->slug = 'admin';
            $role->save();
            $role = new \App\Role;
            $role->title = 'Redactor';
            $role->slug = 'redac';
            $role->save();
            $role = new \App\Role;
            $role->title = 'User';
            $role->slug = 'user';
            $role->save();
        }

        if(\App\User::all()->count()==0) {
            $user = new \App\User;
            $user->username = Faker::create()->name;
            $user->email = Faker::create()->email;
            $user->password =  Faker::create()->name;
            $user->role_id = 1;
            $user->save();
            $user = new \App\User;
            $user->username = Faker::create()->name;
            $user->email = Faker::create()->email;
            $user->password =  Faker::create()->name;
            $user->role_id = 2;
            $user->save();
            $user = new \App\User;
            $user->username = Faker::create()->name;
            $user->email = Faker::create()->email;
            $user->password =  Faker::create()->name;
            $user->role_id = 3;
            $user->save();
        }

    }
}
