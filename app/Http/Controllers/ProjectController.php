<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function create()
    {
        return view('project_draft.create-project');
    }
}
