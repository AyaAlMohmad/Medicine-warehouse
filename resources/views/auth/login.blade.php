@extends('layouts.app')

@section('content')
<main class="sign-in">
<h1>SIGN IN</h1>
{{--  --}}

<form action="{{ route('login') }}" method="POST" 
>
    @csrf

    <div>
        <label for="email">email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" />

    </div>
    <div>
        <label for="password">password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" />

    </div>
    <h5>Forget Password?</h5>
        {{--  --}}
    <button type="submit" >Sign in</button>
    <div class="connect_us">
        <h6>Or Connect with</h6>
        <div class="icon_row">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-google-plus-circle'></i>
            <i class='bx bxl-twitter'></i>
        </div>
    </div>
    <footer>Don't have an account ?<span> <a href="{{ route('register') }}">Sign Up</a></span></footer>
</form>
</main>
@endsection
