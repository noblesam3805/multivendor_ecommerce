
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Motoka - Buy and Sell Cars</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/logo.jpg') }}">

    <!-- Google Font Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <!-- mobile menu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css')}}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <!-- price slider css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css')}}">
    <!-- material design css -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- default css  -->
    <link rel="stylesheet" href="{{ asset('css/default.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    <!-- modernizr js -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vuex"></script>
</head>
<body style="margin: 0; padding:0;">
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
       <!-- Preloader Start -->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Newsletter Popup Start
        <div class="popup_wrapper hidden-sm hidden-xs">
            <div class="test">
                <span class="popup_off"><i class="zmdi zmdi-close"></i></span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Gatcomart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Newsletter Popup End -->
        <!-- Header Area Start -->
        <header>
            <!-- Header Top Start -->
            <div class="header-top white-bg">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="">
                                <ul class="header-list-menu">
                                    <!-- Language Start -->
                                    <li><a href="#"></a>
                                        <ul class="ht-dropdown">

                                        </ul>
                                    </li>
                                    <!-- Language End -->
                                    <!-- Currency Start -->

                                    <!-- Currency End -->
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="header-top-left f-left">
                                <ul class="header-list-menu">
                                    <!-- Language Start -->
                                    <li><a href="#"> Contact</a>
                                        <ul class="ht-dropdown">
                                            <li><a type="tel" href="#">+2347035614322</a></li>

                                        </ul>
                                    </li>
                                    <!-- Language End -->
                                    <!-- Currency Start -->

                                    <!-- Currency End -->
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>

                        </div>
                        </div>

                        <!-- Header Top left End -->
                        <!-- Header Top Right Start -->
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="header-top-right f-right header-top-none">
                                <ul class="header-list-menu right-menu">
                                    <li><a href="#">My account</a>
                                    @if (Auth::check())
                                        <ul class="ht-dropdown ht-account">
                                        <li><a href="/home">Dashboard</a></li>

                                        <li><a href="/signout">sign out</a></li>
                                        </ul>
                                        @else
                                        <ul class="ht-dropdown ht-account">
                                        <li><a href="/register">Register</a></li>

                                        <li><a href="/login">sign in</a></li>
                                        </ul>
                                        @endif


                                    </li>
                                  <!--  @if(!Auth::check())
                                        <li><a href="/login">Login</a></li>
                                    @elseif (Auth::check() && Auth::user()->super ==1)
                                    <li><a href="/ePages">edit pages</a></li>



                                    @endif-->
                                    <li><a href="/register" title="sell now" style="margin-right:10%"> Buy and sell your cars without much hassle</a></li>
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>
                            <!--<div class="small-version">
                                <div class="header-top-right f-right">
                                    <ul class="header-list-menu right-menu">
                                        <li><a href="login.html"><i class="fa fa-user"></i></a></li>
                                        <li><a href="register.html"><i class="fa fa-registered"></i></a></li>
                                        <li><a href="wish-list.html"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="checkout.html"><i class="fa fa-usd"></i></a></li>
                                    </ul>
                                     Header-list-menu End
                                </div>
                            </div>
                        </div>
                         Header Top Right End
                    </div>-->
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Middle Start -->
            <div class="header-middle ptb-20 white-bg">
                <div class="container">
                    <div class="row">
                        <!-- Logo Start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="logo">
                               <a href="/"><img src="{{ asset('img/logo/logo.jpg')}}" style="width:160px; height:70px; margin-left:30%; padding-left:20%" alt="logo-image"></a>
                            </div>
                        </div>
                        <style>
                            .middle-menu-list > li:first-child > a:after, .middle-menu-list > li:nth-child(6) > a:after {
                                right: 5px;
                                top: 20px;
                                font-size: 0px;
                            }

                        </style>
                        <!-- Logo End -->
                        <!-- Header Middle Menu Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="middle-menu hidden-sm hidden-xs">
                                <nav>
                                <style>
                                    a{
                                        font-family:italic;
                                        font-weight:bold;
                                    }
                                </style>
                                    <ul class="middle-menu-list">
                                        <li><a href="/" style="margin-left:150px"> home </a></li>

                                        <li><a href="/about">about </a></li>

                                        <!--<li><a href="#">pages</a>
                                             Home Version Dropdown Start
                                            <ul class="ht-dropdown">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-page.html">products</a></li>
                                                <li><a href="accessories.html">accessories</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="login.html">Sign in</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>-->
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="/shop">shop</a></li>
                                        <li><a href="/contact">contact</a></li>


                                    </ul>
                                </nav>
                            </div>
                           <!-- Main Cart Box Start -->

                            <!-- Main Cart Box End -->
                            <!-- Mobile Menu  Start -->
                            <div class="mobile-menu visible-sm visible-xs">
                                <nav>
                                    <ul>
                                         @if (Auth::check())

                                        <li><a href="/home">Dashboard</a></li>

                                        <li><a href="/signout">sign out</a></li>

                                        @else

                                        <li><a href="/register">Register</a></li>

                                        <li><a href="/login">sign in</a></li>

                                        @endif
                                        <li><a href="/">home</a>
                                            <!-- Home Version Dropdown Start -->

                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="/about">about</a>
                                            <!-- Mobile Menu Dropdown Start -->

                                            <!-- Mobile Menu Dropdown End -->
                                        </li>




                                        <li><a href="/shop">shop</a></li>
                                        <li><a href="/contact">contact us</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- Mobile Menu  End -->
                        </div>
                        <!-- Header Middle Menu End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom ptb-10 blue-bg">
                <div class="container">
                    <div class="row">
                        <!-- Primary Vertical-Menu Start -->
                        <div class="col-lg-4 col-md-4 col-sm-4 hidden-sm hidden-xs">
                            <div class="vertical-menu" style="padding-left:20%;">
                                <span class="categorie-title">categories menu</span>
                                <nav>

                                    <ul class="vertical-menu-list" style="display:none;">
                                    <li id="cate-toggle" class="category-menu">
                                                <ul>
                                                    <li class="has-sub"> <a href="#"  data-toggle="modal"><span></span><b>Foreign Used Cars</b></a>
                                                        <ul class="category-sub">

                                                            <li><a href="#"  data-toggle="modal" data-target="#onground"><span style="margin-left:20%;"></span>Onground<pre class="bg bg-warning">price includes clearing cost</pre></a></li>
                                                            <li><a href="#"  data-toggle="modal" data-target="#onsail"><span style="margin-left:20%;"></span>Onsail<pre class="bg bg-warning">price includes clearing/extimated clearing cost</pre></a></li>
                                                            <li><a href="#"  data-toggle="modal" data-target="#buynow"><span style="margin-left:20%;"></span>Buynow<pre class="bg bg-warning">price includes clearing/extimated clearing cost</pre></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                        <li class="has-sub"><a href="#"  data-toggle="modal" data-target="#nuModal"><span style="margin-left:20%;"></span><b>Nigerian Used</b></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
