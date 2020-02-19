<?php
ob_start();//начало потока
?>
<h2>Список игр</h2>
<?php
foreach ($gamesList as $game){
    foreach ($companyList as $company) {
        if ($company['id'] == $game['idCompany']) {
            $name = $company['name'];
            //break;
        }
    }




    echo '<article>';
    echo '<h3>'.$game['title'].'</h3>';
    		echo '<img src="public/pic/'.$game['pic'].'">';
		echo '<p>Company: '.$name.'</p>';
                echo '<p>Price: '.$game['price'].' $</p>';
    //-----------link detail game
echo '<p><a href="detailGame?title='.$game['title'].'">Info</a></p>';
    
   echo '</article>'; 
   echo '<div style="clear:both"></div>';
}
?>
<?php
$content= ob_get_clean();//завершение потока вывода
include_once 'view/templates/layout.php';
