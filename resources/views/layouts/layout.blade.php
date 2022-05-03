@include('layouts.head')

<body>
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>