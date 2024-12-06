<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'nim' => '2257401096',
            'name' => 'Jamlulail',
            'class' => 'MI22B',
        ]);
    }

    public function logout()
    {
        return redirect('/');
    }
}
