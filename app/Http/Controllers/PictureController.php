<?php

namespace App\Http\Controllers;


use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class PictureController extends Controller
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
    public function store(Request $request)
    {
        $picture = new Picture();
        $request->file('src')->storePublicly('img/', 'public');
        $picture->src =  $request->file('src')->hashName();
        $picture->save();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        return view('update',compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $imgFile = Image::make(public_path('img/').$picture->src);
        if ($request->file('src') != null) {
            $picture->src =  $request->file('src')->hashName();
            $picture->save();
            $file = $request->file('src');
            $imgFile = Image::make($file->getRealPath());
        }
        
        $imgFile->resize(500,500, function ($constraint) {
		    $constraint->aspectRatio();
		})->save(public_path('img/').$picture->src );

        
        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        //
    }

    public function resizeImage(Request $request){
        
        $picture = new Picture();
        $picture->src =  $request->file('src')->hashName();
        $picture->save();

        $imgFile = Image::make($request->file('src')->getRealPath());

        $imgFile->resize(300, 300, function ($constraint) {
		    $constraint->aspectRatio();
		})->save(public_path('img/').$picture->src );

        
        return back();
    }
}
