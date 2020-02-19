<?php
ob_start();//начало потока
?>
<h2>Игра</h2>
<?php
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
                echo '<p>Description: ';
                include 'public/text/'.$game['description'];
                        echo '</p>';
    //-----------link detail game
echo '<p><a href="games">Back to list</a></p>';
    
   echo '</article>'; 
   echo '<div style="clear:both"></div>';

?>
<?php
$content= ob_get_clean();//завершение потока вывода
include_once 'view/templates/layout.php';
