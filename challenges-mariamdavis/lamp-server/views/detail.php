<?php   
//Displays details about movie including Rotten Tomatoes Rating.
?> 
 
 <h1 id="title" class="movie-title"><?=htmlentities($title)?></h1> 
     <div class="details">
        <p>
            <?= htmlentities($movieData->Plot) ?>
        </p>
       
            <p>
                <?=htmlentities($genre)?> movie rated <?=htmlentities($rating)?>
            </p>
            <p>
                Released on <?=htmlentities($released)?>
            </p>
            <p>
                This movie sold <?=htmlentities($tickets)?> tickets, earning gross revenues of $<?=htmlentities($gross)?>
            </p>
    </div>
    
    <?php 
    if($imdb_id != NULL) {
    ?>
    
        <h3 class="movie-title">Rotten Tomatoes Rating:</h3>
            <div class="details">
                <p>
                    Rated <?= htmlentities($movieData->tomatoRating) ?>
                    by  <?= htmlentities($movieData->tomatoReviews) ?> people
                </p>
                    <p>
                    <?= htmlentities($movieData->tomatoConsensus) ?> 
                </p>
            </div>
      
      <?php
       }
      ?>
 