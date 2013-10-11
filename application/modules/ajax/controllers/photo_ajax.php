<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_ajax extends Ajax_Controller {

    function dialog_upload()
    {
        $this->response->dialog(array(
            'title' => 'Photo Upload',
            'body' => Modules::run('photo/_pagelet_upload')
        ));
        $this->response->send();
    }

    function upload()
    {
        $this->load->config('upload', TRUE);
        $this->load->library('uploader', $this->config->item('photo', 'upload'));
    }
}

/* End of file photo_ajax.php */
/* Location: ./application/modules/ajax/controllers/photo_ajax.php */