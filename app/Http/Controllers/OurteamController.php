<?php

namespace App\Http\Controllers;

use App\Models\ourteam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourteams = ourteam::all();
        return view('ourteam', compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.layout.ourteam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = [];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/trips', 'public');

            $validatedData['image'] = $imagePath;
        }
        ourteam::create([
            'name'=> $request->name,
            'image' => $validatedData['image'] ?? null,
             'title'=> $request->title,
             'description' => $request->description,
        ]);
        return redirect()->route('ourteams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ourteam $ourteam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ourteam $ourteam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ourteam $ourteam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ourteam::destroy($id);
        return redirect()->route('ourteams.create');
    }
}
