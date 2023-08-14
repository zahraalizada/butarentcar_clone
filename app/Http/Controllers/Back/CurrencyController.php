<?php

namespace App\Http\Controllers\Back;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{

    public function index()
    {
        $items = Currency::orderBy('created_at','DESC')->get();
        return view('back.pages.currency', compact('items'));
    }


    public function create($locale)
    {
        return view('back.currency.create',compact('locale'));
    }


    public function store(Request $request, $locale)
    {
        Currency::create($request->all());
        return redirect()->route('admin.currency.index',$locale)->with('success', 'Added succesfully!');
    }


    public function edit($locale, $id)
    {
        $item = Currency::findOrFail($id);
        return view('back.currency.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale, $id)
    {
        $item = Currency::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.currency.index',$locale)->with('success','Update succesfully!');
    }

    public function destroy(string $locale,$id)
    {
        $item = Currency::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.currency.index',$locale)->with('success','Delete succesfully!');

    }
}
