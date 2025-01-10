<div class="card animate fadeIn" data-card="announcement">
    <a href="<?php echo $announcement["link"] ?>" class="link-overlay">&nbsp;</a>
    <div class="card-content">
        <p class="card-type"><?php echo $announcement["type"] ?></p>
        <h3 class="card-ttle"><?php echo $announcement["title"]; ?></h3>
        <p class="card-date">
            <span>DATE</span> <span class="opacity-05"><?php echo $announcement["date"]; ?></span>
        </p>
    </div>
</div>