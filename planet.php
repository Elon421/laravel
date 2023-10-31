<?php

use Illuminate\Support\Facades\Route;

class PlanetController extends Controller
{
    public function index(Request $request)
    {
        $planets = $this->getPlanets();

        if ($request->has('planet')) {
            $filteredPlanet = $request->input('planet');
            $planets = $planets->where('name', $filteredPlanet);
        }

        return view('planets.index', compact('planets'));
    }

    private function getPlanets()
    {
        $planets = collect([
            ['name' => 'mars', 'beschrijving' => 'De rode planeet'],
            ['name' => 'aarde', 'beschrijving' => 'Onze thuisplaneet'],
        ]);

        return $planets;
    }
}
