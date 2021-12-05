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
<a href="/" class="button_1622476208687">Домой</a>
<div class="text">
<form class="button_1622476208687" action="data/videos.php" method="post" enctype="multipart/form-data">

	<input class="button_1622476208687" type="file" file-accept="video/*" name="file[]"><b>file or url</b><input class="text" file-accept="video/*" type="url" name="file[]"/>
	<p>
	<input type="submit" value="Отправить">

</form>
<br>
</div>
<div class="text">
</div>
<!--картинки с папки-->
<body>

<?php
  $dir = './data/videos/'; // Папка с изображениями
  $cols = 3; // Количество столбцов в будущей таблице с картинками
  $files = scandir($dir); // Берём всё содержимое директории
  echo "<table>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
      echo "<td>"; // Начинаем столбец
      $path = $dir.$files[$i]; // Получаем путь к картинке
      echo "<a href='$path'>"; // Делаем ссылку на картинку
      echo "<video src='$path' width='183' height='100'/>"; // Вывод превью картинки
      echo "</a>"; // Закрываем ссылку
      echo "<a href='$path' width='183' height='100'></a></td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
    }
  }
  echo "</table>"; // Закрываем таблицу
?>
</div>
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