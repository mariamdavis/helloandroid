<?php
 /*Creates a table that contains movies and their related information.*/ 
?>
 <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th class="text-left">Release Date</th>
                <th class="text-left">Tickets Sold</th>
                <th class="text-left">Gross Revenue</th>
            </tr>
        </thead>
        
<?php foreach($matches as $match):
//html entities sanitizes txt to turn it into txt
include("format.php");
$details = "details.php?id=" . $id;


?>
<tbody>      
    <tr>
        <td>
            <a href=<?=$details?>>
                <?= htmlentities($title) ?>           
            </a>
        </td>
        <td class="text-left">
            <?= htmlentities($released) ?>                    
        </td>
        <td class="text-left">
                <?= htmlentities($tickets) ?>
        </td>
        <td class="text-left">
            $<?= htmlentities($gross) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>

</table>
