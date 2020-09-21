<?php

namespace App\MVC\Controllers;

use Framework\Controller;

class HelloController extends Controller
{
    public function index(){
        return $this->view('index.php',['name'=>'Иванов']);
    }
    public function data($user_name, $group_name){
        return $this->view('data.php',['name'=>$user_name,'group'=>$group_name]);
    }
}
