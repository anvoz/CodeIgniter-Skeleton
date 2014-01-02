<h2 id="ajax-dialog">Ajaxify dialog</h2>
<div>
    <p>
        <code>$this->response->alert($title, $body)</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('ajax/skeleton_ajax/test_ajaxify?type=alert'); ?>">
            Show alert dialog
        </a>
    </p>
</div>
<div>
    <p>
        <code>$this->response->confirm($title, $body)</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('ajax/skeleton_ajax/test_ajaxify?type=confirm'); ?>">
            Show confirm dialog
        </a>
    </p>
</div>
<div>
    <p>
        <code>$this->response->dialog([ ... ])</code>
        <a class="btn btn-primary" href="#"
                rel="async"
                ajaxify="<?php echo site_url('ajax/skeleton_ajax/test_ajaxify?type=dialog'); ?>">
            Show custom dialog
        </a>
    </p>
</div>