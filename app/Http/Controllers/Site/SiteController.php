<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function empresa()
    {
        return view('site.empresa.index');
    }

    public function contato()
    {
        return view('site.contato.index');
    }
}
