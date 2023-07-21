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
        $items = PrivacyPolicy::orderBy('created_at', 'DESC')->get();
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:500',
            'description' => 'required|string|max:65335',
        ], [
            'title.required' => 'The title field is required..',
            'title.max' => 'The title field must not be greater than 500 characters..',
            'description.required' => 'The description field is required.',
            'description.max' => 'The description field must not be greater than 65335 characters.',
        ]);

        PrivacyPolicy::create($validatedData);
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:500',
            'description' => 'required|string|max:65335',
        ], [
            'title.required' => 'The title field is required..',
            'title.max' => 'The title field must not be greater than 500 characters..',
            'description.required' => 'The description field is required.',
            'description.max' => 'The description field must not be greater than 65335 characters.',
        ]);

        $item = PrivacyPolicy::findOrFail($id);
        $item->update($validatedData);
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.privacypolicy.index')->with('success', 'Delete succesfully!');

    }
}
