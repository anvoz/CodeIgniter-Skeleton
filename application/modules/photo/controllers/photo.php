<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends MY_Controller {

    public function upload()
    {
        $this->load->library('template');

        $this->template->set_title('Photo upload');

        $this->template->load_view('upload', array(
            'upload_control' => Modules::run('photo/_pagelet_upload')
        ));
    }

    public function _pagelet_upload()
    {
        $this->load->view('pagelet_upload');

        $fileupload_js = assets_url('js/jquery.fileupload.js');
        $upload_url = site_url('ajax/photo_ajax/upload');

        $script = <<< JS
$(function() {
    CIS.Script.require('{$fileupload_js}', function() {
        $('#file-upload').fileupload({
            url: '{$upload_url}',
            dataType: 'json',
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $(this)
                    .closest('.control').siblings('.progress').find('.progress-bar')
                    .css({ width: progress + '%' });
            },
            done: function(e, data) {
                var \$results = $(this).closest('.control').siblings('.results');
                $.each(data.result.files, function (index, file) {
                    if (file.url) {
                        \$results.append([
                            '<div class="media alert alert-success">',
                                '<a class="pull-left" target="_blank" href="', file.url, '">',
                                    '<img src="', file.thumbnailUrl, '"> ',
                                '</a>',
                                '<div class="media-body">',
                                    '<h4>', file.name, '</h4>',
                                    file.type,
                                '</div>',
                            '</div>'
                        ].join(''));
                    } else if (file.error) {
                        \$results.append([
                            '<div class="alert alert-danger">',
                                file.name, ': ', file.error,
                            '</div>'
                        ].join(''));
                    }
                });
            },
            fail: function(e, data) {
                var \$results = $(this).closest('.control').siblings('.results');
                $.each(data.files, function (index, file) {
                    \$results.append('<div class="alert alert-danger">File upload failed.</div>');
                });
            }
        }).prop('disabled', !$.support.fileInput);
    });
});
JS;
        $this->_load_script($script);
    }
}

/* End of file photo.php */
/* Location: ./application/controllers/photo.php */