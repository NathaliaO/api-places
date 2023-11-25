<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Http\Requests\PlaceRequest;
// use App\Http\Requests\CourseUpdateRequest;

class PlacesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = $request->input('filter');

        if ($query) {
            $places = Place::where('name', 'like', '%' . $query . '%')->get()->toArray();
        } else {
            $places = Place::all()->toArray();
        }

        return response()->json($places);
    }

    public function getById($id)
    {
        $place = Place::find($id);
        return response()->json($place);
    }

    public function store (PlaceRequest $request)
    {
        $data = $request->json()->all();

        Place::create([
            'name'=> $data['name'],
            'slug'=> $data['slug'],
            'city'=> $data['city'],
            'state'=> $data['state'],
        ]);

        return response()->json(['message' => 'Data saved successfully']);
    }

    public function update ($id, PlaceRequest $request)
    {
        $place = Place::find($id);

        $data = $request->json()->all();

        $place->name = $data['name'];
        $place->slug = $data['slug'];
        $place->city = $data['city'];
        $place->state = $data['state'];
        $place->save();

        return response()->json(['message' => 'Data saved successfully', 'data' => $place]);
    }
}
