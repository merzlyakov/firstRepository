<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница новостной ленты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Новосная лента</h1>
    <a href="add.php">Добавить новость</a><br><br>
    <?php foreach($listNews as $new): ?>
        <article class='new'>
            <header class='new-header'>
                <a class='new-title' href=""><?php echo $new['title']; ?></a>
            </header>
            <div class='new-container'>
                <?php echo $new['new']; ?>
            </div>
            <footer class='new-footer'>
                <span class='new-date'><?php echo $new['date']; ?></span>
            </footer>
        </article>
    <?php endforeach; ?>
</body>
</html>