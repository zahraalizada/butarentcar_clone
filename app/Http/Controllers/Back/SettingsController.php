<?php

namespace App\Http\Controllers\Back;

use App\Models\Page;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SettingsController extends Controller
{

    public function index()
    {
        $items = Settings::orderBy('created_at','DESC')->get();
        return view('back.pages.settings', compact('items'));
    }

    public function edit(string $locale,$id)
    {
        $item = Settings::findOrFail($id);
        return view('back.settings.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale, $id)
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

        return redirect()->route('admin.settings.index',$locale)->with('success', 'Update successfully!');
    }

}
