<?
include 'get_movie_data.php';
global $movie;
global $trailer;
global $actors;
if(isset($_GET['search'])){
	$api = new Movie_Trailer_Api($_GET['search']);
	$movie = $api->get_movie_obj();
	$trailer = $api->get_trailer();
	$actors = $api->get_actors();
	
	
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>mmc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
   <!--  <link href="assets/stylesheets/screen.css" rel="stylesheet" media="screen"> --> 
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <!-- <link href="assets/stylesheets/lightbox.css" rel="stylesheet" media="screen"> -->
    <link href="assets/stylesheets/custom.css" rel="stylesheet" media="screen">
    
  </head>
 <body>
  <div class="container">