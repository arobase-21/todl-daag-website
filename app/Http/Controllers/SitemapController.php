<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __construct()
    {

    }

    public function index(): Response
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function services(): Response
    {
        return response()->view('sitemap.services', [])->header('Content-Type', 'text/xml');
    }
}
