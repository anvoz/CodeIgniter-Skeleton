<ul>
<?php
$last_dest = '';
foreach ($files as $file => $file_data):
    // Group files with the same destination for better look
    if ( ! empty($last_dest) && $last_dest != $file_data['dest'])
    {
        echo '</ul><ul>';
    }
    $last_dest = $file_data['dest'];
?>
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