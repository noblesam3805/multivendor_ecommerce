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
                  @if (session()->has('message'))
    <h1 class="alert alert-success">{{session()->get('message')}}</h1>
    @endif
                   <center> <h3>Change {{$items->p_name}} car details </h3></center><br>
                                    <form action="/u/{{$items->id}}" enctype="multipart/form-data" method="post" >
                                        @csrf
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                          <label for="p_name">Car Name:</label>
                                          <input type="text" name="p_name" class="form-control" value="{{$items->p_name}}" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                          <label for="descr">Car Description:</label>
                                          <input type="text" style="height:60px;" name="descr" required class="form-control" value="{{$items->descr}}">
                                        </div>

                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                          <label for="p_price">Car Price:</label>
                                          <input type="text" value="{{$items->p_price}}" lang="en"  name="p_price" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                          <label for="p_mile">Mileage:</label>
                                          <input type="text" value="{{$items->p_mile}}" lang="en"  name="p_mile" class="form-control" required>
                                        </div>

                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                             <label for="p_cat">Car Category:</label>
                                           
                                        <select id="pet-select"  class="form-control" name="p_cat" required>
                                        <option>--{{$items->p_cat}}--</option>
                                            <option value="New">New</option>
                                            <option value="Abroad-Used">Abroad Used</option>
                                            <option value="Nigerian-Used">Nigerian Used</option>

                                        </select>
                                          </div>

                                          <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                          <br>  <input type="file"  name="p_image" class="custom-file-input"  id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose Product Image</label>
                                          </div>
                                          
                                              <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" required name="s_img" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Second Product Image</label>
                                          </div>
                                          
                                           <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" name="t_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Third Product Image</label>
                                          </div>
                                          
                                          <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" name="f_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fourth Product Image</label>
                                          </div>
                                          
                                          <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" name="ft_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Fifth Product Image</label>
                                          </div>
                                          
                                          <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" name="sx_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Sixth Product Image</label>
                                          </div>
                                          
                                          <div class="custom-file col-sm-6 col-md-6 col-lg-6">
                                           <br> <input type="file" name="st_img" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Seventh Product Image</label>
                                          </div>
                                          <br><button type="submit" class="btn btn-primary ml-30 mt-20">update</button>

                                    </form>
            <!-- Container End -->
        </div>
@include('welcome')
