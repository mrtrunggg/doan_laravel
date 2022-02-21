
@extends('user.layout.app')

@section('content')

<!-- FULL VIEW -->

<div class="product-quick-view full builder">


				


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

			<!-- SHOP SIDEBAR -->
			<aside class="shop-sidebar">

				<figure>
				
					<img src="{{ asset('user/images/banners/banner6.jpg') }}" alt="advertising">
				</figure>
			</aside>
			<!-- /SHOP SIDEBAR -->

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

			<!-- SHOP PRODUCTS -->
			<div class="shop-products">
				<h3 class="title heading">Build your own design</h3>
				<!-- FULL VIEW -->
				<div class="product-quick-view full builder">
					<!-- PRODUCT PICTURES -->
					<div class="product-pictures">
						<div class="product-photo">
							<figure class="liquid">
								<img src="images/product_builder/shirt_colors/women/aqua.png" alt="product-image">
							</figure>
						</div>
						<div class="product-stamp">
							<figure class="liquid">
								<img src="{{ asset('user/images/items/'.$SP->hinhanh.'') }}" alt="product-stamp">
							</figure>
						</div>
					</div>
					<!-- /PRODUCT PICTURES -->

					<!-- PRODUCT DESCRIPTION -->
					<div class="product-description">
						<h3>{{$SP->sanpham_name}}</h3>
                        <p>{{$SP->mota}}</p>
						
					

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
				<!-- /FULL VIEW -->

				<!-- DESCRIPTION TAB -->
				<ul class="description-tab">
					<li>			
						<a href="#">Related Products</a>
						<article class="item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. Lorem ipsum dolor sit amet, <span>consectetur adipisicing elit</span>, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <span>eiusmod eru</span> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in nisi ut aliquip ex ea loremn commodo consequat nostrud exercitation ullamco laboris.</p>
						</article>
					</li>
					<li>			
						<article class="item multiple">
							<!-- RATE -->
							<div class="sub-item rate">
								<!-- RATING -->
								<ul class="rating large">
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
								<h5><span>4/5</span> Based On 2 Review(s)</h5>
							</div>
							<!-- /RATE -->

							<!-- REVIEW -->
							<div class="sub-item review">
								<h5>Comfortable and Trendy</h5>
								<!-- RATING -->
								<ul class="rating big">
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
									<li class="filled">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
								<!-- /RATING -->
								<p class="author">Jenny Envato - 24/10/14</p>
								<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in.</p>
							</div>
							<!-- /REVIEW -->

							<!-- REVIEW -->
							<div class="sub-item review">
								<h5>Not Safe For Washing Machine</h5>
								<!-- RATING -->
								<ul class="rating big">
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
									<li>
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
								<!-- /RATING -->
								<p class="author">Faye Valentine - 15/09/14</p>
								<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod eru tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim darea veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat. Duis aute irure dolor in. Duis aute irure dolor in. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea loremn commodo consequat.</p>
							</div>
							<!-- /REVIEW -->

							<!-- REVIEW FORM -->
							<div class="sub-item review-form">
								<h5>Write a Review</h5>
								<div class="featured-form">
									<form class="westeros-form">
										<div class="left">
											<label class="rl-label required">Your Name</label>
											<input type="text" placeholder="Enter your name or nickname here...">
										</div>
										<div class="right">
											<label class="rl-label">Review Summary</label>
											<input type="text" placeholder="Enter a short title here...">
										</div>
										<div>
											<label class="rl-label required">Your Review</label>
											<textarea placeholder="Write your full review here..."></textarea>
										</div>
										<div class="left">
											<label class="rl-label required">Your Stars Rating</label>
											<!-- RATING -->
											<ul class="rating large rater">
												<li>
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
												<li>
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
										<button class="button">Post Your Review</button>
									</form>
								</div>
							</div>
							<!-- /REVIEW FORM -->
						</article>
					</li>
				</ul>
				<!-- /DESCRIPTION TAB -->

				<h3 class="title heading related-p">.</h3>
				<!-- PRODUCT LIST -->
				<ul class="product-list grid">

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
			</div>
			<!-- /SHOP PRODUCTS -->
		</section>
	</div>



@endsection



