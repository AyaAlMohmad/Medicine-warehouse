@extends('layouts.frontend.app')
@section('content')

<form method="POST" action="{{ route('favorite.store') }}" >
    @csrf
<div class="product-container">
    <div class="product-image"><img src="{{ asset('images/product/'.$product->image) }}" alt="img"></div>
    <div class="product-details">
        <h3 class="product-company">{{ $product->category->company->name }}</h3>
        <h4 class="product-name">{{ $product->name }},<span class="product-category">{{ $product->category->name }}</span></h4>
   
        <p style="word-wrap: break-word;" class="product-description">
            @php
            $text = $product->description;
            $textLength = mb_strlen($text);
            $chunkSize = 70;
        
            for ($i = 0; $i < $textLength; $i += $chunkSize) {
                $chunk = mb_substr($text, $i, $chunkSize);
                echo $chunk . '<br>';
            }
            @endphp
        </p>
        <p class="product-price">${{ $product->price }}</p>
        <input name="product_id" type="hidden" value="{{ $product->id }}">
        
        <div class="quantity-control">
          
            <input type="number" class="quantity" name="amount" value="0">
        
        </div>
        <div class="btn-cart"><button type="submit" class="add-to-cart-btn btn-info">Add to cart</button></div>
    </div>
   
</div>
</form>

@endsection