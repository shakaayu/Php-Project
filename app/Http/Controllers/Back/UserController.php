<?php

namespace App\Http\Controllers\Back;

use App\Model\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends BackController
{
    public function index()
    {
        $this->data('userData',User::paginate(3));
        return view($this->page.'.showUsers',$this->data);
    }
    public function addUser(Request $request){
        if ($request->isMethod('get')){
            return view($this->page.'addUser',$this->data);
        }
        if($request->isMethod('post')){

            $this->validate($request,[
               'name'=>'required|min:3',
                'email'=>'required|email|unique:users,email',
                'utype'=>'required',
                'password'=>'required|min:5|confirmed',
                'image'=>'required|mimes:jpeg,jpg,png,gif'
            ]);
           $data['name']=$request['name'];
           $data['email']=$request->email;
           $data['utype']=$request->utype;
            $data['password']=bcrypt($request->password);

            if($request->hasFile('image')){

                $image=$request->file('image');
                $ext=$image->getClientOriginalExtension();
                $imageName= str_random() . '.'.$ext;
                $outPut= public_path('UserImages/');
                if($image->move($outPut,$imageName)){
                    $data['image']=$imageName;
                }
            }

        if (User::create($data)){
            return redirect()->route('users')->with('success',
                'user was inserted');


        }
        return redirect()->back();
        }

    }

    public function login(Request $request){
        if($request->isMethod('get')){
            return view($this->page.'Login.login');
        }
        if($request->isMethod('post')){
            $email=$request->email;
            $password=$request->password;
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                echo "yes";
            }
            else{
                echo "no";
            }

        }

    }
}
