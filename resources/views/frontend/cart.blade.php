@extends('layouts.frontend.app')
@section('content')

<form method="POST" action="{{ route('order.store') }}" id="orderForm">
    @csrf
    <div class="cards-container containerr">
        
        @foreach ($favorites as $favorite)
        <div class="card">
            <a href="{{ route('product.show',$favorite->product->id) }}" class="card-link">
                <img src="{{ asset('images/product/'.$favorite->product->image) }}" alt="Image" class="card-image">
                <div class="card-content">
                    <h3 class="company-name">{{ $favorite->product->category->company->name }},{{ $favorite->product->name }}</h3>
                    <p class="price">${{ $favorite->product->price }}</p>
                </div>
            </a>
            <input name="product_id[]" type="hidden" value="{{ $favorite->product->id }}">
            <div class="quantity-control">
      
                <input type="number"  class="quantity"  name="amount" value="{{ $favorite->amount }}">
            
            </div>
            
        </div>
        @endforeach
    </div>
    <div class="btn">
        <button type="submit" class="button" >Send</button>
    </div>
    </form>
    
   
    
@endsection