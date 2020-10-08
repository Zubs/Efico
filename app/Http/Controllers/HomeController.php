<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Training;
use App\Models\Trainee;
use App\Models\Messages;

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
        if (Auth::user()->role == 'Admin') {
            return view('admin.index');
        } elseif (Auth::user()->role == 'Writer') {
            return view('admin.writer');
        } else {
            $messages = Messages::orderBy('created_at', 'desc')->simplePaginate(5);
            return view('admin.home')->with('messages', $messages);
        };
    }
}
