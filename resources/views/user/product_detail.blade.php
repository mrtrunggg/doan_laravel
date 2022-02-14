
@extends('user.layout.app')

@section('content')

<!-- FULL VIEW -->

<div class="product-quick-view full builder">

					<!-- PRODUCT PICTURES -->
					<div class="product-pictures">
                    
                    <div class="product-photo" style="margin-left: 250px">
							<figure class="liquid">
								<img src="{{ asset('user/images/items/'.$SP->hinhanh.'') }}" alt="product-image">
							</figure>
					</div>
						
					</div>
					<!-- /PRODUCT PICTURES -->

					<!-- PRODUCT DESCRIPTION -->
					<div class="product-description" style="margin-right: 220px; margin-top: 50px">
						
                        <h3>{{$SP->sanpham_name}}</h3>
                        <p>{{$SP->mota}}</p>
						<div class="quantity-selection">
							<h5>Quantity:</h5>
							<!-- COUNTER -->
							<div class="counter">
								<div class="control left"></div>
								<div class="value">
									<h5>1</h5>
								</div>
								<div class="control right"></div>
							</div>
							<!-- /COUNTER -->
						</div>

						<div class="final-price">
							<h5>Final Price:</h5>
							<p class="highlighted current">${{$SP->dongia}}</p>	
						</div>

						<div class="options">
							<a href="#" class="button cart-add">
								<!-- SVG PLUS -->
								<svg class="svg-plus">
									<use xlink:href="#svg-plus"></use>
								</svg>
								<!-- /SVG PLUS -->
								Add to Cart
							</a>
						</div>
					</div>
					<!-- /PRODUCT DESCRIPTION -->
				</div>



@endsection