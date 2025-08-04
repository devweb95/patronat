<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use App\Models\Service;
use App\Models\Info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::all();
        $actualites = Actualite::orderByDesc('date_de_publication')->paginate(10);
        $service = Service::all();
        $service = Service::orderByDesc('date_de_publication')->paginate(10);

        $infos = Info::first();
        return view('site.accueil',compact('actualites','service','infos'));
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
    public function show(string $id)
    {
        //
        $actualites = Actualite::with(['user'])->findOrFail($id);
        $actualite = Actualite::where('id', '!=', $id)
            ->orderByDesc('date_de_publication')
            ->take(3)
            ->get();

        return view('site.blog-single', compact('actualites','actualite'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showservices(string $id)
    {
        $service = Service::all();
        $service = Service::orderByDesc('date_de_publication')->paginate(10);
        return view('site.accueil', compact('service'));
    }

    /* public function showservice(string $id)
    {
        $services = Service::with(['user'])->findOrFail($id);
        $service = Service::where('id', '!=', $id );
        return view('site.accueil', compact('services'));
    } */
}
