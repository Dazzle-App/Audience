<?php

namespace DazzleApp\Audience\Controllers;

use Illuminate\Http\Request;
use DazzleApp\Audience\Models\Audience;

class AudienceController extends Controller
{
    public function form()
    {
        return view('audience::form');
    }
    
    public function test(Request $request)
    {
        return Audience::create([
            'email' => $request->email
        ]);
    }
}
