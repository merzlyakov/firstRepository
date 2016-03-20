<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница новостной ленты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Новосная лента</h1>
    <a href="<?php echo 'index.php?contr=Admin&act=Put'; ?>">Добавить новость</a><br><br>
    <?php foreach($items as $item): ?>
        <article class='new'>
            <header class='new-header'>
                <a class='new-title' href="<?php echo 'index.php?id=' . $item->id . '&contr=News&act=One'; ?>"><?php echo $item->title; ?></a>
            </header>
            <div class='new-container'>
                <?php echo $item->new; ?>
            </div>
            <footer class='new-footer'>
                <span class='new-date'><?php echo $item->date; ?></span>
            </footer>
        </article>
    <?php endforeach; ?>
</body>
</html>