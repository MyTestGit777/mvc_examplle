<?php
ob_start();
?>
<div>
    <h3>Игры и разработчики</h3>
    <?php
    include_once 'public/text/game.html';
    ?>
</div>
<?php
//------------список стран $countryList
foreach($gameList as $game){
    echo '<div style="width:180px; height:120px; float:left;"   >';
    echo '<img src="public/pic/'.$game['pic'].'" style="width:150px;"     >';
    echo '<h4>'.$game['game'].'</h4>';
    echo '</div>';
    
}












?>

<?php
$content= ob_get_clean();

include_once 'view/templates/layout.php';
?>