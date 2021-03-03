<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index() {
        return view('web.backend.admin.sections.dashboard');
    }

    public function courses() {
        return view('web.backend.admin.sections.courses.index');
    }
}
