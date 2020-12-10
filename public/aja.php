<?php
error_reporting(1);
$con = mysqli_connect("localhost", "root", "", "lara_multi");
$output = "";
$sql = "select * from posts where p_name LIKE '%".$_POST['search']."%'";
$res = mysqli_query($con,$sql);
if(!$res){
	print_r(mysqli_error($con));
}

if (mysqli_num_rows($res) > 0){
	$output .= '<br><h4 align="center" style="margin:0 0 10px 0;"> Search Result </h4>';
	$output .= '<div class="row" style="margin:0 10% 0 10%;">

	';

	while($row = mysqli_fetch_array($res)){
            $output .= '<a href="/show/ '.$row["id"]. ' ">
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
	echo $output;
}
else{
	echo '<p align="center" class="mt-10 mb-10"><b>Sorry, No data was found for your search</b></p>';
}
?>
