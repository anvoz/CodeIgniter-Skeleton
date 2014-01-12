<?php
$first_button_id = 'button-' . mt_rand(1000000, 9999999);
?>

<p>
    Via <code>rel="async"</code> and <code>ajaxify="{$ajax_url}"</code>
    <a id="<?php echo $first_button_id; ?>" class="btn btn-primary" href="#"
            rel="async" ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=a'); ?>">
        Click
        <span class="badge">0</span>
    </a>
</p>
<p>
    Via <code>CIS.Ajax.request('{$ajax_url}', { context: {$this_button} })</code>
    <a class="btn btn-primary" href="#"
            onclick="CIS.Ajax.request('<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=a'); ?>', { context: $(this) }); return false;">
        Click
        <span class="badge">0</span>
    </a>
</p>
<p>
    Via <code>CIS.Ajax.request('{$ajax_url}', { context: {$the_first_button} })</code>
    <a class="btn btn-primary" href="#"
            onclick="CIS.Ajax.request('<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=a'); ?>', { context: $('#<?php echo $first_button_id; ?>') }); return false;">
        Trigger
    </a>
</p>