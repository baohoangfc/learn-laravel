<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getController(){
        return 333;
    }

    public function tinhtongController($number1, $number2){
        return ($number1+$number2);
    }

    public function viewController(){
        $data['user'] = 2;
        //$nn = 2;
        return view('myfirst', $data);
    }
}
