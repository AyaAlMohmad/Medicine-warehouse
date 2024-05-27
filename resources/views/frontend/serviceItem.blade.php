@extends('layouts.frontend.app')
@section('content')

<div class="product-container">
    <div class="product-image"><img src="{{ asset('images/Service/'.$item->image) }}" alt="img"></div>
    <div class="product-details">
        <h3 class="product-company">{{ $item->title }}</h3>
       
        <p style="word-wrap: break-word;" class="product-description">
            @php
            $text = $item->description;
            $textLength = mb_strlen($text);
            $chunkSize = 70;
        
            for ($i = 0; $i < $textLength; $i += $chunkSize) {
                $chunk = mb_substr($text, $i, $chunkSize);
                echo $chunk . '<br>';
            }
            @endphp
        </p>
          </div>
   
</div>
</form>

@endsection