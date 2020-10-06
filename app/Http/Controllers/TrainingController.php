<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

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
        $training->price = $request->price;
        $training->description = $request->description;
        $training->cover_image = $final_image;
        $training->save();

        // All trainees should get a mail to let them know of the new training

        return redirect()->route('training.index');
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
    public function destroy($id)
    {
        Training::delete($id);

        return redirect()->route('training.index');
    }
}
