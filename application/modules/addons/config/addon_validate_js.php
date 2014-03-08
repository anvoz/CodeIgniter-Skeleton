<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['description'] = '
<p>
    <a target="_blank" href="https://github.com/rickharrison/validate.js">
        https://github.com/rickharrison/validate.js
    </a>
</p>
<p>Lightweight JavaScript form validation library inspired by CodeIgniter.</p>
<ul>
    <li>Use <code>CIS.Form.validation(formName, rules)</code> to check rules of all form fields and show error on each field.</li>
    <li>Use <code>CIS.Form.showMessage($form, message, type)</code> to show a general success/error form message.</li>
</ul>
';

$config['require'] = array(
    'bs-form-helpers',
);

$config['files'] = array(
    'controllers/form_validation_example.php' => array('dest' => 'application/modules/form_validation_example/controllers'),
    'controllers/form_validation_example_ajax.php' => array('dest' => 'application/modules/form_validation_example/controllers'),
    'views/example_form.php' => array('dest' => 'application/modules/form_validation_example/views'),
    'views/pagelet_example_form.php' => array('dest' => 'application/modules/form_validation_example/views'),
    'formvalidation.js' => array('dest' => 'assets/js'),
    'pagelet_validate_js.php' => array('dest' => 'application/modules/skeleton/views/content'),
);

$config['skeleton'] = array(
    'ajax' => array(
        'validate-js' => 'validate.js',
    ),
);

/* End of file addon_validate_js.php */
/* Location: ./application/modules/addons/config/addon_validate_js.php */