<header class="header">
    <div class="logo">
        AI<span>PH</span>
    </div>
    <nav class="headbar">
        <ul>
            <li><a href="{{ route('front') }}">Home</a></li>
            <li>
                <span class="dropdown">
                    <a href="#">Company</a>
                    <span class="bx bx-caret-down cart-dwon"></span>
                    <div class="dropdown-content">
                        @foreach ($companies as $company)
                        <a href="{{ route('product',$company->id) }}">{{ $company->name }}</a>
                       
                        @endforeach
                       
                    </div>
                </span>
            </li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{route('service')}}">Service</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="{{ route('user.order') }}"> <i class="bx bx-cart"></i></a>
        <a href="profile.html"> <i class="bx bx-user-circle"></i></a>
    </div>
    <i class="bx bx-list-ul menu-icon"></i>
</header>
