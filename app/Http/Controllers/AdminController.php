<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\Request;
use App\Models\Statya;

class AdminController extends Controller
{
    public function add()
    {
        $rubrics = Rubric::all();
        return view('add', compact('rubrics'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'lid' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image',
            'rubric_id' => 'required|exists:rubrics,id',
        ]);

        $imagePath = $request->file('image')->store('public/images');

        Statya::create([
            'title' => $validatedData['title'],
            'lid' => $request['lid'],
            'content' => $request['content'],
            'image' => basename($imagePath),
            'rubric_id' => $request['rubric_id'],
        ]);
        return redirect('/')->with('success', 'Статья успешно добавлена!');
    }

    public function delete($id)
    {
        $statya = Statya::findOrFail($id);
        $statya->delete();
        return redirect('/rubric/' . $statya->rubric_id);
    }
}