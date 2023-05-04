<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private array $events;
    public function __construct()
    {
        $this->events = ['edition-2'];
    }

    public function index(Request $request): View|Application|Factory
    {
        return view('events.index');
    }

    public function show(Request $request, string $event): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        if (!in_array($event, $this->events)) {
            abort(404);
        }
        return view('events.' . $event);
    }
}
