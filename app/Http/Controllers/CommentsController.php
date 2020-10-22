<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    // Only an authenticated admin can delete comments
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['store']);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'name' => 'required',
            'id' => 'required',
        ]);

        $comment = new Comments;
        $comment->name = $request->name;
        $comment->message = $request->message;
        $comment->news_id = $request->id;
        $comment->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comments::delete($id);

        return back();
    }
}
