@extends('layouts.frontend.app')
@section('content')

<div class="buttons-category">
    @foreach ($categories as $category)
        
    <form action="{{ route('category.product',$category->id) }}" method="GET">
        <input type="hidden" name="company_id" value="{{ $category->company->id }}">
       @csrf
       <button class="btn btn-info">
         {{ $category->name  }}</a> </button>
   </form>

    @endforeach
</div>
<div class="cards-container containerr">
@foreach ($products as $product)
    
<div class="card">
    <a href="{{ route('product.show',$product->id) }}" class="card-link">
        <img src="{{asset('images/product/'. $product->image) }}" alt="Image" class="card-image">
        <div class="card-content">
            <h3 class="company-name">{{ $product->category->company->name}}<span>,{{ $product->name }}</span></h3>
                <p class="price">${{ $product->price }}</p>
        </div>
    </a>
    <form method="POST" action="{{ route('favorite.store') }}" >
        @csrf
    <input name="product_id" type="hidden" value="{{ $product->id }}">
        
        <div class="quantity-control">
          
            <input type="number" class="quantity" name="amount" value="0">
        
        </div>
    <div class="btn-cart"><button class="add-to-cart-btn btn-info">Add to cart</button></div>
    </form>
</div>
   
    @endforeach
  

</div>

@endsection