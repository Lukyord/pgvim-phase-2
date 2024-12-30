<div class="directory animate fadeIn">
    <div class="container xl">
        <div class="directory-content">
            <?php foreach ($directory_arr as $directory) { ?>
                <?php if ($directory["url"] != "") { ?>
                    <a href="<?php echo $directory["url"]; ?>" class="directory-item">
                        <p><?php echo $directory["name"]; ?></p>
                    </a>
                <?php } else { ?>
                    <p class="directory-item"><?php echo $directory["name"]; ?></p>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>