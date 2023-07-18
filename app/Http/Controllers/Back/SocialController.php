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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Social::create($request->all());
        return redirect()->route('admin.social.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Social::findOrFail($id);
        return view('back.social.show', compact('item'));
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
        $item = Social::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.social.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Social::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.social.index')->with('success','Delete succesfully!');

    }
}
