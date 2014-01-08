<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends MY_Controller {

    public function upload()
    {
        $this->load->library('template');

        $this->template->set_title('Photo upload');

        $this->template->load_view('upload', array(
            'pagelet_upload_control' => Modules::run('photo/_pagelet_upload_control')
        ));
    }

    public function _pagelet_upload_control()
    {
        $this->load->view('pagelet_upload_control');

        $fileupload_js = assets_url('js/jquery.fileupload.min.js');
        $upload_url = site_url('ajax/photo_ajax/upload');

        $script = $this->load->view('script_upload', array(
            'fileupload_js' => $fileupload_js,
            'upload_url' => $upload_url,
        ), TRUE);
        $this->_load_script($script);
    }
}

/* End of file photo.php */
/* Location: ./application/controllers/photo.php */