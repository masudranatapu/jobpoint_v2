<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function information()
    {
        $title = "My Profile";
        return view('user.index', compact('title'));
    }
}
