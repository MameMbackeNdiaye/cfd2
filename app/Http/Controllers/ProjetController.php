<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Financement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProjetController extends Controller
{
    //
    public function index()
    {
        $projets = Projet::withCount('financement')->get();


        return Inertia::render('Projets/Index', [
            'projets' => $projets
        ]);
    }

    public function show( int $id)
    {
        $projet = Projet::where('id', $id)->withCount('financement')->first();

        return Inertia::render('Projets/Show',[
            'projet' => $projet
        ]);
    }

    public function addFinance( int $id)
    {
        $projet = Projet::where('id', $id)->withCount('financement')->first();

        return Inertia::render('Projets/AddFinance',[
            'projet' => $projet
        ]);
    }

    public function addProject()
    {
        $projet = Projet::get();

        return Inertia::render('Projets/AddProject',[
            'projet' => $projet
        ]);
    }
    public function addProjectForm( )
    {
        $projet = Projet::first();

        return Inertia::render('Projets/AddProjectForm',[
            'projet' => $projet
        ]);
    }

}
