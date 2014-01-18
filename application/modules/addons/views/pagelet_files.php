<div class="list-group-item">
<?php
$last_dest = '';
foreach ($files as $file => $file_data):
    // Group files with the same destination for better look
    if ( ! empty($last_dest) && $last_dest != $file_data['dest'])
    {
        echo '</div><div class="list-group-item">';
    }
    $last_dest = $file_data['dest'];
?>
    <div>
        &bull;
        <?php if ( ! empty($file_data['status'])): ?>
            <span class="label label-success">OK</span>
        <?php elseif (isset($file_data['status'])): ?>
            <span class="label label-danger">Failed</span>
        <?php endif; ?>
        <?php echo $file . ' &rarr; ' . $file_data['dest'] . '/' . $file; ?>
    </div>
<?php endforeach; ?>
</div>