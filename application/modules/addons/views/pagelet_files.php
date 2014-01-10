<ul>
<?php foreach ($files as $file => $file_data): ?>
    <li>
        <?php if ( ! empty($file_data['status'])): ?>
            <span class="label label-success">OK</span>
        <?php elseif (isset($file_data['status'])): ?>
            <span class="label label-danger">Failed</span>
        <?php endif; ?>
        <?php echo $file . ' &rarr; ' . $file_data['dest'] . '/' . $file; ?>
    </li>
<?php endforeach; ?>
</ul>