<?php
session_start();
$name=$_SESSION["name"];
?>
<?php if($name!=null):?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>I,ME & MYSELF</title>
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

<audio controls autoplay loop>
  <source src="mysong.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<div class="row" style="margin-left:0px;margin-right:0px;margin-bottom:2%;">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="main.php?id=overview">Overview</a></li>

            <li class="dropdown">
              <a href=".?id=education" class="dropdown-toggle" data-toggle="dropdown">Education <b class="caret"></b></a>
              <ul class="dropdown-menu">
                	<li><a href="?id=education#school">School Life</a></li>
	            	<li><a href="?id=education#college">College Life</a></li>
	            	<li><a href="?id=education#university">University Life</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href=".?id=hobbies" class="dropdown-toggle" data-toggle="dropdown">Hobbies <b class="caret"></b></a>
              	<ul class="dropdown-menu">
                	<li><a href="?id=hobbies#football">Football</a></li>
	            	<li><a href="?id=hobbies#">Gaming</a></li>
	            	<li><a href="?id=hobbies#">Photography</a></li>
              	</ul>
            </li>
        
            <li><a href="main.php?id=contactme">Contact Info</a></li>
			<li id='signout'><a href='main.php?id=signout'>Sign Out</a></li>
	
    	</ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <img id="banner" src="images/banner/1.jpg" style="height:20vh; width:100%;">
  </div>
</div>
<?php 
if(!empty($_GET['id']))
{
$var=$_GET['id'];
if($var)
{
 include('pages/'.$var.'.php');
}
}

else 
include('pages/overview.php');
?>


<div class="row" style="margin-left:0px;margin-right:0px;">
<div class="col-sm-12" align="right" style="background-color:black; >
<a href="https://www.facebook.com/sanjid.habib" target="_blank" style="target-new: tab;"> <button class="btn btn-facebook"><i class="fa fa-facebook"></i>Connect with Facebook </button></a>
<a href="https://instagram.com/sanjidhabib/" target="_blank" style="target-new: tab;"> <button class="btn btn-linkedin"><i class="fa fa-instragram"></i>Connect with Instragram </button></a>
<a href="https://www.linkedin.com/profile/view?id=AAIAABe_pLQBgW1490pyUouJa5N66tgZB3kI6f4&trk=nav_responsive_tab_profile" target="_blank" style="target-new: tab;"> <button class="btn btn-linkedin"><i class="fa fa-linkedin"></i>Connect with Linkdin </button></a>
</div>
<?php else: ?>
	<script>
window.onload = function() {
    alert("No One Signed In :(");
    window.location.replace("http://practice.stage0615.activationltd.com/");
}
</script> 
<?php endif; ?>
</body>
</html>