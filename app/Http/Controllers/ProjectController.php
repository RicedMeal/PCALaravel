<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    public function create()
    {
        return view('project_draft.create-project');
    }

    public function store(Request $request)
    {
        //validate the form data
        $validatedData = $request->validate([
            'project_title' => 'required|string|max:255',
            'department_office' => 'required|string|max:255',
            'project_description' => 'required|string',
            'person_in_charge' => 'required|string|max:255',
            'project_date' => 'required|date',
        ]);

        //saving data to the database
        Project::create($validatedData);

        //optional
        //return redirect()->route('your.success.route');
    }
}
