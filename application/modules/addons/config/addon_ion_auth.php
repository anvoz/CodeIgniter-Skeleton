<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['description'] = '
<p>
    <a target="_blank" href="https://github.com/benedmunds/CodeIgniter-Ion-Auth">
        https://github.com/benedmunds/CodeIgniter-Ion-Auth
    </a>
</p>
<p>Simple and Lightweight Auth System based on Redux Auth 2.</p>
<ul>
    <li>Not included Mongodb model and Bcrypt library.</li>
    <li>Only included English language.</li>
    <li>Customized controller to use with HMVC and CIS Template library.</li>
    <li>Used CIS Bootstrap form helpers for better form display.</li>
    <li>Already wrapped with Authentication library to be extended quickly.</li>
</ul>
';

$config['require'] = array(
    'bs-form-helpers',
);

$config['files'] = array(
    'config/ion_auth.php' => array('dest' => 'application/config'),
    'controllers/auth.php' => array('dest' => 'application/modules/auth/controllers'),
    'controllers/auth_ajax.php' => array('dest' => 'application/modules/auth/controllers'),
    'language/auth_lang.php' => array('dest' => 'application/language/english'),
    'language/ion_auth_lang.php' => array('dest' => 'application/language/english'),
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

$config['manual'] = array(
    'Set your assets URL in <code>application/config/assets.php</code> file.<br>
    Example: <code>$config[\'assets_url\'] = \'http://localhost/ciske/assets/\';</code>.',
    'Run SQL script from <code>application/modules/addons/data/ion_auth/sql/ion_auth.sql</code> file.<br>
    Or use Ion auth\'s db migration <code>application/modules/addons/data/ion_auth/migrations/001_install_ion_auth.php</code>.<br>
    <b>Note:</b> These files are not copied out automatically. If your choice is using migration, you will have to copy the migration file yourself
    and do some extra steps as described <a target="_blank" href="http://ellislab.com/codeigniter/user-guide/libraries/migration.html">here</a>.',
    'Set your database settings in <code>application/config/database.php</code> file.',
    'Edit your encryption key in <code>application/config/config.php</code> file.',
    'Customize library config in <code>application/config/ion_auth.php</code> file.',
);

$config['skeleton'] = array(
    'authentication' => array(
        'ion-auth' => 'Ion auth',
    ),
);

/* End of file addon_ion_auth.php */
/* Location: ./application/modules/addons/config/addon_ion_auth.php */