<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private array $services;
    public function __construct()
    {
        $this->services = ['courtage', 'conseil', 'formation'];
    }

    public function index(Request $request): View|Application|Factory
    {
        return view('services.index');
    }

    public function show(Request $request, string $slug): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        if (!in_array($slug, $this->services)) {
            abort(404);
        }
        return view('services.' . $slug);
    }
}
