<div class="sidebar hidden-print" id="sidebar" data-spy="affix">
    <ul class="nav sidenav">
    <?php foreach ($addons['list'] as $addon_key => $addon_name): ?>
        <li><a href="#<?php echo str_replace('_', '-', $addon_key); ?>"><?php echo $addon_name; ?></a></li>
    <?php endforeach; ?>
    </ul>
</div>