<?php

namespace App\Http\Controllers\Web\Backend\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('web.backend.user.sections.dashboard');
    }
}
