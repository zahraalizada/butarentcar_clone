<?php

namespace App\Http\Controllers\Back;

use App\Models\tenants;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantsController extends Controller
{

    public function index()
    {
        $items = Tenant::orderBy('created_at','DESC')->get();
        return view('back.pages.tenants', compact('items'));
    }

    public function create()
    {
        return view('back.tenants.create');
    }


    public function store(Request  $request, $locale)
    {
        Tenant::create($request->all());
        return redirect()->route('admin.tenants.index',$locale)->with('success', 'Added succesfully!');
    }


    public function edit($locale, $id)
    {
        $item = Tenant::findOrFail($id);
        return view('back.tenants.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale, $id)
    {
        $item = Tenant::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.tenants.index',$locale)->with('success','Update succesfully!');
    }

    public function destroy($locale, $id)
    {
        $item = Tenant::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.tenants.index',$locale)->with('success','Delete succesfully!');

    }
}
