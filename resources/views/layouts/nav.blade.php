<nav class="bg-[#212121] dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
    <div class="relative flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ route('index') }}" class="flex items-center">
            <img src="{{ asset('img/LOGO.png') }}" class="absolute w-24 h-24" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <!-- Mobile Navigation Button -->
        <button id="mobileMenuButton" class="md:hidden" onclick="toggleMobileMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 font-medium border rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <!-- Navigation Links -->
                <li
                    class="hover:text-[#ff3939] {{ request()->routeIs('index') ? 'text-[#ff3939]' : 'text-white' }}">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="hover:text-[#ff3939] {{ request()->routeIs('about.about') ? 'text-[#ff3939]' : 'text-white' }}">
                    <a href="{{ route('about.about') }}">About</a>
                </li>
                <li
                    class="hover:text-[#ff3939] {{ request()->routeIs('projects.index') ? 'text-[#ff3939]' : 'text-white' }}">
                    <a href="{{ route('projects.index') }}">Projects</a>
                </li>
                <li
                    class="hover:text-[#ff3939] {{ request()->routeIs('contact.index') ? 'text-[#ff3939]' : 'text-white' }}">
                    <a href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="hidden md:flex md:order-2">
            <button id="buttonlogin">
                Login
            </button>
        </div>
    </div>
    <!-- Mobile Navigation Menu -->
    <div class="md:hidden" id="mobileMenu" style="display: none;">
        <ul class="flex flex-col items-center justify-center p-4 mt-4 font-medium border rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li class="hover:text-[#ff3939] {{ request()->routeIs('index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{ route('index') }}">Home</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('about.about') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{ route('about.about') }}">About</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('projects.index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{ route('projects.index') }}">Projects</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('contact.index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{ route('contact.index') }}">Contact</a>
            </li>
            <div class="">
                <button id="buttonlogin">
                    Login
                </button>
            </div>
        </ul>
    </div>

    <script>
        function toggleMobileMenu() {
            var mobileMenu = document.getElementById("mobileMenu");
            mobileMenu.style.display = (mobileMenu.style.display === "none" || mobileMenu.style.display === "") ? "block" : "none";
        }
    </script>
</nav>
