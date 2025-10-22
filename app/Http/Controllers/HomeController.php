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

    public function campaignTKA()
    {
        return Inertia::render('CampaignTKA');
    }

    public function flashsale()
    {
        return Inertia::render('Flashsale');
    }

    public function faq()
    {
        return Inertia::render('FAQ/Index');
    }
}
