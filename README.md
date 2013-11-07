CodeIgniter-Skeleton
====================

CodeIgniter Skeleton (CIS) is a decent starting point for most web apps. It provides you with additional back-end stuffs that were missing from the framework itself (HMVC, template control, authentication...), common front-end plugins (jQuery, Bootstrap...) and well-organized code structures.

CIS is also a great experience for CI-based developments to ajaxify modules. It mainly focuses on defining elegant ways to make ajaxified components rapidly. Its core libraries, which are a tight connection between back-end and front-end, are based on 3 principles:

1. A single web page should be broken down into small pieces which are called pagelets.
2. A pagelet is a set of self-contained MVC and Javascript functions that should be loaded independently via normal page render or ajax request render.
3. An ajax response handler should be defined or be registered right on the server-side to be managed easily.

![CIS Screenshot](https://f.cloud.github.com/assets/4688035/1290373/d7c0997a-302f-11e3-8901-b32ae3209884.png)

# Include

* [CodeIgniter](https://github.com/EllisLab/CodeIgniter) 2.1.4 (last updated: Jul 8, 2013)
* [Modular Extensions - HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc) 5.4 (last updated: Jul 31, 2013)
* [jQuery](https://github.com/jquery/jquery) 1.10.2 (last updated: Jul 3, 2013)
* [Bootstrap](https://github.com/twbs/bootstrap) 3.0.2 (last updated: Nov 06, 2013)
 * Not include Glyphicons
* [Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth) 2.5 (last updated: Jul 15, 2013)
 * Not include Mongodb model
 * Customized controller to use with HMVC and CIS Template library
 * Use as an independent alias `$this->auth`
* [jQuery File Upload](https://github.com/blueimp/jQuery-File-Upload) 8.8.7 (last updated: Oct 8, 2013)
 * Be able to load in an independent pagelet via `Modules::run('photo/_pagelet_upload')`

## Assets
 * Use `assets_url()` helper function to get URL of Javascript, CSS or image resource
 * Folder structure:

```
assets/
    css/
        modules/
            {$module}.css               // Extra CSS for a specific module
        bootstrap.min.css               // Bootstrap core CSS
        main.css                        // CSS for all pages
    js/
        modules/
            {$module}.js                // Extra JS for a specific module
        jquery-1.10.2.min.js            // jQuery core JS
        html5shiv.js, respond.min.js    // IE8 support of HTML5 elements and media queries
        jquery.fileupload.js            // jQuery File Upload plugin (blueimp),
                                        // including jQuery UI Widget and jQuery Iframe Transport
        plugins.js                      // Extra JS plugins for all pages,
                                        // including window.console wrapper and Bootstrap
        main.js                         // JS for all pages
    img/
```

# Usage

## Setup

By default, you will be albe to check all features on the welcome page without doing any of the following instructions. Just unzip the package and put the source code in your server.

* Set your base URL in `application/config/config.php` file. Example: `$config['base_url'] = 'http://localhost/ciske/';`.
* Set your assets URL in `application/config/assets.php` file. Example: `$config['assets_url'] = 'http://localhost/ciske/assets/';`.
* Setup the `Ion Auth` library (if you don't want to use this library, remove it from `autoload` config):
 * Run SQL script in `sql/ion_auth.sql` file (admin login account: `admin@admin.com` / `password`).
 * Set your database settings in `application/config/database.php` file.
 * Edit your encryption key in `application/config/config.php` file.
 * Customize the library config in `application/config/ion_auth.php` file.

[H5BP's Server Configs](https://github.com/h5bp/server-configs): Best-practice server configurations to help improve site performance.

[CodeIgniter Nginx Rewrite Rules](https://github.com/anvoz/CodeIgniter-Skeleton/wiki/CodeIgniter-Nginx-Rewrite-Rules)

## Guidelines

### Render a page
```
class Welcome extends MY_Controller {
    // URL: {$site_url}/welcome/example
    public function example()
    {
        $this->load->library('template');
        // The below function is as same as $this->load->view('welcome/example')
        // but its output will be placed inside a base view (masterview)
        $this->template->load_view('welcome/example');
    }
}
```
Base view is located at `application/views/base_view.php`. It is a well-designed HTML page with an empty body that is based on `Bootstrap` and [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate) template.

Use other methods of the `Template` library to customize base view: `set_layout`, `set_title`, `set_description`, `add_metadata`, `add_js`, `add_css`.

### Render a pagelet
```
// Must extend MY_Controller to use HMVC Modular Extensions
class Welcome extends MY_Controller {
    // Pagelet should have prefix _pagelet_
    public function _pagelet_example()
    {
        $this->load->view('welcome/pagelet_example');
    }
}
```
Use `Modules::run('welcome/_pagelet_example')` to get the pagelet HTML output.

### Write Javascript inside a pagelet
```
$this->_load_script('$(function() {
    console.log("The DOM is loaded.");
});');
```
If pagelet is rendered via a normal page load, the script will be queued. Queued scripts will be executed by the code inside `main.js` when the file was loaded.

If pagelet is rendered via an ajax request, the script will be executed immediately because all of the core Javascript files were already loaded. If you want to add extra files, see `CIS.Script.require()` function in the following section.

You can also write Javascript directly inside the pagelet view but it is not recommended.

Lengthy script should be packed in a Javascript file but its starting function should be called here.

### Execute functions after all of the required Javascript files were loaded
```
CIS.Script.require('{$js_file_path}', function() {
    console.log("Plugins are loaded.");
    $(function() {
        console.log("The DOM is loaded.");
    });
});
```

### Ajaxify request
Via links: `<a href="#" rel="async" ajaxify="{$ajax_url}">...</a>`

Via forms: `<form rel="async" action="{$ajax_url}">...</form>`

Via Javascript function: `CIS.Ajax.request('{$ajax_url}'[, settings])`

### Ajax response handler
```
// Should extend Ajax_Controller to use the Response library
class Example_ajax extends Ajax_Controller {
    // URL: {$site_url}/ajax/example_ajax/example
    function example()
    {
        // The request must be called via rel="async" or CIS.Ajax.request function
        // to be able to execute the script after the request was successful
        $this->response->script('console.log("Request completed.");');
        $this->response->send();
    }
}
```
Use `alert`, `confirm` and `dialog` functions of the `Response` library to display dialog in client-side.

Lengthy script should be packed in a Javascript file but its starting function should be called here.

## Examples

### Login form

This is an example of using CIS to make a function that can handle both normal and ajax requests. It is also an example to help you distinguishing between page and pagelet to organize source code in the right way.

By default, login form should be accessible everywhere via a dialog and should use ajax to show errors instead of reloading an entire page. But if there is something wrong, the form can also be displayed in a single page or using regular submit without any Javascript needed.

Check the `login` function, which was located at `application/modules/auth/controllers/auth.php`, for more details.