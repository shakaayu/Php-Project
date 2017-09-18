<?php
namespace App\Traits;
trait General{
    public $data=[];
    public function data($key,$value){
        if(empty($key)) return false;
        return $this->data[$key]=$value;
    }
}