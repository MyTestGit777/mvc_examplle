<?php
ob_start();//начало потока
?>
<h2>Задание 4-2. Проект MVC-массив: меню, content-</h2>
<article>
<h3>Задание 4-2. Проект MVC-массив: меню, content-  Portfolio: </h3>
	<ol>	
		<li>Создайте проект Praktika4-2</li>
		<li>Используйте для работы сайт "HomePage" (JS script)</li>
                <li>Информацию для вложения сохраните в формате html</li>
                <li>Создать массивы для работы: см. Проект "Страны и флаги". Массив Category  - не менее 4 записей, массив например: details(cars, planets, products и т.д.) не менее 8 записей по разным категориям</li>
                <li>Навигация по сайту - страницы: Главная, далее пункты меню из массива Category </li>
                <li>Создайте model, controller, view - для построения меню и вывода информации по ссылке.</li>
	</ol>
</article>
<?php
$content= ob_get_clean();//завершение потока вывода
include_once 'view/templates/layout.php';
