@extends('user.layout.app')

@section('content')

<body>
	<!-- SECTION-NAV -->
	<div id="section-nav-wrap">
		<section id="section-nav">
			<p>Home / <a href="#">Profile Page</a></p>
		</section>
	</div>
	<!-- /SECTION-NAV -->

	<!-- SHOP -->
	<div id="shop-wrap">
		<section id="shop" class="expandible-sidebar">
			<!-- SHOP PRODUCTS -->
			<div class="shop-products">
				<h3 class="title">Profile Page</h3>
				<!-- PROFILE INFO -->
				<div class="profile-info">
					<!-- PROFILE HEADER -->
					<h5 class="profile-header">
						<span>01</span>Personal Information
						<!-- SVG PLUS -->
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
						<!-- /SVG PLUS -->
					</h5>
					<!-- /PROFILE HEADER -->

					<!-- PROFILE DATA -->
					<div class="profile-data">
						<div class="featured-form">
							<form id="profile-info-form" class="westeros-form">
								<div>
									<label class="rl-label">First Name</label>
									<input type="text" placeholder="Enter your first name here...">
								</div>
								<div>
									<label class="rl-label">Last Name</label>
									<input type="text" placeholder="Enter your last name here...">
								</div>
								<div>
									<label class="rl-label">Email Address</label>
									<input type="text" placeholder="Enter your email address here...">
								</div>
								<div>
									<label class="rl-label">Phone Number</label>
									<input type="text" placeholder="Enter your phone number here...">
								</div>
								<div>
									<label class="rl-label">Birth Date</label>
									<label for="month">
										<select name="month" id="month">
											<option value="0">MM</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>	
										</select>
										<!-- SVG ARROW -->
										<svg class="svg-arrow select-arrow">
											<use xlink:href="#svg-arrow"></use>
										</svg>
										<!-- /SVG ARROW -->
									</label>
									<label for="day">
										<select name="day" id="day">
											<option value="0">DD</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>	
										</select>
										<!-- SVG ARROW -->
										<svg class="svg-arrow select-arrow">
											<use xlink:href="#svg-arrow"></use>
										</svg>
										<!-- /SVG ARROW -->
									</label>
									<label for="year">
										<select name="year" id="year">
											<option value="0">YYYY</option>
											<option value="1">1990</option>
											<option value="2">1991</option>
											<option value="3">1992</option>
											<option value="4">1993</option>	
										</select>
										<!-- SVG ARROW -->
										<svg class="svg-arrow select-arrow">
											<use xlink:href="#svg-arrow"></use>
										</svg>
										<!-- /SVG ARROW -->
									</label>
								</div>
								<div class="gender">
									<label class="rl-label">Gender</label>
									<input type="radio" id="male" name="gender" value="male" checked>
									<label for="male"><span class="radio"><span></span></span>Male</label>
									<input type="radio" id="female" name="gender" value="female">
									<label for="female"><span class="radio"><span></span></span>Female</label>
								</div>
							</form>
						</div>
					</div>
					<!-- /PROFILE DATA -->

					<!-- PROFILE HEADER -->
					<h5 class="profile-header">
						<span>02</span>Billing Information
						<!-- SVG PLUS -->
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
						<!-- /SVG PLUS -->
					</h5>
					<!-- /PROFILE HEADER -->

					<!-- PROFILE DATA -->
					<div class="profile-data">
						<div class="featured-form">
							<form class="westeros-form">
								<div>
									<label class="rl-label required">First Name</label>
									<input type="text" placeholder="Enter your first name here...">
								</div>
								<div>
									<label class="rl-label required">Last Name</label>
									<input type="text" placeholder="Enter your last name here...">
								</div>
								<div>
									<label class="rl-label required">Email Address</label>
									<input type="text" placeholder="Enter your email address here...">
								</div>
								<div>
									<label class="rl-label required">Phone Number</label>
									<input type="text" placeholder="Enter your phone number here...">
								</div>
								<div>
									<label class="rl-label">Company Name</label>
									<input type="text" placeholder="Enter your company name here...">
								</div>
								<div>
									<label class="rl-label required">Address</label>
									<input type="text" placeholder="Enter your billing address here...">
								</div>
								<div>
									<label class="rl-label required">Country</label>
									<label for="country1">
										<select name="country" id="country1">
											<option value="0">Select your country...</option>
											<option value="1">United States</option>
											<option value="2">England</option>
											<option value="3">France</option>
											<option value="4">Spain</option>	
										</select>
										<!-- SVG ARROW -->
										<svg class="svg-arrow select-arrow">
											<use xlink:href="#svg-arrow"></use>
										</svg>
										<!-- /SVG ARROW -->
									</label>
								</div>
								<div>
									<label class="rl-label required">Town / City</label>
									<input type="text" placeholder="Enter your town / city here...">
								</div>
								<div>
									<label class="rl-label required">State / Province</label>
									<input type="text" placeholder="Enter your state / province here...">
								</div>
								<div>
									<label class="rl-label required">Postcode / Zip</label>
									<input type="text" placeholder="Enter your zipcode here...">
								</div>
							</form>
						</div>
					</div>
					<!-- /PROFILE DATA -->

					<!-- PROFILE HEADER -->
					<h5 class="profile-header">
						<span>03</span>Shipping Information
						<!-- SVG PLUS -->
						<svg class="plus">
							<rect class="vertical" x="4" width="4" height="12"/>
							<rect y="4" width="12" height="4"/>
						</svg>
						<!-- /SVG PLUS -->
					</h5>
					<!-- /PROFILE HEADER -->

					<!-- PROFILE DATA -->
					<div class="profile-data">
						<div class="featured-form">
							<form class="westeros-form">
								<div>
									<label class="rl-label required">First Name</label>
									<input type="text" placeholder="Enter your first name here...">
								</div>
								<div>
									<label class="rl-label required">Last Name</label>
									<input type="text" placeholder="Enter your last name here...">
								</div>
								<div>
									<label class="rl-label required">Email Address</label>
									<input type="text" placeholder="Enter your email address here...">
								</div>
								<div>
									<label class="rl-label required">Phone Number</label>
									<input type="text" placeholder="Enter your phone number here...">
								</div>
								<div>
									<label class="rl-label">Company Name</label>
									<input type="text" placeholder="Enter your company name here...">
								</div>
								<div>
									<label class="rl-label required">Address</label>
									<input type="text" placeholder="Enter your billing address here...">
								</div>
								<div>
									<label class="rl-label required">Country</label>
									<label for="country2">
										<select name="country" id="country2">
											<option value="0">Select your country...</option>
											<option value="1">United States</option>
											<option value="2">England</option>
											<option value="3">France</option>
											<option value="4">Spain</option>	
										</select>
										<!-- SVG ARROW -->
										<svg class="svg-arrow select-arrow">
											<use xlink:href="#svg-arrow"></use>
										</svg>
										<!-- /SVG ARROW -->
									</label>
								</div>
								<div>
									<label class="rl-label required">Town / City</label>
									<input type="text" placeholder="Enter your town / city here...">
								</div>
								<div>
									<label class="rl-label required">State / Province</label>
									<input type="text" placeholder="Enter your state / province here...">
								</div>
								<div>
									<label class="rl-label required">Postcode / Zip</label>
									<input type="text" placeholder="Enter your zipcode here...">
								</div>
								<div class="full-input">
									<label class="rl-label">Special Requests</label>
									<textarea placeholder="Write your special requests or notes for us to know here..."></textarea>
								</div>
							</form>
						</div>
					</div>
					<!-- /PROFILE DATA -->
				</div>
				<!-- /PROFILE INFO -->

				<button form="profile-info-form" class="button profile-button">Save all the changes</button>
			</div>
			<!-- /SHOP PRODUCTS -->
			<div class="clearfix"></div>
		</section>
	</div>
	<!-- /SHOP -->


