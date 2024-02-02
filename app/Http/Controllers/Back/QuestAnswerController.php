<?php

namespace App\Http\Controllers\Back;

use App\Models\QuestAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestAnswerController extends Controller
{

    public function index()
    {
        $items = QuestAnswer::orderBy('created_at','DESC')->get();
        return view('back.pages.questanswer', compact('items'));
    }


    public function edit($locale, $id)
    {
        $item = QuestAnswer::findOrFail($id);
        return view('back.questanswer.edit', compact('item','locale'));
    }


    public function update(Request $request, $locale, $id)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string|max:65335',
        ], [
            'question.required' => 'The question field is required..',
            'question.max' => 'The question field must not be greater than 500 characters..',
            'answer.required' => 'The answer field is required.',
            'answer.max' => 'The answer field must not be greater than 65335 characters.',
        ]);

        $item = QuestAnswer::findOrFail($id);

        $item->unsetRelation('translation')->load('translations');
        $item->translateOrNew()->question = $validatedData['question'];

        $item->update($validatedData);
        return redirect()->route('admin.questanswer.index',$locale)->with('success','Update succesfully!');
    }


}
