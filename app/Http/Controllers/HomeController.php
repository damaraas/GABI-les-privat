<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function promo()
    {
        return Inertia::render('Promo');
    }

    public function diskon()
    {
        return Inertia::render('Diskon');
    }


}
