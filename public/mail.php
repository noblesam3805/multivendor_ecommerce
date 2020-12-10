    <?php  
    if (isset($_POST['send'])){
	
	$subject = $_POST['subject'];
	$to_email = "krixuauto@gmail.com";
	$to_fullname = "Krixuauto";
	$from_email = $_POST['email'];
	$from_fullname = $_POST['name'];
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "To: $to_fullname <$to_email>\r\n";
	$headers .= "From: $from_fullname <$from_email>\r\n";

	$message =$_POST['message'];
	
if (!mail($to_email, $subject, $message, $headers)) { 
    print_r(error_get_last());
	}
	else{
	   ?><script>alert('Thank you for messaging us, We\'ll be in touch with you soon'); window.location="http://krixuauto.com/contact"; </script>
	<?php }
	
                 }
                   
         ?>