<!DOCTYPE html>
<html dir="ltr "lang="id" vocab="http://schema.org/">
    <head>
        <meta charset="utf-8">
		<title><?= $title; ?></title>
		<meta name="description" content="<?= $desc; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?=base_url();?>">
        <meta name="author" content="PT. Kodebiner Teknologi Indonesia">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
		<meta property="og:url" content="<?=$uri?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?= $title; ?>" />
		<meta property="og:description" content="<?= $desc; ?>" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:image" content="<?=base_url()?>img/fb-share.jpg" />
		<meta property="og:image:secure_url" content="<?=base_url()?>img/fb-share.jpg" />
		<meta property="og:image:alt" content="Dinda & Lillo" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="700px" />
		<meta property="og:image:height" content="470px" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js" defer></script>
    </head>
    <body>
        <!-- Main Section -->
        <main role="main">
            <!-- Cover Section -->
            <section class="uk-section uk-width-1-1 uk-inline" uk-height-viewport="offset-top: true">
                <div class="uk-position-large uk-position-top-center">
                    <img class="uk-width-1-1" src="img/logo.svg" />
                </div>
                <div class="uk-position-bottom-center gk-kepada">
                    <div class="uk-text-center uk-margin-large">
                        <div class="uk-h4 uk-margin-remove" style="font-style: italic; color:#E60013;">Dengan Hormat Mengundang :</div>
                        <div class="uk-h3 uk-margin-remove" style="font-style: italic; font-weight: 700; color:#E60013;"><?=$guest['name']?></div>
                    </div>
                    <div class="uk-text-center uk-margin">
                        <a href="<?=$uri?>#detailevent" id="openbutton" class="uk-button uk-button-secondary" uk-scroll>Buka</a>
                    </div>
                </div>
            </section>
            <!-- Cover Section End -->

            <!-- Detail Event -->
            <section id="detailevent" class="uk-section gk-header uk-width-1-1 uk-inline" uk-height-viewport>
                <div class="uk-position-center">
                    <div class="uk-text-center">
                        <div class="uk-h3 uk-text-uppercase" style="letter-spacing: 20px; color: #fff;">Undangan</div>
                        <div class="uk-flex uk-flex-center">
                            <hr class="separator" />
                        </div>
                        <div class="uk-h1 uk-margin-small-top uk-margin-remove-bottom uk-text-uppercase uk-text-bold" style="letter-spacing: 15px; color: #FFCD05;">Grand</div>
                        <div class="uk-h1 uk-margin-remove-top uk-text-uppercase uk-text-bold" style="letter-spacing: 10px; color: #FFCD05;">Opening</div>                        
                        <div class="uk-flex uk-flex-center">
                            <hr class="separator" />
                        </div>
                        <div class="uk-h2 uk-margin-small-top uk-margin-remove-bottom uk-text-uppercase uk-text-bold" style="color: #fff;">Warung Padang Upik</div>
                        <div class="uk-h1 uk-margin-remove-top uk-text-uppercase uk-text-bold" style="letter-spacing: 20px; color: #fff;">Surabaya</div>
                        <div class="uk-flex uk-flex-center">
                            <hr class="separator" />
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center uk-margin">
                        <div class="uk-width-1-2@m uk-flex-middle uk-flex-center uk-grid-small" uk-grid>
                            <div class="uk-width-1-6 uk-text-center">
                                <img class="uk-width-1-2" src="img/time.svg" />
                            </div>
                            <div class="uk-width-5-6 uk-h4" style="color: #FFCD05;">
                                <div class="">Jumat, 22 Desember 2023</div>
                                <div class="">Pk. 09.00 - 11.30 WIB</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-center uk-margin">
                        <div class="uk-width-1-2@m uk-flex-middle uk-grid-small" uk-grid>
                            <div class="uk-width-1-6 uk-text-center">
                                <img class="uk-width-1-2" src="img/pin.svg" />
                            </div>
                            <div class="uk-wdith-5-6 uk-h4" style="color: #FFCD05;">
                                <div class="">Jl. Kapuas no. 24/ Jl. Darmo no. 92</div>
                                <div class="">Kota Surabaya (Selatan RS. Darmo)</div>
                            </div>
                        </div>
                    </div>
                    <div class="content-width"></div>
                </div>
                <div class="uk-position-bottom">
                    <img class="uk-width-1-1" src="img/footer.svg" />
                </div>
            </section>
            <!-- Detail Event End -->
        </main>
        <!-- Main Section end -->
    </body>
</html>