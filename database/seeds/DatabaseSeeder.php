<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!\App::environment("local")){
            return;
        }
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(\ProductsSeeder::class);
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
