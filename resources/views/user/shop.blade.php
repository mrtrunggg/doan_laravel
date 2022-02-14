@extends('user.layout.app')

@section('content')


<div class="shop-products">
                <h3> </h3>
				<h3 class="title">Men's Section</h3>

				<!-- COMPARE MODAL -->
				<div id="compare-modal" class="compare-modal mfp-with-anim mfp-hide">
					<img src="images/icons/compare-modal-logo.png" alt="logo">
					<h5>The item <span>product name</span></h5>
					<h6>Has been sucessfully added to compare</h6>
					<div class="options">
						<a class="button medium mfp-close">Return to store</a>
						<a href="compare.html" class="button medium compare">Go to compare</a>
					</div>
				</div>
				<!-- /COMPARE MODAL -->

				<!-- PRODUCT LIST -->
				<ul class="product-list list">

                @foreach ($dsSP as $a)
					<!-- PRODUCT -->
					<li class="list-item">
						<!-- ACTIONS -->
						<div class="actions">
							<figure class="liquid">
                
                             <img src="{{ asset('user/images/items/'.$a->hinhanh.'') }}" alt="product1"> 
							</figure>
                            
                            <div>

                            </div>
							
						</div>
						<!-- /ACTIONS -->

						<!-- DESCRIPTION -->
						<div class="description">
							
							<div class="clearfix">
								<a href="full-view.html"><h6>{{$a->sanpham_name}}</h6></a>
								<p class="highlighted previous"></p>
							</div>
							<div class="clearfix">
								<p class="short-description">Lorem ipsum dolor</p>
								<p class="long-description">{{$a->mota}}</p>
								<p class="highlighted current">{{$a->dongia}}</p>
							</div>

							<!-- SOCIAL LINKS -->
							<div class="social">
								<a href="#" class="button medium fb"></a>
								<a href="#" class="button medium twt"></a>
							</div>
							<!-- SOCIAL LINKS -->

							<!-- CART OPTIONS -->
							<div class="cart-options">
								<a href="#" class="button medium wishlist">
									<!-- SVG WISHLIST -->
									<svg class="svg-wishlist">
										<use xlink:href="#svg-wishlist"></use>	
									</svg>
									<!-- /SVG WISHLIST -->
									<span>Add to Wishlist</span>
								</a>
								<a href="#" class="button cart-add">
									<!-- SVG PLUS -->
									<svg class="svg-plus">
										<use xlink:href="#svg-plus"></use>
									</svg>
									<!-- /SVG PLUS -->
									Add to Cart
								</a>
							</div>
							<!-- /CART OPTIONS -->
						</div>
						<!-- /DESCRIPTION -->
					</li>
					<!-- /PRODUCT -->
                @endforeach   

					

					

		
				
				</ul>
				<!-- /PRODUCT LIST -->

				<!-- PAGER -->
				<ul class="pager">
					<li>
						<a href="#" class="button prev">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
					<li class="selected"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">17</a></li>
					<li>
						<a href="#" class="button next">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</a>
					</li>
				</ul>				<!-- /PAGER -->
			</div>
</br>
@endsection