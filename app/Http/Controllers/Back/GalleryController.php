<?php

namespace App\Http\Controllers\Back;

use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends BackController
{
    public function index(Request $request){

        if($request->isMethod('get')){
            return view($this->page.'gallery');
        }
        if($request->isMethod('post')){
            if($request->hasFile('image')){

                $image=$request->file('image');
                $ext=$image->getClientOriginalExtension();
                $imageName= str_random() . '.'.$ext;
                $outPut= public_path('Gallery/');
                if($image->move($outPut,$imageName)){
                    $data['name']=$imageName;
                }
            }
            if(Gallery::create($data)){
                echo "Image was inserted";
            }
        }

    }
}
