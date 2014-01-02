<h2>Ajaxify link</h2>
<div>
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
</div>

<h2>Ajaxify form</h2>
<div>
    <p>Via <code>rel="async"</code> and <code>action="{$ajax_url}"</code></p>
    <div class="row">
        <div class="col-lg-6">
            <form rel="async" action="<?php echo site_url('ajax/skeleton_ajax/test_ajaxify'); ?>">
                <input type="hidden" name="type" value="form">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content"></textarea>
                </div>
                <div class="form-group">
                    <p><button class="btn btn-primary" type="submit">Submit</button></p>
                </div>
            </form>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>

<h2>Ajaxify dialog</h2>
<div>
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
    <div>
        <p>
            This pagelet also contains script that is executed by the <code>_load_script()</code> function.<br>
            You will see a message that read, "<?php echo $test_message; ?>", in the browser console.
        </p>
    </div>
</div>

<h2>Ajaxify photo upload</h2>

<div>
    <p>
        <a class="btn btn-primary" href="<?php echo site_url('photo/upload'); ?>"
                rel="async"
                ajaxify="<?php echo site_url('ajax/photo_ajax/dialog_upload'); ?>">
            Show photo upload dialog
        </a>
        <a class="btn btn-primary" href="<?php echo site_url('photo/upload'); ?>" target="_blank">Open photo upload page</a>
    </p>
</div>