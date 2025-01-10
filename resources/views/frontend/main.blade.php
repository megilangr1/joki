@extends('frontend.master')

@section('content')
    <!-- Hero -->
    <div class="bg-neutral-900 flex flex-col gap-1 pb-14 md:pb-20">
        <div class="w-full inline-flex justify-center items-center pt-10 lg:pt-20 pb-0">
            <img src="{{ asset('img/logo.png') }} " alt="sijoki" class="w-auto h-32 md:h-40 animate-pulse">
        </div>
        <div class="max-w-5xl mx-auto px-4 xl:px-0 flex flex-col gap-0">
            <h1 class="font-semibold text-white text-center md:text-start text-5xl md:text-6xl">
                <span class="text-violet-500 tracking-widest">SIJOKI</span>
            </h1>
            <h2 class="text-white text-center md:text-start text-lg md:text-xl mt-2">
                Murah - Cepat - Terpercaya
            </h2>

            <div class="max-w-4xl">
                <p class="mt-3 text-neutral-400 text-sm md:text-lg text-center md:text-start">
                    Segera beli layanan kami. Joki kami profesional, terpercaya, bekerja dengan cepat, murah dan
                    pasti tidak akan mengecewakan !
                    <br>
                    Dengan pengerjaan super cepat, kami aktif 24 jam setiap hari !
                </p>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <hr class="border-t-4 border-violet-600 mx-auto w-[50%]">

    <div class="grid grid-cols-6 gap-y-10 gap-x-2 pt-10 pb-20 text-white px-10 md:px-32">
        <div class="col-span-6 text-xl text-center">
            <h1>Harga Layanan Kami</h1>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/epic.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">EPIC</h2>
            <span class="tracking-widest italic line-through">Rp. 8000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 5000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/legend.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">LEGEND</h2>
            <span class="tracking-widest italic line-through">Rp. 10000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 7000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/mytic.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">MYTIC</h2>
            <span class="tracking-widest italic line-through">Rp. 15000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 13000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/honore.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">HONOR</h2>
            <span class="tracking-widest italic line-through">Rp. 18000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 15000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/glory.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">GLORY</h2>
            <span class="tracking-widest italic line-through">Rp. 25000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 20000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>
        <div class="col-span-3 lg:col-span-1 flex flex-col gap-1 justify-center items-center">
            <img src="{{ asset('img/imortal.png') }}" alt="" class="w-auto h-20">
            <h2 class="text-lg">IMMORTAL</h2>
            <span class="tracking-widest italic line-through">Rp. 30000</span>
            <span class="tracking-widest text-violet-100 text-xl">Rp. 25000</span>
            <span class="underline underline-offset-4 tracking-wider">/ Bintang</span>
        </div>

        <div class="col-span-6 py-10 flex items-center justify-center">
            <button type="button"
                class="py-3 px-10 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-violet-500 text-white hover:bg-violet-600 focus:outline-none focus:bg-violet-600 disabled:opacity-50 disabled:pointer-events-none">
                PESAN SEKARANG !
            </button>
        </div>
    </div>
@endsection
