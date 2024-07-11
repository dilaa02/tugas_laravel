<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.features-post'); 
    }

    
    public function create()
    {
        $items = Feature::all();
        return view('pages.features-post', compact('items'));
    }

        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required'
        ]);
        Feature::create($request->all());
        return redirect()->route('pages.features-post');
    }

   
    public function show(Feature $feature)
    {
        $items = Feature::findOrFail($feature);
        return response()->json($items, 201);
    }

        public function edit(Feature $feature)
    {
        //
    }

       public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'category' => 'sometimes|string|max:255',
            'description' => 'sometimes'
        ]);

        $items = Feature::findOrFail($feature);
        $items->update($request->all());
        return response()->json($items);
    }

   
    public function destroy(Feature $feature)
    {
        $items = Feature::findOrFail($feature);
        $items->delete();
        return response()->json(null, 204);
    }
}
