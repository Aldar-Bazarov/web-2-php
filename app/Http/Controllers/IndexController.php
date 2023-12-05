<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use App\Models\Statya;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $rubrics = Rubric::all();
        $statyas = Statya::all();
        $user = Auth::user();
        $isAdmin = false;
        if ($user) {
            $isAdmin = $user->role == 'admin';
        }
        return view('index', compact('rubrics', 'statyas', 'isAdmin'));
    }
    public function rubric($id)
    {
        $rubrics = Rubric::all();
        $rubric = Rubric::find($id);
        if (!$rubric) {
            abort(404, 'Рубрика не найдена');
        }
        $statyas = Statya::where('rubric_id', $rubric->id)->get();
        $user = Auth::user();
        $isAdmin = false;
        if ($user) {
            $isAdmin = $user->role == 'admin';
        }
        return view('rubrika', compact('rubrics', 'statyas', 'rubric', 'isAdmin'));
    }
    public function statya($id)
    {
        $rubrics = Rubric::all();
        $statya = Statya::find($id);
        if (!$statya) {
            abort(404, 'Статья не найдена');
        }
        $rubric = Rubric::find($statya->rubric_id);
        return view('statya', compact('rubrics', 'statya', 'rubric'));
    }
}
