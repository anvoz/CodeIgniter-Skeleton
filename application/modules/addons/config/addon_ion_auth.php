<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['files'] = array(
    'config/ion_auth.php' => array('dest' => 'application/config'),
    'controllers/auth.php' => array('dest' => 'application/modules/auth/controllers'),
    'controllers/auth_ajax.php' => array('dest' => 'application/modules/auth/controllers'),
    'libraries/Ion_auth/Ion_auth.php' => array('dest' => 'application/libraries/Ion_auth'),
    'libraries/Authentication.php' => array('dest' => 'application/libraries'),
    'models/ion_auth_model.php' => array('dest' => 'application/models'),
    'views/email/activate.tpl.php' => array('dest' => 'application/modules/auth/views'),
    'views/email/forgot_password.tpl.php' => array('dest' => 'application/modules/auth/views'),
    'views/email/new_password.tpl.php' => array('dest' => 'application/modules/auth/views'),
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
);

/* End of file addons.php */
/* Location: ./application/modules/addons/config/addons.php */