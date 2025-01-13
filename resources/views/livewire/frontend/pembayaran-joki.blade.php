<div>
    <div>
        <div class="lg:container lg:mx-auto">
            <div class="bg-neutral-900 flex justify-between gap-1 pb-6 lg:pb-10 pt-16 lg:pt-20 px-5 lg:px-40">
                <div class="hidden lg:w-52 lg:inline-flex justify-center items-center px-4">
                    <img src="{{ asset('img/logo.png') }} " alt="sijoki" class="size-auto animate-pulse">
                </div>
                <div class="max-w-5xl flex-auto mx-auto px-4 xl:px-0 flex flex-col gap-0">
                    <h1 class="font-semibold text-white text-center md:text-start text-5xl md:text-6xl">
                        <span class="text-violet-500 md:tracking-widest">Pembayaran Pesanan</span>
                    </h1>
                    <h2 class="text-white text-center md:text-start text-lg md:text-xl mt-2">
                        Murah - Cepat - Terpercaya
                    </h2>

                    <div class="max-w-4xl">
                        <p class="mt-3 text-neutral-400 text-sm md:text-lg text-center md:text-start tracking-wider">
                            Silahkan upload bukti pembayaran, pada formulir di-bawah ini.
                            <span class="underline underline-offset-2 lg:underline-offset-8">
                                pada formulir di-bawah ini
                            </span>
                            Setelah bukti pembayaran kami terima.
                            <br>
                            Kami akan segera menghubungi mu melalui
                            <span class="underline underline-offset-2 lg:underline-offset-8">Whatsapp / Email</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex gap-1 pb-14 lg:pb-20 px-9 lg:px-40">
                <div
                    class="w-full px-5 pt-3 pb-5 border border-violet-600 rounded-md bg-neutral-800 {{ $done ? 'hidden' : 'block' }}">
                    <form wire:submit="buatPesanan">
                        <div class="grid grid-cols-6 gap-x-3 gap-y-4">
                            <div class="col-span-6">
                                <h3 class="text-lg text-white">
                                    Informasi Pesanan & Pembayaran - {{ $pesanan->kode_pesanan }}
                                </h3>
                                <hr class="w-[80%] lg:w-[30%] border-t-4 border-violet-600 mt-2">
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="nama_pelanggan" name="nama_pelanggan"
                                        wire:model="state.nama_pelanggan"
                                        class="peer py-2 px-0 ps-28 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Nama Pemesan" readonly>
                                    <div
                                        class="{{ $errors->has('state.nama_pelanggan') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Nama Pemesan :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.nama_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="nomor_wa" name="nomor_wa"
                                        wire:model="state.nomor_wa_pelanggan"
                                        class="peer py-2 px-0 ps-10 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Nomor Whatsapp" readonly>
                                    <div
                                        class="{{ $errors->has('state.nomor_wa_pelanggan') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        +62
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.nomor_wa_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="email" id="email" name="email"
                                        wire:model="state.email_pelanggan"
                                        class="peer py-2 px-0 ps-14 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="example@mail.com" readonly>
                                    <div
                                        class="{{ $errors->has('state.email_pelanggan') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Email :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.email_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="ign" name="ign" wire:model="state.ign"
                                        class="peer py-2 px-0 ps-11 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan IGN (In Game Nickname)" readonly>
                                    <div
                                        class="{{ $errors->has('state.ign') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        IGN :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.ign') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="hero_request" name="hero_request"
                                        wire:model="state.hero_request"
                                        class="peer py-2 px-0 ps-[105px] block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Miya, Hanabi, Franco, ..." readonly>
                                    <div
                                        class="{{ $errors->has('state.hero_request') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Hero Request :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.hero_request') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="start_rank" name="start_rank"
                                        wire:model="state.start_rank"
                                        class="peer py-2 px-0 ps-24 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Rank Awal" readonly>
                                    <div
                                        class="{{ $errors->has('state.start_rank') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Rank Awal :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.start_rank') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="target_rank" name="target_rank"
                                        wire:model="state.target_rank"
                                        class="peer py-2 px-0 ps-24 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Target Rank" readonly>
                                    <div
                                        class="{{ $errors->has('state.target_rank') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Target Rank :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.target_rank') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="jumlah_stars" name="jumlah_stars"
                                        wire:model="state.jumlah_stars_text"
                                        class="peer py-2 px-0 ps-24 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="0 Stars" readonly>
                                    <div
                                        class="{{ $errors->has('state.jumlah_stars') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Jumlah Stars
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.jumlah_stars') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-4">
                                <div class="w-full relative">
                                    <input type="text" id="harga" name="harga"
                                        wire:model="state.harga_text"
                                        class="peer py-2 px-0 ps-36 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="0" readonly>
                                    <div
                                        class="{{ $errors->has('state.harga') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Estimasi Harga - Rp.
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.harga') }}</p>
                            </div>
                            <div class="col-span-6">
                                <div class="w-full relative">
                                    <input type="file" id="bukti_pembayaran" name="bukti_pembayaran"
                                        wire:model.live="state.bukti_pembayaran"
                                        class="peer py-2 px-0 ps-36 block w-full text-white bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-1 file:px-3"
                                        placeholder="Pilih File Untuk di-Upload" multiple>
                                    <div
                                        class="{{ $errors->has('state.bukti_pembayaran') ? 'text-red-500' : 'text-neutral-200' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Upload Bukti Bayar.
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.bukti_pembayaran') }}</p>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.bukti_pembayaran.*') }}
                                </p>
                            </div>
                            <div class="col-span-6">
                                <p class="text-[10px] text-red-500">{{ $err }}</p>
                            </div>
                            <div class="col-span-6 flex justify-center items-center">
                                <button type="submit"
                                    class="w-full py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-violet-500 text-white hover:bg-violet-600 focus:outline-none focus:bg-violet-600 disabled:opacity-50 disabled:pointer-events-none"
                                    wire:loading.attr="disabled" wire:target="state.bukti_pembayaran">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar-check-2">
                                        <path d="M8 2v4" />
                                        <path d="M16 2v4" />
                                        <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
                                        <path d="M3 10h18" />
                                        <path d="m16 20 2 2 4-4" />
                                    </svg>

                                    Buat Data Pesanan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                <div
                    class="w-full px-5 pt-3 pb-5 border border-violet-600 rounded-md bg-neutral-800 {{ $done ? 'block' : 'hidden' }}">
                    <h4 class="text-center text-lg text-white">
                        Terima Kasih..
                        <br>
                        Kami akan segera menghubungi anda untuk konfirmasi selanjutnya.
                    </h4>
                </div>
            </div>
        </div>
    </div>

</div>
