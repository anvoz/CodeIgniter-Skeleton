<?php if ( ! empty($config['files'])): ?>
    <?php foreach ($config['files'] as $file => $dest): ?>
        <?php echo '<div>' . $file . ' &rarr; ' . $dest . '/' . $file . '</div>'; ?>
    <?php endforeach; ?>
<?php endif; ?>