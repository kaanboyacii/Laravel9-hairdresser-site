@extends('layouts.home')

@section('title', 'Saloon Hairdresser')
@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@section('keywords','kuaför,berber,saç,sakal,bakım,erkek')

@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@include('home._menu')
@section('content')

	<!-- Product -->
    <br><br><br>
	<div class="product">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="current_page">
						<ul>
							<li><a href="categories.html">Home</a></li>
							<li><a href="categories.html">Services</a></li>
							<li><a href="categories.html">{{$data->category->title}}</a></li>
							<li><a href="categories.html">{{$data->title}}</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row product_row">

				<!-- Product Image -->
                <div class="col-lg-7">
					<div class="product_image">
						<div class="product_image_large"><img style="height:600px;Width:600px" src="{{ Storage::url($data->image)}}" alt=""></div>
						<div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
                            @foreach($images as $rs)
							<div class="product_image_thumbnail" style="background-image: url('{{ Storage::url($rs->image) }}');" data-image="{{ Storage::url($rs->image)}}"></div>
                            @endforeach
						</div>
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-5">
					<div class="product_content">
						<div class="product_name">{{$data->title}}</div>
						<div class="product_price">{{$data->price}}.00$</div>
                        @php
                            $average = $data->comment->average('rate');
                        @endphp
                        <div class="
							@if ($average==0) -o rating rating_0 @endif
							@if ($average>1 or $average==1) -o rating rating_1 @endif
							@if ($average>2 or $average==2) -o rating rating_2 @endif
							@if ($average>3 or $average==3) -o rating rating_3 @endif
							@if ($average>4 or $average==4) -o rating rating_4 @endif
							@if ($average>5 or $average==5) -o rating rating_5 @endif
						    review_rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
                        <a href="#">{{$data->comment->count('id')}} /{{number_format($average,1)}} Review(s) /Add Review</a>
						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="in_stock in_stock_true"></div>
							<span>in stock</span>
						</div>
						<div class="product_text">Details:

                          {{$data->description}}
						</div>
						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<span>Quantity</span>
							<div class="product_quantity clearfix">
								<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
						<!-- Product Size -->
						<div class="product_size_container">
							<span>Size</span>
							<div class="product_size">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
								</ul>
							</div>
							<div class="button cart_button"><a href="#">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Reviews -->

			<div class="row">
				<div class="col">
					<div class="reviews">
						<div class="reviews_title">reviews({{$data->comment->count('id')}})</div>
						<div class="reviews_container">
							<ul>
								<!-- Review -->
                                @foreach($reviews as $rs)
								<li class=" review clearfix">
									<div class="review_image"><img src="{{asset('assets')}}/images/user.jpg" alt=""></div>
									<div class="review_content">
										<div class="review_name"><a href="#">{{$rs->user->name}}</a></div>
										<div class="review_date">{{$rs->created_at}}</div>
										<div class="
										@if ($rs->rate==1) -o rating rating_1 @endif
										@if ($rs->rate==2) -o rating rating_2 @endif
										@if ($rs->rate==3) -o rating rating_3 @endif
										@if ($rs->rate==4) -o rating rating_4 @endif
										@if ($rs->rate==5) -o rating rating_5 @endif
										 review_rating" data-rating="4">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
                                        <h4>{{$rs->subject}}</h4>
										<div class="review_text">
											<p>{{$rs->comment}}</p>
										</div>
									</div>
								</li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Leave a Review -->

			<div class="row">
				<div class="col">
					<div class="review_form_container">
						<div class="review_form_title">leave a review</div>
						<div class="review_form_content">
							<form action="{{route('storecomment')}}" method="post" id="review_form" class="review_form">
                                @csrf
                                <input type="hidden" class="input" name="service_id" value="{{$data->id}}"/>
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input style="width: 550px;" type="text" class="review_form_input" name="subject" placeholder="Your subject" required="required">
									<input style="width: 550px;" type="number" class="review_form_input" name="rate" placeholder="Your rate">
								</div>
								<textarea class="review_form_text" name="comment" placeholder="Your comment"></textarea>
                                @auth
								<button type="submit" class="review_form_button">leave a review</button>
                                @else
                                    <a href="/login" class="primary-btn">For Submit Your Review, Please Login</a>
                                @endauth
							</form>
                            @include('home.messages')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection


