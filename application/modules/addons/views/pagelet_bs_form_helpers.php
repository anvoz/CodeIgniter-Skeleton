<p>Generate HTML form fields and buttons with Bootstrap CSS style.</p>
<p>
    All new helpers are named with <code>bs_</code> prefix and can be used as same as their original.<br>
    For example, Bootstrap version of <code>form_input()</code> is <code>bs_form_input()</code>.
</p>
<p>
    Example output: <code>&lt;input <b>class="form-control"</b> type="text" value=""&gt;</code>
</p>

<h3>Installation</h3>
<?php if ( ! empty($pagelet_copy_files)): ?>
    <h4>Auto</h4>
    <?php echo $pagelet_copy_files; ?>
    <p>
        <a class="btn btn-primary" href="#"
            rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/copy/bs_form_helpers'); ?>"
        >Copy</a>
        <a class="btn btn-danger" href="#"
            rel="async" ajaxify="<?php echo site_url('addons/addons_ajax/action/delete/bs_form_helpers'); ?>"
        >Delete</a>
    </p>
<?php endif; ?>