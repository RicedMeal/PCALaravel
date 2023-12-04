@extends('layouts.app')
@section('content')
<div class="p-0 transition">
    <div class="max-w-8xl"> <!-- Container for alignment -->
        <h1 class="text-3xl text-black pb-2 mb-3"><b>CREATE PROJECT</b></h1>

        <form wire:submit.prevent="submitForm" class="bg-gray-50 p-8 rounded-md shadow-md">
            <h2 class="text-xl text-blue-800 mb-6"><b>PROJECT INFORMATION</b></h2>

            <div class="flex flex-wrap -mx-4 mb-4">
                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="projectTitle" class="block text-gray-700 text-sm font-bold mb-2">Project Title</label>
                    <input wire:model= "project_title" type="text" id="projectTitle" name="projectTitle" placeholder="Enter project title" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="department" class="block text-gray-700 text-sm font-bold mb-2">Department/Office</label>
                    <input wire:model="department_office" type="text" id="department" name="department" placeholder="Enter department or office" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea wire:model="project_description" id="description" name="description" placeholder="Enter project description" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 resize-none focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <div class="w-full md:w-1/2 px-4 mb-3">
                    <label for="personInCharge" class="block text-gray-700 text-sm font-bold mb-2">Person-in-charge</label>
                    <input wire:model="person_in_charge" type="text" id="personInCharge" name="personInCharge" placeholder="Enter person in charge" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                </div>
                <div class="w-full md:w-1/2 px-4 mb-20">
                    <label for="projectdate" class="block text-gray-700 text-sm font-bold mb-0">Date</label>
                    <input wire:model="project_date" type="date" id="project_date" name="project_date" class="w-full mt-2 bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                </div>
            </div>
            <div class="flex justify-end">
                <!-- Add a Next button to proceed to another page -->
                <button wire:click="nextButton" class="ml-4 mt-20  bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection
