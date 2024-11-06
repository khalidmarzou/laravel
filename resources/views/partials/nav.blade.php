@php
    $pages = [
        'home' => '/',
        'projects' => '/projects',
        'gallery' => '/gallery',
        'contact' => '#footer',
        'about' => '#quiSommesNous'
    ];
@endphp

<nav class="flex items-center relative">
    <button type="button" class="hidden phone:inline" onclick="toggleMenu()">
        <i class="fas fa-bars-staggered text-[#4D4D4D] hover:text-gray-400 text-3xl"></i>
    </button>

    <div id="menuBackdrop" class="hidden fixed inset-0 bg-black opacity-50 z-10 phone:block" onclick="toggleMenu()"></div>

    <div id="menu" class="hidden fixed top-0 right-0 bg-white shadow-lg phone:w-[50vw] phone:h-screen phone:overflow-y-auto z-20 transition-transform transform phone:translate-x-full phone:block">
        <ul class="flex flex-col items-start gap-10 p-12">
            <div class="flex space-x-2">
                <button onclick="changeLanguage('fr')" class="px-2 py-1 border rounded hover:bg-gray-200">FR</button>
                <button onclick="changeLanguage('ar')" class="px-2 py-1 border rounded hover:bg-gray-200">عربية</button>
            </div>
            @foreach ($pages as $pageKey => $route)
                <li>
                    <a href="{{ $route }}" class="text-[#4D4D4D] hover:text-[#4caf4f] {{ request()->is(trim($route, '/')) ? 'border-b-2 border-[#4caf4f]' : '' }}">
                        {{ __($pageKey) }}
                    </a>
                </li>
            @endforeach
            <li>
                <button onclick="openDonateModal()" class="bg-[#4caf4f] text-white px-4 py-2 rounded">
                    {{ __('donate') }}
                </button>
            </li>
        </ul>
    </div>

    <ul class="hidden phone:flex items-center gap-10">
        @foreach ($pages as $pageKey => $route)
            <li>
                <a href="{{ $route }}" class="text-[#4D4D4D] hover:text-[#4caf4f] {{ request()->is(trim($route, '/')) ? 'border-b-2 border-[#4caf4f]' : '' }}">
                    {{ __($pageKey) }}
                </a>
            </li>
        @endforeach
        <li>
            <button onclick="openDonateModal()" class="bg-[#4caf4f] text-white px-4 py-2 rounded">
                {{ __('donate') }}
            </button>
        </li>
        <div class="flex space-x-2">
            <button onclick="changeLanguage('fr')" class="px-2 py-1 border rounded hover:bg-gray-200">FR</button>
            <button onclick="changeLanguage('ar')" class="px-2 py-1 border rounded hover:bg-gray-200">عربية</button>
        </div>
    </ul>
</nav>
