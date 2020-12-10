@include ("layout")
<div class="my-account white-bg ptb-40 mr-50 ml-50">
            <div class="container">
                <div class="account-dashboard">
                   <div class="dashboard-upper-info">
                       <div class="row no-gutters align-items-center">
                           <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="d-single-info">
                                   <p class="user-name">Hello <span><?php echo Auth::user()->name ?></span></p>
                                   <p>(not you? <a href="/signout">Log Out</a>)</p>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="d-single-info">
                                   <p>Need Assistance? Customer service at.</p>
                                   <p>admin@motokang.com</p>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="d-single-info">
                                   <p>E-mail us </p>
                                   <p>support@motokang.com</p>
                               </div>
                           </div>

                       </div>
                   </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                            @if(Auth::user()->super ==1)
                            <li class="active"><a data-toggle="tab" href="#sellers-details">See sellers contact</a></li>
                            <li class=""><a data-toggle="tab" href="#a_posts">Approve sellers posts</a></li>

                            @endif
                            <li class=""><a data-toggle="tab" href="#dashboard">Dashboard</a></li>


                                <li><a data-toggle="tab" href="#orders">My Adverts</a></li>
                                <li><a data-toggle="tab" href="#account-details">Account details</a></li>

                                <li><a href="/signout">logout</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-10 col-md-10">

                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content mt-all-40">
                                <div id="dashboard" class="tab-pane">
                                @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
                                    <h3>Sell your product </h3>
                                    <form action="/p" enctype="multipart/form-data" method="post">
                                        @csrf
                                    <div class="form-group">
                                          <label for="p_name">Car Name:</label>
                                          <input type="text" name="p_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="descr">Car Description:</label>
                                          <textarea name="descr" required class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="p_price">Car Price:</label>
                                          <input type="text" lang="en" name="p_price" class="form-control" required>
                                        </div>

                                          <div class="form-group">
                                          <label for="p_mile">Mileage:</label>
                                          <input type="text" lang="en" name="p_mile" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Cylinder:</label>
                                          <input type="text" lang="en" name="cyl" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Airbags:</label>
                                          <input type="text" lang="en" name="air" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Damage:</label>
                                          <input type="text" lang="en" name="dam" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                        <select id="pet-select"  class="form-control" name="p_cat" required>
                                        <label for="p_price">Car Category:</label>
                                            <option value="">--Please select your car category--</option>
                                            <option value="on-ground">On-Ground</option>
                                            <option value="on-sail">On-Sail</option>
                                            <option value="nigerian-used">Nigerian Used</option>
                                            <option value="buy-now">Buynow</option>

                                        </select>
                                          </div>

                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="p_image" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose Product Image</label>
                                          </div>
                                           <div class="custom-file col-xs-4">
                                            <input type="file" name="s_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Second Product Image</label>
                                          </div>
                                           <div class="custom-file col-xs-4">
                                            <input type="file" name="t_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Third Product Image</label>
                                          </div>

                                                  <div class="custom-file col-xs-4">
                                            <input type="file" name="f_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fourth Product Image</label>
                                          </div>

                                              <div class="custom-file col-xs-4">
                                            <input type="file" name="ft_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fifth Product Image</label>
                                          </div>

                                           <div class="custom-file col-xs-4">
                                            <input type="file" name="sx_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Sixth Product Image</label>
                                          </div>

                                            <div class="custom-file col-xs-4">
                                            <input type="file" name="st_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Seventh Product Image</label>
                                          </div>
                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="e_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Eight Product Image</label>
                                          </div>
                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="n_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Ninth Product Image</label>
                                          </div>
                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="tn_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Tenth Product Image</label>
                                          </div>
                                          <br>

                                          <button type="submit" class="btn btn-primary">Submit</button>

                                    </form>

                                        <script>
                                        // Add the following code if you want the name of the file appear on select
                                        $(".custom-file-input").on("change", function() {
                                          var fileName = $(this).val().split("\\").pop();
                                          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                        });
                                        </script>
                                </div>

                                <!-- orders tab -->
                                <div id="orders" class="tab-pane fade">
                                    <h3>Posted Cars</h3>
                                    <div class="row">
@if($products->count() > 0)
                @foreach ($products as $product)