<!--Nigeria Used Modal -->
<div id="nuModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nigeria Used Cars</h4>
      </div>
      <div class="modal-body">
      <?php
error_reporting(1);
$con = mysqli_connect("localhost", "root", "", "lara_multi");
$output = "";
$sql = "select * from posts where p_cat = 'Nigerian-Used' && approved = 1 ";
$res = mysqli_query($con,$sql);


  if  (mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){

   echo $output = '<a href="/show/ '.$row["id"]. ' ">
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

                <img src="/storage/'.$row["p_image"] . '" style="height:250px;" alt="...">
                <div class="caption">
                <h3>'.$row["p_name"].'</h3>
                <p>'. $row["descr"] . '</p>
                </div>
                </div>
              </div>
              </a>
            ';
    }

}
else{
    echo "There is nothing here yet!!";
    }

?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->

<!-- buynow -->
<div id="buynow" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Foreign Used Cars(buynow)</h4>
      </div>
      <div class="modal-body">
      <?php
error_reporting(1);
$con = mysqli_connect("localhost", "root", "", "lara_multi");
$output = "";
$sql = "select * from posts where p_cat = 'buy-now' && approved = 1 ";
$res = mysqli_query($con,$sql);


  if  (mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){

   echo $output = '<a href="/show/ '.$row["id"]. ' ">
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

                <img src="/storage/'.$row["p_image"] . '" style="height:250px;" alt="...">
                <div class="caption">
                <h3>'.$row["p_name"].'</h3>
                <p>'. $row["descr"] . '</p>
                </div>
                </div>
              </div>
              </a>
            ';
    }

}
else{
    echo "There is nothing here yet!!";
    }

