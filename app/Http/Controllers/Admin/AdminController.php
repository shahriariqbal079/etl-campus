<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('web.backend.admin.sections.dashboard');
    }

    public function courses()
    {
        $courses = Course::get();
        return view('web.backend.admin.sections.courses.index', compact('courses'));
    }

    public function courseStore(Request $request)
    {
        /* $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'name' => 'required',
            'phone' => 'numeric',
            'photo' => 'max:5120|mimes:jpg,png,jpeg',
        ]); */
        // return $request; 

        if ($request->hasFile('image')) {
            $extension = $request->image->getClientOriginalExtension();
            $image = 'course-cover_' . rand(0, 99999) . '_' . date("Y-m-d") . '.' . $extension;
            $request->image->move(public_path("uploads/images/course"), $image);
        } else {
            $image = null;
        }

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'admission_start' => $request->admission_start,
            'admission_close' => $request->admission_close,
            'fee' => $request->fee,
            'image' => $image,
        ]);

        return redirect()->back();
    }
}
