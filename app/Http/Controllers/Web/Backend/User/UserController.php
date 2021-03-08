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

    public function browseCourses()
    {
        return view('web.backend.user.sections.browse-courses');
    }

    public function studentDashboard()
    {
        return view('web.backend.user.sections.student-dashboard');
    }

    public function courses()
    {
        return view('web.backend.user.sections.courses');
    }
    public function coursePreview()
    {
        return view('web.backend.user.sections.course-preview');
    }
    public function takeQuiz()
    {
        return view('web.backend.user.sections.take-quiz');
    }
    public function myQuizzes()
    {
        return view('web.backend.user.sections.my-quizzes');
    }
    public function quizResult()
    {
        return view('web.backend.user.sections.quiz-result');
    }
    public function skillAssessment()
    {
        return view('web.backend.user.sections.skill-assessment');
    }
    public function skillResult()
    {
        return view('web.backend.user.sections.skill-result');
    }

}
