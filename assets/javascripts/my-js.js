// JavaScript Document
//show trailer and hide everthing else
  function showTrailer(){
	  $("#trailer").fadeIn("slow");
	  $(".poster").fadeOut();
	  $(".movie-info").fadeOut();
	  $(".form-search").fadeOut();
	  $(body).css("background","black");
  }
  
  //hide trailer and show everthing else
  function hideTrailer(){
	$("#trailer").css("display","none");
	 $(".poster").fadeIn("slow");
	$(".movie-info").fadeIn("slow");
	$(".form-search").fadeIn("slow");
  
  }