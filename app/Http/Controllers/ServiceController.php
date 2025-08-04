<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Info;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services=Service::all();
        $services = Service::orderByDesc('date_de_publication')->paginate(10);

        $infos = Info::first();
        return view('site.service',compact('services', 'infos'));
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
    
        $services= Service::with(['user'])->findOrFail($id);
        $service= Service::where('id', '!=', $id)
        ->orderByDesc('date_de_publication')
        ->take(2)
        ->get(); 

        return view('site.services-detail', compact('services', 'service'));
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
}
