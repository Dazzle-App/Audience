<?php

namespace Tests\Feature;

use Tests\TestCase;

class AudienceTest extends TestCase
{
    protected $table = 'audiences';

    /** @test */
    public function the_view_returns_the_signup_form()
    {
        $response = $this->get('audience');
        dump($response);
        $this->assertTrue(true);
    }
}
