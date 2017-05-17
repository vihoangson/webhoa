<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelperTest extends TestCase {
    /**
     * A basic functional test example.
     *
     * @dataProvider provider_generate_discount
     * @return void
     */
    public function test_generate_discount( $data ) {
        $discount = generate_discount( $data['discount'], $data['price'] );
        if ( ! $data['expected'] ) {
            $this->assertNotEquals( $data['expected'], $discount );
        } else {
            $this->assertEquals( $data['expected'], $discount );
        }

    }

    public function provider_generate_discount() {
        return [
            [
                'params' => [
                    'discount' => 10,
                    'price'    => 100,
                    'expected' => 10,
                ],
            ],
            [
                'params' => [
                    'discount' => 10,
                    'price'    => 1000,
                    'expected' => 100,
                ],
            ],
            [
                'params' => [
                    'discount' => 100,
                    'price'    => 100,
                    'expected' => false,
                ],
            ],
        ];
    }
}