<a href="{{'/show/'.$product->id}}">

                <div class="col-sm-6 col-md-4">
                <center><a href="{{'/delete/'.$product->id}}" class="btn btn-lg btn-primary" style="">Delete</a>

                <a href="{{'/edit/'.$product->id}}" class="btn btn-lg btn-primary" style="">Edit</a>
                </center>

                  <div class="thumbnail">
                    <img src="/storage/{{$product->p_image}}" style="height:250px;" alt="...">
                    <div class="caption">
                      <h3>{{$product->p_name}}</h3>
                      <p>{{$product->p_price}}</p>

                    </div>
                  </div>
                </div>
                </a>
                @endforeach

                @else
                <h3 class="bg-danger">You have not created any post yet</h3>
                @endif
                </div>
             </div>
             <!-- end orders tab -->

             <!-- approve posts tab -->
           <div id="a_posts" class="tab-pane fade">
               <h3>Posted Cars For Approval </h3>
                                    <div class="row">
@if($a_products->count() > 0)
                @foreach ($a_products as $prod)
<a href="{{'/show/'.$prod->id}}">

                <div class="col-sm-6 col-md-4">
                <center><a href="{{'/delete/'.$prod->id}}" class="btn btn-lg btn-primary" style="">Delete</a>

                <a href="{{'/approve/'.$prod->id}}" class="btn btn-lg btn-primary" style="">Approve</a>
                </center>

                  <div class="thumbnail">
    <!-- carousel -->
                <div class="thumbnail">
                    <div id="myCarousel" style="" class="carousel slide" data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>
    -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/storage/{{$prod->p_image}}" style="height:250px;" alt="...">
      </div>

      <div class="item">
       <img src="/storage/{{$prod->s_img}}" style="height:250px;" alt="...">
      </div>

      <div class="item">
        <img src="/storage/{{$prod->t_img}}" style="height:250px;" alt="...">
      </div>

       <div class="item">
        <img src="/storage/{{$prod->f_img}}" style="height:250px;" alt="...">
      </div>

        <div class="item">
        <img src="/storage/{{$prod->ft_img}}" style="height:250px;" alt="...">
      </div>

      <div class="item">
        <img src="/storage/{{$prod->sx_img}}" style="height:250px;" alt="...">
      </div>

      <div class="item">
       <img src="/storage/{{$prod->st_img}}" style="height:250px;" alt="...">
      </div>
    </div>

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
     -->
  </div>
                    <div class="caption">
                       <h3>{{$prod->p_name}}</h3>
                      <p><b>Price : {{$prod->p_price}}</b></p>
                      <p><b>Description : {{$prod->descr}}</b></p>
                      <p></p><b>Mileage : {{$prod->p_mile}}</b></p>
                      <p></p><b>Category : {{$prod->p_cat}}</b></p>
                      <p></p><b>User ID : {{$prod->user_id}}</b></p>
