	<!-- Home -->

	<div class="home">

	    <!-- Home Slider -->

	    <div class="home_slider_container">
	        <div class="owl-carousel owl-theme home_slider">

	            <!-- Home Slider Item -->
	            @foreach($sliderdata as $rs)
	            <div class="owl-item">
	                <div class="home_slider_background" style="background-image: url('{{ Storage::url("{$rs->image}") }}');"></div>
	                <div class="home_slider_content">
	                    <div class="home_slider_content_inner">
	                        <div class="home_slider_subtitle">Promo Prices</div>
	                        <div class="home_slider_title"><a style="color:white;" href="{{route('service',['id'=>$rs->id])}}">{{$rs->title}}</a></div>
	                    </div>
	                </div>
	            </div>
                @endforeach
	        </div>


	        <!-- Home Slider Nav -->

	        <div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{asset('assets')}}/images/arrow_r.png" alt=""></div>

	        <!-- Home Slider Dots -->

	        <div class="home_slider_dots_container">
	            <div class="container">
	                <div class="row">
	                    <div class="col">
	                        <div class="home_slider_dots">
	                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
	                                <!-- <li class="home_slider_custom_dot active">01.<div></div>
	                                </li>
	                                <li class="home_slider_custom_dot">02.<div></div>
	                                </li>
	                                <li class="home_slider_custom_dot">03.<div></div>
	                                </li> -->
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
