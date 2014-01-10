<?php
$target_id = 'target-' . mt_rand(1000000, 9999999);
?>

<p>Via <code>rel="async"</code> and <code>action="{$ajax_url}"</code></p>
<div class="row">
    <div class="col-md-6">
        <form rel="async" action="<?php echo site_url('skeleton/skeleton_ajax/test_ajaxify'); ?>" autocomplete="off" data-target="#<?php echo $target_id; ?>">
            <input type="hidden" name="type" value="form">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title" value="Ajaxify form">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content">Via rel="async" and action="{$ajax_url}"</textarea>
            </div>
            <div class="form-group">
                <p><button class="btn btn-primary" type="submit">Submit</button></p>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div id="<?php echo $target_id; ?>"></div>
    </div>
</div>