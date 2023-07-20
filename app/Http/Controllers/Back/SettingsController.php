<?php

namespace App\Http\Controllers\Back;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Settings::orderBy('created_at','DESC')->get();
        return view('back.pages.settings', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Settings::create($request->all());
        return redirect()->route('admin.settings.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Settings::findOrFail($id);
        return view('back.settings.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Settings::findOrFail($id);
        return view('back.settings.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Settings::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.settings.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Settings::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.settings.index')->with('success','Delete succesfully!');

    }
}
