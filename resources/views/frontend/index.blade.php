   @extends('layouts.frontend.app')


   @section('content')
       <!-- home -->
       <div class="home-page">
           <div class="containerr">
               <div class="left-section">
                   <h1>Pharmacy Drug Store</h1>
                   <p class="description">
                       We seek to provide all types of medicines from various manufacturers to meet all your needs.
                       To learn more about the work team, click the button.
                   </p>
                   <a href="{{ route('about') }}"> <button>About Us</button></a>
               </div>
           </div>
       </div>
       <!-- recently added products  -->
       <div class="recently-products">
           <div class="latest-news">
               <div class="title">
                   <div class="border-h1">
                       <h1>Recently Products</h1>
                   </div>
               </div>
           </div>
           <div class="cards-container containerr">

               @foreach ($groupedProducts as $latest)
                   <div class="card">
                       <a href="{{ route('product.show', $latest->id) }}">
                           <img src="{{ asset('images/product/' . $latest->image) }}" alt="Image" class="card-image">
                           <div class="card-content">
                               <h3 class="company-name">
                                   {{ $latest->category->company->name }}<span>,{{ $latest->name }}</span></h3>
                               <p class="price">${{ $latest->price }}</p>
                           </div>
                       </a>
                       {{-- <div class="quantity-control">
                           <button class="decrease" onclick="changeQuantity(this, -1)">-</button>
                           <span class="quantity">0</span>
                             <button class="increase" onclick="changeQuantity(this, 1)">+</button>
                              </div> --}}
                       <form method="POST" action="{{ route('favorite.store') }}">
                           @csrf
                           <input name="product_id" type="hidden" value="{{ $latest->id }}">

                           <div class="quantity-control">

                               <input type="number" class="quantity" name="amount" value="0">

                           </div>
                           <div  ><button type="submit" class="add-to-cart-btn btn-info" >Add to
                                   cart</button></div>
                       </form>
                   </div>
               @endforeach





           </div>

       </div>
       <!-- company  -->

       <div class="company">
           <div class=" containerr">
               <div class="latest-news">
                   <div class="title">
                       <div class="border-h1">
                           <h1>Company Products</h1>
                       </div>
                   </div>
               </div>
               <div id="productCarousel" class="carousel slide" data-ride="carousel">
                   <!-- Wrapper for slides -->
                   <div class="carousel-inner">
                    @php
                        $currentCompanyProductsCount = 0;
                    @endphp
                    @foreach ($companies as $key => $company)
                        <div class="carousel-item {{ $key === 0? 'active' : '' }}">
                            <div class="card-deck">
                                @foreach ($company->categories as $category)
                                    @foreach ($category->products as $product)
                                        @php
                                            $currentCompanyProductsCount++;
                                        @endphp
                                        @if ($currentCompanyProductsCount > 3)
                                            @break
                                        @endif
                                        <div class="card">
                                            <a href="{{ route('product.show', $product->id) }}">
                                                <img class="card-img-top" src="{{ asset('images/product/'. $product->image) }}" alt="Product Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $product->name }}</h5>
                                                    <p class="card-text">
                                                        {{-- @php
                                                            $text = $product->short_description;
                                                            $textLength = mb_strlen($text);
                                                            $chunkSize = 70;
                
                                                            for ($i = 0; $i < $textLength; $i += $chunkSize) {
                                                                $chunk = mb_substr($text, $i, $chunkSize);
                                                                echo $chunk. '<br>';
                                                            }
                                                        @endphp --}}
                                                        {{ $product->category->company->name }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                        @php
                            $currentCompanyProductsCount = 0; // Reset count for next company
                        @endphp
                    @endforeach
                </div>
                
                   <!-- Indicators/dots -->
                   <ol class="carousel-indicators">
                       @foreach ($companies as $key => $item)
                           <li data-target="#productCarousel" data-slide-to="{{ $key }}"
                               class="{{ $key === 0 ? 'active' : '' }}"></li>
                       @endforeach
                   </ol>
               </div>

           </div>
       </div>
       <!-- support  -->
       <div class="support container" id="support">
           <div class="latest-news">
               <div class="title">
                   <div class="border-h1">
                       <h1>Support</h1>
                   </div>
               </div>
           </div>
           <div class="support-content">
               <form>

                   <div>
                       <input type="text" class="form-control" id="inputName" placeholder="Your Name">
                   </div>
                   <div>
                       <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
                   </div>

                   <div>
                       <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                   </div>
                   <div>
                       <textarea class="form-control" id="inputMessage" rows="4" placeholder="Your Message"></textarea>
                   </div>
                   <div class="btn">
                       <button type="submit">Send</button>
                   </div>

               </form>
           </div>
       </div>
   @endsection
