<?
include 'includes/functions.php';
class Trailer_Api {
	private $data;
	public function __construct($title) {
		$xml = file_get_contents("http://simpleapi.traileraddict.com/".format_title(" ","-",$title)."/trailer");
		$this->data = new SimpleXMLElement($xml);	
	}
	public function get_trailer()	{
		return $this->data->trailer[0]->embed_standard;
	}
	
	
}

class Movie_Api {
	public $data;	
	private $actor_string;
	const HREF = "<a href=\"http://www.google.com/search?btnI=I%27m+Feeling+Lucky&q=imdb+";
	
	public function __construct($title) {
		$json = file_get_contents("http://www.omdbapi.com/?i=&t=".format_title(" ","+",$title));
		$this->data = json_decode($json);
	}
	
	public function get_info_on() {
		return $this->data;
	}
	
	public function get_actors() {
		$a = explode(",",$this->data->Actors);
		
		
		for($i = 0; $i < count($a); $i++) {
			$href = "<a href=\"http://www.google.com/search?btnI=I%27m+Feeling+Lucky&q=imdb+";
			$a_string = urlencode($a[$i]);
			$this->actor_string .= "{$href}{$a_string}\">{$a[$i]}</a>";
			if($i + 1  != count($a)){
				$this->actor_string .= ', ' ;
			}
			
		}
		return $this->actor_string;
		
	}
}

class Movie_Trailer_Api {
	private $title;
	private $movie;
	private $trailer;
	private $actors; 
	private $actor_string;
	
	public function __construct($title) {
		$this->title = $title;	
	}
	
	public function get_movie_obj(){
		$this->movie = new Movie_Api($this->title);
		$this->actors = $this->movie->get_actors();
		return $this->movie->get_info_on();
	}
	
	
	
	public function get_trailer(){
		$this->trailer = new Trailer_Api($this->title);
		return $this->trailer->get_trailer();
	}
	
	public function get_actors() {
		$m = new Movie_Api($this->title);
		return $m->get_actors();
	}
	
	
}


// $movie = new Movie_Api("taken");
 //echo '<pre>'. print_r($movie->data) .'</pre>';

?>

