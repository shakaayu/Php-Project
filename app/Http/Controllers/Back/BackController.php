<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    protected $pagePath='Back/';
    public $page;
    public function __construct()
    {
        $this->page=$this->pagePath.'/Pages';
    }
}
