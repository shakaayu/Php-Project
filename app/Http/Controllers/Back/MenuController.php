<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends BackController
{
    public function addMenu(Request $request){
        if($request->isMethod('get')){
            return view($this->page.'addMenu');
        }
        if($request->isMethod('post')){
            $data['name']=$request['name'];

            if(Menu::create($data)){
                return redirect()->route('addMenu')->with('success',
                    'Menu was inserted');

            }
        }

    }

}
