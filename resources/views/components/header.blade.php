<header class="GermaniaOne sm:h-72">

    <div class="flex h-16 content-between bg-gray-100 p-4">

        {{-- Brand / Logo Area --}}
        <a href="{{ route('home') }}">
            <p class="text-2xl text-red-900 duration-150 hover:text-blue-900">
                <i class="fas fa-temperature-half mx-2"></i>
                Thermal Ranger
            </p>
        </a>

        {{-- Navigation Area --}}
        @if (Route::has('login'))

            <div class="fixed top-0 right-0 hidden p-4 sm:block">

                @auth
                    <a href="{{ route('dashboard') }}"
                        class="text-lg text-red-900 underline duration-150 hover:text-blue-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-lg text-red-900 underline hover:text-blue-900">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-lg text-red-900 underline duration-150 hover:text-blue-900">Register</a>
                    @endif
                @endauth

            </div>

        @endif
    </div>

    {{-- Hero --}}
    <div class="h-24 bg-red-900 sm:block sm:h-56">

        {{-- inline-flex --}}
        <h1 class="textOutline mt-2 ml-4 text-5xl text-gray-100">
            Thermal Ranger
        </h1>

        <h2 class="textOutline mt-2 ml-4 text-2xl text-gray-100">
            Active fermentation temperature monitoring
        </h2>

        <picture>
            <x-unsplash photo="QpeFep6JaoA" ttl="86400" class="absolute top-16 left-0 -z-10 object-cover"
                alt="Water temperature gauge: courtesy of Kelly Sikkema via Unsplash" />
        </picture>
    </div>
</header>
