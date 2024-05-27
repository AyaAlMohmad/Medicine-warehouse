<div class="footer">
    <div class="container">
        <div class="box">
            <div class="logo">
                AI<span>PH</span>
            </div>
            <ul class="social">
                @foreach ($socials as $social)
                <li>
                    <a href="{{ Str::startsWith($social->link, 'https://') ? $social->link : Str::of($social->link)->prepend('https://') }}" class="{{ $social->type }}">
                        <i class="bx bxl-{{ $social->type }}"></i>
                    </a>
                </li>  
                @endforeach
                
               
            </ul>
            <p class="text">
                We seek to provide all types of medicines from various manufacturers to meet all your needs. To learn more about the work team, click the button. 
            </p>
        </div>
        <div class="box">
            <ul class="links">
                <li><a href="{{ route('front') }}">Home</a></li>
               
                <li><a href="{{ route('about') }}">About US</a></li>
                <li><a href="{{ route('service') }}">service US</a></li>

            </ul>
        </div>
        <div class="box">
            <div class="line">
                <i class="bx bx-map-pin"></i>
                <div class="info">{{ $contact->address }}</div>
            </div>
            <div class="line">
                <i class="bx bx-map"></i>
                <div class="info"> <a style="color: #b9b9b9" href="{{ Str::startsWith($contact->map, 'https://') ? $contact->map : Str::of($contact->map)->prepend('https://') }}" >
                    {{ $contact->map }}</a></div>
            </div>
            <div class="line"><i class="bx bx-envelope"></i>
                <div class="info">{{ $contact->email  }}</div>
            </div>
            <div class="line">
                <div class="info">
                    <span><i class="bx bx-phone-call"></i><a href="tel:{{ $contact->mobile }} " style="color: #b9b9b9">{{ $contact->mobile }}</a></span>
                </div>
            </div>
            <div class="line">
                <div class="info">
                    <span><i class="bx bx-printer" ></i>   <a href="tel:{{ $contact->fax }} " style="color: #b9b9b9">{{ $contact->fax }}</a></span>
                </div>
            </div>
        </div>

    </div>
    <p class="copyright">Made With &lt; Aida</p>
</div>