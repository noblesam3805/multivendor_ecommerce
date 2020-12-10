<!doctype html>
<html class="no-js" lang="en-US">


 @include ("layout")
        <!-- Header Area End -->
        <!-- Slider Area Start -->
        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <!-- Main Slider Area Start -->
                    <div class="col-md-15  col-sm-12">
                        <div class="slider-wrapper theme-default" >
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider" style="height:700px">
                                <img src="img/slider/1.jpg" style="height:700px" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption" />
                                <img src="img/slider/2.jpg" style="height:700px" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2" />
                            </div>
                            <!-- Slider Background  Image Start-->
                            <!-- Slider htmlcaption Start-->
                            <div id="htmlcaption" class="nivo-html-caption slider-caption">
                                <!-- Slider Text Start -->
                                <div class="slider-text">
                                    <h1 class="wow fadeInLeft" style="color:white;" data-wow-delay="1s">Affordable<br><span style="color:white;">cars</span></h1>
                                    <h5 class="wow fadeInRight" style="color:white;" data-wow-delay="1s">change the way you drive</h5>
                                    <p class="wow bounceInDown" style="color:#D50002;" data-wow-delay="1s">N3,000,000 <span>00</span></p>
                                    <!--<a class="wow bounceInDown" data-wow-delay="0.8s" href="#">shopping now</a>-->
                                </div>
                                <!-- Slider Text End -->
                            </div>
                            <!-- Slider htmlcaption End -->
                            <!-- Slider htmlcaption Start -->
                            <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                                <!-- Slider Text Start -->
                                <div class="slider-text">
                                    <h1 class="wow zoomInUp" style="color:white;" data-wow-delay="0.5s"><span style="color:white;">Best </span><br> Performance</h1>
                                    <h5 class="wow zoomInUp" style="color:white;" data-wow-delay="0.6s">shop to get what you love</h5>
                                    <p class="wow zoomInUp" style="color:#D50002;" data-wow-delay="0.8s">N4,000,000 <span>.00</span></p>
                                    <!--<a class="wow zoomInUp" data-wow-delay="1s" href="#">shopping now</a>-->
                                </div>
                                <!-- Slider Text End -->
                            </div>
                            <!-- Slider htmlcaption End -->
                        </div>
                    </div>
                    <!-- Main Slider Area End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Slider Area End -->
        <div class="banner pb-50 pl-40 pr-40" >
            <div class="container">
                <!-- Under Slider Single Banner Start -->
                <div class="banner">
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/11.jpg" alt="slider-banner"></a>
                    </div>
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/12.jpg" alt="slider-banner"></a>
                    </div>
                    <div class="single-banner zoom">
                        <a href="#"><img src="img/slider/10.jpg" alt="slider-banner"></a>
                    </div>
                </div>
                <!-- Under Slider Single Banner End -->
            </div>
        </div>
        <!-- New Products Start -->

        <div class="new-single-products pb-50 pl-40 pr-40">
            <div class="container">
                <!-- Group Title Start -->
                <div class="group-title">
                    <h2>recently posted cars</h2>
                </div>
                <!-- Group Title End -->

                <div class="row">
                @foreach ($post as $postss)
<a href="{{'/show/'.$postss->id}}">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="/storage/{{$postss->p_image}}" style="height:200px;" alt="...">
                    <div class="caption">
                      <h3>{{$postss->p_name}}</h3>
                      <p>N{{$postss->p_price}}</p>

                    </div>
                  </div>
                </div>
                </a>
                @endforeach
                </div>
                <!-- Row End -->
            </div>

            <!-- Container End -->
        </div>

        <!-- New Products End -->
        <!-- Best Seller Product Start -->
        <div class="best-seller-product pb-50 pl-40 pr-40">
            <div class="container">
                <div class="row">
                    <!-- Hot Deal Start -->
                    <div class="col-md-4">
                        <!-- Group Title Start -->
                        <div class="group-title">
                            <h2>Hot Deal</h2>
                        </div>
                        <!-- Group Title End -->
                        <div class="hot-deal owl-carousel">

                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="#">
                                        <img class="primary-img" src="img/best-seller/1_1.jpg" alt="offer-pro">
                                        <img class="secondary-img" src="img/best-seller/1_2.jpg" alt="offer-pro">
                                    </a>

                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="#">Toyota </a></h4>
                                    <p><span>N3,000,000</span><del>-N4,000,000</del></p>


                                    <span class="sticker-sale pro-sticker">-6%</span>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->


                        </div>
                    </div>
                    <!-- Hot Deal End -->
                    <!-- Best Seller Start -->
                    <div class="col-md-8">
                        <!-- Group Title Start -->
                        <div class="group-title mts">
                            <h2> Recently Posted New Cars</h2>
                        </div>
                        <!-- Group Title End -->


                        <div class="row">
                @foreach ($posts as $product)
<a href="{{'/show/'.$product->id}}">
                <div class="col-sm-6 col-md-6">
                  <div class="thumbnail">
                    <img src="/storage/{{$product->p_image}}" style="height:200px;" alt="...">
                    <div class="caption">
                      <h3>{{$product->p_name}}</h3>
                      <p>N{{$product->p_price}}</p>

                    </div>
                  </div>
                </div>
                </a>
                @endforeach
                </div>


                    </div>
                    <!-- Best Seller End -->
                </div>
            </div>
        </div>
        <!-- Best Seller Product End -->
        <!-- Featured Products Start -->

        <!-- Featured Products End -->
        <!-- Ads Banner Start -->
        <div class="ads-banner pb-30 pl-40 pr-40">
            <div class="container">
                <div class="row">
                    <!-- Single Ads Start -->
                    <div class="col-sm-4">
                        <div class="single-ads mb-10 zoom">
                            <a href="#"><img class="img" src="img/ads/1.png" alt="ads-banner"></a>
                        </div><br>
                        <div class="single-ads mb-10 zoom">
                            <h2 class="bg-primary btn">Let's Plan Your Next Car</h2>
                        </div>
                    </div>
                    <!-- Single Ads End -->
                    <!-- Single Ads Start -->
                    <div class="col-sm-8">
                        <div class="single-ads mb-10 zoom">
                            <a href="#"><img class="img" src="img/ads/3.jpg" alt="ads-banner"></a>
                        </div>
                    </div>
                    <!-- Single Ads End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Ads Banner End -->
        <!-- Second Featured Products Start -->

        <!-- Second Featured Products End -->
        <!-- Discover Catergories Products Start -->

        <!-- Discover Catergories Products End -->
        <!-- Recent Post & Logo Brands Start -->

        <!-- Recent Post & Logo Brands End -->
        <!-- Newsletter& Subscribe Start -->
        <div class="subscribe black-bg ptb-15">
            <div class="container">
                <div class="row">
                    <!-- Subscribe Box Start
                    <div class="col-sm-6">
                        <div class="search-box-view fix">
                            <form action="#">
                                <label for="email-two">Subscribe</label>
                                <input autocomplete="off" type="text" class="email" placeholder="Enter your email address" name="email" id="email-two">
                                <button type="submit" class="submit"></button>
                            </form>
                        </div>
                    </div>-->
                    <!-- Subscribe Box End -->
                    <!-- Social Follow Start -->
                    <div class="col-sm-6">
                        <div class="social-follow ">
                            <h3>stay connect</h3>
                            <!-- Follow Box End -->
                            <ul class="follow-box">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <!-- Follow Box End -->
                        </div>
                    </div>
                    <!-- Social Follow Start -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Newsletter& Subscribe End -->
        <!-- Footer Start -->
        @include('welcome')
