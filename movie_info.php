<?php php include 'header.php'?>
  <div class="row logo">
   
    <div class="col-xs-12 ">
      <form  role="form"class="form-search" action="movie_info.php" method="get">
          <div class="input-group">
            <span class="input-group-addon">MMC</span>
            <input type="text" class="input-medium search-query form-control" id="searchform-home" name="search">
        </div>
      </form>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-xs-12 col-sm-4 poster">
      <img class="img-responsive movie-poster" src="<?php php echo $movie->Poster; ?>" >
    </div>
    <div class="col-xs-12 col-sm-8 movie-title">
      <h1>
        <?php php echo $movie->Title ?>
      </h1>
          <span class="year">
            &nbsp;(<a href="http://www.imdb.com/year/<?php php echo $movie->Year ?>/?ref_=tt_ov_inf"><?php php echo $movie->Year ?></a>)
          </span>
    </div>
    <div class="col-xs-12 col-sm-8 movie-title">
     <p><?php php echo $movie->Rated ?> | <?php php echo $movie->Runtime ?> | <?php php echo $movie->Genre ?> | <?php php echo $movie->Released ?> </p>
      <hr/>
      <p><?php php echo $movie->imdbRating ?>&nbsp;out of 10 <?php php for($i = 1; $i <= $movie->imdbRating; $i++){ echo '<span class="glyphicon glyphicon-star rating"></span>'; } ?>
      <?php php for($i = 0; $i <= 10 - $movie->imdbRating ; $i++){ echo '<span class="glyphicon glyphicon-star-empty"></span>'; } ?></p>
      <hr/>
      <p>
        <?php php echo $movie->Plot ?>
      </p>
      <p>
        <strong>Director: </strong><?php php echo $movie->Director; ?><br>
        <strong>Writers: </strong><?php php echo $movie->Writer; ?><br>
        <strong>Stars: </strong><?php php echo $actors; ?><br>
      </p>
      <!-- Button trigger modal -->
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Watch Trailer
          </button> 
          <a href="http://www.imdb.com/title/<?php php echo $movie->imdbID ?>/">
          <button class="btn btn-primary">
            View on IMDB
          </button> 
          </a>   
    </div>
  </div>


  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php php echo $movie->Title; ?></h4>
      </div>
      <div class="modal-body">
       <div class="flex-video widescreen">
        <?php php echo $trailer; ?>
       </div>
      </div>
      
    </div>
  </div>
</div>


<?php php include 'footer.php' ?>
