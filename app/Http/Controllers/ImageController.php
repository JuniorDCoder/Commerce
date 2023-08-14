<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request){
        $request->validate([
        'image' => ['required', 'image', 'mimes:png,jpg,gif,jpeg', 'max:3000', 'min:100']
        ]);

        $request->image->storeAs('/images','new_image.jpg');

        return redirect(route('success'));
    }
    public function download(){
        return response()->download(public_path('/storage/images/new_image.jpg'));
    }
}
