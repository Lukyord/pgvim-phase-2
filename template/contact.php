<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="contact-main">
    <section id="contact-hero" class="sc hero offset">
        <div class="sc-inner">
            <div class="container">
                <div class="align-center-content">
                    <h2 class="title margin-bottom">Contact PGVIM</h2>
                    <div class="subtitle">
                        <a href="tel:+6624478594">02-447-8594-7</a>
                        <a href="mailto:saraban@pgvim.ac.th">saraban@pgvim.ac.th</a>
                    </div>
                    <p class="description">
                        Princess Galyani Vadhana Institute of Music, <br>
                        2010 Arun Amarin Rd, Bang Yi Khan, Bang Phlat, <br>
                        Bangkok 10700 THAILAND
                    </p>
                    <div class="social c-blue">
                        <a href="https://www.instagram.com/pgvim_music" target="_blank"><i class="ic ic-instagram"></i></a>
                        <a href="https://www.facebook.com/PGVIMusic" target="_blank"><i class="ic ic-facebook"></i></a>
                        <a href="https://www.youtube.com/@PGVIMChannel" target="_blank"><i class="ic ic-youtube"></i></a>
                        <a href="#outer" target="_blank"><i class="ic ic-messenger"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-map" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="marquee-bg-content">
                <?php
                $staff_title = "Get Direction";

                include($root . "include/element-staff.php");
                ?>

                <div class="slides-marquee-wrapper">
                    <div class="marquee-wrapper">
                        <div class="marquee" data-js="liMarquee">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                            ?>
                                <div class="marquee-item">
                                    <div class="decoration">
                                        <div class="illustration var-<?php echo $i + 1; ?>">
                                            <img src="./assets/media/design/illustration<?php echo $i + 1; ?>.svg" alt="Illustration" loading="lazy" draggable="false">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="main-content" data-more-info="Get Direction">
                    <a href="#outer" class="link-overlay">&nbsp;</a>
                    <picture class="object-fit">
                        <img src="./assets/media/design/contact-map.jpg" alt="">
                    </picture>
                </div>
            </div>
            <a href="#outer" class="button active hidden-device-md margin-x-auto">
                Get Direction
            </a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>