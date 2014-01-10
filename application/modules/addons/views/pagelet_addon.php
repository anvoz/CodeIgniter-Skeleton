<?php ( ! empty($addon['description'])) && print($addon['description']); ?>

<h3>Installation</h3>
<?php if ( ! empty($addon['require'])): ?>
    <h4>Require (manual copy / delete)</h4>
    <ul>
        <?php foreach ($addon['require'] as $require): ?>
            <li><a href="#<?php echo $require; ?>">#<?php echo $require; ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ( ! empty($pagelet_copy_files)): ?>
    <h4>Auto (copy & delete)</h4>
    <?php echo $pagelet_copy_files; ?>
    <p>
        <a class="btn btn-primary" href="#"
            rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/copy/' . $addon_key); ?>"
        >Copy</a>
        <a class="btn btn-danger" href="#"
            rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/delete/' . $addon_key); ?>"
        >Delete</a>
    </p>
<?php endif; ?>

<?php if ( ! empty($addon['skeleton'])): ?>
    <h3>Skeleton (only available after installed)</h3>

    <p>
        <a target="_blank" href="<?php echo site_url('#' . str_replace('_', '-', $addon_key)); ?>">
            <?php echo site_url('#' . str_replace('_', '-', $addon_key)); ?>
        </a>
    </p>
<?php endif; ?>

<hr>