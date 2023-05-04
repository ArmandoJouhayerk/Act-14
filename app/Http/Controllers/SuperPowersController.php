<?php

namespace App\Http\Controllers;

use App\Models\superpowers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class SuperPowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('active', 1)
        ->select('id', 'name', 'description')
        ->firstOrFail(); 

        $page_title="Superpowers"; 
        return view('superpowers.index', compact('superpowers', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superpowers.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        superpowers::create([
            'user_id' => Auth::id(),
            'name'=> $request->name, 
            'description' => $request->description

        ]);

        return redirect() -> route('superpowers.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('active', 1)
        ->where('id', $id)
        ->select('id', 'name', 'description')
        ->firstOrFail(); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('active', 1)
        ->where('id', $id)
        ->select('id', 'name', 'description')
        ->firstOrFail(); 

        return view('superpowers.edit'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('active', 1)
        ->where('id', $id)
        ->select('id', 'name', 'description')
        ->firstOrFail(); 

        $superpower->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);

        return redirect()->route('superpowers.show', $id); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eliminado logico 
        $superpower = superpowers::where('user_id', Auth::id())
        ->where('active', 1)
        ->where('id', $id)
        ->select('id', 'name', 'description')
        ->firstOrFail(); 

        $superpower->update([
            'active'=> false
        ]);

        return redirect()->route('superpowers.index');

    }
}
