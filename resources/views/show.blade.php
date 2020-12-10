@include ("layout")
<br><br>
<style>
body{
background-color:white !important;

}
</style>
            <div class="container pb-100 ">
            <div class="row pb-20 ">


                <div class="col-sm-6 col-md-9 col-lg-9">
                  <div class="thumbnail">
                    <div id="myCarousel" style="" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/storage/{{$posts->p_image}}" alt="Los Angeles" style="height:400px; width:100%;">
      </div>

      <div class="item">
        <img src="/storage/{{$posts->s_img}}" alt="Chicago" style="height:400px; width:400%;">
      </div>
    
      <div class="item">
        <img src="/storage/{{$posts->t_img}}" alt="New york" style="height:400px; width:100%;">
      </div>
      
       <div class="item">
        <img src="/storage/{{$posts->f_img}}" alt="New york" style="height:400px; width:100%;">
      </div>
      
        <div class="item">
        <img src="/storage/{{$posts->ft_img}}" alt="Los Angeles" style="height:400px; width:100%;">
      </div>

      <div class="item">
        <img src="/storage/{{$posts->sx_img}}" alt="Chicago" style="height:400px; width:400%;">
      </div>
    
      <div class="item">
        <img src="/storage/{{$posts->st_img}}" alt="New york" style="height:400px; width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                    <div class="caption">
                      <h3>{{$posts->p_name}}</h3>
                      <p>{{$posts->p_price}}</p>
</div>
                    </div>
                  </div>
                  <table class="table table-hover" style="width:50%;" >
    <thead>
      <tr>
        <th>Seller</th>
        <th>Product Category</th>
        <th>Contact Admin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Admin</td>
        <td>{{$posts->p_cat}}</td>
        <td>08099456789</td>
      </tr>

    </tbody>
  </table>
  
  <table class="table table-hover" style="width:50%;">
    <thead>
      <tr>

        <th> Mileage</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$posts->p_mile}}</td>
      </tr>

    </tbody>
  </table>

  <table class="table table-hover" style="width:50%;">
    <thead>
      <tr>

        <th>Product Description</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$posts->descr}}</td>
      </tr>

    </tbody>
  </table>

  <br><br>
  <form action="/store/{{$posts->id}}" method="post">
                     @csrf

 <span class="bg-warning p-20" style="margin:0 50px 50px 0;">N.B *You must be logged in to comment/reply*</span><br><br>
                <div class="form-group col-md-6" style="width:60%;">
                   
                  <label for="descr">Drop a Comment</label>
                 <textarea name="body" required class="form-control" style="height:200px;"></textarea><br>
                 <button type="submit" style="border:2px;
                      border-radius:10px;" class="btn btn-primary">Comment</button>

                </div>

                </form>
                </div>

            @foreach ($posts->comments as $poss)
                    <div class="col-sm-6 col-md-6 col-lg-12 mb-10" style="border:2px solid #0162BD;
                      width:60%; border-radius:10px;">
                      <p class="pt-10">{{$poss->user->name}} : {{$poss->body}}</p><br>
                      @if($poss->user->name == Auth::user()->name)
                      <a href="{{$poss->body}}" class="btn btn-primary mb-10" style="border:2px;
                      border-radius:10px;" data-toggle="modal" data-target="#{{$poss->id}}">Edit</a>@endif<br>
                       @foreach ($poss->comments as $reply)
                       <div class="col-sm-6 col-md-6 col-lg-12 mb-10" style="border:2px solid #0162BD;
                      width:100%; border-radius:10px;">
                      <p class="pt-10">{{$reply->user->name}} : {{$reply->body}}</p><br>
                      @if($reply->user->name == Auth::user()->name)
                      <a href="#" class="btn btn-primary mb-10" style="border:2px;
                      border-radius:10px;" data-toggle="modal" role="dialog"
                       data-target="#{{$reply->id}}">Edit</a>
                       @endif
                    </div>

                     <!-- 2nd Modal -->
                     <div id="{{$reply->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" style="padding:30px">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit your previous reply</h4>
                                </div>
                            <form method="post" action="{{route('reply.update',$reply->id)}}">
                                @csrf

                                     <input type="text" name="body" required class="form-control"
                                     style="height:100px;" value="{{$reply->body}}"><br>
                                     <button type="submit" class="btn btn-primary mb-10" style="border:2px;
                                     border-radius:5px;">Update</button>

                            </form>
                                    </div>
                                </div>
                           </div>

                    @endforeach
                       <form method="post" action="{{route('commen.reply',$poss->id)}}">
                                @csrf

                                     <input type="text" name="body" required class="form-control"
                                     style="height:80px;" value=""><br>
                                     <button type="submit" class="btn btn-primary mb-10" style="border:2px;
                                     border-radius:5px;">Reply</button>

                        </form>
                    </div>
                    <br>
                    <!-- Modal -->
                    <div id="{{$poss->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" style="padding:30px">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit your previous comment</h4>
                                </div>
                            <form method="post" action="{{route('comment.update',$poss->id)}}">
                                @csrf

                                     <input type="text" name="body" required class="form-control"
                                     style="height:100px;" value="{{$poss->body}}"><br>
                                     <button type="submit" class="btn btn-primary mb-10" style="border:2px;
                                     border-radius:5px;">Update</button>

                            </form>
                                    </div>
                                </div>
                           </div>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>



@include('welcome')
