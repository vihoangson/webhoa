<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EvironmentTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_preview_email()
    {
        $this->assertFalse(env('PREVIEW_EMAIL'),'Preview email đang bật');
    }

}
