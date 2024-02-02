<?php

namespace App\Http\Controllers\Back;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarBrandController extends Controller
{

    public function index()
    {
        $items = CarBrand::orderBy('created_at','DESC')->get();
        return view('back.pages.carbrand', compact('items'));
    }


    public function create($locale)
    {
        return view('back.carbrand.create',compact('locale'));
    }


    public function store(Request $request, $locale)
    {

        $icon = '';
        if ($request->hasFile('icon')) {
            $icon = time() . 'icon' . '.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('uploads'), $icon);
            $icon = 'uploads/' . $icon;
        }

        $data = array_merge($request->except(['icon']), ['icon' => $icon]);

        CarBrand::create($data);
        return redirect()->route('admin.carbrands.index',$locale)->with('success', 'Added succesfully!');
    }


    public function edit($locale, $id)
    {
        $item = CarBrand::findOrFail($id);
        return view('back.carbrand.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale, $id)
    {
        $item = CarBrand::findOrFail($id);

        $icon = '';
        if ($request->hasFile('icon')) {
            $icon = time() . 'icon' . '.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('uploads'), $icon);
            $icon = 'uploads/' . $icon;
        }

        $data = array_merge($request->except(['icon']), ['icon' => $icon]);

        $item->update($data);

        return redirect()->route('admin.carbrands.index',$locale)->with('success','Update succesfully!');
    }

    public function destroy(string $locale,$id)
    {
        $item = CarBrand::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.carbrands.index',$locale)->with('success','Delete succesfully!');

    }
}