<!-- SVG ARROW -->
<svg style="display: none;">	
	<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
		<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
	</symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG LOGGED -->
<svg style="display: none;">
	<symbol id="svg-logged" viewBox="0 0 12 13" preserveAspectRatio="xMinYMin meet">
		<path d="M0,7.027c0-1.826,0.924-3.415,2.31-4.45c0.327-0.244,0.983-0.353,1.246-0.041
			c0.164,0.193,0.222,0.426,0.229,0.646c0.012,0.408-0.41,0.904-0.701,1.191c-0.695,0.684-1.133,1.611-1.133,2.66
			c0,2.194,1.778,3.856,3.971,3.856c2.195,0,3.973-1.662,3.973-3.856c0-1.117-0.426-2.099-1.136-2.794
			c-0.292-0.286-0.687-0.79-0.623-1.193c0.036-0.233,0.137-0.464,0.357-0.63c0.325-0.246,0.979-0.07,1.3,0.181
			c1.33,1.035,2.196,2.617,2.196,4.431c0,3.216-2.851,5.706-6.067,5.706C2.707,12.733,0,10.243,0,7.027z"/>
		<path d="M6.037,7.629c-0.401,0-0.958-0.469-0.958-0.871v-5.59c0-0.056,0.009-0.901,0.929-0.901
			c0.401,0,0.93,0.21,0.93,0.901v5.59C6.939,7.16,6.44,7.629,6.037,7.629z"/>
	</symbol>
