<?php

namespace App\Http\Controllers\Back;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Cars::orderBy('created_at','DESC')->get();
        return view('back.pages.cars', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cars::create($request->all());
        return redirect()->route('admin.cars.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Cars::findOrFail($id);
        return view('back.cars.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Cars::findOrFail($id);
        return view('back.cars.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Cars::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.cars.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Cars::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.cars.index')->with('success','Delete succesfully!');

    }
}
