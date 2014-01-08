<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_ajax extends Ajax_Controller {

    /**
     * Display photo upload control in dialog
     */
    function dialog_upload()
    {
        $this->response->dialog(array(
            'title' => 'Photo Upload',
            'body' => Modules::run('photo/_pagelet_upload_control')
        ));
        $this->response->send();
    }

    /**
     * Main function to handle photo upload
     */
    function upload()
    {
        $this->load->config('upload', TRUE);
        $this->load->library('uploader', $this->config->item('photo', 'upload'));
    }
}

/* End of file photo_ajax.php */
/* Location: ./application/modules/ajax/controllers/photo_ajax.php */