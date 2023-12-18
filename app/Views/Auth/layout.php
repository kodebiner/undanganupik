<!doctype html>
<html dir="ltr "lang="id" vocab="http://schema.org/">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?=base_url();?>">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description;?>">
    <meta name="author" content="PT. Kodebiner Teknologi Indonesia">
    <link rel="icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="16x16" href="favicon/apple-icon-16x16.png">
    <link rel="apple-touch-icon" sizes="32x32" href="favicon/apple-icon-32x32.png">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="96x96" href="favicon/apple-icon-96x96.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="192x192" href="favicon/apple-icon-192x192.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/theme.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <?= $this->renderSection('extraScripts') ?>
</head>

<body>
    <div class="uk-width-1-1 uk-background-secondary" uk-height-viewport>
        <main class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-center" role="main" uk-height-viewport="offset-bottom: true">
            <div class="uk-width-1-3@m">
                <?= $this->renderSection('main') ?>
            </div>
        </main>
        <footer role="footer" class="uk-position-bottom uk-background-primary uk-light">
            <div class="uk-section-xsmall uk-text-center">
                Developed by<br/><a class="uk-link-reset" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
            </div>
        </footer>
    </div>
</body>
</html>
