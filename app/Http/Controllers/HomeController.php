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

    public function artikel1()
    {
        return inertia('Artikel1');
    }

    public function artikel5()
    {
        return inertia('Artikel5');
    }
    
    public function artikel1Detail($slug)
    {
        return inertia('Artikel1', [
            'slug' => $slug,
        ]);
    }

    public function faq()
    {
        return Inertia::render('FAQ/Index');
    }
    public function artikel4()
    {
    return Inertia::render('Blog/Artikel4');
    }



}
