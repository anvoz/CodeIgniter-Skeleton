<?php $addon_id = str_replace('_', '-', $addon_key); ?>

<?php ( ! empty($addon['description'])) && print($addon['description']); ?>

<h3>Installation</h3>
<div id="<?php echo $addon_id; ?>-installation" class="panel-group">
<?php if ( ! empty($addon['require'])): ?>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle" href="#<?php echo $addon_id; ?>-require"
                    data-toggle="collapse" data-parent="#<?php echo $addon_id; ?>-installation"
                >
                    <span class="caret"></span>
                    Require: manually install / uninstall required add-on(s)
                </a>
            </h4>
        </div>
        <ul id="<?php echo $addon_id; ?>-require" class="list-group panel-collapse collapse in">
        <?php foreach ($addon['require'] as $require): ?>
            <li class="list-group-item">
                <a href="#<?php echo $require; ?>">#<?php echo $require; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ( ! empty($pagelet_copy_files)): ?>
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="pull-right" style="margin-top: -2px;">
                <a class="btn btn-primary btn-xs" href="#"
                    rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/copy/' . $addon_key); ?>"
                    <?php if ( ! empty($addon['require'])): ?>
                        data-toggle="tooltip" data-placement="top" data-original-title="Don't forget to install addon(s) in the Require section yourself"
                    <?php endif; ?>
                >Copy</a>
                <a class="btn btn-danger btn-xs" href="#"
                    rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/delete/' . $addon_key); ?>"
                    <?php if ( ! empty($addon['require'])): ?>
                        data-toggle="tooltip" data-placement="top" data-original-title="Don't forget to uninstall addon(s) in the Require section yourself"
                    <?php endif; ?>
                >Delete</a>
            </div>
            <h4 class="panel-title">
                <a class="accordion-toggle" href="#<?php echo $addon_id; ?>-auto"
                    data-toggle="collapse" data-parent="#<?php echo $addon_id; ?>-installation"
                >
                    <span class="caret"></span>
                    Auto: copy / delete file(s)
                </a>
            </h4>
        </div>
        <div id="<?php echo $addon_id; ?>-auto" class="list-group panel-collapse collapse">
            <?php echo $pagelet_copy_files; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ( ! empty($addon['manual'])): ?>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle" href="#<?php echo $addon_id; ?>-manual"
                    data-toggle="collapse" data-parent="#<?php echo $addon_id; ?>-installation"
                >
                    <span class="caret"></span>
                    Manual
                </a>
            </h4>
        </div>
        <ul id="<?php echo $addon_id; ?>-manual" class="list-group panel-collapse collapse">
        <?php foreach ($addon['manual'] as $manual): ?>
            <li class="list-group-item"><?php echo $manual; ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
</div>

<?php if ( ! empty($addon['skeleton'])): ?>
    <h3>Skeleton (only available after installed)</h3>

    <p>
        <a target="_blank" href="<?php echo site_url('#' . str_replace('_', '-', $addon_key)); ?>">
            <?php echo site_url('#' . str_replace('_', '-', $addon_key)); ?>
        </a>
    </p>
<?php endif; ?>

<hr>