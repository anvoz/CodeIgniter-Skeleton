<div class="row">
    <div class="col-md-3">
        <?php echo Modules::run('welcome/_pagelet_sidebar'); ?>
    </div>
    <div class="col-md-9">
        <div>
            <h1 id="welcome">Welcome to CodeIgniter Skeleton!</h1>
            <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
            <p>
                If you would like to edit this page you'll find it located at:<br>
                <code>application/modules/welcome/views/welcome_message.php</code>
            </p>
            <p>
                The corresponding controller for this page is found at:<br>
                <code>application/modules/welcome/controllers/Welcome.php</code>
            </p>
            <p>
                If you are exploring CodeIgniter for the very first time, you should start by reading the
                <a target="_blank" href="http://ellislab.com/codeigniter/user-guide/">User Guide</a>.
            </p>
            <p>
                Page rendered in <strong>{elapsed_time}</strong> seconds.
                <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
            </p>
        </div>
        <div>
            <div class="page-header"><h1 id="theme">Theme</h1></div>
            <?php echo Modules::run('welcome/_pagelet_theme'); ?>
        </div>
        <div>
            <div class="page-header"><h1 id="javascript">Javascript</h1></div>
            <?php echo Modules::run('welcome/_pagelet_javascript'); ?>
        </div>
        <div>
            <div class="page-header"><h1 id="ajax">Ajax</h1></div>
            <?php echo Modules::run('welcome/_pagelet_ajax'); ?>
        </div>
    </div>
</div>