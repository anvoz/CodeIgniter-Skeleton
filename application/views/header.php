<a class="sr-only" href="#content">Skip navigation</a>
<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo site_url(); ?>" class="navbar-brand">CodeIgniter Skeleton</a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a target="_blank" href="https://github.com/anvoz/CodeIgniter-Skeleton">Github</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if ( ! $this->auth->logged_in()): ?>
                    <li>
                        <a href="<?php echo site_url('auth/login'); ?>" rel="async" ajaxify="<?php echo site_url('ajax/auth_ajax/dialog_login'); ?>">
                            Log In
                        </a>
                    </li>
                <?php else: ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Logged in <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php ( ! $this->auth->is_admin()) && print('class="disabled"'); ?>>
                                <a href="<?php echo site_url('auth'); ?>">Users management</a>
                            </li>
                            <li><a href="<?php echo site_url('auth/change_password'); ?>">Change password</a></li>
                            <li><a href="<?php echo site_url('auth/logout'); ?>">Log out</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>