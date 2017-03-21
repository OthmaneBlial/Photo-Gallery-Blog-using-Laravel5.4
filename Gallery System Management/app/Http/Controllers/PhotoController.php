<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Album;
use App\Tag;
use Illuminate\Http\Request;
use Auth;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $photos = Photo::all();

        return view('photos.index', compact('photos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $albums = Album::all();

        $user = Auth::user();

        $tags = Tag::all();

        return view('photos.create', compact('albums', 'user', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        //dd(request()->tags);

        
        
        //$imageName =  request()->file('image')->getClientOriginalExtension();

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $photo = new Photo();
        $photo->name = $imageName;
        $photo->description = request()->description;
        $photo->album_id = request()->album_id;
        $photo->user_id = request()->user_id;
        $photo->save();

        //Assosiate the tags with the photo

        $tags = request()->tags;

        foreach ($tags as $tag) {
            $photo->tags()->attach($tag);

        }
        
        

        return redirect('/photos');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        
        return view('photos.show', compact('photo'));
    }

     public function mygallery()
    {
        
        $photos = Photo::where('user_id', Auth::user()->id)->get();
        
        return view('photos.mygallery', compact('photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //

        $albums = Album::all();

        $user = Auth::user();

        return view('photos.edit', compact('photo', 'albums', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Photo $photo)
    {
        //

        if(Auth::user()->id == $photo->user_id) {

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $photo->name = $imageName;
        $photo->description = request()->description;
        $photo->album_id = request()->album_id;
        $photo->user_id = request()->user_id;
        $photo->save();

        return redirect('/photos');

        }
        
        return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //

        if(Auth::user()->id == $photo->user_id) {

            $photo->delete();

            return redirect('/photos');

        }

            return redirect('/photos');
        
    }
}
