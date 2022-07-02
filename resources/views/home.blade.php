<x-html :title="isset($title) ? $title . ' - ' . config('app.name') : ''">

    <x-slot name="head">
        {{-- Laravel Mix --}}
        <script src="{{ mix('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

        {{-- AlpineJS --}}
        <script src="//unpkg.com/alpinejs" defer></script>
    </x-slot>


    <div class="m-0 h-screen min-h-screen w-screen bg-gray-100 p-0">


        <x-header />

        <main class="mx-6 mt-10 grid gap-6 sm:grid-cols-3">

            <x-featured-card>
                <x-slot:title>Monitor</x-slot:title>
                <x-slot:unsplashUrl>wmsDAIEtPfo</x-slot:unsplashUrl>
                <x-slot:bodyText>
                    Yeast health during fermentation is directly connected to the
                    temperature of fermenting wort. Being aware of the fermentation
                    temperature is the first step towards controlling it.
                </x-slot:bodyText>
            </x-featured-card>

            <x-featured-card>
                <x-slot:title>Reproduce</x-slot:title>
                <x-slot:unsplashUrl>c-fbj_fTFUM</x-slot:unsplashUrl>
                <x-slot:bodyText>
                    Was that last batch just right? Want to make it again? Having a history of a perfect brew's
                    fermentation temperatures gives you the information you need to create the same
                    environment for another stellar brew.
                </x-slot:bodyText>
            </x-featured-card>

            <x-featured-card>
                <x-slot:title>Control</x-slot:title>
                <x-slot:unsplashUrl>5sAzXev5-jA</x-slot:unsplashUrl>
                <x-slot:bodyText>
                    Future plans for Thermal Ranger include the ability to control your fermentation
                    environment's cooling and heating components, allowing for actively managed
                    fermentation profiles.
                </x-slot:bodyText>
            </x-featured-card>
        </main>

        <x-footer />

    </div>


</x-html>
