@extends('user.layout.app')

@section('content')


<div class="shop-products">
             

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

				<!-- SHOP -->
	<div id="shop-wrap">
		<section id="shop" class="right expandible-sidebar">
			<!-- SIDEBAR CONTROL -->
			<div class="sidebar-control">
				<!-- SVG GEAR -->
				<svg class="svg-gear">
					<use xlink:href="#svg-gear"></use>	
				</svg>
				<!-- /SVG GEAR -->
			</div>
			<!-- /SIDEBAR CONTROL -->

		
		
			<!-- /SHOP SIDEBAR -->

			<!-- SHOP PRODUCTS -->
			<div class="shop-products">
				<h3 class="title">Shop</h3>
				<figure class="section-banner">
				
					<img src="{{ asset('user/images/banners/men-banner.png') }}" alt="men-banner">
				</figure>
				<!-- FILTERS -->
				<div class="filters">
					
					<div class="options">
					
						<!-- VIEW DISPLAY -->
						<ul class="display">
							<li class="grid">
								<!-- SVG GRID -->
								<svg class="svg-grid">
									<use xlink:href="#svg-grid"></use>
								</svg>
								<!-- /SVG GRID -->
							</li>
							<li class="list selected">
								<!-- SVG LIST -->
								<svg class="svg-list">
									<use xlink:href="#svg-list"></use>
								</svg>
								<!-- /SVG LIST -->
							</li>
						</ul>
						<!-- /VIEW DISPLAY -->
					</div>
				</div>
				<!-- /FILTERS -->

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
					<!-- PRODUCT -->
					@foreach ($dsSP as $a)
					<li class="list-item">
						<!-- ACTIONS -->
						<div class="actions">
							<!-- PIN -->
							<div class="pin circle">
								<h6>Sale!</h6>
								<h6 class="percent">20%</h6>
								<h6>off</h6>
							</div>
							<!-- /PIN -->
							<figure class="liquid">
							
								<img src="{{ asset('user/images/items/'.$a->hinhanh.'') }}" alt="product1">
							</figure>
							<div>
								
								<!-- QUICK VIEW POPUP -->
								
								<!-- /QUICK VIEW POPUP -->
								<a href="{{route('chitietsanpham',['SP'=>$a->id])}}" class="button full-view">
								<!-- SVG FULLVIEW -->
								<svg class="svg-fullview">
									<use xlink:href="#svg-fullview"></use>	
								</svg>
								<!-- /SVG FULLVIEW -->
							
							
							
							</a>
								
							</div>
						</div>
						<!-- /ACTIONS -->

						<!-- DESCRIPTION -->
						<div class="description">
							<div class="clearfix">
								<a href="men-shop.html"><p class="highlighted category">T-Shirts</p></a>
								<!-- RATING -->
								<ul class="rating">
									<li class="filled">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="filled">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="filled">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="filled">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li>
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
								<!-- /RATING -->
							</div>
							<div class="clearfix">
								<a href="full-view.html"><h6>{{$a->sanpham_name}}</h6></a>
				
							</div>
							<div class="clearfix">
								
								<p class="long-description">{{$a->mota}}</p>
								<p class="highlighted current">${{$a->dongia}}</p>
							</div>

							

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
				</ul>
				<!-- /PAGER -->
			</div>
			<!-- /SHOP PRODUCTS -->
			<div class="clearfix"></div>
		</section>
	</div>


			
			</div>
</br>
@endsection