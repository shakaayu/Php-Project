<?php

namespace App\Http\Controllers\Front;

use App\Model\Description;
use App\Model\Gallery;
use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends FrontController
{
    public function __construct()
    {
       parent::__construct();
    }
    //
    public function index(){
        $this->data('descriptionData',Description::paginate(4));
        $this->data('imageData',Gallery::all());
        $this->data('menuData',Menu::all());
        return view($this->page.'.home',$this->data);
    }
}
