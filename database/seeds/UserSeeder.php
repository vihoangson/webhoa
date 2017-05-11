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

    private function sample_user_script(){
        /*  $sql = "
          INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
  (1, 'Administrator', 'admin', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
  (2, 'Redactor', 'redac', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
  (3, 'User', 'user', '2017-03-11 08:34:20', '2017-03-11 08:34:20');
INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `seen`, `valid`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`, `remember_token`) VALUES
  (1, 'GreatAdmin', 'admin@la.fr', '$2y$10$YCzrrR/n8KebdLvDGkngr.uVV5N3oJLnCiD998F1551JrObQBojXm', 1, 1, 0, 1, NULL, '2017-03-11 08:34:20', '2017-05-02 02:59:58', 'KyyI42xTt8ctBbybDeQH68MGgOXyohAaQqehnM5VciJ547hL97B2TzBo0ys4'),
  (2, 'GreatRedactor', 'redac@la.fr', '$2y$10$L3ytEP7pFndg5gSeUIORbeQkln4BtA2fyg4SA3n.jNK8RJ.2XvEDG', 2, 1, 1, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:29:18', 'FBVAKSyBvwyRf4BkEs1gfcpfVxrsCspuxexv0J8w9GZfsOD4WPDPMAqYq0XZ'),
  (3, 'Walker', 'walker@la.fr', '$2y$10$pLnINZxl1XqmZWEv94DBh.5y2wsxRI7jB3gLl54cd4YMldQFfY6sy', 3, 0, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:10:30', 'oxWicoBWufNOUBpYqimWqefHHfUZyL0Z73K9Jqxw0i2eNqiQu27PU4XxTnqd'),
  (4, 'Slacker', 'slacker@la.fr', '$2y$10$.0/UgSMYfaQLqDDpEWTIT.7fZuyZJbKNn5RfOZBrgn.Z3YH863VEK', 3, 0, 0, 1, NULL, '2017-03-11 08:34:21', '2017-03-11 08:34:21', NULL);
INSERT INTO `options` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
  (1, 'template_name', 'hotdeal', '2017-03-27 14:05:35', '2017-04-20 18:01:22');

          ";*/
    }
}
