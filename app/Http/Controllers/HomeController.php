<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Training;
use App\Models\Trainee;
use App\Models\News;
use App\Models\Comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainings = Training::all();
        if (Auth::user()->role == 'admin') {
            $trainings = Training::withCount('trainee')->orderBy('trainee_count', 'DESC')->take(4)->get();
            return view('admin.home')->with('trainings', $trainings);
        } elseif (Auth::user()->role == 'writer') {
            $posts = News::all();
            $comments = Comments::all();
            return view('admin.writer')->with([
                'posts' => $posts,
                'comments' => $comments,
            ]);
        } elseif (Auth::user()->role == 'pm') {
            return view('admin.pm');
        } else {
            return redirect()->route('index');
        };
    }
}
