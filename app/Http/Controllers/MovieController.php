<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json(Movie::all(), 200);
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json([
                'message' => 'Película no encontrada'
            ], 404);
        }

        return response()->json($movie, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string|max:255',
        ]);

        $movie = Movie::create([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
            'cover' => $request->cover,
        ]);

        return response()->json([
            'message' => 'Película creada correctamente',
            'data' => $movie
        ], 201);
    }
}