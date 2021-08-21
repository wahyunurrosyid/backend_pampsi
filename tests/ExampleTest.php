<?php

use App\Exceptions\DataNotFound;
use App\Models\Provinsi;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $model = Provinsi::find(12);
        if(is_null($model)){
            throw new DataNotFound();
            $this->assertFalse(true);
        }
        $this->assertTrue(true);
    }
}
