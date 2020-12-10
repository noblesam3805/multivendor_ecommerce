@include('layout')
<div class="sign-up main-signin ptb-50 mr-50 ml-50">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title mb-50">
                    <h2>customer login</h2>
                </div>
                <!-- Section Title Start End -->
                <div class="row">
                    <!-- Sign-in Start -->
                    <div class="col-sm-6">
                        <div class="create-account riview-field">
                            <!-- Sign-in Information Start -->
                            <div class="sign-in">
                            @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
                                <h3 class="mb-15 pb-15">Registered Customers</h3>
                                <p class="mb-30">If you have an account, sign in with your email address.</p>
                                <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                     <div class="form-group">
                                        <label class="req" for="email2">Email</label>
                                        <input type="email" name="email" class="form-control" id="email2" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required="required">
                                    </div>




                                @if (Route::has('password.request'))
                                    <button type="submit" id="sign-in">Sign in</button>
                                    @endif

                                </form>
                            </div>
                            <!-- Sign-in Information End -->
                        </div>
                    </div>
                    <!-- Sign-in End -->
                    <!-- New Customer Start -->
                    <div class="col-sm-6">
                        <div class="new-customer create-account">
                            <h3 class="mb-15 pb-15">New Customers</h3>
                            <p class="mb-30">Creating an account has many benefits: check out faster, Post products, Delete products and more.</p>
                            <div class="mt-10">
                                <a class="btn-account" href="/register">create an account</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Create Signup Page End -->
        <!-- Newsletter& Subscribe Start -->
        <div class="subscribe black-bg ptb-15">
            <div class="container">
                <div class="row">
                    <!-- Subscribe Box Start -->
                    <div class="col-sm-6">
                        <div class="search-box-view fix">
                            <form action="#">
                                <label for="email-two">Subscribe</label>
                                <input  autocomplete="off" type="text" class="email" placeholder="Enter your email address" name="email" id="email-two">
                                <button type="submit" class="submit"></button>
                            </form>
                        </div>
                    </div>
                    <!-- Subscribe Box End -->
                    <!-- Social Follow Start -->
                    <div class="col-sm-6">
                        <div class="social-follow f-right">
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

@include('welcome')

