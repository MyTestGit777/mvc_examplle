<?php
ob_start();//начало потока
?>
<h2>Error 404</h2>
<article>
    <p>По данному адресу страница не найдена</p>
	
</article>
<?php
$content= ob_get_clean();//завершение потока вывода
include_once 'view/templates/layout.php';
