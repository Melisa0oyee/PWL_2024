<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeControllers extends Controller
{
    // public function hello() {
    //     return 'Hello World';
    // }

    public function index() {
        return 'Selamat datang';
    }
    
    public function about() {
        return 'Nama saya Nur Melisa.M dan NIM 2241760029';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }

    // public function greeting () {
    //     return view('blog.hello', ['name' => ' Nur Melisa']);
    // }

    public function greeting () {
        return view('blog.hello')
            ->with('name', 'Melisa')
            ->with('occupation', 'Astronaut');
    }

}