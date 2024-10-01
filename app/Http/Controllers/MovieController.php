<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    public function index(){
        return view('movies.films', [
            'movies' => Movie::latest()->filter(request(['tag', 'search', 'actor']))->paginate(4)
        ]);
    }

    public function show(Movie $movie){
        return view('movies.film', [
            'movie' => $movie
        ]);
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'title' => 'required',
            'production' => ['required', Rule::unique('movies', 'production')],
            'email' => ['required', 'email'],
            'country' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'director' => 'required',
            'runtime' => 'required',
            'year' => 'required',
            'actors' => 'required'
        ]);

        if($request->hasFile('logo')){
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $fields['user_id'] = auth()->id();

        Movie::create($fields);

        Log::channel('custom')->info(auth()->user()->role . " " . auth()->user()->name . " has created a post.");

        return redirect('/')->with('message', 'Film post successfully created!');
    }

    public function edit(Movie $movie){
        if($movie['user_id'] == auth()->id() || auth()->user()->role == 'admin' || auth()->user()->role == 'manager'){
            return view('movies.edit', [
                'movie' => $movie
            ]);
        }
        else{
            abort(403, 'Unathorized action!');
        }
    }

    public function update(Request $request, Movie $movie){
        $fields = $request->validate([
            'title' => 'required',
            'production' => 'required',
            'email' => ['required', 'email'],
            'country' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'director' => 'required',
            'runtime' => 'required',
            'year' => 'required',
            'actors' => 'required'
        ]);

        if($request->hasFile('logo')){
            $fields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $movie->update($fields);

        Log::channel('custom')->info(auth()->user()->role . " " . auth()->user()->name . " has updated a post.");

        return back()->with('message', 'Film post successfully edited!');
    }

    public function delete(Movie $movie){
        if($movie['user_id'] == auth()->id() || auth()->user()->role == 'admin' || auth()->user()->role == 'manager'){
            $movie->delete();

            Log::channel('custom')->info(auth()->user()->role . " " . auth()->user()->name . " has deleted a post.");

            return redirect('/')->with('message', 'Film post successfully deleted!');
        }
        else{
            abort(403, 'Unathorized action!');
        }
    }

    public function manage(){
        return view('movies.manage', [
            'movies' => auth()->user()->movies()->get()
        ]);
    }
}
