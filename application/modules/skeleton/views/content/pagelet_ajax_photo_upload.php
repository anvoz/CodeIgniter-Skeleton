<h2 id="ajax-photo-upload">Ajaxify photo upload</h2>
<p>
    <a class="btn btn-primary" href="<?php echo site_url('photo/upload'); ?>"
            rel="async"
            ajaxify="<?php echo site_url('ajax/photo_ajax/dialog_upload'); ?>">
        Show photo upload dialog
    </a>
    <a class="btn btn-primary" href="<?php echo site_url('photo/upload'); ?>" target="_blank">Open photo upload page</a>
</p>