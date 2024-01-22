<!DOCTYPE html>
<html lang="tr">
<head>
@include('sections.meta')
@include('sections.style')
@yield('style')
@yield('ldjson')

</head>
<body>
<main>
    @include('sections.navbar')
    @yield('content')
    @include('sections.footer')
</main>
@include('sections.script')
@yield('script')
</body>
</html>
