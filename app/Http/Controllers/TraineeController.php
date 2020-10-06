<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee;

class TraineeController extends Controller
{
    // Requires authentication to view the pages
    public function __construct()
    {
        $this->middleware('auth')->except(['register']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = Trainee::orderBy('created_at', 'desc')->paginate(30);

        return view('trainee.index');
    }

    /**
     * Show the form for creating a new resource by an admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('trainee.register');
    }

    /**
     * Show the form for creating a new resource by the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainee.create');
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
            'name' => 'required',
            'email' => 'required',
            'training_id' => 'required',
            // 'password' => 'required', This only works if a trainee would be able to Log in.
        ]);

        $trainee = new Trainee;
        $trainee->name = $request->name;
        $trainee->email = $request->email;
        $trainee->training_id = $request->training_id;
        $trainee->save();

        // The trainee should get a mail of successful registration

        // This depends on who's making the addition
        return redirect()->route('trainee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
