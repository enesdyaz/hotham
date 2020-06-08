<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Storage;

class PhotoController extends Controller
{
    public function store(Request $request){
    
        // Store에 저장
        $show_id = $request->input('show_id');
        $filenameWithExtension = $request->file('photo')->getClientOriginalName();  // name.jpg
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);  // name
        $extension = $request->file('photo')->getClientOriginalExtension();   // .jpg
        $filenametoStore = $filename . '_' . time() . '.' . $extension;  // name_012020.jpg
        $path = $request->file('photo')->storeAs('public/image/eatdrink/'.$show_id, $filenametoStore);


        // Database에 저장
        $photo = new Photo;  // model photo
        $photo->title = $request->input('title');
        $photo->show_id = $request->input('show_id');
        $photo->photo = $filenametoStore;
        $photo->save();

        return redirect('/hotham/add_eatdrink/'.$show_id);
    }

    public function deletePhoto($photo){
        $photo = Photo::find($photo);
        Storage::delete('public/image/eatdrink/'.$photo->show_id.'/'.$photo->photo);
        $photo->delete();
  
        return redirect('/hotham/eatdrink');
        

    }
}