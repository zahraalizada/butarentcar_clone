<?php

namespace App\Http\Controllers\Back;

use App\Models\Page;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
        $item = Settings::findOrFail($id);
        return view('back.settings.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Settings::findOrFail($id);

        $logoimg = '';
        if ($request->hasFile('logo_img')) {
            $logoimg = time() . 'logo' . '.' . $request->file('logo_img')->getClientOriginalExtension();
            $request->file('logo_img')->move(public_path('uploads'), $logoimg);
            $logoimg = 'uploads/' . $logoimg;
        }

        $coverimg = '';
        if ($request->hasFile('cover_img')) {
            $coverimg = time() . 'cover' . '.' . $request->file('cover_img')->getClientOriginalExtension();
            $request->file('cover_img')->move(public_path('uploads'), $coverimg);
            $coverimg = 'uploads/' . $coverimg;
        }

        $data = array_merge($request->except(['logo_img', 'cover_img']), ['logo_img' => $logoimg, 'cover_img' => $coverimg]);

        $item->update($data);

        return redirect()->route('admin.settings.index')->with('success', 'Update successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
