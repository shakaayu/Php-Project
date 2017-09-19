<?php

namespace App\Http\Controllers\Back;

use App\Model\Description;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DescriptionController extends BackController
{
    public function addDescription(Request $request){
        if($request->isMethod('get')){
            return view($this->page.'addDescription',$this->data);
        }
        if($request->isMethod('post')){
            $this->validate($request,[
               'name'=>'required',
                'description'=>'required'
            ]);
            $data['name']=$request->name;
            $data['description']=$request->description;

            if(Description::create($data)){
                return redirect()->route('addDescription')->with('success',
                    'Description was inserted');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
