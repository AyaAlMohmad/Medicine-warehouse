@extends('layouts.frontend.app')
@section('content')
    <div class="team" id="team">

        <div class="containerr">
            @foreach ($items as $item)
            <div class="box">
               

                <div class="data">
                    <img src="{{ asset('images/about/' . $item->image) }}" alt="" />
                    <div class="social">
                        @foreach ($socials as $social)
                        <a href="{{ Str::startsWith($social->link, 'https://') ? $social->link : Str::of($social->link)->prepend('https://') }}">
                            <i class="bx bxl-{{ $social->type }}"></i>
                        </a>  
                        @endforeach
                        
                     
                    </div>
                </div>
                <div class="info">
                    <h3>{{ $item->title }}</h3>
                    <p>    @php
                        $text = $item->short_description;
                        $textLength = mb_strlen($text);
                        $chunkSize = 70;
                    
                        for ($i = 0; $i < $textLength; $i += $chunkSize) {
                            $chunk = mb_substr($text, $i, $chunkSize);
                            echo $chunk . '<br>';
                        }
                        @endphp</p>
                </div>
            </div>
                @endforeach
           
    


        </div>
    </div>
@endsection
