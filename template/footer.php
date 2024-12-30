<footer id="footer">
    <div class="footer-nav">
        <div class="contact-and-links">
            <div class="contact">
                <address>
                    Princess Galyani Vadhana Institute of Music,<br>
                    2010 Arun Amarin Rd, Bang Yi Khan, Bang Phlat,<br>
                    Bangkok 10700 THAILAND
                </address>
                <div class="tel-and-email">
                    <a href="tel:+6624478594" class="tel">(02) 447 8594-7</a>
                    <a href="tel:+6624478598" class="tel">(02) 447 8598</a>
                    <a href="mailto:saraban@pgvim.ac.th" class="email">saraban@pgvim.ac.th</a>
                </div>
                <div class="socials">
                    <a href="https://www.instagram.com/pgvim_music" target="_blank"><i class="size-icon-sm ic ic-instagram"></i></a>
                    <a href="https://www.facebook.com/PGVIMusic" target="_blank"><i class="size-icon-sm ic ic-facebook"></i></a>
                    <a href="https://www.youtube.com/@PGVIMChannel" target="_blank"><i class="size-icon-sm ic ic-youtube"></i></a>
                </div>
            </div>
            <div class="links">
                <div class="accordion-container trigger-all">
                    <div class="accordion">
                        <h3 class="entry-title hidden-device-md">ABOUT US</h3>
                        <h3 class="pc-title show-md">ABOUT US</h3>
                        <div class="entry-panel">
                            <ul class="footer-links">
                                <li><a href="<?php echo $root; ?>about-history.php">History</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion">
                        <h3 class="entry-title hidden-device-md">LEARNING & OPPORTUNITIES</h3>
                        <h3 class="pc-title show-md">LEARNING & OPPORTUNITIES</h3>
                        <div class="entry-panel">
                            <ul class="footer-links">
                                <li><a href="<?php echo $root; ?>learning-program.php">Bachelor of Music Program (B.M.)</a></li>
                                <li><a href="https://www.pgvim.ac.th/postgrad/" target="_blank">Master of Music (M.M.)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $staff = [
            "link" => $root . "index.php",
            "is-footer" => "true",
            "extra-class" => "footer left animate fadeIn"
        ];

        include($root . "include/element-staff-small.php");
        ?>

        <div class="privacy-and-copyright">
            <a href="<?php echo $root; ?>page.php" class="privacy-link">Privacy Policy</a>
            <p class="copyright">© 2024 Princess Galyani Vadhana Institute of Music. All rights reserved. ::*</p>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php //if($page_index) { include($root."include/_wp-code/wp-cookie-law-info-bar.php"); } 
?>

<!-- <div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div> -->

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/util.js?v=<?php echo time(); ?>"></script>

</body>

</html>