<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Drug Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assest/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assest/css/product-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assest/css/cart.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assest/css/service.css')}}">

</head>

<body>
    {{-- header --}}
@include('layouts.frontend.includes.header')
 
{{-- body --}}

@yield('content')
   
{{-- footer --}}
@include('layouts.frontend.includes.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/assest/js/main.js') }}"></script>
    {{-- <script src="{{ asset('frontend/assest/js/product-script.js') }}"></script> --}}
</body>

</html>