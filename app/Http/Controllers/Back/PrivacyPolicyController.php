<?php

namespace App\Http\Controllers\Back;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PrivacyPolicy::orderBy('created_at','DESC')->get();
        return view('back.pages.privacypolicy', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.privacypolicy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PrivacyPolicy::create($request->all());
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        return view('back.privacypolicy.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        return view('back.privacypolicy.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.privacypolicy.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.privacypolicy.index')->with('success','Delete succesfully!');

    }
}
