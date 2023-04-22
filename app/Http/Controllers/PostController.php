<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Manager;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manager = Manager::orderBy('id')->paginate(5);
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'salary' => 'required',
            'qualification' => 'required',
            'category' => 'required',
            'other' => 'required',

        ]);
        
        Manager::create($request->post());

        return redirect()->route('jobs')->with('success','Company has been created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
