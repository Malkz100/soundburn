<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        return Artist::all();
    }

    public function show(Artist $artist)
    {
        return response()->json($artist, 200);
        //return $Artist;
    }

    public function store(Request $request)
    {
        $artist = Artist::create($request->all());

        return response()->json($artist, 201);
    }

    public function update(Request $request, Artist $artist)
    {
        $artist->update($request->all());

        return response()->json($artist, 200);
    }

    public function delete(Artist $artist)
    {
        $artist->delete();

        return response()->json(null, 204);
    }
}
