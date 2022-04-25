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
						<div class="rating rating_4" data-rating="4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
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
						<div class="reviews_title">reviews</div>
						<div class="reviews_container">
							<ul>
								<!-- Review -->
								<li class=" review clearfix">
									<div class="review_image"><img src="{{asset('assets')}}/images/review_1.jpg" alt=""></div>
									<div class="review_content">
										<div class="review_name"><a href="#">Maria Smith</a></div>
										<div class="review_date">Nov 29, 2017</div>
										<div class="rating rating_4 review_rating" data-rating="4">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="review_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula. </p>
										</div>
									</div>
								</li>
								<!-- Review -->
								<li class=" review clearfix">
									<div class="review_image"><img src="{{asset('assets')}}/images/review_2.jpg" alt=""></div>
									<div class="review_content">
										<div class="review_name"><a href="#">Maria Smith</a></div>
										<div class="review_date">Nov 29, 2017</div>
										<div class="rating rating_4 review_rating" data-rating="4">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="review_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula. </p>
										</div>
									</div>
								</li>
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
							<form action="#" id="review_form" class="review_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<input type="text" class="review_form_input" placeholder="Name" required="required">
									<input type="email" class="review_form_input" placeholder="E-mail" required="required">
									<input type="text" class="review_form_input" placeholder="Subject">
								</div>
								<textarea class="review_form_text" name="review_form_text" placeholder="Message"></textarea>
								<button type="submit" class="review_form_button">leave a review</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection


