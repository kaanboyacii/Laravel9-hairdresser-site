<footer>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer_logo">
                                        <a href="index.html"><img src="{{ asset('assets')}}/images/logo1.png" alt="logo" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="address">
                                        <h3>address</h3>
                                        <p>
                                            Address: 73 Canal Street, New York, NY
                                            <br> Tel: +1 123 456 789
                                            <br> Fax: +1 123 456 789
                                            <br> Email: support@demo.com</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="lik">

                                        <li> <img src="{{ asset('assets')}}/images/fb.png" alt="#" /></li>
                                        <li> <img src="{{ asset('assets')}}/images/tw.png" alt="#" /></li>
                                        <li> <img src="{{ asset('assets')}}/images/you.png" alt="#" /></li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free Html Templates</a></p>
                            </div>
                        </div>
                    </div>

                </footer>
                <!-- end footer -->
                </div>

<div class="overlay"></div>
<!-- Javascript files-->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/js/custom.js"></script>
<script src="{{ asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

<style>
    #owl-demo .item {
        margin: 3px;
    }

    #owl-demo .item img {
        display: block;
        width: 100%;
        height: auto;
    }
</style>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>
