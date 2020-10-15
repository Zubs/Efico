<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Trainee;
use App\Models\Subscribers;
use Illuminate\Support\Str;

class TrainingController extends Controller
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
        $trainings = Training::orderBy('created_at', 'desc')->paginate(15);
        return view('training.index')->with('trainings', $trainings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training.create');
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
            'price' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:2999',
        ]);

        // Check if training name isn't taken, to avoid errors
        $test = Training::where('name', $request->name)->first();
        if ($test) {
            return back()->with('danger', 'Training Name Is Taken');
        }

        /*
            Image process here, kinda seems like it's being repeated through the app.
        */

        //Get uploaded image name
        $cover_image = $request->file('cover_image')->getClientOriginalName();

        //Get just name, without the extension
        $image_name = pathinfo($cover_image, PATHINFO_FILENAME);

        //Get just extension, without the name
        $image_extension = $request->file('cover_image')->getClientOriginalExtension();

        //How it'll be stored
        $final_image = $image_name.'_'.time().'.'.$image_extension;

        //Upload image
        $path = $request->file('cover_image')->storeAs('public/images/training/cover_images', $final_image);

        $training = new Training;
        $training->name = $request->name;
        $training->uuid = (string) Str::uuid();
        $training->price = $request->price;
        $training->description = $request->description;
        $training->cover_image = $final_image;
        $training->save();

        // All trainees and subscribers should get a mail to let them know of the new training
        $trainees = Trainee::all();
        $subscribers = Subscribers::all();
        // foreach ($trainees as $key) {
        //     $key->notify(new NewTraining());
        // }
        // foreach ($subscribers as $key) {
        //     $key->notify(new NewTraining());
        // }

        return redirect()->route('trainings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);

        return view('training.show')->with('training', $training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('training.edit');
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
        return redirect()->route('training.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($uuid)
    {
        $training = Training::where('uuid', $uuid)->first();
        $training->delete($uuid);

        return redirect()->route('admin.trainings')->with('success', 'Training Deleted Successfully');
    }
}
