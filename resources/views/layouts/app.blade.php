<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('frontend/assest/css/sign_in.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assest/css/sign_up.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Auth</title>
</head>

<body>
  
   @yield('content')

    <script src="{{ asset('frontend/assest/js/sign_up.js') }}"></script>
    <script src="{{ asset('frontend/assest/js/sign_in.js') }}"></script>

</body>

</html>