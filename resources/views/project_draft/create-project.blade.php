@extends('layouts.app')
@section('content')
<div class="p-0 transition">
    <div class="max-w-8xl"> <!-- Container for alignment -->
        <h1 class="text-3xl text-black pb-2 mb-3"><b>CREATE PROJECT</b></h1>

        <form method="post" action="{{ route('project.store') }}" class="bg-gray-50 p-8 rounded-md shadow-md">
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
            </div>
            <div class="flex justify-end">
                <!-- Add a Next button to proceed to another page -->
                <button type= "submit" class="ml-4 mt-20  bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection
