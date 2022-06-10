@include('layouts.head')

<body>
    <x-admin.header></x-admin.header>
    <div class="d-flex">
        <x-admin.sidebar></x-admin.sidebar>
        <main class="container mt-4 ms-sm-auto">
            @yield('content')
        </main>

    </div>
    @stack('scripts')
</body>
