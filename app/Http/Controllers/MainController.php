<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function about()
    {
        return view('about');
    }
}
