<?php 
//contains custom functions


function format_title($replace, $with, $title) {
	return strtolower(str_replace($replace, $with,$title));
}
function format_title2($replace, $with, $title) {
	return str_replace($replace, $with,$title);
}



?>