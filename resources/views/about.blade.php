 @include ("layout")
 
 <div class="row">
     <div class="col-lg-12 col-md-12">
     <img src="http://www.stockswatchout.com/wp-content/uploads/2015/04/About_Us.jpg" style="height:300px; width:100%;">
     </div>
     <div class="col-lg-12 col-md-12" style="background-color:#fff; background-attachment:scroll;"><br><br><br>
     <?php
        $mysqli= new mysqli('localhost', 'krixuaut_krix', 'pass@krix001', 'krixuaut_krix');
        $sql = "select * from abouts";
        $que = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($que);
     ?>
     
     <center><h4 style="font-family:roboto;"><?php echo $row['first_t'] ?></h4>
     
     <p style="margin:20 20% 2% 20%; font-family:roboto; text-align:justify; color:black;"><?php echo $row['first'] ?><br><br>

<?php echo $row['first_s'] ?>

</p>
    
     </center>
     
     </div>
     <br><br>
  <div class="col-sm-4" style="padding: 100 0 100 0; background-attachment:fixed;"><center><h4 style="font-family:roboto;"><?php echo $row['second_t'] ?></h4>
     <p style="margin:20 20% 2% 20%; font-family:roboto; text-align:justify;"><?php echo $row['second'] ?>
</p>
     
     </center></div>
  <div class="col-sm-4" style="padding: 100 0 100 0"><center><h4 style="font-family:roboto;"><?php echo $row['third_t'] ?></h4>
     <p style="margin:20 20% 2% 20%; font-family:roboto; text-align:justify;"><?php echo $row['third'] ?>
</p>
     
     </center></div>
  <div class="col-sm-4" style="padding: 100 0 100 0"><center><h4 style="font-family:roboto;"><?php echo $row['fourth_t'] ?></h4>
     <p style="margin:20 20% 2% 20%; font-family:roboto; text-align:justify;"><?php echo $row['fourth'] ?>

</p>
     
     </center></div>
</div>
<p class="bg-warning p-20">*All transactions require a ₦35,000 documentation fee. 
Wholesale and international buyers are welcome.
*</p>

@include('welcome')

