@extends('layouts.home')

@section('title', 'Saloon Hairdresser Service')
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
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">{{$data->category->title}}</a></li>
							<li><a href="#">{{$data->title}}</a></li>
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
						<div class="product_text">Details:
                          {{$data->description}}
						</div>
                        <br>
                        <form action="{{route('storeappointment')}}" id="review_form" class="review_form" method="post">
                        @csrf
                        <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                            <input type="hidden" name="id" required="required" value="">
                            <input type="hidden" name="user_id" required="required" value="{{$data->user_id}}">
                            <input type="hidden" class="input" name="service_id" value="{{$data->id}}"/>
                            <input type="hidden" class="input" name="worker_id" value="{{$data->user_id}}">
                            <input type="date" class="review_form_input" name="date" placeholder="Date" required="required">
                            <input type="time" class="review_form_input" name="time" placeholder="Time" required="required">
                            <input type="hidden" name="price" required="required" value="{{$data->price}}">
                            <input type="hidden" class="input" name="status" value="New"/>
                            <input class="radio" type="radio" name="payment" value="cash" checked /> <span>Cash</span>
                            <input class="radio" type="radio" name="payment" value="credit card" /> <span>Credit Card</span>
                        </div>
                        <textarea class="review_form_text" name="note" name="review_form_text" placeholder="Note"></textarea>
                        <button type="submit" class="review_form_button">Book Now</button>
                        </form>

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


