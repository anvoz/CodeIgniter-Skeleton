<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['description'] = '
<p>Simple and Lightweight Auth System based on Redux Auth 2</p>
<p>
    <a target="_blank" href="https://github.com/benedmunds/CodeIgniter-Ion-Auth">
        https://github.com/benedmunds/CodeIgniter-Ion-Auth
    </a>
</p>
';

$config['require'] = array(
    'bs-form-helpers',
);

$config['files'] = array(
    'config/ion_auth.php' => array('dest' => 'application/config'),
    'controllers/auth.php' => array('dest' => 'application/modules/auth/controllers'),
    'controllers/auth_ajax.php' => array('dest' => 'application/modules/auth/controllers'),
    'libraries/Ion_auth/Ion_auth.php' => array('dest' => 'application/libraries/Ion_auth'),
    'libraries/Authentication.php' => array('dest' => 'application/libraries'),
    'models/ion_auth_model.php' => array('dest' => 'application/models'),
    'views/email/activate.tpl.php' => array('dest' => 'application/modules/auth/views/email'),
    'views/email/forgot_password.tpl.php' => array('dest' => 'application/modules/auth/views/email'),
    'views/email/new_password.tpl.php' => array('dest' => 'application/modules/auth/views/email'),
    'views/change_password.php' => array('dest' => 'application/modules/auth/views'),
    'views/create_group.php' => array('dest' => 'application/modules/auth/views'),
    'views/create_user.php' => array('dest' => 'application/modules/auth/views'),
    'views/deactivate_user.php' => array('dest' => 'application/modules/auth/views'),
    'views/edit_group.php' => array('dest' => 'application/modules/auth/views'),
    'views/edit_user.php' => array('dest' => 'application/modules/auth/views'),
    'views/forgot_password.php' => array('dest' => 'application/modules/auth/views'),
    'views/index.php' => array('dest' => 'application/modules/auth/views'),
    'views/login.php' => array('dest' => 'application/modules/auth/views'),
    'views/reset_password.php' => array('dest' => 'application/modules/auth/views'),
    'pagelet_ion_auth.php' => array('dest' => 'application/modules/skeleton/views/content'),
);

$config['skeleton'] = array(
    'authentication' => array(
        'ion-auth' => 'Ion auth',
    ),
);

/* End of file addons.php */
/* Location: ./application/modules/addons/config/addons.php */