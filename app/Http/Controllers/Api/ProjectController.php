<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return response()->json([
            'name' => "michele",
            'description' => "cipolle"
        ]);
    }

    public function show(){

        $projects = Project::paginate(10);

        return response()->json($projects);
    }
}
