<?php

namespace App\Http\Controllers\Back;

use App\Models\DriverStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverStatusController extends Controller
{

    public function index()
    {
        $items = DriverStatus::orderBy('created_at','DESC')->get();
        return view('back.pages.driverstatus', compact('items'));
    }

    public function create($locale)
    {
        return view('back.driverstatus.create',compact('locale'));
    }

    public function store(Request $request,$locale)
    {
        DriverStatus::create($request->all());
        return redirect()->route('admin.driverstatus.index',$locale)->with('success', 'Added succesfully!');
    }

    public function edit( $locale,$id)
    {
        $item = DriverStatus::findOrFail($id);
        return view('back.driverstatus.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale, $id)
    {
        $item = DriverStatus::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.driverstatus.index',$locale)->with('success','Update succesfully!');
    }

    public function destroy(string $locale,$id)
    {
        $item = DriverStatus::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.driverstatus.index',$locale)->with('success','Delete succesfully!');

    }
}
