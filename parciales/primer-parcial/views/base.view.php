<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8" />
        <link rel="icon" href="statics/images/favicon.ico" sizes="16x16" type="image/png">
        <link href="<?= statics("reset.css") ?>" rel="stylesheet" type="text/css">
        <link href="<?= statics("main.css") ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <main>            
            <?php require "header.view.php" ?>
            <section class="main-container">			
                <h1><?= $main_title ?></h1>
                <?php eval($content); ?>
				<?php require "errors.view.php" ?>
            </section>
        </main>
    </body>
    <script type='text/javascript' src='../statics/javascripts/main.js'></script>
</html>