</svg>
<!-- /SVG LOGGED -->

<!-- SVG PLUS -->
<svg style="display: none;">
	<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
		<rect x="5" width="3" height="13"/>
		<rect y="5" width="13" height="3"/>
	</symbol>
</svg>
<!-- /SVG PLUS -->

<!-- SVG STAR -->
<svg style="display: none;">
	<symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">	
		<polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
	2.495,6.313 -0.002,3.878 3.45,3.376 "/>
	</symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG WISHLIST -->
<svg style="display: none;">
	<symbol id="svg-wishlist" viewBox="0 0 16 13" preserveAspectRatio="xMinYMin meet">
		<path d="M13.655,0.53C13.009,0.193,12.267,0,11.475,0c-1.396,0-2.647,0.601-3.474,1.542
			C7.172,0.601,5.922,0,4.523,0C3.733,0,2.993,0.193,2.344,0.53C0.953,1.257,0.011,2.654,0.011,4.261
			c0,0.46,0.079,0.901,0.223,1.313c0.774,3.285,7.768,7.43,7.768,7.43s6.988-4.145,7.765-7.43c0.143-0.412,0.224-0.854,0.224-1.313
			C15.989,2.655,15.047,1.257,13.655,0.53z"/>
	</symbol>
</svg>
<!-- /SVG WISHLIST -->

<!-- SVG QUICKVIEW -->
<svg style="display: none;">
	<symbol id="svg-quickview" viewBox="0 0 20 12" preserveAspectRatio="xMinYMin meet">
		<path id="svg-path-eye" d="M10.033,0C5.607,0,1.792,2.388,0.04,5.833c-0.054,0.105-0.054,0.227,0,0.333
			C1.792,9.612,5.607,12,10.033,12c4.426,0,8.241-2.388,9.994-5.834c0.053-0.104,0.053-0.226,0-0.333C18.274,2.388,14.459,0,10.033,0
			z M10.033,10.141c-2.5,0-4.523-1.854-4.523-4.14c0-2.288,2.026-4.14,4.523-4.14c2.499,0,4.522,1.854,4.522,4.14
			C14.556,8.287,12.53,10.141,10.033,10.141z"/>
		<ellipse id="svg-path-center" cx="10.033" cy="5.999" rx="2.896" ry="2.65"/>
	</symbol>
</svg>
<!-- /SVG QUICKVIEW -->

