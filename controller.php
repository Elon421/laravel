<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = ['Mars', 'Earth', 'Jupiter', 'Venus']; 

        return view('planets.index', compact('planets'));
    }

    public function show($planet)
    {
        return view('planets.show', compact('planet'));
    }
}
