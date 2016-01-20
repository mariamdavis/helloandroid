<?php
//Displays stored movies and related information. Allows user to search for movie.
require_once 'connection.php';
require_once 'models/movie-model.php';

if (isset($_GET['q'])) {
 $q = $_GET['q'];
}
else {
    $q = "";
}

//Builds movies and retrieves array of results.
$conn = getConnection();
$movieModel = new Movies($conn);
$matches = $movieModel->search($q);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Movies</title>
        
         <link rel="stylesheet" href="style.css">
       
     </head>

    <body class="container">
    <h1 class="table-title">Movie Revenues From 2014</h1>
   
    <?php
        include("views/search-form.php");
        include("views/table.php");
    ?>  
 
        <div class="repo">
            <a href="https://github.com/INFO344-win-2016/challenges-mariamdavis">
                https://github.com/INFO344-win-2016/challenges-mariamdavis
            </a>
        </div>
   </body>
</html>
