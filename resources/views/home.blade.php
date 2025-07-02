<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="border-0 border-amber-500 h-60 md:h-150 lg:h-150 w-full bg-[url(/public/img/landingbg-dark.png)] lg:bg-[url(/public/img/landingbg.png)] bg-cover bg-no-repeat bg-right grid lg:grid-cols-2 place-content-center">
            
            <div class="border-0 border-amber-300  h-60 md:h-150 lg:h-150  grid place-content-center justify-center">
                <div class="border-0 border-amber-300 grid gap-2 lg:gap-4">
                    <p class="text-2xl md:text-5xl lg:text-4xl font-serif font-bold text-lotuslinelogo">
                    Express Yourself</p>
                    <p class="text-2xl md:text-5xl lg:text-4xl ms-10 lg:ms-20 font-serif font-bold text-lotuslinelogo">
                    Through Your Nails.</p>

                    <div class="grid place-content-center">
                        <p class="text-md md:text-2xl lg:text-xl font-serif text-lotuslinelogo ">
                        Nail Art Design For You.</p>
                    </div>
                </div>
                <div class="border-0 border-amber-300 mt:10 md:mt-20 lg:mt-20 grid h-20 place-content-center">
                    <button class="grid place-content-center w-45 md:w-60 lg:w-60 h-10 md:h-15 lg:h-15 text-sm md:text-xl lg:text-xl rounded-md bg-lotuslogobg px-3 py-2  font-medium text-lotuslinelogo hover:text-lotuslogobg hover:bg-lotuslinelogo hover:cursor-pointer font-serif">Book Appointment &#10140;</button>
                </div>
            </div>
    </div>

    <div class="border-0 border-amber-300 bg-lotuslinelogo  h-250 md:h-210 lg:h-200 w-full grid">
            
            <div class="border-0 border-blue-300 grid content-start place-content-center p-5 h-250 md:h-210 lg:h-200  md:relative lg:relative">
                <img src="/img/about.jpg" class="w-70 h-90 md:w-100 md:h-120 lg:w-100 lg:h-120 m-2 md:me-70 lg:me-100 border-5 rounded-3xl border-lotuslinelogo" alt="">
                
                <div class="md:relative lg:relative md:bottom-90 lg:bottom-100 md:left-70 lg:left-80 w-70 md:w-100 lg:w-120 h-140 md:h-160 m-2 border-5 rounded-3xl border-lotuslogobg bg-lotuslogobg  grid gap-4 p-4 text-xs md:text-lg lg:text-lg font-serif text-lotuslinelogo content-center place-content-center" >
                    <h1 class="text-2xl lg:text-4xl font-bold">About Lotus Nail Art</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia sed quaerat illum repellendus deleniti laborum cupiditate praesentium exercitationem ipsum culpa maiores aperiam quos pariatur, placeat corporis officia aliquam voluptas?
                    </p>

                    <p class="ms-10 lg:ms-20">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia sed quaerat illum repellendus deleniti laborum cupiditate praesentium exercitationem ipsum culpa maiores aperiam quos pariatur, placeat corporis officia aliquam voluptas?
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quia sed quaerat illum repellendus deleniti laborum cupiditate praesentium exercitationem ipsum culpa maiores aperiam quos pariatur, placeat corporis officia aliquam voluptas?
                    </p>
                </div>
            
        </div>
    </div>

    <div class="h-80 w-full">
        <h3 class="border-0 border-amber-300 text-xl font-bold tracking-tight text-gray-900">Collections</h3>
    </div>

    <div class="h-80 w-full">
        <h3 class="border-0 border-amber-300 text-xl font-bold tracking-tight text-gray-900">Contact</h3>
    </div>
</x-layout>