@extends('layouts.app')

@section('content')
<main>
<h1>SIGN UP</h1>

<form name="myForm" method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="user">User Name</label>
        <br>
        <input type="text" id="user" name="name" placeholder="Enter your name" />
    </div>
    <div>
        <label for="number">Number Phone</label>
        <br>
        <input type="text" id="number" name="phone" placeholder="Ex: +963957364204" />
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" />

    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" />

    </div>
    <div>
        <!-- <input type="checkbox" id="checkbox1" name="checkbox1" value="agree" /> -->
        <label for="checkbox1">Agree to Terms and Conditions</label>
    </div>
    <button type="submit" >Sign Up</button>
    <div class="connect_us">
        <h6>Or Connect with</h6>
        <div class="icon_row">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-google-plus-circle'></i>
            <i class='bx bxl-twitter'></i>
        </div>
    </div>
    <footer>Do you have an account? <span><a href="{{ route('login') }}"> Sign In</a></span></footer>
</form>
</main>
@endsection
