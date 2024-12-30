<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Princess Galyani Vadhana Institute of Music</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="Princess Galyani Vadhana Institute of Music">
    <meta property="og:image" content="<?php echo $root; ?>assets/media/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/media/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/media/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/media/favicon/safari-pinned-tab.svg" color="#0088ac">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#FFFFFF">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-default.css?v=<?php echo time(); ?>">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <header id="header">
            <div class="header-nav">

                <!-- Logo -->
                <div class="header-logo">
                    <a href="<?php echo $root; ?>index.php" class="logo">
                        <img src="<?php echo $root; ?>assets/media/logo-with-text.png" alt="PGVIM Logo" draggable="false">
                    </a>
                </div>

                <!-- Menu -->
                <div class="header-menu">
                    <div class="panel-overlay hidden-device-sm"></div>
                    <div class="panel">
                        <div class="wrapper">
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">
                                    <div class="panel-body">
                                        <ul class="menu size-button2">
                                            <li id="about-breadcrumb-trigger" class="breadcrumb-trigger">
                                                <p>
                                                    ABOUT US
                                                    <i class="ic ic-chevron-down size-icon-2xs show-md"></i>
                                                    <i class="ic ic-chevron-right size-icon-2xs hidden-device-md"></i>
                                                </p>
                                            </li>
                                            <li id="learning-breadcrumb-trigger" class="breadcrumb-trigger">
                                                <p>
                                                    LEARNING & OPPORTUNITIES
                                                    <i class="ic ic-chevron-down size-icon-2xs show-md"></i>
                                                    <i class="ic ic-chevron-right size-icon-2xs hidden-device-md"></i>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="decoration hidden-device-md">
                                <div class="illustration var-2">
                                    <img src="./assets/media/design/illustration2.svg" alt="Illustration">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Breadcrumb -->
                <div id="about-breadcrumb" class="breadcrumb">
                    <div class="wrapper">
                        <div class="panel-scroll" data-lenis-prevent>
                            <div class="panel-container">
                                <div class="panel-body">
                                    <div class="breadcrumb-menu">
                                        <a href="javascript:;" class="breadcrumb-close hidden-device-md">
                                            <i class="ic ic-chevron-left size-icon-2xs"></i>
                                            ABOUT US
                                        </a>
                                        <a href="<?php echo $root; ?>about-history.php">
                                            HISTORY
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="decoration hidden-device-md">
                            <div class="illustration var-1">
                                <img src="./assets/media/design/illustration1.svg" alt="Illustration">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="learning-breadcrumb" class="breadcrumb">
                    <div class="wrapper">
                        <div class="panel-scroll" data-lenis-prevent>
                            <div class="panel-container">
                                <div class="panel-body">
                                    <div class="breadcrumb-menu">
                                        <a href="javascript:;" class="breadcrumb-close hidden-device-md">
                                            <i class="ic ic-chevron-left size-icon-2xs"></i>
                                            LEARNING & OPPORTUNITIES
                                        </a>
                                        <a href="<?php echo $root; ?>learning-program.php">
                                            PROGRAMS
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="decoration hidden-device-md">
                            <div class="illustration var-4">
                                <img src="./assets/media/design/illustration4.svg" alt="Illustration">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Ctrl -->
                <div class="header-menu-ctrl hidden-device-md">
                    <a class="ctrl" href="javascript:;">
                        <span class="hamburger"><span class="bars">&nbsp;</span></span>
                    </a>
                </div>
            </div>
        </header>