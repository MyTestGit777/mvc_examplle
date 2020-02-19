<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
<link href="public/css/mystyle2.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="header clearfix">
	  <h2>Пример MVC технологии. Сайт с данными из массивов</h2>
        <h4 class="text-muted">
		<!--    menyy           -->
                <a href="./">Главная</a> &#187; 
                <a href="games">Игры</a> &#187;
        </h4>
      </div>	  
      <div id="content" style="padding-top:20px;">		
	
	<!--    content   -> view        -->
	
        <?php
        //$content- содержимое страницы
        // получает значение в зависимости от выбора: ссылка, форма..
        //результат: список или одна запись
        if(isset($menyy)){
            echo '<div class="left">';
                echo $menyy;
            echo '</div>';
            
            echo '<div class="right">';
        }
        
        
                    if(isset($content)){
                        echo $content;
                    }
        if(isset($menyy)){
            echo '</div>';
        }
        
        ?>
        
        
      </div>
      <footer class="footer">
        <p>&copy; 2019 JPTVR17 - FirstName Design </p>
      </footer>
    </div> <!-- container -->
</body>
</html>