@props(['class' => ''])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

{{-- Section Navbar --}}
<x-atoms.navs.homenavbar/>

<body class="{{ $class }}">
    {{ $slot }}
    @vite('resources/js/app.js')
</body>

{{-- Footer --}}
<x-atoms.navs.homefooter />

</html>
