<?php

namespace App\Http\Controllers\Back;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Currency::orderBy('created_at','DESC')->get();
        return view('back.pages.currency', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Currency::create($request->all());
        return redirect()->route('admin.currency.index')->with('success', 'Added succesfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Currency::findOrFail($id);
        return view('back.currency.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Currency::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.currency.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Currency::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.currency.index')->with('success','Delete succesfully!');

    }
}
