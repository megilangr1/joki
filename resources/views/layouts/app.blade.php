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

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')
    @livewireScripts

    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        const deleteSwal = (event) => {
            Swal.fire({
                title: "Lakukan Penghapusan Data ?",
                text: "Data terhapus tidak dapat di-pulihkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dd3333",
                cancelButtonColor: "#666666",
                confirmButtonText: "Ya, Hapus Data!",
                cancelButtonText: "Batalkan Aksi"
            }).then((result) => {
                if (result.isConfirmed) {
                    event && event()
                }
            });
        }


        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            Livewire.on('toast', (event) => {
                Toast.fire({
                    icon: event.type || "question",
                    title: event.message || "Aksi Berhasil di-Lakukan !"
                });
            });
        });
    </script>

    @if (session()->has('toast'))
        <script>
            $(document).ready(function() {
                Toast.fire({
                    icon: `{{ session('toastType') }}` || "question",
                    title: `{{ session('toastMessage') }}` || "Terjadi Kesalahan !"
                });
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#table-data').on('click', '.delete-btn', function(el) {
                const data = $(this).attr('data-id');
                deleteSwal(() => {
                    Livewire.dispatch('doDelete', {
                        id: data
                    })
                })
            });
        });
    </script>
</body>

</html>
