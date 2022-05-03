@include('layouts.head')

<body>
<x-admin.header></x-admin.header>
<div class="d-flex">
    <x-admin.sidebar></x-admin.sidebar>
    @yield('content')
<div>
</body>