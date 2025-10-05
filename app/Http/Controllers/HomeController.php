<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('HomePage/Index');
    }

    public function promo()
    {
        return Inertia::render('Promo');
    }

    public function diskon()
    {
        return Inertia::render('Diskon');
    }

    public function tentangGabi()
    {
        return Inertia::render('TentangGabi');
    }

}
