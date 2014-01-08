<?php $this->load->library('ion_auth'); ?>

<div class="navbar navbar-default">
    <div class="navbar-header">
        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a target="_blank" href="https://github.com/benedmunds/CodeIgniter-Ion-Auth" class="navbar-brand">Ion Auth</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php if ( ! $this->ion_auth->logged_in()): ?>
                <li>
                    <a href="<?php echo site_url('auth/login'); ?>"
                        rel="async" ajaxify="<?php echo site_url('ajax/auth_ajax/ion_auth_dialog/login'); ?>"
                    >
                        Log In
                    </a>
                </li>
            <?php else: ?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Logged in <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li <?php ( ! $this->ion_auth->is_admin()) && print('class="disabled"'); ?>>
                            <a href="<?php echo site_url('auth'); ?>">Users</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('auth/change_password'); ?>"
                                rel="async" ajaxify="<?php echo site_url('ajax/auth_ajax/ion_auth_dialog/change_password'); ?>"
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

<h3>Default login</h3>
<p>Username: admin@admin.com<br>Password: password </p>