<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function about() {
        return 'Perdebatan Politik Menjelang Pemilu';
    }

    public function articles($id){
        return 'Halaman majalah politik ke   '.$id;
    }
}