<!-- SVG FULLVIEW -->
<svg style="display: none;">
	<symbol id="svg-fullview" viewBox="0 0 20 20" preserveAspectRatio="xMinYMin meet">
		<path d="M13.149,8.701c0.228,0.228,0.597,0.228,0.824,0l2.8-2.799l0.896,0.896
			c0.185,0.184,0.456,0.25,0.705,0.173c0.248-0.078,0.434-0.287,0.479-0.543l1.03-5.689c0.037-0.203-0.028-0.411-0.175-0.556
			c-0.146-0.146-0.354-0.21-0.557-0.172l-5.659,1.061c-0.257,0.048-0.465,0.233-0.541,0.481c-0.076,0.248-0.01,0.519,0.174,0.703
			l0.896,0.896l-2.801,2.8c-0.229,0.228-0.229,0.597,0,0.825L13.149,8.701z"/>
		<path d="M6.851,11.299c-0.228-0.227-0.597-0.227-0.825,0L3.227,14.1L2.33,13.202
			c-0.184-0.185-0.456-0.251-0.705-0.173c-0.249,0.078-0.434,0.287-0.479,0.543l-1.031,5.689c-0.036,0.203,0.029,0.41,0.175,0.556
			c0.146,0.146,0.354,0.21,0.557,0.172l5.66-1.061c0.256-0.048,0.463-0.233,0.54-0.481c0.077-0.248,0.01-0.52-0.174-0.703
			l-0.896-0.896l2.804-2.795c0.229-0.228,0.229-0.598,0-0.826L6.851,11.299z"/>
		<path d="M1.146,6.427c0.046,0.256,0.231,0.465,0.479,0.543C1.874,7.048,2.146,6.982,2.33,6.798
			l0.897-0.896l2.8,2.799c0.228,0.228,0.597,0.228,0.824,0l1.927-1.924c0.228-0.228,0.228-0.597,0-0.825l-2.801-2.8l0.896-0.896
			c0.184-0.184,0.25-0.455,0.174-0.703C6.97,1.304,6.763,1.119,6.507,1.071l-5.66-1.061C0.644-0.027,0.436,0.037,0.29,0.183
			C0.144,0.328,0.078,0.535,0.115,0.738L1.146,6.427z"/>
		<path d="M18.854,13.572c-0.046-0.256-0.231-0.465-0.479-0.543c-0.249-0.078-0.521-0.012-0.705,0.173
			l-0.896,0.896l-2.8-2.8c-0.228-0.227-0.597-0.227-0.824,0l-1.931,1.928c-0.229,0.229-0.228,0.599,0.001,0.826l2.804,2.795
			l-0.896,0.896c-0.184,0.184-0.251,0.455-0.174,0.703c0.076,0.248,0.284,0.434,0.54,0.481l5.66,1.061
			c0.202,0.038,0.411-0.026,0.557-0.172c0.146-0.146,0.212-0.353,0.175-0.556L18.854,13.572z"/>
	</symbol>
</svg>
<!-- /SVG FULLVIEW -->

<!-- SVG COMPARE -->
<svg style="display: none;">
	<symbol id="svg-compare" viewBox="0 0 18 18" preserveAspectRatio="xMinYMin meet">
		<path d="M17.47,8.621L9.369,0.523C9.047,0.199,8.595,0,8.101,0H1.798C0.81,0,0,0.811,0,1.799v6.302
			c0,0.494,0.198,0.946,0.53,1.279l8.101,8.097C8.954,17.803,9.404,18,9.899,18c0.494,0,0.945-0.197,1.269-0.529l6.301-6.303
			C17.802,10.846,18,10.395,18,9.9S17.792,8.946,17.47,8.621z M3.149,4.5c-0.746,0-1.351-0.602-1.351-1.351
			c0-0.746,0.605-1.351,1.351-1.351C3.898,1.799,4.5,2.404,4.5,3.15C4.5,3.898,3.898,4.5,3.149,4.5z"/>
	</symbol>
</svg>
<!-- /SVG COMPARE -->

