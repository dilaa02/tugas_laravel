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
        $items = Feature::all();
        return view('pages.features-post', compact('items')); 
    }

    
    public function create()
    {
        $items = Feature::all();
        return view('pages.features-post-create', compact('items'));
    }

        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'date' => 'required|string',
            'description' => 'required',
            'price' => 'required',
        ]);

        Feature::create($request->all());
        return redirect()->route('features-post');
    }

   
    public function show(Request $request, $id, Feature $features)
    {
        $items = Feature::find($id);
        return view('pages.layout-default-layout', compact('items'));
    }

        public function edit(Request $request, $id, Feature $features)
    {
        $items = Feature::find($id);
        return view('pages.forms-editor', compact('items'));
    }

       public function update(Request $request, $id, Feature $features)
    {
        $features = Feature::findOrFail($id);
        $request->validate([
            'title' =>'required',
            'category' => 'required',
            'date' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $features->update($request->all());
        return redirect()->route('features-post');
    }

   
    public function destroy(Feature $id)
    {
      $id->delete();
      return redirect()->route('features-post');
    }
}
