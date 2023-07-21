<?php

namespace App\Http\Controllers\Back;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Social::orderBy('created_at','DESC')->get();
        return view('back.pages.social', compact('items'));
    }


    public function create()
    {
       //
    }


    public function store(Request $request)
    {
       //
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
        $item = Social::findOrFail($id);
        return view('back.social.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'link' => 'nullable|string|max:500',
        ], [
            'link.max' => 'The link field must not be greater than 500 characters.',
        ]);

        $item = Social::findOrFail($id);
        $item->update($validatedData);
        return redirect()->route('admin.social.index')->with('success','Update succesfully!');
    }

    public function destroy(string $id)
    {
       //
    }
}