<!-- SVG COMMENT -->
<svg style="display: none;">
	<symbol id="svg-comment" viewBox="0 0 12 12" preserveAspectRatio="xMinYMin meet">	
		<path d="M11,0H1C0.448,0,0,0.448,0,1v7c0,0.553,0.448,1,1,1h2v3l3-3h5c0.553,0,1-0.447,1-1V1
			C12,0.448,11.553,0,11,0z M9.5,6h-7C2.224,6,2,5.776,2,5.5S2.224,5,2.5,5h7C9.776,5,10,5.224,10,5.5S9.776,6,9.5,6z M9.5,4h-7
			C2.224,4,2,3.776,2,3.5S2.224,3,2.5,3h7C9.776,3,10,3.224,10,3.5S9.776,4,9.5,4z"/>
	</symbol>
</svg>
<!-- /SVG COMMENT -->

<!-- SVG GEAR -->
<svg style="display: none;">
	<symbol id="svg-gear" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">
		<path d="M9.969,4.445c-0.016-0.141-0.18-0.246-0.322-0.246c-0.457,0-0.864-0.269-1.035-0.685
			C8.438,3.087,8.55,2.59,8.892,2.277c0.107-0.098,0.12-0.263,0.03-0.377C8.688,1.602,8.421,1.333,8.13,1.1
			C8.016,1.009,7.849,1.021,7.75,1.131c-0.299,0.33-0.834,0.453-1.248,0.28C6.072,1.23,5.801,0.793,5.827,0.325
			C5.836,0.178,5.729,0.05,5.582,0.033C5.209-0.01,4.832-0.011,4.457,0.03C4.312,0.046,4.205,0.171,4.209,0.316
			C4.226,0.78,3.951,1.208,3.525,1.383C3.116,1.55,2.584,1.429,2.287,1.102C2.189,0.994,2.024,0.98,1.91,1.07
			C1.61,1.305,1.337,1.574,1.101,1.869C1.009,1.984,1.022,2.15,1.131,2.25c0.348,0.315,0.46,0.816,0.279,1.248
			C1.238,3.908,0.811,4.173,0.322,4.173C0.164,4.168,0.051,4.274,0.034,4.418C-0.01,4.794-0.011,5.177,0.031,5.555
			c0.016,0.142,0.185,0.246,0.328,0.246C0.795,5.79,1.213,6.06,1.388,6.486c0.175,0.426,0.063,0.923-0.28,1.236
			C1.001,7.821,0.988,7.985,1.078,8.1C1.311,8.396,1.577,8.664,1.869,8.9C1.983,8.992,2.15,8.979,2.25,8.869
			c0.299-0.33,0.834-0.453,1.247-0.279c0.432,0.18,0.703,0.616,0.676,1.084c-0.008,0.148,0.1,0.275,0.246,0.293
			C4.609,9.988,4.801,10,4.994,10c0.183,0,0.365-0.01,0.549-0.03c0.145-0.017,0.252-0.142,0.248-0.286
			C5.773,9.22,6.049,8.791,6.475,8.617c0.411-0.168,0.94-0.045,1.238,0.281C7.812,9.006,7.975,9.02,8.09,8.93
			c0.299-0.234,0.571-0.503,0.809-0.799C8.991,8.016,8.979,7.85,8.869,7.75c-0.348-0.314-0.461-0.816-0.28-1.246
			c0.17-0.406,0.581-0.679,1.022-0.679l0.063,0.002c0.143,0.012,0.275-0.099,0.293-0.245C10.01,5.206,10.011,4.824,9.969,4.445z
			 M5.008,6.678c-0.919,0-1.667-0.748-1.667-1.667c0-0.92,0.748-1.668,1.667-1.668c0.92,0,1.668,0.748,1.668,1.668
			C6.676,5.93,5.928,6.678,5.008,6.678z"/>
	</symbol>
</svg>
<!-- /SVG GEAR -->

