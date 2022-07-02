<div class="rounded-md bg-gray-50 drop-shadow-sm duration-150 hover:drop-shadow-md sm:h-96 md:hover:drop-shadow-lg">

    <div class="mt-4 sm:h-10">
        <h3 class="GermaniaOne text-center text-xl uppercase text-red-900">
            {{ $title }}
        </h3>
    </div>

    <div class="sm:h-86">
        <x-unsplash photo="{{ $unsplashUrl }}" ttl="86400" class="featuredCardImage hidden sm:block" />

        <div class="m-4 text-left text-sm">
            <p>{{ $bodyText }}</p>
        </div>
    </div>
</div>
