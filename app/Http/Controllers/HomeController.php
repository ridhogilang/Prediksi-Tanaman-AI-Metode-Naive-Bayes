<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            "title" => 'Prediksi Tanaman',
        ]);
    }

    public function kadar()
    {
        return view('home.kadar', [
            "title" => 'Prediksi Tanaman',
        ]);
    }

    public function tanaman()
    {
        return view('home.tanaman', [
            "title" => 'Prediksi Tanaman',
        ]);
    }

    public function tutorial()
    {
        return view('home.tutorial', [
            "title" => 'Prediksi Tanaman',
        ]);
    }

    public function team()
    {
        return view('home.team', [
            "title" => 'Prediksi Tanaman',
        ]);
    }
}
