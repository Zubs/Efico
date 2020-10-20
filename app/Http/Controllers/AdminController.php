<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\News;
use App\Models\Training;
use App\Models\Trainee;
use App\Notifications\NewAdmin;

class AdminController extends Controller
{
    // Requires authentication to view the pages
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $admins = User::all();
        return view('admin.index')->with('admins', $admins);
    }

    public function news()
    {
        $news = News::all();
        return view('admin.news')->with('news', $news);
    }

    public function trainings()
    {
        $news = Training::all();
        return view('admin.trainings')->with('news', $news);
    }

    public function trainees()
    {
        $news = Trainee::all();
        return view('admin.trainees')->with('news', $news);
    }

    /**
     * Show the form for creating a new admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'role' => 'required',
        ]);

        $admin = new Admin;
        $admin->uuid = (string) Str::uuid();
        $admin->email = $request->email;
        $admin->role = $request->role;
        $admin->save();

        // I'd be writing a mail to the admin to let them know they've been made admin, and also to make them set password;
        $admin->notify(new NewAdmin($admin->role));

        return redirect()->route('admin.index')->with('success', 'Admin Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $admin = Admin::find($id);
        $admin->delete();

        return redirect('admin.index')->with('success', 'Admin Removed Successfully');
    }
}
