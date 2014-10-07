	</div> <!-- end of container -->
        <script type='text/javascript'>
            var $container = $('#container').isotope({
              getSortData: {
                name: '.title', // text from querySelector
                number: '.price', // value of attribute
                avail: '.available'
              }
            });
            
            
                // sort items on button click
                $('#sort').on( 'click', 'th', function() {
                  var sortByValue = $(this).attr('title');
                  $container.isotope({ sortBy: 'name' });
                });
            
        </script>
	<script src="http://code.jquery.com/jquery.js"></script>
   <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="assets/javascripts/my-js.js"></script>
    <script src="assets/javascripts/isotope.js"></script>
  </body>
</html>