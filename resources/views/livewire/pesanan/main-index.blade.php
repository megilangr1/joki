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
                            Tabel Daftar Data Pesanan Joki Yang Masuk
                        </h3>

                        <div class="flex items-center gap-x-1">
                            &ensp;
                        </div>
                    </div>
                    <div class="p-0" id="card-table">
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="border-y divide-y divide-gray-200">
                                        <div class="py-3 px-4">
                                            <div class="relative max-w-xs">
                                                <label class="sr-only">Search</label>
                                                <input type="text" name="data-search" id="data-search"
                                                    wire:model.live.debounce.500ms="search"
                                                    class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="Search for items">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                                    <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <path d="m21 21-4.3-4.3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="5%">
                                                            No.
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-start text-xs font-semibold text-gray-500 uppercase">
                                                            Kode Pesanan
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="10%">
                                                            Tanggal Pesanan
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="10%">
                                                            IGN
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="10%">
                                                            Jasa Rank
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="10%">
                                                            Status
                                                        </th>
                                                        <th scope="col"
                                                            class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase"
                                                            width="10%">
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200" id="table-data">
                                                    @forelse ($data as $item)
                                                        <tr>
                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium text-gray-800 bg-slate-200 border-b-2 border-t-2 border-indigo-200">
                                                                {{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}.
                                                            </td>

                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-sm font-semibold text-gray-800 border-b-2 border-t-2 border-indigo-200">
                                                                {{ $item->kode_pesanan }}

                                                                <div class="w-full">
                                                                    <span class="text-[10px]">
                                                                        {{ $item->pelanggan->nama_pelanggan }} |
                                                                        {{ $item->pelanggan->email }} |
                                                                        +62 {{ $item->pelanggan->nomor_wa }}
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-semibold text-gray-800 border-b-2 border-t-2 border-indigo-200">
                                                                <div class="flex flex-col gap-1">
                                                                    <div class="text-xs">
                                                                        {{ date('d / m / Y', strtotime($item->tanggal_pesanan)) }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-semibold text-gray-800 border-b-2 border-t-2 border-indigo-200">
                                                                <div class="flex flex-col gap-1">
                                                                    <div class="text-xs">
                                                                        {{ $item->ign }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-sm font-semibold text-gray-800 border-b-2 border-t-2 border-indigo-200">
                                                                <div class="w-full flex justify-between items-center">
                                                                    <span>{{ $item->start_rank }}</span>
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-chevrons-right">
                                                                        <path d="m6 17 5-5-5-5" />
                                                                        <path d="m13 17 5-5-5-5" />
                                                                    </svg>
                                                                    <span>{{ $item->target_rank }}</span>
                                                                </div>

                                                                <div class="w-full flex justify-between items-end">
                                                                    <span class="text-[10px]">
                                                                        {{ number_format($item->jumlah_stars, 0, ',', '.') }}
                                                                        Stars
                                                                    </span>

                                                                    <span
                                                                        class="text-[10px] underline underline-offset-4">
                                                                        Rp.
                                                                        {{ number_format($item->harga, 0, ',', '.') }}
                                                                    </span>
                                                                </div>
                                                            </td>

                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-semibold text-gray-800 border-b-2 border-t-2 border-indigo-200">
                                                                <div class="flex flex-col gap-1">
                                                                    <div
                                                                        class="text-xs py-2 px-3 bg-violet-100 hover:bg-violet-300 rounded-md">
                                                                        {{ $item->status_label }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium border-b-2 border-t-2 border-indigo-200">
                                                                <div
                                                                    class="flex flex-wrap gap-2 items-center justify-center">
                                                                    @if ($item->status_pesanan == 0)
                                                                        <div class="hs-tooltip inline-block">
                                                                            <button type="button"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-emerald-600 hover:border-emerald-200 hover:text-emerald-800 hover:scale-110 focus:outline-none focus:border-emerald-800 focus:text-emerald-800 disabled:opacity-50 disabled:pointer-events-none"
                                                                                wire:click="konfirmasi('{{ $item->id }}')">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-square-check-big">
                                                                                    <path
                                                                                        d="M21 10.5V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h12.5" />
                                                                                    <path d="m9 11 3 3L22 4" />
                                                                                </svg>

                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Konfirmasi Pesanan
                                                                                </span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="hs-tooltip inline-block">
                                                                            <button type="button"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-orange-600 hover:border-orange-200 hover:text-orange-800 hover:scale-110 focus:outline-none focus:border-orange-800 focus:text-orange-800 disabled:opacity-50 disabled:pointer-events-none"
                                                                                wire:click="tolak('{{ $item->id }}')">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-ban">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10" />
                                                                                    <path d="m4.9 4.9 14.2 14.2" />
                                                                                </svg>

                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Tolak Pesanan
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    @endif
                                                                    @if ($item->status_pesanan == 1)
                                                                        <div class="hs-tooltip inline-block">
                                                                            <a href="https://wa.me/{{ $item->pelanggan->nomor_wa ?? '+62000000' }}?text=Halo%20kak%2C%20Terima%20kasih%20sudah%20melakukan%20pemesanan%20pada%20website%20SIJOKI.%20Kami%20ingin%20melakukan%20konfirmasi%20atas%20pemesanan%20tersebut."
                                                                                target="_blank"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-emerald-600 hover:border-emerald-200 hover:text-emerald-800 hover:scale-110 focus:outline-none focus:border-emerald-800 focus:text-emerald-800 disabled:opacity-50 disabled:pointer-events-none">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-message-circle-more">
                                                                                    <path
                                                                                        d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                                                                    <path d="M8 12h.01" />
                                                                                    <path d="M12 12h.01" />
                                                                                    <path d="M16 12h.01" />
                                                                                </svg>
                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Kirim Pesan Konfirmasi
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="hs-tooltip inline-block">
                                                                            <button type="button"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-blue-600 hover:border-blue-200 hover:text-blue-800 hover:scale-110 focus:outline-none focus:border-blue-800 focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none"
                                                                                wire:click="openPembayaran('{{ $item->id }}')">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-circle-check-big">
                                                                                    <path
                                                                                        d="M21.801 10A10 10 0 1 1 17 3.335" />
                                                                                    <path d="m9 11 3 3L22 4" />
                                                                                </svg>
                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Buka Pembayaran
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="hs-tooltip inline-block">
                                                                            <button type="button"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-orange-600 hover:border-orange-200 hover:text-orange-800 hover:scale-110 focus:outline-none focus:border-orange-800 focus:text-orange-800 disabled:opacity-50 disabled:pointer-events-none"
                                                                                wire:click="batalkan('{{ $item->id }}')">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-ban">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10" />
                                                                                    <path d="m4.9 4.9 14.2 14.2" />
                                                                                </svg>

                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Batalkan Pesanan
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    @endif
                                                                    @if ($item->status_pesanan == 3)
                                                                        <div class="hs-tooltip inline-block">
                                                                            <a href="{{ route('pembayaran-joki', ['kode' => $item->kode_pesanan]) }}"
                                                                                target="_blank"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-sky-600 hover:border-sky-200 hover:text-sky-800 hover:scale-110 focus:outline-none focus:border-sky-800 focus:text-sky-800 disabled:opacity-50 disabled:pointer-events-none">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-link">
                                                                                    <path
                                                                                        d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                                                    <path
                                                                                        d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                                                                </svg>

                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Buka Link Pembayaran
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                    @if ($item->status_pesanan == 4)
                                                                        <div class="hs-tooltip inline-block">
                                                                            <a href="{{ route('pesanan.detail', ['kode' => $item->kode_pesanan]) }}"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-sky-600 hover:border-sky-200 hover:text-sky-800 hover:scale-110 focus:outline-none focus:border-sky-800 focus:text-sky-800 disabled:opacity-50 disabled:pointer-events-none">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-file-image">
                                                                                    <path
                                                                                        d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                                                    <circle cx="10"
                                                                                        cy="12" r="2" />
                                                                                    <path
                                                                                        d="m20 17-1.296-1.296a2.41 2.41 0 0 0-3.408 0L9 22" />
                                                                                </svg>

                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Lihat File Pembayaran
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                    @if ($item->status_pesanan == 5)
                                                                        <div class="hs-tooltip inline-block">
                                                                            <button type="button"
                                                                                class="hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-blue-600 hover:border-blue-200 hover:text-blue-800 hover:scale-110 focus:outline-none focus:border-blue-800 focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none"
                                                                                wire:click="selesai('{{ $item->id }}')">
                                                                                <svg class="shrink-0 size-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="lucide lucide-circle-check-big">
                                                                                    <path
                                                                                        d="M21.801 10A10 10 0 1 1 17 3.335" />
                                                                                    <path d="m9 11 3 3L22 4" />
                                                                                </svg>
                                                                                <span
                                                                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                    role="tooltip">
                                                                                    Selesaikan Pesanan
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    @endif
                                                                    <div class="hs-tooltip inline-block">
                                                                        <button type="button"
                                                                            data-id="{{ $item->id }}"
                                                                            class="delete-btn hs-tooltip-toggle px-1 py-1 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-red-600 hover:border-red-200 hover:text-red-800 hover:scale-110 focus:outline-none focus:border-red-800 focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">
                                                                            <svg class="shrink-0 size-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="lucide lucide-trash-2">
                                                                                <path d="M3 6h18" />
                                                                                <path
                                                                                    d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                                                                <path
                                                                                    d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                                                                <line x1="10" x2="10"
                                                                                    y1="11" y2="17" />
                                                                                <line x1="14" x2="14"
                                                                                    y1="11" y2="17" />
                                                                            </svg>

                                                                            <span
                                                                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                                                                role="tooltip">
                                                                                Hapus Pesanan
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-800"
                                                                colspan="7">
                                                                Belum Ada Data
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-t">
                        {{ $data->onEachSide(1)->links(data: ['scrollTo' => '#card-table']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
