<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PR6 Routing</title>
</head>
<body>

<h2>Загрузка файла</h2>
<form method="post" enctype="multipart/form-data" action="/index.php/FileController/upload">
<input type="file" name="myfile">
<button type="submit">Загрузить</button>
</form>

<h2>Проверка файла</h2>
<form method="post" action="/index.php/FileController/check">
<input type="text" name="filename">
<button type="submit">Проверить</button>
</form>

<h2>Файлы</h2>
<ul>
<?php
$files = scandir("files");
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li>$file <a href='/index.php/FileController/delete?name=$file'>Удалить</a></li>";
    }
}
?>
</ul>

</body>
</html>
