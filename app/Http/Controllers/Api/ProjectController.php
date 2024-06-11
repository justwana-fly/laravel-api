<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function publicIndex()
    {
        $projects = Project::all();
        return response()->json($projects);
    }
}
