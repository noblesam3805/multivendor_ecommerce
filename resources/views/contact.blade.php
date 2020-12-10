@include ("layout")
<div class="my-account white-bg ptb-40">
            <div class="container">
                <div class="account-dashboard">
                   <div class="dashboard-upper-info">
                       <div class="row no-gutters align-items-center">
                           <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="d-single-info">
                                   <span></span>
                                   
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
                       
                         <div class="col-md-6 mb-md-0 mb-5" style="margin-top:10%;">
                              <h3>Send Us A Message</h3><br>
            <form id="contact-form" action="mail.php"  method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" required>
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control" required>
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" required name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                            <label for="message">Your message</label>
                        </div><br>
 <input type="submit" class="btn btn-success" name="send" value="send">
                    </div>
                   
                </div>
                <!--Grid row-->

            </form></div>
                        <div class="col-md-6 mb-md-0 mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4287185037256!2d3.275192414093911!3d6.467249125610613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b88b8ceae05b1%3A0x6369e04e94176a75!2s23+Road%2C+G+Cl%2C+Festac+Town%2C+Lagos!5e0!3m2!1sen!2sng!4v1563962576531!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                        
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
