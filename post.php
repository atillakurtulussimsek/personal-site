<?php
require('functions.php');

$Post = $Utils->getPost(@$_GET['slug']);
if(empty($Post) || empty($_GET['slug'])){
    header('Location: /#blog');
    die('Lütfen bekleyin.');
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $Utils->getConfig('TITLE'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="AlbaySIMSEK" />
    <script async src="https://arc.io/widget.min.js#Wo8U9qA1"></script>
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/animations.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $Utils->getConfig('CDN_URL'); ?>/css/main.css" type="text/css">

    <script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/modernizr.custom.js"></script>
    <script async src='<?php echo $Utils->getConfig('CDN_URL'); ?>/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>
<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(<?php echo $Utils->getConfig('CDN_URL'); ?>/img/main_bg.png);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/avatar.jpg" alt="Alex Smith">
                </div>
                <div class="header-titles">
                    <h2><?php echo $Utils->getConfig('FULL_NAME'); ?></h2>
                    <h4><?php echo $Utils->getConfig('SUBTITLE'); ?></h4>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="/#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a href="/#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">Özgeçmiş</span>
                    </a>
                </li>
                <li>
                    <a href="/#portfolio" class="nav-anim">
                        <span class="menu-icon lnr lnr-camera"></span>
                        <span class="link-text">Resim Galerisi</span>
                    </a>
                </li>
                <li>
                    <a href="/#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="/#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">İletişim</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <?php
                    $Links = $Utils->getSocialMediaLinks();
                    foreach($Links as $Data)
                    {
                        ?>
                        <li><a href="<?php echo $Data['url']; ?>" alt="<?php echo $Data['url']; ?>" target="_blank"><i class="<?php echo $Data['icon']; ?>"></i></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="<?php echo $Utils->getConfig('CONTACT_URL'); ?>" target="_blank" class="btn btn-primary">İletişime Geç</a>
            </div>

            <div class="copyrights"><?php echo $Utils->getConfig('FOOTER'); ?></div>
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <div class="content-area single-page-area">
            <div class="single-page-content">

                <article class="post">

                    <div class="post-thumbnail">
                        <img src="<?php echo $Utils->getConfig('CDN_URL'); ?>/img/blog/<?php echo $Post['photo_name']; ?>" alt="image">
                    </div>

                    <div class="post-content">
                        <!-- /Entry header -->
                        <header class="entry-header">
                            <!-- Entry meta -->
                            <div class="entry-meta entry-meta-top">
                                <span><a href="#" rel="category tag"><?php echo $Post['category']; ?></a></span>
                            </div>
                            <!-- /Entry meta -->

                            <h2 class="entry-title"><?php echo $Post['title']; ?></h2>
                        </header>
                        <!-- /Entry header -->

                        <!-- Entry content -->
                        <div class="entry-content">
                            <div class="row">
                                <div class=" col-xs-12 col-sm-12 ">
                                    <div class="col-inner">
                                        <?php echo $Post['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Entry content -->

                        <div class="entry-meta entry-meta-bottom">
                            <div class="date-author">
                      <span class="entry-date">
                        <a href="#" rel="bookmark">
                          <i class="far fa-clock"></i> <span class="entry-date"> <?php echo $Post['date']; ?></span>
                        </a>
                      </span>
                                <span class="author vcard">
                        <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> <?php echo $Post['author']; ?></a>
                      </span>
                            </div>
                        </div>

                        <!--<div class="post-tags">
                            <div class="tags">
                                <a href="#" rel="tag"></a>
                            </div>
                        </div>-->
                    </div>
                </article>

            </div>
        </div>

    </div>
</div>
<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/modernizr.custom.js"></script>
<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/animating.js"></script>

<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/imagesloaded.pkgd.min.js"></script>

<script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/perfect-scrollbar.min.js'></script>
<script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery.shuffle.min.js'></script>
<script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/masonry.pkgd.min.js'></script>
<script src='<?php echo $Utils->getConfig('CDN_URL'); ?>/js/owl.carousel.min.js'></script>
<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/jquery.magnific-popup.min.js"></script>

<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/validator.js"></script>
<script src="<?php echo $Utils->getConfig('CDN_URL'); ?>/js/main.js"></script>
</body>
</html>