?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end buynow -->


<!-- onground Modal -->
<div id="onground" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Foreign Used Cars(onground)</h4>
      </div>
      <div class="modal-body">
      <?php
error_reporting(1);
$con = mysqli_connect("localhost", "root", "", "lara_multi");
$output = "";
$sql = "select * from posts where p_cat = 'on-ground' && approved = 1 ";
$res = mysqli_query($con,$sql);
if  (mysqli_num_rows($res) > 0){
while($row = mysqli_fetch_array($res)){

   echo $output = '<a href="/show/ '.$row["id"]. ' ">
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

                <img src="/storage/'.$row["p_image"] . '" style="height:250px;" alt="...">
                <div class="caption">
                <h3>'.$row["p_name"].'</h3>
                <p>'. $row["descr"] . '</p>
                </div>
                </div>
              </div>
              </a>
            ';
}
}
else{
    echo"There is nothing here yet!!!";
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->



<!--onsail Modal -->
<div id="onsail" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Foreign Used Cars(onsail)</h4>
      </div>
      <div class="modal-body">
      <?php
error_reporting(1);
$con = mysqli_connect("localhost", "root", "", "lara_multi");
$output = "";
$sql = "select * from posts where p_cat = 'on-sail' && approved = 1 ";
$res = mysqli_query($con,$sql);
if  (mysqli_num_rows($res) > 0){
while($row = mysqli_fetch_array($res)){

   echo $output = '<a href="/show/ '.$row["id"]. ' ">
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

                <img src="/storage/'.$row["p_image"] . '" style="height:250px;" alt="...">
                <div class="caption">
                <h3>'.$row["p_name"].'</h3>
                <p>'. $row["descr"] . '</p>
                </div>
                </div>
              </div>
              </a>
            ';
}
}
else{
    echo"There is nothing here yet!!";
}
?>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-lg-5 col-md-3 pl-50 col-sm-8" style="margin-left:23%;">
                            <div class="search-box-view fix">

                                    <input type="text" class="email" placeholder="Search entire store here..." id="search">


                            </div>
                        </div>


                        <script>
$(document).ready(function(){
	$('#search').keyup(function(){
		var txt = $(this).val();
		if(txt != ''){
			$.ajax({
				url : "http://127.0.0.1:8001/aja.php",
				method : "post",
				data : {search : txt},
				dataType : "text",
				success : function(data){
					$('#res').html(data);
				}
			});
		}

		else{
			$('#res').html(" ");
		}
	});
});
</script>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->

            <!-- Header Bottom End -->
            <!-- Fixed Social Icon Start -->
            <div class="fixed-icon hidden-xs">
                <ul class="fixed-icon-list">
                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Youtube"><i class="zmdi zmdi-youtube"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Fixed Social Icon End -->
        </header>
        <div id="res" class="mt-0">
        </div>
<style>
.white-bg{

    background-color: #Fff;
}
.blue-bg {
    background:#D50002;
    margin: 0 10% 0 10%;
}

.middle-menu-list > li a {
    display: block;
    line-height: 0;
    padding: 20px;
    color: #000000;
    background: transparent;
    text-transform: uppercase;
    font-size: 13px;
}

.vertical-menu > span {
    line-height: 25px;
    padding: 10px 10px 10px 30px;
    color: #000000;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 700;
    position: relative;
    background: #ffffff;
    display: block;
    cursor: pointer;
    width: 100%;
}

.nivo-controlNav a.active {
    background: #D50002;
}
.header-list-menu > li > a {
    text-transform: uppercase;
    font-size: 10px;
    padding: 16px 35px 16px 65px !important;
    display: block;
    color: #000000;
}


.container {
    width: 100% !important;

    padding: 0 !important;
}
.ptb-20 {
    padding: 2px 0 !important;
}

</style>
