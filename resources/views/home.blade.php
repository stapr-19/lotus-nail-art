<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-[url(/public/img/landing-bg.png)] h-60 md:150 lg:h-150 w-full bg-contain">
        <h3 class="border border-0 border-amber-300 text-xl font-bold tracking-tight text-white">Landing Page</h3>
    </div>

    <div class="h-80 w-full">
        <h3 class="border border-0 border-amber-300 text-xl font-bold tracking-tight text-gray-900">About</h3>
    </div>

    <div class="h-80 w-full">
        <h3 class="border border-0 border-amber-300 text-xl font-bold tracking-tight text-gray-900">Collections</h3>
    </div>

    <div class="h-80 w-full">
        <h3 class="border border-0 border-amber-300 text-xl font-bold tracking-tight text-gray-900">Contact</h3>
    </div>
</x-layout>