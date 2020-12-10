<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;

        $post->comments()->save($comment);
        return back()->withMessage('Comment Placed Successfully');
    }

    public function reply(Request $request, Comment $commen)
    {
        $reply = new Comment();
        $reply->body = $request->body;
        $reply->user_id = auth()->user()->id;

        $commen->comments()->save($reply);
        return back()->withMessage('Reply Placed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comment)
    {
        $com= Comment::find($comment);
        $this->validate($request,[
            'body'=>'required',
        ]);
        $com->body = $request->body;
        $com->save();

        return back();
    }

    public function rupdate(Request $request, $reply)
    {
        $comm= Comment::find($reply);
        $this->validate($request,[
            'body'=>'required',
        ]);
        $comm->body = $request->body;
        $comm->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
