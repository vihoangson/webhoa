<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        if ( ! \App::environment( "local" ) ) {
            return;
        }
        $products = \App\Product::all();
        foreach ( $products as $product ) {
            $product->category()->detach();
        }
        DB::table( 'categories' )->delete();
        $faker = Faker::create();
        for ( $i = 0; $i < 10; $i ++ ) {
            $name = $faker->name;
            DB::table( 'categories' )->insert( [
                'name' => $name,
                'slug' => 'test' . rand( 0, 9999999 ),
            ] );
        }

        $categories = \App\Category::all();
        DB::table( 'products' )->delete();
        for ( $i = 0; $i < 10; $i ++ ) {
            $name            = $faker->name;
            $product         = new \App\Product;
            $product->title  = $name;
            $product->price  = round( $faker->numberBetween(), - 3 );
            $product->slug   = 'test' . rand( 0, 9999999 );
            $rand_number_id  = $categories[ rand( 0, count( $categories ) ) ]->id;
            $product->active = $faker->boolean();
            $product->save();
            $product->category()->attach( [ $rand_number_id ] );
            unset( $product );
        }
    }
}
