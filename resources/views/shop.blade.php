<!doctype html>
<html class="no-js" lang="en-US">


 @include ("layout")
        <!-- Header Area End -->
        <!-- Slider Area Start -->

        <div class="banner pb-50">
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

        <div class="new-single-products pb-50">
            <div class="container">
                <!-- Group Title Start -->
                <div class="group-title">
                    <h2>Approved posted cars : {{$count}}</h2>

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
                </div><br><br>
               <center> <span align="right" style="">{{$post->links()}}</span></center>
                <!-- Row End -->
            </div>

            <!-- Container End -->
        </div>

        <!-- New Products End -->
        <!-- Best Seller Product Start -->
        <div class="best-seller-product pb-50">
            <div class="container">
                <div class="row">
                    <!-- Hot Deal Start -->

                    <!-- Hot Deal End -->
                    <!-- Best Seller Start -->

                </div>
            </div>
        </div>
        <!-- Best Seller Product End -->
        <!-- Featured Products Start -->

        <!-- Featured Products End -->
        <!-- Ads Banner Start -->
        <div class="ads-banner pb-30">
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
