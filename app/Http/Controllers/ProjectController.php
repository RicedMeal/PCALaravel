<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::with('documentInputs')->get();
        return view('project_draft.index-project', compact('projects'));
    }

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
            'market_study_file' => 'file|mimes:pdf|max:10240',
        ]);

        // Save project data
        $project = Project::create($validatedData);

        // Handle file upload and save to DocumentInput
        if ($request->hasFile('market_study_file')) {
            $fileContent = file_get_contents($request->file('market_study_file')->getRealPath());

            $project->documentInputs()->create([
                'input_name' => 'market_study_file', // Adjust the input name as needed
                'file_content' => $fileContent,
            ]);
        }

        return redirect()->route('project_draft.index-project')->with('success', 'Project created successfully.');
    }
}
