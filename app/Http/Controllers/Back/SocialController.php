<?php

namespace App\Http\Controllers\Back;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Social::orderBy('created_at','DESC')->get();
        return view('back.pages.social', compact('items'));
    }

    public function edit($locale, $id)
    {
        $item = Social::findOrFail($id);
        return view('back.social.edit', compact('item','locale'));
    }

    public function update(Request $request,$locale, $id)
    {
        $validatedData = $request->validate([
            'link' => 'nullable|string|max:500',
        ], [
            'link.max' => 'The link field must not be greater than 500 characters.',
        ]);

        $item = Social::findOrFail($id);

        $item->update($validatedData);
        return redirect()->route('admin.social.index',$locale)->with('success','Update succesfully!');
    }


}
