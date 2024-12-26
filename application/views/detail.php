<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel Berita</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/ticker-style.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/news/') ?>assets/css/style.css">


    <style>
        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }



        /* Konten Utama */
        .main-content {
            display: flex;
            margin-top: 20px;
        }

        .article-content {
            flex: 2;
            margin-right: 20px;
        }

        .article-content h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .article-content .meta {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .article-content .article-image {
            width: 300px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .article-body p {
            margin-bottom: 15px;
            text-align: justify;
        }

        /* Tags Artikel */
        .article-tags {
            margin-top: 20px;
        }

        .article-tags span {
            display: inline-block;
            background-color: #003366;
            color: #fff;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Sidebar Artikel Terkait */
        .related-articles {
            flex: 1;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .related-articles h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .related-articles ul {
            list-style: none;
        }

        .related-articles ul li {
            margin-bottom: 10px;
        }

        .related-articles ul li a {
            text-decoration: none;
            color: #333;
        }

        .related-articles ul li a:hover {
            color: #003366;
        }

        /* Footer */
        .main-footer {
            background-color: #003366;
            color: #fff;
            padding: 20px 0;
            margin-top: 40px;
        }

        .main-footer p {
            text-align: center;
            font-size: 14px;
        }

        .main-footer ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
        }

        .main-footer ul li {
            margin: 0 15px;
        }

        .main-footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        .main-footer ul li a:hover {
            color: #ddd;
        }










        /* Gaya untuk kontainer utama agar artikel dan sidebar sejajar */
        .container.main-content {
            display: flex;
            gap: 20px;
            /* Jarak antara artikel utama dan sidebar */
        }

        /* Gaya untuk sidebar Berita Lainnya */
        .related-articles {
            flex: 1;
            max-width: 300px;
            background-color: #e1e6eb;
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .related-articles h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .related-articles ul {
            list-style: none;
            padding: 0;
        }

        .related-articles ul li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .related-articles ul li img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 10px;
        }

        .related-articles ul li .related-title {
            font-size: 16px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .related-articles ul li .related-title:hover {
            color: #0066cc;
        }
    </style>
</head>

<body>
    <!-- Header & Navigasi -->
    <header>
        <?php require_once('nav.php') ?>
    </header>

    <!-- Konten Utama -->
    <div class="container main-content">
        <main class="article-content">
            <h2 style="font-weight: 700; font-size:3rem;"><?= strtoupper($konten->judul); ?></h2>

            <?php
            // Asumsikan $konten->tanggal adalah string tanggal dalam format "YYYY-MM-DD"
            $date = new DateTime($konten->tanggal);

            // Array nama bulan dalam bahasa Indonesia
            $bulanIndonesia = [
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember'
            ];

            // Ambil nama bulan dari array
            $bulan = $bulanIndonesia[$date->format('m')];

            // Format tanggal menjadi "DD Bulan YYYY"
            $formattedDate = $date->format('d') . ' ' . $bulan . ' ' . $date->format('Y');
            ?>

            <p class="meta">Dipublikasikan pada: <?= $formattedDate ?> | Oleh: <?= $konten->username ?></p>

            <img width="1100px" src="<?= base_url('upload/konten/' . $konten->foto) ?>">

            <div class="container main-content">
                <!-- Artikel Utama -->
                <section class="article-body" style="margin-top: 4rem; width: 750px; margin-left:1rem;">
                    <p><?= nl2br(htmlspecialchars($konten->keterangan)) ?></p>
                </section>

                <!-- Sidebar Berita Lainnya -->
                <aside class="related-articles" style="margin-top: 4rem; margin-right:2rem;">
                    <h3>Berita Lainnya</h3>
                    <ul>
                        <!-- Asumsikan $beritaLainnya adalah array daftar berita lain yang diambil dari database -->
                        <?php foreach ($konten as $aa){ ?>
                            <li>
                              
                            </li>
                        <?php }?>
                    </ul>
                </aside>
            </div>

        </main>
    </div>

    <!-- Footer -->
    <footer>
        <?php require_once('foter.php') ?>
    </footer>

     <!-- All JS Custom Plugins Link Here here -->
     <script src="<?= base_url('assets/news/') ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assets/news/') ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assets/news/') ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= base_url('assets/news/') ?>assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assets/news/') ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/animated.headline.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.ticker.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url('assets/news/') ?>assets/js/contact.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.form.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/mail-script.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url('assets/news/') ?>assets/js/plugins.js"></script>
    <script src="<?= base_url('assets/news/') ?>assets/js/main.js"></script>
</body>

</html>