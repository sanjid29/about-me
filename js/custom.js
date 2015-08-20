$(document).ready(function(){

$('#starts').hide();
$
$('#gallery').hide();
$(".school_des").hide();
$(".college_des").hide();
$(".university_des").hide();
$("#jsk_des").hide();
$("#jsk_slide").hide();
$('#form').hide();
  $("#myinfo").click(function(){
        
        $('#starts').toggle();
    });
    
     $("#myinfo").mouseenter(function(){
        $('#myimage').attr('src','images/2.jpeg');
    });
    $("#myinfo").mouseleave(function(){
        $('#myimage').attr('src','images/1.jpg');
    });
    $("#gallery-button").click(function(){
    	$('#gallery').toggle();
    });
    $("#school").mouseenter(function(){
    	$(".school_des").fadeIn(3000);
    });
     $("#college").mouseenter(function(){
    	$(".college_des").slideDown("slow");
    });
     $("#university").mouseenter(function(){
    	$(".university_des").show("slow");
    });
     $("#jsk").mouseenter(function(){
    	$("#jsk_des").show("slow");
    });
    $("#jsk_gallery").click(function(){
    	$('#jsk_slide').toggle();
    });
    $("#sign").click(function(){
    	$('#form').slideToggle();
    });
   
}); 