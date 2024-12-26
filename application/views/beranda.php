<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="prel-oader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <?php require_once('nav.php') ?>
        <!-- Header End -->
    </header>

    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <?php foreach ($konten as $aa) { ?>
                                            <li class="news-item"><?= $aa['judul'] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $counter = 0; // Initialize a counter variable

                        foreach ($konten as $kk) {
                            $counter++; // Increment the counter for each loop iteration

                            // Only display content if it's the 2nd, 3rd, 4th, or 5th item
                            if ($counter >= 0 && $counter <= 1) {
                        ?> <div class="col-lg-8">
                                    <!-- Trending Top -->
                                    <div class="trending-top mbDQO-30">
                                        <div class="trend-top-img">
                                            <img src="<?= base_url('upload/konten/' . $kk['foto']) ?>" alt="">
                                            <div class="trend-top-cap">
                                                <span><?= $kk['nama_kategori'] ?></span>
                                                <h2><a href="`<?=base_url('welcome/artikel/') . $kk['slug']?>">`<?= $kk['judul'] ?></a></h2>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                        } ?>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom mt-5">
                                <div class="row">
                                    <?php
                                    $counter = 0; // Initialize a counter variable

                                    foreach ($konten as $kk) {
                                        $counter++; // Increment the counter for each loop iteration

                                        // Only display content if it's the 2nd, 3rd, 4th, or 5th item
                                        if ($counter >= 2 && $counter <= 4) {
                                    ?>
                                            <div class="col-lg-4" >
                                                <div class="single-bottom mb-35">
                                                    <div class="trend-bottom-img mb-30">
                                                        <img style="width:230px; height:150px;" src="<?= base_url('upload/konten/' . $kk['foto']) ?>" alt="">
                                                    </div>
                                                    <div class="trend-bottom-cap">
                                                        <span class="color1"><?= $kk['nama_kategori'] ?></span>
                                                        <h4><a href="<?=base_url('welcome/artikel/') . $kk['slug']?>">
                                                                <?= strlen($kk['keterangan']) > 24 ? substr($kk['keterangan'], 0, 24) . '...' : $kk['keterangan'] ?>
                                                            </a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                                </div>

                                <div class="col-lg-4">
                                    <?php
                                    $counter = 0; // Initialize a counter variable

                                    foreach ($konten as $kk) {
                                        $counter++; // Increment the counter for each loop iteration

                                        // Only display content if it's the 2nd, 3rd, 4th, or 5th item
                                        if ($counter >= 5 && $counter <= 9) {
                                    ?>
                                            <!-- Riht content -->
                                            <div class="trand-right-single d-flex" >
                                                <div class="trand-right-img">
                                                    <img style="width:130px; border-radius:0; height:100px;" src="<?= base_url('upload/konten/' . $kk['foto']) ?>" alt="">
                                                </div>
                                                <div class="trand-right-cap">
                                                    <span class="color1"><?= $kk['nama_kategori'] ?></span>
                                                    <h4><a href="<?=base_url('welcome/artikel/') . $kk['slug']?>"><?= $kk['judul'] ?></a></h4>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20" id="kategori">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Berita</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="<?= base_url("welcome") ?>" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                            <?php foreach ($kategori as $kate) { ?>
                                                <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori'] . '/#kategori') ?>" style="font-size: 15px;" class="nav-item nav-link">
                                                    <?= $kate['nama_kategori'] ?>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">

                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">

                                    <!-- card one -->
                                    <?php
                                    // Number of items to show per page
                                    $items_per_page = 4;

                                    // Total number of content items
                                    $total_items = count($konten);

                                    // Calculate the total number of pages
                                    $total_pages = ceil($total_items / $items_per_page);

                                    // Get the current page from the query string, if available, otherwise default to page 1
                                    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                                    // Make sure the current page is within the valid range
                                    if ($current_page < 1) {
                                        $current_page = 1;
                                    } elseif ($current_page > $total_pages) {
                                        $current_page = $total_pages;
                                    }

                                    // Calculate the offset for array slicing
                                    $offset = ($current_page - 1) * $items_per_page;

                                    // Slice the array to get the content for the current page
                                    $current_page_content = array_slice($konten, $offset, $items_per_page);
                                    ?>

                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <?php foreach ($current_page_content as $kk) { ?>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img style="height:320px; border-radius:0;" src="<?= base_url('upload/konten/' . $kk['foto']) ?>" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <a href=""></a>
                                                                <span class="color1"><?= $kk['nama_kategori'] ?></span>
                                                                <h4><a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>"><?= $kk['judul'] ?></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pagination Links -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <?php if ($current_page > 1): ?>
                                                <li class="page-item"><a class="page-link" href="?page=<?= $current_page - 1 ?>">Previous</a></li>
                                            <?php endif; ?>

                                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                                <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                                            <?php endfor; ?>

                                            <?php if ($current_page < $total_pages): ?>
                                                <li class="page-item"><a class="page-link" href="?page=<?= $current_page + 1 ?>">Next</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>

                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Berita Terhot</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <?php foreach ($konten as $aa) { ?>
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img src="<?= base_url('upload/konten/' . $aa['foto']) ?>" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                            <span class="color1">Corporate</span>
                                            <p><?= $aa['tanggal'] ?></p>
                                            <h4><a href="#"><?= $aa['judul'] ?></a></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-caption">
                                <div class="top-caption">
                                    <span class="color1">Politics</span>
                                </div>
                                <div class="bottom-caption">
                                    <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="video-intro">
                                        <h4>Welcotme To The Best Model Winner Contest</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Start youtube -->
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Berita Terbaru</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <?php foreach ($konten as $aa) { ?>
                                    <div class="single-recent mb-100">

                                        <div class="what-img">
                                            <img src="<?= base_url('upload/konten/' . $aa['foto']) ?>" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <span class="color1"><?= $aa['nama_kategori'] ?></span>
                                            <h4><a href="#"><?= $aa['judul'] ?></a></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>

    <footer>
        <?php require_once('foter.php') ?>
    </footer>

    <!-- JS here -->

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