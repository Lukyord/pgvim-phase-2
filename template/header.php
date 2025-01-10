<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/jquery-ui-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

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
    <script src="<?php echo $root; ?>assets/js/library/jquery-ui-datepicker.min.js"></script>


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
                    <a href="<?php echo $root; ?>index.php" class="object-auto">
                        <img src="<?php echo $root; ?>assets/media/logo-with-text.png" alt="PGVIM Logo" class="logo">
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
                                            <li class="has-submenu first-level">
                                                <a href="javascript:;">
                                                    ABOUT US
                                                    <i class="ic ic-chevron-down size-icon-2xs show-lg"></i>
                                                    <i class="ic ic-chevron-right size-icon-2xs hidden-device-lg"></i>
                                                </a>

                                                <ul class="submenu">
                                                    <li class="hidden-device-lg">
                                                        <a href="javascript:;" class="submenu-mb-back">
                                                            <span>
                                                                <i class="ic ic-chevron-left"></i>
                                                                ABOUT US
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="has-submenu">
                                                        <a href="javascript:;">
                                                            ABOUT
                                                            <i class="ic ic-chevron-right size-icon-2xs"></i>
                                                        </a>

                                                        <ul class="submenu last-level">
                                                            <li>
                                                                <a href="<?php echo $root; ?>about-history.php">HISTORY</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo $root; ?>about-vision.php">VISION & VALUE</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo $root; ?>about-team.php">OUR TEAM</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root; ?>about-support.php">SUPPORT PGVIM</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root; ?>about-showcase.php">SHOWCASES</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="has-submenu first-level">
                                                <a href="javascript:;">
                                                    LEARNING & OPPORTUNITY
                                                    <i class="ic ic-chevron-down size-icon-2xs show-lg"></i>
                                                    <i class="ic ic-chevron-right size-icon-2xs hidden-device-lg"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li class="hidden-device-lg">
                                                        <a href="javascript:;" class="submenu-mb-back">
                                                            <span>
                                                                <i class="ic ic-chevron-left"></i>
                                                                LEARNING & OPPORTUNITY
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root; ?>learning-program.php">PROGRAMS</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root; ?>learning-opportunity.php">OPPORTUNITY</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="has-submenu first-level">
                                                <a href="javascript:;">
                                                    OUR SERVICES
                                                    <i class="ic ic-chevron-down size-icon-2xs show-lg"></i>
                                                    <i class="ic ic-chevron-right size-icon-2xs hidden-device-lg"></i>
                                                </a>

                                                <ul class="submenu">
                                                    <li class="hidden-device-lg">
                                                        <a href="javascript:;" class="submenu-mb-back">
                                                            <span>
                                                                <i class="ic ic-chevron-left"></i>
                                                                OUR SERVICES
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="has-submenu">
                                                        <a href="javascript:;">
                                                            INTERNAL SERVICES
                                                            <i class="ic ic-chevron-right size-icon-2xs"></i>
                                                        </a>

                                                        <ul class="submenu">
                                                            <li class="hidden-device-lg">
                                                                <a href="javascript:;" class="submenu-mb-back">
                                                                    <span class="opacity-05">
                                                                        <i class="ic ic-chevron-left"></i>
                                                                        OUR SERVICES
                                                                    </span>
                                                                    <span>
                                                                        <i class="ic ic-chevron-left"></i>
                                                                        INTERNAL SERVICES
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="has-submenu">
                                                                <a href="javascript:;">
                                                                    FOR STUDENTS
                                                                    <i class="ic ic-chevron-right size-icon-2xs"></i>
                                                                </a>

                                                                <ul class="submenu last-level">
                                                                    <li><a href="#link-out">ROOM BOOKING</a></li>
                                                                    <li><a href="#link-out">SCHOLARSHIPS</a></li>
                                                                    <li><a href="#link-out">REGISTRATION</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#link-out">
                                                                    STAFF & FACULTY
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#link-out">
                                                                    ALUMNI
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $root; ?>service-external.php">EXTERNAL SERVICES</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="<?php echo $root; ?>activities.php">
                                                    ACTIVITIES & PROJECTS
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo $root; ?>news.php">
                                                    NEWS & ANNOUNCEMENT
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo $root; ?>contact.php">
                                                    CONTACT
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer">
                                <?php
                                include($root . 'include/language-select.php');
                                ?>
                                <div class="panel-decoration hidden-device-lg">
                                    <div class="object-auto">
                                        <img src="./assets/media/design/illustration2.svg" alt="Illustration">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Ctrl -->
                <div class="header-menu-ctrl hidden-device-lg">
                    <a class="ctrl" href="javascript:;">
                        <span class="hamburger"><span class="bars">&nbsp;</span></span>
                    </a>
                </div>
            </div>
        </header>