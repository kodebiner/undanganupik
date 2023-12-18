<!DOCTYPE html>
<html dir="ltr "lang="id" vocab="http://schema.org/">
    <head>
        <meta charset="utf-8">
        <title>Undangan Pembukaan Warung Padang Upik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?=base_url();?>">
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
            <!-- Cover Section -->
            <section class="tm-header uk-width-1-1 uk-inline" uk-height-viewport="offset-top: true">
                <!-- <div class="uk-position-center uk-margin tm-content">
                    <div class=" uk-margin-large">
                        <div class="uk-text-center uk-h1 uk-text-bold uk-text-uppercase uk-margin-remove" style="color:#FFCD05;">Undangan</div>
                        <div class="uk-text-center uk-h4 uk-text-bold uk-margin-remove" style="color:#FFCD05;">Pembukaan Warung Padang Upik cabang Surabaya</div>
                    </div>                    
                    <div class=" uk-margin-large">
                        <div class="uk-h5 uk-text-center uk-margin-remove" style="color:#FFCD05;">22 Desember 2023</div>
                        <div class="uk-h6 uk-text-center uk-margin-remove" style="color:#FFCD05;">09.00 - selesai</div>
                        <div class="uk-h6 uk-text-center uk-margin-remove" style="color:#FFCD05;">JL. Kapuas no. 24/ Jl. Darmo no. 92 Kota Surabaya (Sebelah RS. Darmo)</div>
                    </div>
                </div> -->
                <div class="uk-position-bottom-center tm-kepada">
                    <div class="uk-text-center uk-margin-large">
                        <div class="uk-h4 uk-margin-remove" style="font-style: italic; color:#FFF;">Kepada :</div>
                        <div class="uk-h3 uk-margin-remove" style="font-style: italic; font-weight: 700; color:#FFF;">Bapak Kosmas Mahendra</div>
                    </div>
                </div>
            </section>
            <!-- Cover Section End -->

            <!-- Detail Event Section -->
            <section class="uk-section">
                <div class="uk-grid-margin uk-container uk-container-xlarge">
                    <div class="tm-grid-expand uk-grid">
                        <div class="uk-grid-item-match uk-flex-middle uk-width-1-2@m uk-background-secondary">
                            <div class="uk-padding">
                                <div class="uk-panel uk-width-1-1">
                                    <div class="uk-margin uk-width-2xlarge@m uk-margin-large-left" uk-parallax="x: 0,100; media: @l;" style="transform: translateX(5px);">
                                        <img class="el-image" src="img/detailsec.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-item-match uk-flex-middle uk-width-1-2@m uk-margin">
                            <div class="uk-panel uk-width-1-1">
                                <div class="uk-panel uk-margin-remove-first-child uk-margin uk-width-large uk-margin-auto">
                                    <div class="uk-margin-top uk-h5">
                                        22 Desember 2023
                                    </div>
                                    <div class="uk-h3 wedcem uk-margin-top uk-margin-remove-bottom">
                                        Pembukaan Warung Padang Upik cabang Surabaya
                                    </div>
                                    <div class="uk-panel uk-margin-top uk-h5">
                                        JL. Kapuas no. 24/ Jl. Darmo no. 92 Kota Surabaya (Sebelah RS. Darmo).
                                    </div>
                                </div>
                                <div class="uk-h4 uk-width-large uk-margin-auto">
                                    09.00 - selesai WIB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Detail Event Section End -->

            <!-- Location Section -->
            <section class="uk-section">
                <div class="uk-grid-margin uk-container uk-container-xlarge">
                    <div class="uk-position-relative">
                        <div class="tm-grid-expand uk-grid">
                            <div class="uk-grid-item-match uk-flex-middle uk-width-1-3@m uk-first-column">
                            </div>
                            <div class="uk-grid-item-match uk-flex-middle uk-width-2-3@m uk-background-primary">
                                <div class="uk-padding">
                                    <div class="uk-panel uk-width-1-1">
                                        <div class="tm-map-responsive">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.585046214552!2d112.73939519999999!3d-7.287961999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6dbec7ebbd%3A0x6d3457c099803e45!2sWarung%20Padang%20Upik!5e0!3m2!1sen!2sid!4v1702880327900!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tm-section-title uk-position-center-left uk-position-medium uk-text-nowrap uk-visible@m">
                            <div class="tm-rotate-180">
                            Peta Lokasi
                            </div>
                        </div>    
                    </div>
                </div>
            </section>
            <!-- Location Section End -->
        </main>
        <!-- Main Section end -->
    </body>
</html>