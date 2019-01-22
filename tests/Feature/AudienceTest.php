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

        $this->assertTrue(true);
    }

    /** @test */
    public function when_guest_submits_form_with_valid_params_an_audience_entry_is_created()
    {
        $params = ['email' => 'some@email.com'];
        $this->post('audience', $params);

        $this->assertDatabaseHas($this->table, $params);     
    }

    /** @test */
    public function if_an_invalid_email_is_submitted_an_error_is_returned()
    {
        $params = ['email' => 'notAnEmail.com'];
        $response = $this->post('audience', $params);

        $response->assertSessionHasErrors('email');
    }
}
