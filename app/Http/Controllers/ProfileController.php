<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $email = "rgabriel@wup.edu.ph";
        $name = "Raniel";
        return view('profile')
            ->with("email", $email)
            ->with("name", $name);
    }
}
