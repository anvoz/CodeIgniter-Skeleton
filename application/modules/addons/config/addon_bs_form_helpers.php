<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['description'] = '
<p>Generate HTML form fields and buttons with Bootstrap CSS style.</p>
<p>
    All new helpers are named with <code>bs_</code> prefix and can be used as same as their original.<br>
    For example, Bootstrap version of <code>form_input()</code> is <code>bs_form_input()</code>.
</p>
<p>
    Example output: <code>&lt;input <b>class="form-control"</b> type="text" value=""&gt;</code>
</p>
';

$config['files'] = array(
    'MY_form_helper.php' => array('dest' => 'application/helpers'),
);

/* End of file addon_bs_form_helpers.php */
/* Location: ./application/modules/addons/config/addon_bs_form_helpers.php */