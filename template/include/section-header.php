<div class="section-header">
    <h2 class="title animate fadeIn">
        <?php
        echo $section["title"];
        ?>
    </h2>

    <?php
    if (isset($section["description"])) {
    ?>
        <p class="description animate fadeIn" data-wow-delay="0.3s">
            <?php
            echo $section["description"];
            ?>
        </p>
    <?php
    }
    ?>

    <div class="read-more-toggle animate fadeIn" data-wow-delay="0.6s">
        <a href="javascript:;" data-text-read-more="Read more" data-text-show-less="Show less">Read More</a>
    </div>
</div>