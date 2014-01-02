<h2 id="ajax-form">Ajaxify form</h2>
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