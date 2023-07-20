<?php

namespace App\Http\Controllers\Back;

use App\Models\CarDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CarDetails::orderBy('created_at','DESC')->get();
        return view('back.pages.cardetails', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.cardetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CarDetails::create($request->all());
        return redirect()->route('admin.cardetails.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = CarDetails::findOrFail($id);
        return view('back.cardetails.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = CarDetails::findOrFail($id);
        return view('back.cardetails.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = CarDetails::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.cardetails.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CarDetails::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.cardetails.index')->with('success','Delete succesfully!');

    }
}
