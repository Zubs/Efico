<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Requires authentication to view the pages
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the all articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'asc')->paginate(15);
        return view('news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'cover_image' => 'image|required|max:2999',
        ]);

        /* 
            Process image here 
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
        $path = $request->file('cover_image')->storeAs('public/images/news/cover_images', $final_image);

        $news = new News;
        $news->title = $request->title;
        $news->uuid = (string) Str::uuid();
        $news->slug = Str::slug($request->title, '-');
        $news->body = $request->body;
        $news->author = $request->author;
        $news->cover_image = $final_image;
        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Display the specified news.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $news->views += 1;
        $news->save();
        // return $news->views;

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $news = News::where('uuid', $uuid)->first();

        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
        ]);

        $news = News::where('uuid', $uuid)->get();

        if ($request->has('cover_image')) {
            $this->validate($request, ['cover_image' => 'image|max:2999']);

            //Get uploaded image name
            $cover_image = $request->file('cover_image')->getClientOriginalName();

            //Get just name, without the extension
            $image_name = pathinfo($cover_image, PATHINFO_FILENAME);

            //Get just extension, without the name
            $image_extension = $request->file('cover_image')->getClientOriginalExtension();

            //How it'll be stored
            $final_image = $image_name.'_'.time().'.'.$image_extension;

            //Upload image
            $path = $request->file('cover_image')->storeAs('public/images/cover_images', $final_image);

            $news->cover_image = $final_image;
        };

        $news[0]->title = $request->title;
        $news[0]->body = $request->body;
        $news[0]->author = $request->author;
        $news[0]->save();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($uuid)
    {
        $news = News::where('uuid', $uuid)->first();
        $news->delete($uuid);

        return redirect()->route('admin.news')->with('success', 'News Deleted Successfully');
    }
}
