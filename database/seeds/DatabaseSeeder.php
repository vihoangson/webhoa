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
        \Illuminate\Database\Eloquent\Model::unguard();
        \Illuminate\Support\Facades\DB::table('customers')->delete();
        $this->call(\CustomersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
