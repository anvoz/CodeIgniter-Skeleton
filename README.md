CodeIgniter Skeleton [![Build Status](https://travis-ci.org/anvoz/CodeIgniter-Skeleton.png?branch=master)](https://travis-ci.org/anvoz/CodeIgniter-Skeleton)
====================

CodeIgniter Skeleton (CIS) is not only a decent starting point for most web apps but also a new experience for CI-based development to ajaxify everything.

[Public board on Trello](https://trello.com/b/gOUmrT5J/codeigniter-skeleton)

![cis](https://cloud.githubusercontent.com/assets/4688035/2561535/471eba12-b81c-11e3-93d2-130d011f6b13.PNG)

## Include

### Core

* [CodeIgniter](https://github.com/EllisLab/CodeIgniter) 2.1.4 (last updated: Jul 8, 2013)
* [Modular Extensions - HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc) 5.4 (last updated: Jul 31, 2013)
* [jQuery](https://github.com/jquery/jquery) 1.11.1 (last updated: May 2, 2014)
* [Bootstrap](https://github.com/twbs/bootstrap) 3.1.1 (last updated: Feb 14, 2014)
* [Bootstrap TLDR](https://github.com/anvoz/bootstrap-tldr) 1.1.0 (last updated: Mar 22, 2014)
* Template library: handle masterview and views within masterview
* Ajax request & response library: provide rapid ways to ajaxify everything

### Add-ons

Add-ons are custom builds of some useful libraries and plugins. They are **not included** in the project but already have a quick mechanic to install by (at least) simply clicking on the `Copy` button in Add-ons page.

* Bootstrap form helpers: generate HTML form fields and buttons with Bootstrap CSS style
* [Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth) 2.5.2 (last updated: Apr 19, 2014)
* [jQuery File Upload](https://github.com/blueimp/jQuery-File-Upload) 9.5.2 (last updated: Dec 13, 2013)
* [validate.js](https://github.com/rickharrison/validate.js) 1.4 (last updated: Apr 14, 2014)

### Example

Getting started with a basic todo example which will help you learn how to use CIS in the right way.

![todo-example](https://cloud.githubusercontent.com/assets/4688035/2561537/557533de-b81c-11e3-8590-8fd4c11ab30b.PNG)

## Directory Structure

### Application

```
config/
    assets.php                      // Config base URL for assets
core/
    MY_Controller.php               // MY_Controller & Ajax_Controller
helper/
    MY_url_helper.php               // Contain assets_url() function
library/
    Dialog.php                      // Generate HTML for Bootstrap's Modal dialog
    Response.php                    // Handle response for ajax request
    Template.php                    // Handle masterview and views within masterview
modules/
    addons/                         // Add-ons management
    skeleton/                       // Showcase of all included components
    todo/                           // Todo example
third_party/
    MX/                             // Modular Extensions - HMVC
views/
    layout/
        default.php                 // Header + full width container
        pagelet.php                 // Header + half width container
    base_view.php                   // Masterview
    dialog.php                      // HTML template for Bootstrap's Modal dialog
    header.php                      // Page header
```

### Assets

Use `MY_url_helper` `assets_url()` to get URL of Javascript, CSS or image resource

```
css/
    modules/
        {{module}}.css              // Extra CSS for a specific module
    bootstrap.min.css               // Bootstrap core CSS
    main.css                        // CSS for all pages
js/
    modules/
        {{module}}.js               // Extra JS for a specific module
    bootstrap.min.js                // Bootstrap core JS
    html5shiv.js, respond.min.js    // IE8 support of HTML5 elements and media queries
    jquery.min.js                   // jQuery core JS
    main.js                         // JS for all pages
```

## Usage

### Setup

By default, you will be albe to check all features on the home page without doing any of the following instructions. Just unzip the package and put the source code in your server.

* Set your base URL in `application/config/config.php` file.  
Example: `$config['base_url'] = 'http://example.com/';`
* Set your assets URL in `application/config/assets.php` file.  
Example: `$config['assets_url'] = 'http://example.com/assets/';`

**Note:** Base and assets URLs should be absolute, including the protocol.

[H5BP's Server Configs](https://github.com/h5bp/server-configs): Best-practice server configurations to help improve site performance.

[CodeIgniter Nginx Rewrite Rules](https://github.com/anvoz/CodeIgniter-Skeleton/wiki/CodeIgniter-Nginx-Rewrite-Rules)

### Guidelines

#### Rendering page (with base view)

Base view (masterview) is a well-designed HTML page based on [Bootstrap](https://github.com/twbs/bootstrap) and [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate) template.
```php
<?php
class Welcome extends MY_Controller {
    // URL: {{site_url}}/welcome/example
    public function example()
    {
        $this->load->library('template');
        // The below function is as same as $this->load->view('welcome/example')
        // but its output will be placed inside a base view
        $this->template->load_view('welcome/example');
    }
}
```
Use other methods of the `Template` library to customize base view: `set_layout`, `set_title`, `set_description`, `add_metadata`, `add_js`, `add_css`.

#### Rendering pagelet

A single web page should be broken down into small pieces which are called pagelets. Pagelet is a set of self-contained MVC and Javascript functions that should be loaded independently via both normal page render and ajax request render.
```php
<?php
// Must extend MY_Controller to use HMVC Modular Extensions
class Welcome extends MY_Controller {
    // Pagelet should have _pagelet_ prefix
    public function _pagelet_example()
    {
        $this->load->view('welcome/pagelet_example');
    }
}
```
Use `Modules::run('welcome/_pagelet_example')` to get pagelet HTML output.

#### Writing Javascript inside the page body
```php
<?php
$this->_load_script('$(function() {
    console.log("The DOM is loaded.");
});');
```
To minify blocking time while the browser is executing Javascript, the script will be queued and only be executed after the page is completely rendered.

**Note:** The `_load_script` function simply echos the script so you can not use it in the same block with `$this->template->load_view` function which will echo a whole page. It should be used inside a pagelet, please check this [example](https://github.com/anvoz/CodeIgniter-Skeleton/blob/master/application/modules/addons/data/validate_js/controllers/form_validation_example.php#L67-L77).

#### Executing function after all of the required Javascript files were loaded
```js
CIS.Script.require('{{js_file_path}}', function() {
    console.log("Plugins are loaded.");
    $(function() {
        console.log("The DOM is loaded.");
    });
});
```

#### Ajaxifying request
Via links: `<a href="#" rel="async" ajaxify="{{ajax_url}}">...</a>`

Via forms: `<form rel="async" action="{{ajax_url}}">...</form>`

Via Javascript function: `CIS.Ajax.request('{{ajax_url}}'[, settings])`

#### Handling ajax response
```php
<?php
// Should extend Ajax_Controller to use the Response library
class Welcome_ajax extends Ajax_Controller {
    // URL: {{site_url}}/welcome/welcome_ajax/example
    function example()
    {
        // The request must be called via
        // <a rel="async" href="#" ajaxify="{{URL}}">
        // or CIS.Ajax.request() function (located at main.js)
        // to be able to execute the response script below
        $this->response->script('console.log("Responded.");');
        $this->response->send();
    }
}
```
Use `alert`, `confirm` and `dialog` functions of the `Response` library to display dialog in client-side.

## License

Copyright An Vo [@an_voz](https://twitter.com/an_voz), 2013-2014.

[CodeIgniter License Agreement](http://ellislab.com/codeigniter/user-guide/license.html), everything else is released under the [MIT License](http://opensource.org/licenses/MIT).
