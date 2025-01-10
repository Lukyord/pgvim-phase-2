<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="not-found-main">
    <section id="not-found-hero" class="sc hero offset">
        <div class="sc-inner">
            <div class="container">
                <div class="align-center-content">
                    <h2 class="title">No Result Found!</h2>
                    <div class="subtitle">
                        <p>LOOKS LIKE WE COULD'T FIND WHAT YOU'RE LOOKING FOR</p>
                    </div>
                    <div class="social c-blue">
                        <a href="https://www.instagram.com/pgvim_music" target="_blank"><i class="ic ic-instagram"></i></a>
                        <a href="https://www.facebook.com/PGVIMusic" target="_blank"><i class="ic ic-facebook"></i></a>
                        <a href="https://www.youtube.com/@PGVIMChannel" target="_blank"><i class="ic ic-youtube"></i></a>
                        <a href="#outer" target="_blank"><i class="ic ic-messenger"></i></a>
                    </div>
                    <a href="<?php echo $root ?>index.php" class="button active margin-x-auto">
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-map" class="sc">
        <div class="sc-inner sc-inner--follows">
            <div class="marquee-bg-content">
                <?php
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

                <div class="main-content door">
                    <picture class="object-contain">
                        <img src="./assets/media/design/door.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>