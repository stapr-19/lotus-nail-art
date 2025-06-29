<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="icon" type="image/x-icon" href="/img/lotus-nail-art.PNG">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body class="h-full">
    
    <div class="min-h-full">
        
        <x-navbar></x-navbar>

        {{-- <x-header>{{ $title }}</x-header> --}}

        <main>
            <div class="mx-auto max-w-full">
                {{ $slot }}
            </div>
        </main>

        <x-footer></x-footer>
    </div>

</body>
</html>