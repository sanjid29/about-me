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
        <div class="container-fluid" style="margin-top:5%";>
        <h1 id='report' align="center" style="color:red;"> 
        <?php 
        $var=0;
        $var=$_SESSION['var'];
        if($var==1)
        {
        $var_value = $_SESSION['varname'];
        }
        else
        $var_value=null;
        echo $var_value;
        session_destroy();
        ?> 
        </h1>
        
  	<h1 align="center"><strong>CONTACT ME</strong></h1>
            <p align="center" >
             You can send a mail to me and surely i will get back to you. Feel free to mail to me.
             </p>
             <p align="center">
             Thank you
		</p>
            <form action="pages/mail.php" method="post" >
			<div class="row">
				<div class="col-xs-4 "><input type="text"  class="form-control cu_in" placeholder="Name" name="name"></div>
			    	<div class="col-xs-4 "><input type="text"  class="form-control cu_in" placeholder="Telephone" name="telephone"></div>
				<div class="col-xs-4 "><input type="text" class="form-control cu_in" placeholder="Email" name="email"></div>
				</div>
				<br />
				<input type="text" class="form-control cu_in" placeholder="Subject" name="subject">
				<br />	
				<textarea  class="form-control cu_in" rows="3" placeholder="Message" name="message"></textarea>
				<br />					
				<div class="row" align="center">
				<div class="col-xs-4 "></div>
				<div class="col-xs-4 "> <input class="send_cu" type="submit" value="SEND"> </div>
					  
					  <div class="clearfix visible-xs-block"> </div>
					  <div class="col-xs-4 "></div>
				</div>
		</form>
     </div><!--container -->
      
          <div class="container-fluid" style="margin-top:5%; margin-bottom:5%";>
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