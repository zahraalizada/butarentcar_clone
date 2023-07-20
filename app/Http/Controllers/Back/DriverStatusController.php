<?php

namespace App\Http\Controllers\Back;

use App\Models\DriverStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = DriverStatus::orderBy('created_at','DESC')->get();
        return view('back.pages.driverstatus', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.driverstatus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DriverStatus::create($request->all());
        return redirect()->route('admin.driverstatus.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = DriverStatus::findOrFail($id);
        return view('back.driverstatus.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = DriverStatus::findOrFail($id);
        return view('back.driverstatus.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = DriverStatus::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.driverstatus.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = DriverStatus::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.driverstatus.index')->with('success','Delete succesfully!');

    }
}
