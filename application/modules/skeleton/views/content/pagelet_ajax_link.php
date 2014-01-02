<h2 id="ajax-link">Ajaxify link</h2>
<div>
    <p>Via <code>rel="async"</code> and <code>ajaxify="{$ajax_url}"</code></p>
    <p>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('ajax/skeleton_ajax/test_ajaxify?type=a'); ?>">
            Right
        </a>
    </p>
</div>
<div>
    <p>Via <code>CIS.Ajax.request('{$ajax_url}', { context: {$the_above_button} })</code></p>
    <p>
        <a class="btn btn-primary" href="#"
                onclick="CIS.Ajax.request('<?php echo site_url('ajax/skeleton_ajax/test_ajaxify?type=a'); ?>', { context: $(this).closest('div').siblings('div').find('a') }); return false;">
            Trigger
        </a>
    </p>
</div>