<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    protected $pagePath='Front/';
    public $page;
    public function __construct()
    {
        $this->page=$this->pagePath.'Pages/';
    }
}
