<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

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
        $admins = Admin::all();
        return view('admin.index')->with('admins', $admins);
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
        ]);

        $admin = new Admin;
        $admin->email = $request->email;
        $admin->save();

        // I'd be writing a mail to the admin to let them know they've been made admin, and also to make them set password;

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
        // The admin should get a mail to know they've been removed as admin, with a reason
        
        Admin::delete($id);

        return redirect('admin.index')->with('success', 'Admin Removed Successfully');
    }
}
