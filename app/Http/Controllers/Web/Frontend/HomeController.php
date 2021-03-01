<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('web.frontend.sections.about');
    }

    public function admissionProcedure()
    {
        return view('web.frontend.sections.admission-procedure');
    }

    public function admissionResult()
    {
        return view('web.frontend.sections.admission-result');
    }

    public function career()
    {
        return view('web.frontend.sections.career');
    }

    public function marketplace()
    {
        return view('web.frontend.sections.marketplace');
    }

    public function feedback()
    {
        return view('web.frontend.sections.feedback');
    }

    public function blog()
    {
        return view('web.frontend.sections.blog');
    }

    public function faq()
    {
        return view('web.frontend.sections.faq');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
