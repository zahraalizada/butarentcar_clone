<?php

namespace App\Http\Controllers\Back;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Termwind\Components\Dd;

class PrivacyPolicyController extends Controller
{

    public function index()
    {
        $items = PrivacyPolicy::orderBy('created_at', 'DESC')->get();
        return view('back.pages.privacypolicy', compact('items'));
    }

    public function edit( $locale,$id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        return view('back.privacypolicy.edit', compact('item','locale'));
    }

    public function update(Request $request, $locale,$id)
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
        /**
         * @var $item PrivacyPolicy
         */

        $item = PrivacyPolicy::findOrFail($id);
        $item->unsetRelation('translation')->load('translations'); // bu tableye aid butun translationlari yeniden yukleyir
        $item->translateOrNew()->title = $validatedData['title']; // translation bolumunde olan title-a requestden gturduyu title-i elave edir
        $item->update($validatedData);
        return redirect()->route('admin.privacypolicy.index',$locale)->with('success', 'Update succesfully!');
    }


}
