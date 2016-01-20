<?php
//creates a search form to find movies by title 
?>
<div class="form">
<form action="" method="GET">
    <div>
        <input  
            class="button"
            type="text" 
            id="qInput" 
            name="q" 
            value="<?= htmlentities($q) ?>"
            placeholder="search by title">
    </div>
</form>

</div>




