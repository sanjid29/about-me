<div class="container-fluid">
  <div class="row">
  <div class="col-xs-12" align="center" id="football">
  <h1> A Glimpse At Football </h1>
  </div>
  <div class="col-xs-12" align="center" style="padding-left:20%; padding-right:20%; padding-top:5%;margin-bottom:5%;">
	<div class="embed-responsive embed-responsive-16by9">
  		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j60zl7OD99c" allowfullscreen></iframe>
	</div>
 </div>
 <div class="col-xs-12" align="center" id="jsk">
  <h1> My Pride Josephite Soccer Knights </h1>
 </div>
 <div class="col-xs-12" align="center" id="jsk_des" style="margin-bottom:5%;margin-top:2%;">
  <p> This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites.</p>
  <p> This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites.</p>
    <p> This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites. This is the team consists of only josephites.</p>
  <div class="col-xs-12" align="center">
  <button type="button" class="btn btn-danger" id="jsk_gallery">View More </button>
  </div>
</div>
 
 <div class="col-xs-12" align="center" id="jsk_slide">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="jsk_image"src="images/jsk/1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3 style="color:white">Our Pride</h3>
        <p style="color:white">Our T-shirt.</p>
      </div>
    </div>

    <div class="item">
      <img class="jsk_image" src="images/jsk/2.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3 style="color:black">JSK LOGO</h3>
        <p style="color:black">Our Pride.</p>
      </div>
    </div>

    <div class="item">
      <img class="jsk_image" src="images/jsk/3.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Teams</h3>
        <p>Final Match</p>
      </div>
    </div>

    <div class="item">
     <img class="jsk_image" src="images/jsk/4.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Medal</h3>
        <p>A Knights Pride.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a> 
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-xs-12" align="center" >
	
<?php
$apikey = 'mwfxrttbf7cc2desb4qwpyyx';
$q = urlencode('Toy Story'); // make sure to url encode an query parameters

// construct the query with our apikey and the query we want to make
$endpoint = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=' . $apikey . '&q=' . $q;

// setup curl to make a call to the endpoint
$session = curl_init($endpoint);

// indicates that we want the response back
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// exec curl and get the data back
$data = curl_exec($session);

// remember to close the curl session once we are finished retrieveing the data
curl_close($session);

// decode the json data to make it easier to parse the php
$search_results = json_decode($data);
if ($search_results === NULL) die('Error parsing json');

// play with the data!
$movies = $search_results->movies;
echo '<ul>';
foreach ($movies as $movie) {
  echo '<li><a href="' . $movie->links->alternate . '">' . $movie->title . " (" . $movie->year . ")</a></li>";
}
echo '</ul>';

?>
</div>
<div class="col-xs-12" align="center" id="photography">
	<h1 align="center"> PhotoGraphy</h1>
</div>
<div class="col-xs-12" align="center" id="photography_des">
<p style="font-size: 25px;">“What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.”
―<span style="color:red;">Karl Lagerfeld</span> 
</p>
<p> I am not a professional photographer. This is my just my way to capture some essence of life and keep it in my own canvas.</p>
<button type="button" class="btn btn-success" id='photography_view'>See the essence</button>
</div>
<div class="col-xs-12" align="center" id="photo_view">
<div class="col-xs-6" >
	<div class="view view-sixth"> 
		<img src="images/photography/1.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>
	<div class="col-xs-6"  >
	<div class="view view-sixth">
		<img  src="images/photography/2.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>
	<div class="col-xs-6" >
	<div class="view view-sixth">
		<img src="images/photography/3.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>
	<div class="col-xs-6" >
	<div class="view view-sixth"> 
		<img src="images/photography/4.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>
	<div class="col-xs-6"  >
	<div class="view view-sixth">
		<img  src="images/photography/5.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>
	<div class="col-xs-6" >
	<div class="view view-sixth">
		<img src="images/photography/6.jpg">
                    <div class="mask">
                        <h2> Picture One </h2>
                        <p>Soccer Cup.</p>
                    </div>
	</div>
	</div>

</div>
</div>
