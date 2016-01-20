<?php
//Displays a movie detail page with information about the given movie.

require_once 'connection.php';
require_once 'models/detail-model.php';

if (isset($_GET['id'])) {
 $id = $_GET['id'];
}
else {
    $id = "";
}

//buidls Movie
$conn = getConnection();
$movieModel = new Movie($conn);
$matches = $movieModel->display($id);

foreach($matches as $match):
    include("views/format.php");
endforeach;

//Access omdbapi to retrieve information about movie.
$url = "http://www.omdbapi.com/?i={$imdb_id}&tomatoes=true";
$json = file_get_contents($url);
$movieData = json_decode($json);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=htmlentities($title)?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
   include("views/detail.php");
   ?>
    <div class="repo">
        <a href="https://github.com/INFO344-win-2016/challenges-mariamdavis">
            https://github.com/INFO344-win-2016/challenges-mariamdavis
        </a>
     </div>
</body>
</html>
