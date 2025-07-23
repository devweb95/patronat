<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $actualites = Actualite::all();
        $actualites = Actualite::orderByDesc('date_de_publication')->paginate(10);
        return view('site.blog',compact('actualites'));
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

        $actualite = Actualite::where('id','!=',$id)
        ->orderByDesc('date_de_publication')
        ->take(3)
        ->get();

       /*  $next = Actualite::where('id','>',$actualites->id)
        ->orderBy('id','asc')
        ->first();

        $previous = Actualite::where('id','<',$actualites->id)
        ->orderBy('id','desc')
        ->first(); */

        return view('site.blog-single',compact('actualites','actualite'));

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
