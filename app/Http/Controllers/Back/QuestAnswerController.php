<?php

namespace App\Http\Controllers\Back;

use App\Models\QuestAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = QuestAnswer::orderBy('created_at','DESC')->get();
        return view('back.pages.questanswer', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.questanswer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        QuestAnswer::create($request->all());
        return redirect()->route('admin.questanswer.index')->with('success', 'Added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = QuestAnswer::findOrFail($id);
        return view('back.questanswer.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = QuestAnswer::findOrFail($id);
        return view('back.questanswer.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = QuestAnswer::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.questanswer.index')->with('success','Update succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = QuestAnswer::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.questanswer.index')->with('success','Delete succesfully!');

    }
}
