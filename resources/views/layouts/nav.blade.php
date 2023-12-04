<!--plm logo and title -->
<section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
    <nav class="fixed top-0 left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0" :class="{ '-translate-x-full' : !sideBar, 'translate-x-0' : sideBar }" @click.away="sideBar = false">
        <a href="/" class="flex items-center px-4 py-5">
            <img src="{{ asset('images/plmlogo.png') }}" alt="PLM Logo" width="200">
        </a>
        <!-- navigator -->
        <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation">
            <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation">
                <!--home category side nav -->
                <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                    <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span>Home</span>
                </a>
                <!-- projects logo -->
                <div x-data="{ open: localStorage.getItem('submenuOpen') === 'true' || true }" x-init="() => { open = open }">
                    <div @click="open = !open; localStorage.setItem('submenuOpen', open)" class="flex items-center justify-between px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" role="button">
                        <div class="flex items-center mr-10">
                            <!-- Folder Icon -->
                            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                            </svg>
                            <!-- Projects Text -->
                            <span class="text-gray-500 mr-3 group-hover:text-gray-200">Projects</span>
                            <button class="flex items-center cursor-pointer pl-20">
                                <svg id="dropmenu" class="shrink-0 w-5 h-5 ml-2 transition transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div x-show="open" class="ml-7">
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="{{ route('create-projects') }}">
                            <span>Create Project</span>
                        </a>
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                            <span>Drafts</span>
                        </a>
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                            <span>Completed</span>
                        </a>
                    </div>
                </div>



                <!--hala ano to category side nav -->
                <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                    <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd" />
                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                    </svg>
                    <span>Vendors</span>
                </a>
                </div>
                <div>
                <!-- settings to category side nav -->
                <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
                    <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    <span>Settings</span>
                </a>
                </div>
            </nav>
        </nav>
    </nav>
    <div class="ml-0 transition md:ml-60 bg-gray-200">
        <header class="flex items-center justify-between w-full px-4 h-14">
            <button class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true">
                <span class="sr-only">Menu</span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
            <div class="hidden md:flex items-center"> <!-- use ml-(no.) to adjust margin -->
                <!-- search bar -->
                <div class="hidden md:flex items-center border border-gray-400 square p-2 pr-5  "> <!-- use ml-(no.) to adjust margin -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input class="bg-transparent border-0 form-input outline-none placeholder-gray-400 max-w-200 w-96" placeholder="Search for articles..." />
                </div>
            </div>

            <!-- notification  -->
            <div class="hidden md:flex items-center ml-auto">
                <a href="#" class="flex text-gray-500"> <!-- use ml-(no.) to adjust margin -->
                    <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                    </svg>
                </a>
            </div>

            <!-- user profile logo -->
            <div x-data="{ isOpen: false }" class="relative inline-block">
                <div class="flex items-center ml-5">
                    <div @click="isOpen = !isOpen" class="flex items-center bg-gray-200 border-0 py-2 px-2 focus:outline-none transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200 rounded-md">
                        <img src="{{ asset('images/user.jpg') }}" alt="Photo of User Here" class="w-8 h-8 rounded-full object-cover">
                        <span class="ml-3 text-l">Hello, <b>Enzo!</b></span>
            </div>
                <!-- user profile content/functionality -->
                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute top-12 right-0 mt-2 bg-white text-gray-800 border rounded shadow-md" style="display: none; z-index: 10;">
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">Profile</a>
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">Account Settings</a>
                        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">Logout</a>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
            <script src="/js/app.js"></script>
        </div>
        </header>
