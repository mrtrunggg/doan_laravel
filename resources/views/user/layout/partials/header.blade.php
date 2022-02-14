	<!-- HEADER -->
	<header>
		<div id="header-top-wrap">
			<!-- HEADER TOP -->
			<section id="header-top" class="clearfix">
				<p class="contact">
					Questions? Do you need help? Trung ne: 
					<a href="mailto:questions@westeroscc.com">questions@westeroscc.com</a>
				</p>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>English</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>

					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a>English</a></li>
						<li><a>Spanish</a></li>
						<li><a>French</a></li>
						<li><a>German</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container small">
					<p>
						<span>USD</span>
						<!-- SVG ARROW -->
						<svg class="svg-arrow westeros-dropdown-control">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</p>
					
					<!-- WESTEROS DROPDOWN -->
					<ul class="westeros-dropdown default hide-on-click">
						<li class="selected"><a>USD</a></li>
						<li><a>EURO</a></li>
						<li><a>PESOS</a></li>
					</ul>
					<!-- /WESTEROS DROPDOWN -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER-->

				<p class="login">
					Welcome visitor, if you have an account 
					<a href="register-login.html">Login</a>, or 
					<a href="register-login.html">Register</a>
				</p>
			</section>
			<!-- /HEADER TOP -->
		</div>
			
		<div id="header-bottom-wrap">
			<!-- HEADER BOTTOM -->
			<section id="header-bottom">
				<!-- LOGO -->
				<div class="logo-container">
					<a href="index.html">
						<figure class="logo">
							<img src="{{ asset('user/images/logo.png') }}" alt="logo">
							<figcaption>Westeros</figcaption>
						</figure>
					</a>
				</div>
				<!-- /LOGO -->
				<form class="westeros-form">
					<label for="categories" class="select-block">
						<select name="categories" id="categories">
							<option value="0">All Categories</option>
							<option value="1">T-Shirts</option>
							<option value="2">Pin Badges</option>
							<option value="3">Custom Sneakers</option>
							<option value="4">Phone Cases</option>	
						</select>
						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
					</label>
					<input type="text" name="search" id="search" placeholder="Search Our Catalog...">
					<input type="image" src="{{ asset('user/images/icons/search-icon.png') }}" alt="search-icon">

				</form>

				<!-- WESTEROS DROPDOWN CONTAINER-->
				<div class="westeros-dropdown-container">
					<!-- CART CONTROL -->
					<div class="cart-control westeros-dropdown-control">
						<!-- SVG ORDER BOX -->
						<svg class="svg-order-box">
							<use xlink:href="#svg-order-box"></use>
						</svg>
						<!-- /SVG ORDER BOX -->

						<!-- SVG ARROW -->
						<svg class="svg-arrow select-arrow">
							<use xlink:href="#svg-arrow"></use>
						</svg>
						<!-- /SVG ARROW -->
						<h6>Your Total Order</h6>
						<p class="cart-content-short">(3)</p>
						<p class="cart-content-long">3 item (s) -</p>
						<p class="highlighted">$235.50</p>
					</div>
					<!-- /CART CONTROL -->

					<!-- CART -->
					<ul class="cart westeros-dropdown">
						<!-- CART ITEM -->
						<li class="item clearfix">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/02.png" alt="product1">
								</figure>
							</div>
							<div class="description">
								<p class="highlighted category">T-Shirts</p>
								<h6>The Crazy Bunny</h6>
							</div>
							<div class="quantity">
								<h6>1</h6>
							</div>
							<div class="price">
								<p class="highlighted">$86.00</p>
							</div>
							<img src="images/items/remove.png" alt="remove">
						</li>
						<!-- /CART ITEM -->

						<!-- CART ITEM -->
						<li class="item clearfix">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/33.png" alt="product1">
								</figure>
							</div>
							<div class="description">							
								<p class="highlighted category">Phone Cases</p>
								<h6>I-Ladyskull</h6>
							</div>
							<div class="quantity">
								<h6>2</h6>
							</div>
							<div class="price">
								<p class="highlighted">$48.00</p>
							</div>
							<img src="images/items/remove.png" alt="remove">
						</li>
						<!-- /CART ITEM -->

						<!-- CART ITEM -->
						<li class="item clearfix">
							<div class="picture">
								<figure class="liquid">
									<img src="images/items/32.png" alt="product1">
								</figure>
							</div>
							<div class="description">									
								<p class="highlighted category">Custom Sneakers</p>
								<h6>The Devil Walks</h6>
							</div>
							<div class="quantity">
								<h6>2</h6>
							</div>
							<div class="price">
								<p class="highlighted">$86.00</p>
							</div>
							<img src="images/items/remove.png" alt="remove">
						</li>
						<!-- /CART ITEM -->

						<!-- TOTAL -->
						<li class="total clearfix">
							<div>
								<h6>$220.00</h6>
								<h6>$15.50</h6>
								<p class="highlighted">$235.50</p>
							</div>
							<div>
								<h6>Subtotal</h6>
								<h6>Shipping</h6>
								<h6>Total</h6>
							</div>	
						</li>
						<!-- /TOTAL -->

						<!-- ORDER -->
						<li class="order clearfix">
							<a href="checkout.html" class="button">Checkout</a>
							<a href="cart.html" class="button secondary">Go to Cart</a>
						</li>
						<!-- /ORDER -->
					</ul>
					<!-- /CART -->
				</div>
				<!-- /WESTEROS DROPDOWN CONTAINER -->
			</section>
			<!-- /HEADER BOTTOM -->
		</div>

		<!-- WESTEROS SEPARATOR -->
		<ul class="westeros-separator small">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- /WESTEROS SEPARATOR -->
	</header>
	<!-- /HEADER -->

	<!-- MOBILE MENU COVER -->
	<div class="mobile-menu-cover"></div>
	<!-- /MOBILE MENU COVER -->

	<!-- MOBILE MENU -->
	<nav class="mobile-menu">

	
		<img src="{{ asset('user/images/logo-footer.png') }}" alt="logo">
		<!-- SVG PLUS -->
		<svg class="svg-plus pull-nav">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- MENU LIST -->
		<ul>
			<li>
				<a href="index.html">Trung</a>
			</li>
			<li>
				<a href="{{route('user-dssp')}}">Shop</a>
			</li>
			<li>
				<a href="men-shop.html">Men</a>
			</li>
			<li>
				<a href="#">Features
					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
				</a>
				<!-- SUBMENU LIST -->
				<ul>
					<li>
						<a href="register-login.html">Register / Login</a>
					</li>
					<li>
						<a href="profile.html">Profile Page</a>
					</li>
					<li>
						<a href="merchandising-shop.html">Merchandising (Grid V2)</a>
					</li>
					<li>
						<a href="no-banner-shop.html">No Banner Shop</a>
					</li>
					<li>
						<a href="product-builder.html">Product Builder</a>
					</li>
					<li>
						<a href="wishlist.html">Wishlist Page</a>
					</li>
					<li>
						<a href="compare.html">Compare</a>
					</li>
					<li>
						<a href="coming-soon.html">Coming Soon</a>
					</li>
					<li>
						<a href="404.html">404 Error Page</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
			<li>
				<a href="blog.html">Blog</a>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
			<li>
				<a href="#"><span>English</span>
				<!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->
				</a>

				<!-- SUBMENU LIST -->
				<ul class="selectable">
					<li class="selected">
						<a href="#">English</a>
					</li>
					<li>
						<a href="#">Spanish</a>
					</li>
					<li>
						<a href="#">French</a>
					</li>
					<li>
						<a href="#">German</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
			<li>
				<a href="#"><span>USD</span>
				<!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->
				</a>

				<!-- SUBMENU LIST -->
				<ul class="selectable">
					<li class="selected">
						<a href="#">USD</a>
					</li>
					<li>
						<a href="#">EURO</a>
					</li>
					<li>
						<a href="#">PESOS</a>
					</li>
				</ul>
				<!-- /SUBMENU LIST -->
			</li>
		</ul>
		<!-- /MENU LIST -->
	</nav>
	<!-- /MOBILE MENU -->

	<!-- MAIN MENU -->
	<nav id="main-menu">
		<img class="pull-nav" src="images/icons/pull-icon.png" alt="pull-icon">
		<ul>
			<li><a href="{{route('user-trangchu')}}">Home</a></li>
			<li><a href="{{route('user-dssp')}}">Shop</a></li>
			<li><a href="men-shop.html">Men</a></li>			
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>