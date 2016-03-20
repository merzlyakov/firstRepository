<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавление новостей</title>
</head>
<body>
    <h1> Новая новость :)</h1>
    <?php
    if (isset($res) && $res) {
        echo '<h3> Новость добавлена...</h3>';
    } ?>
    <a href="index.php">Главная страница</a><br><br>

    <form action="<?php echo 'index.php?contr=Admin&act=Put'; ?>" method="post">
        <label for="title">Заголовок новости</label><br>
        <input type="text" id="title" name="title" value="Новая новость!!!"><br><br>
        <label for="new">Введите новость</label><br>
        <textarea name="new" id="new" cols="50" rows="5">
Новость дня!
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
Много-много текста и букв, букв, букв...
        </textarea><br><br>
        <label for="date">Дата выхода</label><br>
        <input type="date" id="date" name="date" value="2016-02-10"><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>