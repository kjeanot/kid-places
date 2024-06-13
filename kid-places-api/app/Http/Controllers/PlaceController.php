<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function list() {
        $places = Place::all();
        return response()->json($places);
    }

    public function show(int $id) {
        $place = Place::find($id);
        $place->load('comments');
        $place->load('user');

        if (!$place) {
            return response()->json([
                'message' => 'Place not found'
            ], 404);
        }

        return $place;
    }
}
