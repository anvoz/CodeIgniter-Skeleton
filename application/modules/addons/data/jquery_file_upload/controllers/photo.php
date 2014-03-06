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

    /**
     * Render photo upload control
     * options:
     *      message: Add some text to describe the control
     *
     *      id: ID attribute of the HTML file input
     *      is_multiple: Allow multiple files upload
     *      form_data: Additional form data to be sent along with the files
     *      success_callback: Callback for successful upload files
     *
     *      parent: Use to find the closest wrapper of the whole upload control
     *      progress_target: Use to locate progress bar inside the upload control
     *      holder_target: Use to locate the holder (inside the upload control) where all upload results will be added to
     *      image_holder_target: Use to locate a fixed place for a single uploaded image
     *
     *      progress_template: Progress bar template
     *      holder_template: Holder template
     *      item_template: Template for a uploaded image
     *      error_template: Template for an error message
     */
    public function _pagelet_upload_control($options = array())
    {
        $default_options = array(
            'message' => 'Supports multiple file selection, drag&amp;drop, progress bar, cross-domain, chunked and resumable file uploads.',

            'id' => 'file-upload',
            'is_multiple' => TRUE,
            'form_data' => array(),
            'success_callback' => 'false',

            'parent' => '.upload-control',
            'progress_target' => '.progress',
            'holder_target' => '.holder',
            'image_holder_target' => FALSE,
        );
        $options = array_merge($default_options, $options);

        // Load templates if not set
        foreach (array('progress', 'holder', 'item', 'error') as $template_name)
        {
            if ( ! isset($options[$template_name . '_template']))
            {
                $template = $this->load->view('photo/upload_control/template_' . $template_name, FALSE, TRUE);
                $options[$template_name . '_template'] = $template;
            }
        }

        // Upload control HTML
        $this->load->view('photo/pagelet_upload_control', $options);

        // Load script to setup the upload control
        $fileupload_js = assets_url('js/fileupload.js');
        $upload_id = '#' . $options['id'];
        $upload_url = site_url('photo/photo_ajax/upload');
        $form_data = json_encode($options['form_data']);
        $script = <<< JS
$(function() {
    CIS.Script.require('{$fileupload_js}', function() {
        CIS.FileUpload.init($('{$upload_id}'), {
            url: '{$upload_url}',
            formData: {$form_data},
            successCallback: {$options['success_callback']}
        });
    });
});
JS;
        $this->_load_script($script);
    }
}

/* End of file photo.php */
/* Location: ./application/modules/photo/controllers/photo.php */