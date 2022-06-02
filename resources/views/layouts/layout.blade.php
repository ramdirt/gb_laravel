@include('layouts.head')

<body>
    @include('layouts.nav')
    <main class="mt-3">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
