<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pesanan Joki Masuk') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="flex justify-between items-center border-b rounded-t-xl py-3 px-4 md:px-5">
                        <h3 class="inline-flex gap-x-4 items-center text-lg font-bold text-gray-800">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-table-properties">
                                <path d="M15 3v18" />
                                <rect width="18" height="18" x="3" y="3" rx="2" />
                                <path d="M21 9H3" />
                                <path d="M21 15H3" />
                            </svg>
                            Informasi Detail Pesanan & Bukti Pembayaran
                        </h3>

                        <div class="flex items-center gap-x-1">
                            &ensp;
                        </div>
                    </div>
                    <div class="py-3 px-4">

                        <div class="grid grid-cols-6 gap-x-3 gap-y-4">
                            <div class="col-span-6">
                                <h3 class="text-lg text-black">
                                    Informasi Pesanan & Pembayaran - {{ $pesanan->kode_pesanan }}
                                </h3>
                                <hr class="w-[80%] lg:w-[30%] border-t-4 border-violet-600 mt-2">
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="nama_pelanggan" name="nama_pelanggan"
                                        wire:model="state.nama_pelanggan"
                                        class="peer py-2 px-0 ps-28 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Nama Pemesan" readonly>
                                    <div
                                        class="{{ $errors->has('state.nama_pelanggan') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Nama Pemesan :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.nama_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="nomor_wa" name="nomor_wa"
                                        wire:model="state.nomor_wa_pelanggan"
                                        class="peer py-2 px-0 ps-10 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Nomor Whatsapp" readonly>
                                    <div
                                        class="{{ $errors->has('state.nomor_wa_pelanggan') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        +62
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.nomor_wa_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="email" id="email" name="email"
                                        wire:model="state.email_pelanggan"
                                        class="peer py-2 px-0 ps-14 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="example@mail.com" readonly>
                                    <div
                                        class="{{ $errors->has('state.email_pelanggan') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Email :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.email_pelanggan') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="ign" name="ign" wire:model="state.ign"
                                        class="peer py-2 px-0 ps-11 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan IGN (In Game Nickname)" readonly>
                                    <div
                                        class="{{ $errors->has('state.ign') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        IGN :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.ign') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="hero_request" name="hero_request"
                                        wire:model="state.hero_request"
                                        class="peer py-2 px-0 ps-[105px] block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Miya, Hanabi, Franco, ..." readonly>
                                    <div
                                        class="{{ $errors->has('state.hero_request') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Hero Request :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.hero_request') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="start_rank" name="start_rank"
                                        wire:model="state.start_rank"
                                        class="peer py-2 px-0 ps-24 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Rank Awal" readonly>
                                    <div
                                        class="{{ $errors->has('state.start_rank') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Rank Awal :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.start_rank') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-3">
                                <div class="w-full relative">
                                    <input type="text" id="target_rank" name="target_rank"
                                        wire:model="state.target_rank"
                                        class="peer py-2 px-0 ps-24 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Masukan Target Rank" readonly>
                                    <div
                                        class="{{ $errors->has('state.target_rank') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Target Rank :
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.target_rank') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-2">
                                <div class="w-full relative">
                                    <input type="text" id="jumlah_stars" name="jumlah_stars"
                                        wire:model="state.jumlah_stars_text"
                                        class="peer py-2 px-0 ps-24 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="0 Stars" readonly>
                                    <div
                                        class="{{ $errors->has('state.jumlah_stars') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Jumlah Stars
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.jumlah_stars') }}</p>
                            </div>
                            <div class="col-span-6 lg:col-span-4">
                                <div class="w-full relative">
                                    <input type="text" id="harga" name="harga"
                                        wire:model="state.harga_text"
                                        class="peer py-2 px-0 ps-36 block w-full text-black bg-gray-100 border-t-0 border-x-0 border-b-2 bg-transparent text-sm focus:border-violet-500 focus:ring-0 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="0" readonly>
                                    <div
                                        class="{{ $errors->has('state.harga') ? 'text-red-500' : 'text-black' }} text-sm absolute inset-y-0 start-0 flex items-center pointer-events-none ps-0 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        Estimasi Harga - Rp.
                                    </div>
                                </div>
                                <p class="text-[10px] text-red-500">{{ $errors->first('state.harga') }}</p>
                            </div>
                            <div class="col-span-6">
                                <h4 class="text-sm pb-2">Bukti Pembayaran di-Upload : </h4>
                                <div class="grid grid-cols-4 gap-2">
                                    @forelse ($pesanan->bukti as $item)
                                        <div class="col-span-4 md:col-span-1">
                                            <a href="{{ asset($item->storage_folder_file . '/' . $item->filename) }}"
                                                data-lightbox="bukti-pembayaran">
                                                <button type="button"
                                                    class="w-full py-1 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-2 border border-transparent bg-violet-600 text-white hover:bg-violet-700 focus:outline-none focus:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none">
                                                    Klik Untuk Melihat File
                                                </button>
                                            </a>
                                        </div>
                                    @empty
                                        <div class="col-span-4">
                                            Belum Ada File
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-t">
                        @if ($pesanan->status_pesanan == 4)
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-span-4 md:col-span-1">
                                    <button type="button" wire:click="terima"
                                        class="w-full py-1 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-2 border border-transparent bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-none focus:bg-emerald-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Terima / Konfirmasi Pembayaran
                                    </button>
                                </div>
                                <div class="col-span-4 md:col-span-1">
                                    <button type="button" wire:click="tolak"
                                        class="w-full py-1 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-2 border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Tolak & Buka Ulang Pembayaran
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
