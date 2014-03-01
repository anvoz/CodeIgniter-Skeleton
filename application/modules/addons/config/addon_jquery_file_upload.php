<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['description'] = '
<p>
    <a target="_blank" href="https://github.com/blueimp/jQuery-File-Upload">
        https://github.com/blueimp/jQuery-File-Upload
    </a>
</p>
<p>File Upload widget with multiple file selection, drag&amp;drop support, progress bar, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (Google App Engine, PHP, Python, Ruby on Rails, Java, etc.) that supports standard HTML form file uploads.</p>
<ul>
    <li>Only included the basic plugin with PHP upload handler.</li>
    <li>
        Packed into a photo upload pagelet.<br>
        Simply add this single line of code on your form to load the upload button:<br>
        <code>echo Modules::run("photo/_pagelet_upload_control");</code>
    </li>
</ul>
';

$config['files'] = array(
    'config/upload.php' => array('dest' => 'application/config'),
    'controllers/photo.php' => array('dest' => 'application/modules/photo/controllers'),
    'controllers/photo_ajax.php' => array('dest' => 'application/modules/photo/controllers'),
    'libraries/jQuery_file_upload/Uploadhandler.php' => array('dest' => 'application/libraries/jQuery_file_upload'),
    'libraries/Uploader.php' => array('dest' => 'application/libraries'),
    'views/upload_control/template_error.php' => array('dest' => 'application/modules/photo/views/upload_control'),
    'views/upload_control/template_holder.php' => array('dest' => 'application/modules/photo/views/upload_control'),
    'views/upload_control/template_item.php' => array('dest' => 'application/modules/photo/views/upload_control'),
    'views/upload_control/template_progress.php' => array('dest' => 'application/modules/photo/views/upload_control'),
    'views/pagelet_upload_control.php' => array('dest' => 'application/modules/photo/views'),
    'views/upload.php' => array('dest' => 'application/modules/photo/views'),
    'fileupload.js' => array('dest' => 'assets/js'),
    'pagelet_jquery_file_upload.php' => array('dest' => 'application/modules/skeleton/views/content'),
);

$config['skeleton'] = array(
    'ajax' => array(
        'jquery-file-upload' => 'jQuery file upload',
    ),
);

/* End of file addon_jquery_file_upload.php */
/* Location: ./application/modules/addons/config/addon_jquery_file_upload.php */