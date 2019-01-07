@include('inc.head')
<body>
    {{-- Nav include element --}}
        @include('inc.nav')

{{-- Container for top ten posts --}}
<div class="container">
    
    @yield('content')
    <div class="footer text-left" style="margin:20px 0 60px 0;">
        <p>&copy; Hrycko Industries </p>
    </div>
</div>

</body>
</html>