<html>
<head>
    <meta charset="utf-8">
    <title>My test page</title>
    <link href="http://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <meta name="robots" content="noindex">
</head>
<!--верхняя панель-->
<div class="outer">
    <font color="fffff">
    <div bgcolor="#000000" align="center" class="site-footer1" align="center"><a href="index.php">&#5314;MINEXIKS&#5316;</a></div>
    </font>
</div>
<!--верхняя панель-->
<p></p>
<br>
<div class="text">
<a href="/" class="button_1622476208687">
  Домой
</a>
<form action="data/music.php" method="post" enctype="multipart/form-data">

	<input type="file" file-accept="audio/*" name="file[]">

	<input type="submit" value="Отправить">

</form>
<br>
</div>
<!--картинки с папки-->
<body>
<font color="fffff">
<?php
    $dir = "./data/music/";   //задаём имя директории
    if(is_dir($dir)) {   //проверяем наличие директории 
         $files = scandir($dir);    //сканируем (получаем массив файлов)
         array_shift($files); // удаляем из массива '.'
         array_shift($files); // удаляем из массива '..'
         for($i=0; $i<sizeof($files); $i++) 
         echo '<div class="text"><p>'.$files[$i].'</p><audio controls><source src="'.$dir.$files[$i].'" width="551" height="32"></audio><a href="'.$dir.$files[$i].'">Download</a></div><br>';  //выводим все файлы
    } 
    else echo $dir.' -такой директории нет;<br>';
?>
</font>
</body>
    <!--картинки с папки-->

    <!--<body bgcolor="#000000">
    <font color="fffff">

        <p>Test my</p>
        <img src="images/g1.png" alt="The Firefox logo: a flaming fox surrounding the Earth.">
    </font>
-->
<!--нижняя панель-->
<div class="outer">
    <font color="fffff">
    <div bgcolor="#000000" class="site-footer"> Copyright © NIKGRIGOR ▐ SITE MINEXIKS▐<b> Phone nomber: +380970731132</b>  <b>Mail: nikgrigorhi@gmail.com</div>
    </font>
</div>
<!--нижняя панель-->
</html>