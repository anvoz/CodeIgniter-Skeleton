<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['photo'] = array(
    // Defines which files (based on their names) are accepted for upload:
    'accept_file_types' => '/(\.|\/)(gif|jpe?g|png)$/i',

    // The php.ini settings upload_max_filesize and post_max_size
    // take precedence over the following max_file_size setting:
    'max_file_size' => NULL,
    'min_file_size' => 1,

    // Image resolution restrictions:
    'max_width' => NULL,
    'max_height' => NULL,
    'min_width' => 1,
    'min_height' => 1,

    'image_versions' => array(
        '' => array(
            'max_width' => 1920,
            'max_height' => 1200,
            'jpeg_quality' => 95
        ),
        'thumbnail' => array(
            'crop' => TRUE,
            'max_width' => 50,
            'max_height' => 50
        )
    )
);

/* End of file upload.php */
/* Location: ./application/config/upload.php */