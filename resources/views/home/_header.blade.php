	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="{{route('home')}}">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
					<li><a href="{{route('references')}}">References</a></li>
					<li><a href="{{route('faq')}}">FAQ</a></li>
					<li class="btn btn-secondary">
                        @guest
                            <a href="/loginuser">Login</a>
                            <a href="#">/</a>
                            <a href="/registeruser">Register</a>
                        @endguest

                        @auth
				    	<a href="#">
				    		<div class="avatar">
						    	<img src="{{asset('assets')}}/images/avatar.svg" alt="">
                                {{Auth::user()->name}}
						    </div>
				    	</a>
                        @endauth
                        @auth
                        <a href="#">/</a>
                        <a href="/logoutuser">Logout</a>
                        @endauth
                    </li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<!-- <div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="{{asset('assets')}}/images/magnifying-glass.svg" alt=""></button>
					</form>
				</div> -->
				<div class="shopping">
					<!-- Cart -->
					<a href="#">
						<div class="cart">
							<img src="{{asset('assets')}}/images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star -->
					<a href="#">
						<div class="star">
							<img src="{{asset('assets')}}/images/star.svg" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>
