@include('partials.head')
<body>
    @include('partials.nav')
    <main>
        @include('partials.flash-messages')
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
