<?php

namespace DazzleApp\Audience\Controllers;

use \Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DazzleApp\Audience\Models\Audience;

class AudienceController extends Controller
{
    public function form()
    {
        return view('audience::form');
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        return Audience::create([
            'email' => $request->email,
            'confirmation_code' => (string) Str::uuid(4),
        ]);
    }

    public function confirm($confirm_code)
    {
        if (! Uuid::isValid($confirm_code)) {
            return response('', 400);
        }

        $member = Audience::where('confirmation_code', $confirm_code)->first();
        $member->setConfirmed()->save();
        return $member;
    }
}
