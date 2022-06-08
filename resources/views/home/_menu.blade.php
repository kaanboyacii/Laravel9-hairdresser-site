	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
        @endphp
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Wish</a></div>
        <nav class="menu_nav">
			<ul class="menu_mm">
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
                                <a href="{{route('userpanel.index')}}">{{Auth::user()->name}}</a>
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
        <h2>Categories</h2>
        @foreach($mainCategories as $rs)
		<nav class="menu_nav">
			<ul class="menu_mm">
                <li class="menu_mm"><a href="{{route('categoryservices',['id'=>$rs->id])}}">{{$rs->title}}</a></li>
                @if(count($rs->children))
                    @include('home.categorytree',['children' => $rs->children])
                @endif
			</ul>
		</nav>
        @endforeach


	</div>
