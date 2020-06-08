<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category_eatdrink;
use App\eatdrink;
use App\photo;


class HothamController extends Controller
{
    public function seedo(){
        return view('hotham.seedo');
    }
    public function eatdrink(){
        $category = Category_eatdrink::all();
        $eatdrink = Eatdrink::all();
        return view('hotham.eatdrink', [
            'category'=> $category,
            'eatdrink' => $eatdrink
        ]);
    }
    public function stay(){
        return view('hotham.stay');
    }
    public function trip(){
        return view('hotham.trip');
    }
    public function event(){
        return view('hotham.event');
    }

    public function store(Request $request){
        $category = category_eatdrink::create(request(['name']));
        return redirect('/hotham/eatdrink');

    }

    public function storeEatDrink(Request $request){
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'tradinghour' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        // Store에 저장
        $filenameWithExtension = $request->file('image')->getClientOriginalName();  // name.jpg
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);  // name
        $extension = $request->file('image')->getClientOriginalExtension();   // .jpg
        $filenametoStore = $filename . '_' . time() . '.' . $extension;  // name_012020.jpg
        $path = $request->file('image')->storeAs('public/image/eatdrink', $filenametoStore);


        // Database에 저장
        $album = new EatDrink;  // model Album
        $album->name = $request->input('name');
        $album->category_id = $request->input('category_id');
        $album->subtitle = $request->input('subtitle');
        $album->address = $request->input('address');
        $album->phone = $request->input('phone');
        $album->tradinghour = $request->input('tradinghour');
        $album->description = $request->input('description');
        $album->image = $filenametoStore;
        $album->save();

        return redirect('/hotham/eatdrink');

    }

    public function showEatDrink(Eatdrink $eatdrink){
        $photos = Photo::all();
        return view('hotham.show', [
            'eatdrink' => $eatdrink,
            'photos' => $photos
        ]);
    }

    public function destroyEatDrink(Eatdrink $eatdrink){
        $eatdrink->delete();

        return redirect('/hotham/eatdrink');
    }

    public function editEatDrink(Eatdrink $eatdrink){
        return view('hotham.edit', [
            'eatdrink' => $eatdrink
        ]);
    }

    public function updateEatDrink(Eatdrink $eatdrink){
        request()->validate([
            'category_id' => 'required',
            'name' => 'required',
            'subtitle' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);  // validate 보안
  
        $eatdrink->update(request(['category_id', 'name', 'subtitle', 'address', 'phone']));
        
        // $task->update([
        //     'title'=>request('title'),
        //     'body'=>request('body')
        // ]);

        return redirect('/hotham/add_eatdrink/'.$eatdrink->id);
    }

}
