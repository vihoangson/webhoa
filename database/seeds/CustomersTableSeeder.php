<?php
use Illuminate\Database\Seeder;
class CustomersTableSeeder extends Seeder{
    public function run(){
        $fake = \Faker\Factory::create();
        foreach (range(1,50) as $index){
            \App\Customer::create([
                'name' => $fake->name,
                'age' => $fake->randomNumber(2),
                'tel' => $fake->phoneNumber,
            ]);
        }
    }
}
?>
