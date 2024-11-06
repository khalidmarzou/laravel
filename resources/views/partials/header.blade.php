<header class="sticky top-0 z-50 bg-white shadow-xl flex justify-center items-center py-4 px-12 w-full">
    <div class="border-blue-800 flex justify-between w-full px-6">
        <a href="{{ url('/') }}">
            <img class="h-16" src="{{ asset('/logos/logoGreenNoBg.png') }}" alt="Logo" />
        </a>
        @include('partials.nav')
    </div>
</header>
