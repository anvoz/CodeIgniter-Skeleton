CodeIgniter-Skeleton
====================

# Include

* [CodeIgniter](https://github.com/EllisLab/CodeIgniter) 2.1.4 (last updated: Jul 8, 2013)
* [Modular Extensions - HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc) 5.4 (last updated: Jul 31, 2013)
* [jQuery](https://github.com/jquery/jquery) 1.10.2 (last updated: Jul 3, 2013)
* [Bootstrap](https://github.com/twbs/bootstrap) 3.0 (last updated: Aug 19, 2013)
 * Not include Glyphicons
* Custom Template library
 * Base view is a mix between Bootstrap and [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate) template
 * Use `$this->template->load_view()` instead of `$this->load->view()` to render page
 * Only use `$this->load->view()` to render pagelet (not include base view)
* Assets
 * Use `assets_url()` to get link of js, css or image resource
 * Folder structure:

```
assets/
    css/
        modules/
            <module>.css                // Extra CSS for a specific module
        bootstrap.min.css               // Bootstrap core CSS
        main.css                        // CSS for all pages
    js/
        modules/
            <module>.js                 // Extra JS for a specific module
        jquery-1.10.2.min.js            // jQuery core JS
        html5shiv.js, respond.min.js    // IE8 support of HTML5 elements and media queries
        plugins.js                      // Contain extra JS plugins
        main.js                         // JS for all pages
    img/
```

* [Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth) 2.5 (last updated: Jul 15, 2013)
 * Not include Mongodb model
 * Customized controller to use with HMVC and Template library
 * Use an independent alias `$this->auth`

# Usage

* Edit `RewriteBase` in `.htaccess` file. Example: `RewriteBase /ciske/`.
* Set your base URL in `application/config/config.php` file. Example: `$config['base_url'] = 'http://localhost/ciske/';`.
* Set your assets URL in `application/config/assets.php` file. Example: `$config['assets_url'] = 'http://localhost/ciske/assets/';`.
* Setup the `Ion Auth` library (if you don't want to use this library, remove it from `autoload` config):
 * Run SQL script in `sql/ion_auth.sql` file (admin login account: `admin@admin.com` / `password`).
 * Set your database settings in `application/config/database.php` file.
 * Edit your encryption key in `application/config/config.php` file.
 * Customize the library config in `application/config/ion_auth.php` file.