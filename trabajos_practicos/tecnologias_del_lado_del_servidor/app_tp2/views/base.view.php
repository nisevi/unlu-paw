<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8" />
        <link href="<?= statics("main.css") ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require "nav.view.php" ?>
        <h1><?= $main_title ?></h1>
        <?= $content ?>
    </body>
</html>
