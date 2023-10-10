<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Http\Resources\TramiteCollection;
use App\Http\Resources\TramiteResource;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(DB::table('departamentos')->where('id', '>', 1)->where('activo', true)->select('id', 'nombre')->get());
        return Inertia::render('Tramites/ListTramites', [
            'tramites' => new TramiteCollection(Tramite::OrderBy('id', 'desc')->with('departamento')->paginate(config('openlink.perpage'))),
            'departamentos' => DB::table('departamentos')->where('activo', true)->select('id', 'nombre')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tramite $tramite)
    {
        $tramite->load('departamento', 'requisitos');
        // $tramite->load('departamento');
        return Inertia::render(
            'Tramites/ShowTramite',
            [
                'tramite' => new TramiteResource($tramite),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}
