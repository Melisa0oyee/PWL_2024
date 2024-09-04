<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Homecontroller extends Controller
{
    public function hello() {
        return 'Selamat Pagi';
    }

    public function index() {
        return 'Perkenalkan nama saya Melisa';
    }
    
    
}