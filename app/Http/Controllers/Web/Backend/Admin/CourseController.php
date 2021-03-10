<?php

namespace App\Http\Controllers\Web\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('web.backend.admin.sections.courses.create');
    }

    public function store(Request $request)
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

        return redirect(route('admin.courses'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
