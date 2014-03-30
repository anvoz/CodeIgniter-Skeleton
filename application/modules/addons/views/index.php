<div class="row">
    <div class="col-md-9">
        <div>
            <h1>Add-ons</h1>

            <?php foreach ($addons['list'] as $addon_key => $addon_name): ?>
                <h2 id="<?php echo str_replace('_', '-', $addon_key); ?>">
                    <?php echo $addon_name; ?>
                </h2>
                <div><?php echo $pagelet_content[$addon_key]; ?></div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-3">
        <?php echo $pagelet_sidebar; ?>
    </div>
</div>