<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-neutral-900 font-sans antialiased">

    <!-- ========== HEADER ========== -->
    <header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
        <nav class="relative max-w-[66rem] w-full bg-neutral-800 rounded-[28px] py-3 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto"
            aria-label="Global">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a class="inline-flex justify-center items-center font-semibold focus:outline-none focus:opacity-80"
                    href="{{ route('main') }}" aria-label="Preline">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-auto h-12 md:h-16 py-2 ps-5 pe-3">
                    <div class="flex-auto text-white tracking-widest text-sm md:text-lg">SIJOKI</div>
                </a>
                <!-- End Logo -->

                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-neutral-800 text-white disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse"
                        aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Collapse -->
            <div id="navbar-collapse"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7 md:pe-3">
                    <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                        href="{{ route('main') }}" aria-current="page">Home</a>
                    <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                        href="#">Daftar Harga</a>
                    <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                        href="#">Hubungi Kami</a>
                    <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300"
                        href="#">Cek Proses</a>
                    <div>
                        <a class="group inline-flex items-center gap-x-2 py-2 px-5 bg-violet-700 font-medium text-sm text-white rounded-full focus:outline-none"
                            href="{{ route('main') }}">
                            Sewa Joki
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero -->
        <div class="bg-neutral-900 flex flex-col gap-1 pb-14 md:pb-20">
            <div class="w-full inline-flex justify-center items-center pt-10 lg:pt-20 pb-0">
                <img src="{{ asset('img/logo.png') }} " alt="sijoki" class="w-auto h-32 md:h-40">
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

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="relative overflow-hidden bg-neutral-900">
        <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745"
            height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136"
                class="stroke-neutral-700/50" stroke="currentColor" />
        </svg>

        <div class="relative z-10">
            <div class="w-full max-w-5xl px-4 xl:px-0 py-10 lg:pt-16 mx-auto">
                <div class="inline-flex items-center">
                    <a class="inline-flex justify-center items-center font-semibold focus:outline-none focus:opacity-80"
                        href="{{ route('main') }}" aria-label="Preline">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo"
                            class="w-auto h-12 md:h-16 py-2 ps-5 pe-3">
                        <div class="flex-auto text-white tracking-widest text-sm md:text-lg">SIJOKI</div>
                    </a>

                    <div class="border-s border-neutral-700 ps-5 ms-5">
                        <p class="text-sm text-neutral-400">2025 &copy; SIJOKI</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->


    @livewireScripts
</body>

</html>
