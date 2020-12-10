@include ("layout")
<div class="my-account white-bg ptb-40">
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
                                   <p>admin@krixuauto.com</p>
                               </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="d-single-info">
                                   <p>E-mail us </p>
                                   <p>support@krixuauto.com</p>
                               </div>
                           </div>

                       </div>
                   </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                           
                            <li class=""><a data-toggle="tab" href="#terms">Edit terms and conditions page</a></li>


                              
                                <li><a data-toggle="tab" href="#about">Edit about page</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-10 col-md-10">

                            <!-- Tab panes -->
                            <div class="tab-content active dashboard-content mt-all-40">
                                <div id="terms" class="tab-pane active">
                                @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
                                    <h3>Update Terms and Conditions </h3>
                                    <div class="container">
                                     <?php
                                       $mysqli= new mysqli('localhost', 'krixuaut_krix', 'pass@krix001', 'krixuaut_krix');
                                       $sql = "select * from abouts";
                                       $que = mysqli_query($mysqli,$sql);
                                       $row = mysqli_fetch_array($que);
                                    ?>
                                     
                                     <form method=""  action="#">
                                         @csrf
                                     <div class="row">
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><input type="text" style="height:30px; width:277px" name="first_t" value=""></input></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"></div>
                                     </div><br>
                                     <div class="row">
                                       <div class="col-md-9 col-sm-3 col-lg-9" style="background-color:white;"><textarea style="height:300px; " name="first" placeholder=""></textarea></div>
                                     </div><br><br>
                                     <div class="row">
                                       <div class="col-md-9 col-sm-3 col-lg-9" style="background-color:white;"><textarea style="height:300px; " name="first_s" placeholder=""></textarea></div>
                                     </div><br><br>
                                     <br>
                                     <br>
                                     <input type="submit" class="col-md-3 col-sm-3 col-lg-3 btn btn-primary btn-sm" name="update" value="update">
                                     </form>
                                    </div>

                                        <script>
                                        // Add the following code if you want the name of the file appear on select
                                        $(".custom-file-input").on("change", function() {
                                          var fileName = $(this).val().split("\\").pop();
                                          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                        });
                                        </script>
                                </div>
                                
                                <!-- orders tab -->

             <!-- end orders tab -->
             
             <!-- approve posts tab -->

             <!-- end approve posts tab -->
                                <div id="about" class="tab-pane fade">
                                    <h3>update about page content </h3>
                                 <div class="container">
                                     <?php
                                       $mysqli= new mysqli('localhost', 'krixuaut_krix', 'pass@krix001', 'krixuaut_krix');
                                       $sql = "select * from abouts";
                                       $que = mysqli_query($mysqli,$sql);
                                       $row = mysqli_fetch_array($que);
                                    ?>
                                     
                                     <form method="post"  action="/uabout">
                                         @csrf
                                     <div class="row">
                                       <div class="col-md-2 col-sm-2 col-lg-2" style="background-color:white;"></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><input type="text" style="height:30px; width:277px" name="first_t" value="<?php echo $row['first_t'] ?>"></input></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"></div>
                                     </div><br>
                                     <div class="row">
                                       <div class="col-md-1 col-sm-1 col-lg-1" style="background-color:white;"></div>
                                       <div class="col-md-6 col-sm-3 col-lg-6" style="background-color:white;"><textarea style="height:150px;" name="first" placeholder="<?php echo $row['first'] ?>"></textarea></div>
                                       <div class="col-md-1 col-sm-1 col-lg-1" style="background-color:white;"></div>
                                     </div><br><br>
                                     <div class="row">
                                       <div class="col-md-1 col-sm-1 col-lg-1" style="background-color:white;"></div>
                                       <div class="col-md-6 col-sm-3 col-lg-6" style="background-color:white;"><textarea style="height:150px;" name="first_s" placeholder="<?php echo $row['first_s'] ?>"></textarea></div>
                                       <div class="col-md-1 col-sm-1 col-lg-1" style="background-color:white;"></div>
                                     </div><br><br>
                                     <div class="row">
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><input type="text" style="height:30px; width:277px" name="second_t" value="<?php echo $row['second_t'] ?>"></input></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><input type="text" style="height:30px; width:277px" name="third_t" value="<?php echo $row['third_t'] ?>"></input></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><input type="text" style="height:30px; width:277px" name="fourth_t" value="<?php echo $row['fourth_t'] ?>"></input></div>
                                     </div><br>
                                     <div class="row">
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><textarea style="height:300px; width:300px" name="second" placeholder="<?php echo $row['second'] ?>"></textarea></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><textarea style="height:300px; width:300px" name="third" placeholder="<?php echo $row['third'] ?>"></textarea></div>
                                       <div class="col-md-3 col-sm-3 col-lg-3" style="background-color:white;"><textarea style="height:300px; width:300px" name="fourth" placeholder="<?php echo $row['fourth'] ?>"></textarea></div>
                                       <br>
                                     
                                     </div><br>
                                     <input type="submit" class="col-md-3 col-sm-3 col-lg-3 btn btn-primary btn-sm" name="update" value="update">
                                     </form>
                                    </div>
                                </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
@include('welcome')
