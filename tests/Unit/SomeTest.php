<?php

namespace Tests\Unit;

use Tests\TestCase;

class Some extends TestCase
{
    protected $table = 'audiences';

    /** @test */
    public function some_test()
    {
        $atts = ['email' => 'some@gmail.com'];
        $response = $this->post('someroute', $atts);
        
        $this->assertDatabaseHas($this->table, $atts);
    }
}
