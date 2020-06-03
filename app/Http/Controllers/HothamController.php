<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category_eatdrink;
use App\Eatdrink;


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

        $filenameWithExtension = $request->file('image')->getClientOriginalName();  // name.jpg
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);  // name
        $extension = $request->file('image')->getClientOriginalExtension();   // .jpg
        $filenametoStore = $filename . '_' . time() . '.' . $extension;  // name_012020.jpg


        $path = $request->file('image')->storeAs('public/image/eatdrink', $filenametoStore);

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


}
