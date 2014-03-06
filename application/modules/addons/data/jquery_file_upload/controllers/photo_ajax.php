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
     * Another photo upload dialog
     * (A quick example without using external views)
     */
    function dialog_upload_plus()
    {
        $pagelet_upload_control = Modules::run('photo/_pagelet_upload_control', array(
            'message' => FALSE,

            'is_multiple' => FALSE,
            'success_callback' => 'function(file) {
                // Hide progress bar
                CIS.FileUpload.getControl($(this), "progress").addClass("hide");
                // Empty error messages
                CIS.FileUpload.getControl($(this), "holder").empty();
            }',

            // Use a larger wrapper
            'parent' => '.js-custom-control',
            // A fixed holder for uploaded photo
            'image_holder_target' => '#image-holder',

            // Customize uploaded photo template
            'item_template' => '
                <img id="image-holder" class="img-thumbnail" src="{{thumbnailUrl}}">
            ',
        ));
        $this->response->dialog(array(
            'title' => 'Photo Upload Plus',
            'body' => '
            <div class="js-custom-control">
                <div class="media">
                    <div class="pull-left" style="width: 50px;">
                        <img id="image-holder" class="img-thumbnail"
                            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D"
                            style="width: 50px; height: 50px;"
                        >
                    </div>
                    <div class="media-body">
                        <div style="margin-bottom: 5px;">' . $pagelet_upload_control . '</div>
                        <div class="progress progress-striped active hide">
                            <div class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            ',
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
/* Location: ./application/modules/photo/controllers/photo_ajax.php */