</div>
                    </div>

                      <!-- end carousel -->


                  </div>
                </div>
                </a>
                @endforeach

                @else
                <h3 class="bg-danger">No post yet for approval</h3>
                @endif
                </div>
             </div>
             <!-- end approve posts tab -->
                                <div id="downloads" class="tab-pane fade">
                                    <h3>Downloads</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Downloads</th>
                                                    <th>Expires</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>May 10, 2018</td>
                                                    <td>never</td>
                                                    <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Nevara - ecommerce html template</td>
                                                    <td>Sep 11, 2018</td>
                                                    <td>never</td>
                                                    <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="address" class="tab-pane">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4 class="billing-address">Billing address</h4>
                                    <a class="view" href="#">edit</a>
                                    <p>steven smith</p>
                                    <p>Australia</p>
                                </div>
                                <div id="account-details" class="tab-pane fade">
                                    <h3>Account details </h3>
                                    <div class="register-form login-form clearfix">
                                        <form action="/update/<?php echo Auth::user()->id ?>" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="f-name" class="col-lg-3 col-md-4 col-form-label">Username</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" name="user" value="<?php echo Auth::user()->name ?>" class="form-control" id="f-name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-lg-3 col-md-4 col-form-label">Email address</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" name="email" value="<?php echo Auth::user()->email ?>" class="form-control" id="email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="phone" class="col-lg-3 col-md-4 col-form-label">Phone</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="number" name="phone" value="<?php echo Auth::user()->phone ?>" class="form-control" id="">
                                                </div>
                                            </div>

                                            <div class="register-box mt-40">
                                                <button type="submit" name="update" class="return-customer-btn f-right">Update Details</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Admin sellers details -->
                                @if(Auth::user()->super ==1)
                                <div id="sellers-details" class="tab-pane  fade in active">
                                @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
                                    <h3>Sellers Contact details </h3>

                                    <table class="table table-hover">
                                       <thead>
                                         <tr>
                                            <th>User ID</th>
                                           <th>Username</th>
                                           <th>Phone</th>
                                           <th>Email</th>

                                         </tr>
                                       </thead>
                                       @foreach ($users as $user)
                                       <tbody>

                                         <tr>
                                           <td>{{$user->id}}</td>
                                           <td>{{$user->name}}</td>
                                           <td>{{$user->phone}}</td>
                                           <td>{{$user->email}}</td>
                                         </tr>

                                       </tbody>
                                       @endforeach
                                     </table>
                                     {{$users->links()}}
                                </div>
                                @else
                                <div style="visibility:hidden;" id="sellers-details" class="tab-pane  fade">
                                    <h3>Sellers Contact details </h3>

                                    <table class="table table-hover">
                                       <thead>
                                         <tr>
                                           <th>Username</th>
                                           <th>Phone</th>
                                           <th>Email</th>
                                         </tr>
                                       </thead>
                                       @foreach ($users as $user)
                                       <tbody>

                                         <tr>
                                           <td>{{$user->name}}</td>
                                           <td>{{$user->phone}}</td>
                                           <td>{{$user->email}}</td>
                                         </tr>

                                       </tbody>
                                       @endforeach
                                     </table>
                                     {{$users->links()}}
                                </div>

                                <div id="dashboard" class="tab-pane fade in active">
                                @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif

                                    <h3>Sell your product </h3>
                                    <form action="/p" enctype="multipart/form-data" method="post">
                                        @csrf
                                    <div class="form-group">
                                          <label for="p_name">Car Name:</label>
                                          <input type="text" name="p_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="descr">Car Description:</label>
                                          <textarea name="descr" required class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="p_price">Car Price:</label>
                                          <input type="text" lang="en"  name="p_price" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="p_mile">Mileage:</label>
                                          <input type="text" lang="en" name="p_mile" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Cylinder:</label>
                                          <input type="text" lang="en" name="cyl" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Airbags:</label>
                                          <input type="text" lang="en" name="air" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="p_mile">Damage:</label>
                                          <input type="text" lang="en" name="dam" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                        <select id="pet-select"  class="form-control" name="p_cat" required>
                                        <label for="p_price">Car Category:</label>
                                            <option value="">--Please select your car category--</option>
                                            <option value="on-sail">On-Sail</option>
                                            <option value="onground">On-Ground</option>
                                            <option value="nigerian-used">Nigerian Used</option>
                                            <option value="buynow">Buynow</option>
                                        </select>
                                          </div>

                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="p_image" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose Product Image</label>
                                          </div>

                                              <div class="custom-file col-xs-4">
                                            <input type="file" name="s_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Second Product Image</label>
                                          </div>

                                           <div class="custom-file col-xs-4">
                                            <input type="file" name="t_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Third Product Image</label>
                                          </div>

                                              <div class="custom-file col-xs-4">
                                            <input type="file" name="f_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fourth Product Image</label>
                                          </div>

                                              <div class="custom-file col-xs-4">
                                            <input type="file" name="ft_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fifth Product Image</label>
                                          </div>

                                           <div class="custom-file col-xs-4">
                                            <input type="file" name="sx_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Sixth Product Image</label>
                                          </div>

                                            <div class="custom-file col-xs-4">
                                            <input type="file" name="st_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Seventh Product Image</label>
                                          </div>

                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="e_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Eight Product Image</label>
                                          </div>
                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="n_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Ninth Product Image</label>
                                          </div>
                                          <div class="custom-file col-xs-4">
                                            <input type="file" name="tn_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Tenth Product Image</label>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Submit</button>

                                    </form>

                                        <script>
                                        // Add the following code if you want the name of the file appear on select
                                        $(".custom-file-input").on("change", function() {
                                          var fileName = $(this).val().split("\\").pop();
                                          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                        });
                                        </script>
                                </div>
                                <!-- end sellers details -->
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account Page End Here -->
        <!-- Newsletter& Subscribe Start -->
        <div class="subscribe black-bg ptb-15">
            <div class="container">
                <div class="row">
                    <!-- Subscribe Box Start -->

                    <!-- Subscribe Box End -->
                    <!-- Social Follow Start -->
                    <div class="col-sm-6">
                        <div class="social-follow">
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
