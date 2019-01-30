<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Str;
use DazzleApp\Audience\Models\Audience;

class ConfirmationTest extends TestCase
{
    protected $table = 'audiences';

    /** @test */
    public function it_confirms_an_audience_member_when_confirm_route_with_code_visited()
    {
        $member = factory(Audience::class)->create();

        $response = $this->get('audience/confirm/' . $member->confirmation_code);

        $response->assertOk();
    }

    /** @test */
    public function it_requires_a_valid_uuid()
    {
        $member = factory(Audience::class)->create([
            'confirmation_code' => 'something not a uuid'
        ]);

        $response = $this->get('audience/confirm/' . $member->confirmation_code);

        $response->assertStatus(400);
    }

    /** @test */
    public function valid_uuid_must_be_connected_to_someone()
    {
        $validUuidButNotConnectedToAnyone = (string) Str::uuid(4);

        $response = $this->get('audience/confirm/' . $validUuidButNotConnectedToAnyone);

        $response->assertStatus(404);
    }
}
