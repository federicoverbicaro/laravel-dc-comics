<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use PhpParser\Node\Stmt\Return_;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::All();

        return view('pages.movieView.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.movieView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Thumb' => 'required',
            'Price' => 'required',
            'Series' => 'required',
            'Sale_date' => 'required',
            'Type' => 'required',
        ]);

        $formData = $request->all();

        $newMovie = new Movie();
        $newMovie->fill($formData);

        $newMovie->save();

        return redirect()->route('movies.index', ['movie' => $newMovie->id]);
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movies = Movie::find($id);

        return view('pages.movieView.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movies = Movie::findOrFail($id);
        return view('pages.movieView.edit', compact('movies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();

        $movies = Movie::findOrFail($id);

        $movies->update($formData);

        return redirect()->route('movies.index', ['movie' => $movies->id]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movies = Movie::find($id);
        $movies->delete();

        return redirect()->route('movies.index');


    }
}
