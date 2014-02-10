<div>
    <h3>Alert dialog</h3>
    <p>
        <code>[PHP] $this->response->alert($title, $body)</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=alert'); ?>">
            Show
        </a>
    </p>
</div>
<div>
    <h3>Confirm dialog</h3>
    <p>
        <div>Use <code>$(this).data("caller")</code> to get the reference of the clicked button.</div>
        <code>[PHP] $this->response->confirm($title, $body)</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=confirm'); ?>">
            Show
        </a>
    </p>
</div>
<div>
    <h3>Custom dialog</h3>
    <p>
        <code>[PHP] $this->response->dialog([ ... ])</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=dialog'); ?>">
            Show
        </a>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=dialog_large'); ?>">
            Large modal
        </a>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify?type=dialog_small'); ?>">
            Small modal
        </a>
    </p>
</div>