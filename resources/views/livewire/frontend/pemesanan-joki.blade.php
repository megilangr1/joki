<div>
    <div class="lg:container lg:mx-auto">
        <div class="bg-neutral-900 flex justify-between gap-1 pb-6 lg:pb-10 pt-16 lg:pt-20 px-5 lg:px-40">
            <div class="max-w-5xl flex-auto mx-auto px-4 xl:px-0 flex flex-col gap-0">
                <h1 class="font-semibold text-white text-center md:text-start text-5xl md:text-6xl">
                    <span class="text-violet-500 md:tracking-widest">Sewa Jasa Kami</span>
                </h1>
                <h2 class="text-white text-center md:text-start text-lg md:text-xl mt-2">
                    Murah - Cepat - Terpercaya
                </h2>

                <div class="max-w-4xl">
                    <p class="mt-3 text-neutral-400 text-sm md:text-lg text-center md:text-start tracking-wider">
                        Silahkan masukan informasi pemesanan mu, pastikan
                        <span class="underline underline-offset-2 lg:underline-offset-8">Nomor Whatsapp & Email</span>
                        mu aktif !
                        <br>
                        Setelah pesanan mu kami terima.
                        <br>
                        Kami akan segera menghubungi mu melalui
                        <span class="underline underline-offset-2 lg:underline-offset-8">Whatsapp / Email</span>
                    </p>
                </div>
            </div>
            <div class="hidden lg:w-52 lg:inline-flex justify-center items-center px-4">
                <img src="{{ asset('img/logo.png') }} " alt="sijoki" class="size-auto animate-pulse">
            </div>
        </div>

        <div class="flex gap-1 pb-14 lg:pb-20 px-9 lg:px-40">
            <div class="w-full px-5 pt-3 pb-5 border border-violet-600 rounded-md bg-neutral-800">
                <div class="grid grid-cols-6 gap-x-3 gap-y-4">
                    <div class="col-span-6">
                        <h3 class="text-lg text-white">
                            Informasi Data Diri
                        </h3>
                        <hr class="w-[80%] lg:w-[30%] border-t-4 border-violet-600 mt-2">
                    </div>
                    <div class="col-span-6 lg:col-span-2">
                        <div class="w-full relative">
                            <input type="text" id="nama_pelanggan" name="nama_pelanggan"
                                class="peer py-2 px-0 ps-24 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan Nama Kamu" required>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                Nama Kamu :
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-2">
                        <div class="w-full relative">
                            <input type="text" id="nomor_wa" name="nomor_wa"
                                class="peer py-2 px-0 ps-10 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan Nomor Whatsapp" required>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                +62
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-2">
                        <div class="w-full relative">
                            <input type="email" id="email" name="email"
                                class="peer py-2 px-0 ps-14 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="example@mail.com" required>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                Email :
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <div class="w-full relative">
                            <input type="text" id="ign" name="ign"
                                class="peer py-2 px-0 ps-11 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan IGN (In Game Nickname)" required>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                IGN :
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <div class="w-full relative">
                            <input type="text" id="hero_request" name="hero_request"
                                class="peer py-2 px-0 ps-[105px] block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Miya, Hanabi, Franco, ..." required>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                Hero Request :
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <div class="w-full relative">
                            <select name="start_rank" id="start_rank"
                                class="peer py-2 px-0 ps-24 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                <option value="">Pilih Rank Awal</option>
                            </select>
                            <div
                                class="text-neutral-200 text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                Rank Awal :
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
