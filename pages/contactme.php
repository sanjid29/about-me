

<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(23.76200,90.35714);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
       
<?php 
if(isset($_POST['submit']))
{
	$errname=$errmail=$errsub=$errmsg=null;
    $to = "sanjid.habib@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
	$message=$_POST['message'];
	if(empty($name))
	{
		$errname="Please Enter Your Name";
	}
	if(empty($from))
	{
		$errmail="Please Enter Your Email";
	}
	if(empty($subject))
	{
		$errsub="Please Enter Your Subject";
	}
	if(empty($message))
	{
		$errmsg="Please Enter Your Message";
	}
	if (!filter_var($from, FILTER_VALIDATE_EMAIL) === true)
	{
		$errmail="Please Enter Your Correct Email";
	}
	if(!empty($errname) or !empty($errmail) or !empty($errsub) or !empty($errmsg))
	{
		echo "<h1 align='center'>failed</h1>";
	}
	else {
	$message = $first_name . " wrote the following:" . "\n\n" . $message;
	
    $headers = "From:" . $from;
    
    if(mail($to,$subject,$message,$headers))
     {
     	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
     }
	else echo "failed";
   }
	}
  
?>
  	<h1 align="center"><strong>CONTACT ME</strong></h1>
            <p align="center" >
             You can send a mail to me and surely i will get back to you. Feel free to mail to me.
             </p>
             <p align="center">
             Thank you
		</p>
            
			<div class="row" style="margin-left:0px; margin-right: 0px; padding: 2%;">
				<form action="" method="post" >
				<div class="col-xs-4 "><input type="text"  class="form-control cu_in" placeholder="Name" name="name"><span><?php echo $errname; ?></span></div>
			    <div class="col-xs-4 "><input type="text"  class="form-control cu_in" placeholder="Telephone" name="telephone"></div>
				<div class="col-xs-4 "><input type="text" class="form-control cu_in" placeholder="Email" name="email"><span><?php echo $errmail; ?></span></div>
				
				<div class="col-xs-12 " style="margin-top: 1%"><input type="text" class="form-control cu_in" placeholder="Subject" name="subject"><span><?php echo $errsub; ?></span></div>
				
				<div class="col-xs-12" style="margin-top: 1%"><textarea  class="form-control cu_in" rows="3" placeholder="Message" name="message"></textarea><span><?php echo $errmsg ?></span></div>
				<br />					
				<div class="row" align="center">
				<div class="col-xs-4 "></div>
				<div class="col-xs-4 "> <input class="send_cu" type="submit" value="SEND" name="submit" style="margin-top: 2%"> </div>
				<div class="clearfix visible-xs-block"> </div>
				<div class="col-xs-4 "></div>
				</div>
				</form>
		
     </div><!--container -->
  
  <div class="container-fluid" style="margin-top:5%; margin-bottom:5%" ;>
 		<div class="row">
 		 <div class="col-xs-12" >
 		 <h2 align="center"> Find Me In Google Map </h2>
 		 </div>
 		 <div class="col-xs-2">
 		 </div>
 		<div class="col-xs-8">
            <div id="googleMap" style="width:65vw; height:50vh;"></div>
		</div>
	</div>
	</div>
	