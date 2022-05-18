	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
        @endphp
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Categories</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="{{asset('assets')}}/images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
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
		<nav class="menu_nav">
			<ul class="menu_mm">
               <li><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('about')}}">About</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="{{route('references')}}">References</a></li>
				<li><a href="{{route('faq')}}">FAQ</a></li>
				<li class="btn btn-secondary"><a href="contact.html">Login</a></li>
			</ul>
		</nav>

	</div>
