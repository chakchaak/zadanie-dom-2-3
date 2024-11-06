<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 400, 'path' => 'img/1.png'], 
            ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => 'img/2.png'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 600, 'path' => 'img/3.png'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 700, 'path' => 'img/4.png'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 800, 'path' => 'img/5.png'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 900, 'path' => 'img/6.png']
        ];     
        return view('home', compact('array'));       
    }
}