<!-- SVG CART -->
<svg style="display: none;">
	<symbol id="svg-cart" viewBox="0 0 11 11" preserveAspectRatio="xMinYMin meet">
		<path d="M10.885,3.302c-0.091-0.129-0.219-0.206-0.388-0.229L2.922,2.225L2.826,1.306
			C2.81,1.192,2.767,1.092,2.698,1.003C2.63,0.914,2.543,0.854,2.438,0.821l-1.67-0.532C0.624,0.249,0.48,0.263,0.339,0.332
			C0.198,0.4,0.103,0.511,0.055,0.664C0.014,0.818,0.028,0.963,0.097,1.1C0.166,1.237,0.276,1.33,0.43,1.378L1.736,1.79l0.46,4.622
			L1.894,8.057C1.87,8.234,1.914,8.392,2.027,8.528c0.12,0.138,0.266,0.206,0.435,0.206h7.066c0.154,0,0.287-0.055,0.399-0.164
			c0.112-0.108,0.169-0.243,0.169-0.404S10.04,7.87,9.928,7.761S9.683,7.597,9.528,7.597H3.14l0.133-0.749h6.702
			c0.138,0,0.261-0.044,0.37-0.135c0.108-0.087,0.171-0.201,0.188-0.338l0.459-2.638C11.018,3.568,10.98,3.423,10.885,3.302z"/>
		<path d="M3.322,9.049c-0.242,0-0.448,0.085-0.617,0.254C2.535,9.473,2.45,9.678,2.45,9.92
			s0.085,0.45,0.254,0.623c0.169,0.174,0.375,0.261,0.617,0.261c0.242,0,0.447-0.087,0.617-0.261c0.17-0.173,0.254-0.381,0.254-0.623
			S4.108,9.473,3.938,9.303C3.769,9.134,3.563,9.049,3.322,9.049z"/>
		<path d="M8.488,9.049c-0.242,0-0.447,0.085-0.618,0.254C7.701,9.473,7.617,9.678,7.617,9.92
			s0.084,0.45,0.253,0.623c0.171,0.174,0.376,0.261,0.618,0.261c0.241,0,0.448-0.087,0.617-0.261
			c0.169-0.173,0.254-0.381,0.254-0.623S9.274,9.473,9.105,9.303C8.937,9.134,8.729,9.049,8.488,9.049z"/>
	</symbol>
</svg>
<!-- /SVG CART -->

<!-- SVG CHECK -->
<svg style="display: none;">
	<symbol id="svg-check" viewBox="0 0 15 12" preserveAspectRatio="xMinYMin meet">
		<polygon points="12.45,0.344 5.39,7.404 2.562,4.575 0.429,6.708 3.257,9.536 3.257,9.536 
			5.379,11.657 14.571,2.465 "/>
	</symbol>
</svg>
<!-- /SVG CHECK -->

<!-- SVG LIMITED -->
<svg style="display: none;">
	<symbol id="svg-limited" viewBox="0 0 17 12" preserveAspectRatio="xMinYMin meet">
		<polygon points="9.914,5.292 9.207,4.585 7.086,2.464 4.964,4.585 0.015,9.534 2.136,11.657 
			7.086,6.707 7.793,7.414 9.914,9.534 12.035,7.414 16.985,2.464 14.864,0.343 "/>
	</symbol>
</svg>
<!-- /SVG LIMITED -->

<!-- SVG ORDER BOX -->
<svg style="display: none;">
	<symbol id="svg-order-box" viewBox="0 0 34 31" preserveAspectRatio="xMinYMin meet">
		<polygon id="Base" fill="#00B0FF" points="0,24 17,31 34,24 34,7 17,0 0,7 "/>
		<polygon id="Top" fill="#56CBFF" points="0,7 17,0 34,7 34,17 0,17 "/>
		<polygon id="Right" fill="#0C7BBF" points="17,31 34,24 34,7 17,14 "/>
		<polygon id="Left" fill="#00B0FF" points="17,31 0,24 0,7 17,14 "/>
		<polygon id="Tag" fill="#FFFFFF" points="11,18 5,15.51 5,13.51 11,16 "/>
		<path id="Ink" fill="#2B2B2B" d="M17,14.844c0,0,3.252-0.061,2.594,2.344c-0.719,2.625-1.313,5.469,1.25,5.438
			s2.375-3.5,1.094-5.438s-0.193-3.594,0.981-4.063c0,0,1.644-0.469,1.55,1.125s1.031,1.791,1.813,1.505s1.5-1.255,0.844-2.536
			s0.469-2.125,1.75-2.125s3.688,1.625,5.125-0.781V7l-17,7V14.844z"/>
	</symbol>
