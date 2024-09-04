<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function about() {
        return 'Saya suka bermain futsal';
    }

    public function articles($id){
        return 'Halaman majalah muda ke  '.$id;
    }
}




