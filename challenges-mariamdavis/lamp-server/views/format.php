<?php

//Creates variable names for movie elements and reformats if necessary.

date_default_timezone_set("America/New_York");

$title = $match['title'];
$released = date("j-M-Y", strtotime( $match['released'])); 
$tickets = number_format($match['tickets']);
$gross = number_format($match['gross']);
$distributer = $match['distributer'];
$genre = $match['genre'];
$imdb_id = $match['imdb_id'];
$rating = $match['rating'];
$id = $match['id'];

?>