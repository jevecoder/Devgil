<div>
    <nav class="sticky top-0 p-1 text-white bg-black ">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <span class="self-center font-mono text-4xl whitespace-nowrap text-[#c42121]">DevGil</span>
            </a>

            <ul class="flex flex-col p-1 text-sm md:flex-row">
                <li>
                    <a href="{{ route('About.index') }}" class="p-3 {{request ()->is('index') ? 'active': ''}}">HOME</a>
                    <a href="{{ route('About.index') }}" class="p-3 {{ request()->routeIs('index') ? :''}}">ABOUT</a>
                    <a href="" class="p-3">SERVICES</a>
                    <a href="" class="p-3">PORTFOLIO</a>
                    <a href="" class="p-3">PRICE</a>
                    <a href="" class="p-3">DROPDOWN</a>
                    <a href="" class="p-3">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