</svg>
<!-- /SVG ORDER BOX -->

<!-- SVG PIN -->
<svg style="display: none;">
	<symbol id="svg-pin" viewBox="0 0 10 15" preserveAspectRatio="xMinYMin meet">	
		<path d="M4.996,0.036c-2.735,0-4.959,2.224-4.959,4.959c0,1.102,0.703,2.897,2.15,5.489
			c1.023,1.834,2.03,3.362,2.072,3.427l0.737,1.118l0.737-1.118c0.042-0.064,1.048-1.593,2.072-3.427
			c1.446-2.592,2.149-4.388,2.149-5.489C9.954,2.26,7.73,0.036,4.996,0.036z M4.996,7.532c-1.42,0-2.571-1.15-2.571-2.57
			c0-1.419,1.151-2.571,2.571-2.571c1.42,0,2.571,1.152,2.571,2.571C7.566,6.382,6.416,7.532,4.996,7.532z"/>
	</symbol>
</svg>
<!-- /SVG PIN -->

<!-- SVG PHONE -->
<svg style="display: none;">
	<symbol id="svg-phone" viewBox="0 0 11 15" preserveAspectRatio="xMinYMin meet">
		<path d="M4.969,10.199C4.623,9.639,4.304,9.057,4.001,8.473C3.7,7.886,3.411,7.293,3.151,6.684
			c-0.212-0.496-0.1-1.079,0.227-1.497L1.339,1.249c-0.923,0.494-1.397,2.295-1.13,4.095c0.114,0.777,0.345,1.521,0.6,2.239
			C1.064,8.295,1.373,8.991,1.716,9.66c0.346,0.669,0.732,1.323,1.168,1.944c0.438,0.623,0.914,1.238,1.48,1.777
			c1.318,1.257,3.065,1.903,4,1.435l-2.04-3.938C5.796,10.902,5.253,10.659,4.969,10.199z"/>
		<path d="M4.292,4.557l0.609-0.315l0.654-0.338C5.787,3.785,5.877,3.5,5.76,3.271L4.212,0.28
			C4.092,0.053,3.81-0.034,3.581,0.085C3.084,0.343,2.59,0.6,2.095,0.856l1.986,3.837C4.146,4.642,4.217,4.597,4.292,4.557z"/>
		<path d="M10.813,13.026l-1.549-2.99C9.145,9.81,8.859,9.719,8.63,9.838L8.629,9.837l-0.656,0.34
			l-0.606,0.316c-0.075,0.037-0.153,0.068-0.232,0.094l1.985,3.837c0.496-0.258,0.992-0.514,1.488-0.77
			C10.839,13.536,10.932,13.256,10.813,13.026z"/>
	</symbol>
</svg>
<!-- /SVG PHONE -->

<!-- SVG ENVELOPE -->
<svg style="display: none;">
	<symbol id="svg-envelope" viewBox="0 0 13 9" preserveAspectRatio="xMinYMin meet">
		<path d="M6.5,6.304L4.94,4.939L0.48,8.762c0.162,0.151,0.381,0.245,0.623,0.245h10.795
			c0.241,0,0.458-0.094,0.62-0.245L8.06,4.939L6.5,6.304z"/>
		<path d="M12.521,0.244C12.358,0.093,12.14,0,11.897,0H1.103C0.862,0,0.644,0.093,0.482,0.246
			L6.5,5.403L12.521,0.244z"/>
		<polygon points="0.195,0.791 0.195,8.273 4.548,4.574"/>
		<polygon points="8.451,4.574 12.805,8.273 12.805,0.788"/>
	</symbol>
</svg>
<!-- SVG ENVELOPE -->
<!-- jQuery -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<!-- imgLiquid -->
<script src="js/vendor/imgLiquid-min.js"></script>
<!-- Header -->
<script src="js/header.js"></script>
<!-- Menu -->
<script src="js/menu.js"></script>
<!-- Checkout -->
<script src="js/profile.js"></script>
@endsection