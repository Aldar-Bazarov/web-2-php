<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use App\Models\Statya;

class ApiController extends Controller
{
    public function getStatyas()
    {
        $statyas = Statya::all();

        return response()->json($statyas, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getOneRubric($id)
    {
        $rubric = Rubric::findOrFail($id);
        $statyas = Statya::where('rubric_id', $rubric->id)->get();
        return response()->json($statyas, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getOneStatyas($id)
    {
        $statya = Statya::findOrFail($id);
        return response()->json($statya, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
