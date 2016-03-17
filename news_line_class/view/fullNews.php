<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Полная новость</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Вся новость целиком</h1>

<a href="index.php">Вернуться на главную страницу</a><br><br>

    <article class='new'>
        <header class='new-header'>
            <span class='new-title' href="#"><?php echo $fullNew['title']; ?></span>
        </header>
        <div class='new-container-full'>
            <?php echo $fullNew['new']; ?>
        </div>
        <footer class='new-footer'>
            <span class='new-date'><?php echo $fullNew['date']; ?></span>
        </footer>
    </article>

</body>
</html>