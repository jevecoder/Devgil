
<nav class="bg-[#212121] dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
    <div class="relative max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('index')}}" class="flex items-center">
        <img src="{{asset('img/LOGO.png')}}" class="absolute h-24 w-24" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
    </a>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li class="hover:text-[#ff3939] {{ request()->routeIs('index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{route('index')}}">Home</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('about.about') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{route('about.about')}}" >About</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('projects.index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{route('projects.index')}}" >Projects</a>
            </li>
            <li class="hover:text-[#ff3939] {{ request()->routeIs('contact.index') ? 'text-[#ff3939]' : 'text-white' }}">
                <a href="{{route('contact.index')}}">Contact</a>
            </li>
        </ul>
    </div>
    <div class="flex md:order-2">
        <button id="buttonlogin">
            Login
        </button>
        <style>
            #buttonlogin {
  width: 10em;
  position: relative;
  height: 3.5em;
  border: 3px ridge #ff3939;
  outline: none;
  background-color: transparent;
  color: white;
  transition: 1s;
  border-radius: 0.3em;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

#buttonlogin::after {
  content: "";
  position: absolute;
  top: -10px;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #212121;
  transition: 0.5s;
  transform-origin: center;
}

#buttonlogin::before {
  content: "";
  transform-origin: center;
  position: absolute;
  top: 80%;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #212121;
  transition: 0.5s;
}

#buttonlogin:hover::before, button:hover::after {
  transform: scale(0)
}

#buttonlogin:hover {
  box-shadow: inset 0px 0px 25px #ff3939;
}
        </style>
    </div>
</div>
  </nav>
