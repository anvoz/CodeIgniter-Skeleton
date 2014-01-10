<ul>
<?php foreach ($files as $file => $file_data): ?>
    <li>
        <?php if ( ! empty($file_data['status'])): ?>
            <div class="alert alert-success">
        <?php elseif (isset($file_data['status'])): ?>
            <div class="alert alert-danger">
        <?php endif; ?>
        <?php echo $file . ' &rarr; ' . $file_data['dest'] . '/' . $file; ?>
        <?php (isset($file_data['status'])) && print('</div>'); ?>
    </li>
<?php endforeach; ?>
</ul>