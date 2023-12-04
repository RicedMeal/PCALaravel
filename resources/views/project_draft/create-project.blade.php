@extends('layouts.app')
@section('content')
<div class="p-0 transition">
    <div class="max-w-8xl"> <!-- Container for alignment -->
        <h1 class="text-3xl text-black pb-2 mb-3"><b>CREATE PROJECT</b></h1>

        <form method="post" action="{{ route('project.store') }}" class="bg-gray-50 p-8 rounded-md shadow-md" enctype="m">
            @csrf
            <h2 class="text-xl text-blue-800 mb-6"><b>PROJECT INFORMATION</b></h2>
            <div class="flex flex-wrap -mx-4 mb-4">

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="project_title" class="block text-gray-700 text-sm font-bold mb-2">Project Title</label>
                    <input type="text" id="project_title" name="project_title" placeholder="Enter project title" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                    @if($errors->has('project_title'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('project_title') }}</p>
                    @endif
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="department_office" class="block text-gray-700 text-sm font-bold mb-2">Department/Office</label>
                    <input type="text" id="department_office" name="department_office" placeholder="Enter department_office or office" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                    @if($errors->has('department_office'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('department_office') }}</p>
                    @endif
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="project_description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea id="project_description" name="project_description" placeholder="Enter project project_description" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 resize-none focus:outline-none focus:border-blue-500"></textarea>
                    @if($errors->has('project_description'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('project_description') }}</p>
                    @endif
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="person_in_charge" class="block text-gray-700 text-sm font-bold mb-2">Person-in-charge</label>
                    <input type="text" id="person_in_charge" name="person_in_charge" placeholder="Enter person in charge" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                    @if($errors->has('person_in_charge'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('person_in_charge') }}</p>
                    @endif
                </div>

                <div class="w-full md:w-1/2 px-4 mb-20">
                    <label for="projectdate" class="block text-gray-700 text-sm font-bold mb-0">Date</label>
                    <input type="date" id="project_date" name="project_date" class="w-full mt-2 bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                    @if($errors->has('project_date'))
                        <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('project_date') }}</p>
                    @endif
                </div>
                <div>
                <div class="max-w-8xl"> <!-- Container for alignment -->
                    <h2 class="text-xl text-blue-800 mb-6"><b>DOCUMENT INPUTS</b></h2>
                    <div class="mb-4">
                        <label for="market_study_file" class="block text-gray-700 text-sm font-bold mb-2">Market Study File (PDF only)</label>
                        <input 
                            type="file" 
                            id="market_study_file" 
                            name="market_study_file" 
                            required 
                            accept=".pdf" 
                            class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500"
                        >
                        @if($errors->has('market_study_file'))
                            <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('market_study_file') }}</p>
                        @else
                            <p class="text-gray-500 text-xs italic mt-1">Please upload a PDF file.</p>
                        @endif
                    </div>
                <div class="flex justify-end">
                    <button type= "submit" class="ml-4 mt-5  bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-4">
    <label class="block text-sm font-medium text-gray-700 dark:text-white" for="file_input">Upload PDF File</label>
    <div class="relative border rounded-md overflow-hidden">
        <input 
            class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
            id="file_input" 
            type="file"
            accept=".pdf"
        >
        <button type="button" class="bg-blue-500 text-white px-4 py-2 focus:outline-none">Browse</button>
        <span class="text-gray-500 px-4 py-2 block">No file selected</span>
    </div>
</div>

@endsection

