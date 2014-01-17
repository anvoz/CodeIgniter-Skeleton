<?php
/*
 * This view is called by the skeleton controller
 * which is used to generate a simple and isolated showcase for an add-on.
 * It is why some stuffs have to be loaded or be defined directly in the view here.
 *
 * In this case, if you want to use Ion auth library for your project,
 * the Authentication library should be loaded in MY_Controller or autoload config.
 */
$this->load->library('authentication');
?>

<p>
    Some Ion auth's page functions were ported to display in dialog via ajax requests.<br>
    They can also be displayed in normal pages by openning links in new tab or going to direct URLs.
</p>

<h3>Default login</h3>
<p>Username: admin@admin.com<br>Password: password </p>

<div class="navbar navbar-default">
    <div class="navbar-header">
        <button data-target=".navbar-ion-auth" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a target="_blank" href="https://github.com/benedmunds/CodeIgniter-Ion-Auth" class="navbar-brand">Ion Auth</a>
    </div>
    <div class="collapse navbar-collapse navbar-ion-auth">
        <ul class="nav navbar-nav navbar-right">
            <?php if ( ! $this->authentication->logged_in()): ?>
                <li>
                    <a href="<?php echo site_url('auth/login'); ?>"
                        rel="async" ajaxify="<?php echo site_url('auth/auth_ajax/ion_auth_dialog/login'); ?>"
                    >
                        Log In
                    </a>
                </li>
            <?php else: ?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Logged in <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li <?php ( ! $this->authentication->is_admin()) && print('class="disabled"'); ?>>
                            <a href="<?php echo site_url('auth'); ?>">Users</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('auth/change_password'); ?>"
                                rel="async" ajaxify="<?php echo site_url('auth/auth_ajax/ion_auth_dialog/change_password'); ?>"
                            >
                                Change password
                            </a>
                        </li>
                        <li><a href="<?php echo site_url('auth/logout'); ?>">Log out</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<?php $user = $this->authentication->user()->row(); ?>
<?php if ( ! empty($user)): ?>
<h3>Account Info</h3>
<p>
<?php foreach (array('id', 'email', 'first_name', 'last_name') as $field): ?>
    <?php echo '<b>' . $field . ':</b> ' . $user->$field . '<br>'; ?>
<?php endforeach; ?>
</p>
<?php endif; ?>