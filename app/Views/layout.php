<!DOCTYPE html>
<html dir="ltr "lang="<?=$lang?>" vocab="http://schema.org/">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?=base_url();?>">
        <title><?=$title?></title>
        <meta name="description" content="<?=$description?>">
        <meta name="author" content="PT. Kodebiner Teknologi Indonesia">
        <link rel="stylesheet" href="css/theme.css">
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

        <!-- Extra Script Section -->
        <?= $this->renderSection('extraScript') ?>
        <!-- Extra Script Section end -->

    </head>
    <body>
        <!-- Main Section -->
        <main role="main">
            <?= $this->renderSection('main') ?>
        </main>
        <!-- Main Section end -->
    </body>
</html>
