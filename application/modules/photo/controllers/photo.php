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
    $.getScript('{$fileupload_js}', function() {
        $('#fileupload').fileupload({
            url: '{$upload_url}',
            dataType: 'json',
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $(this)
                    .closest('.control').siblings('.progress').find('.progress-bar')
                    .css({ width: progress + '%' });
            },
            done: function(e, data) {
                var \$this = $(this);
                $.each(data.result.files, function (index, file) {
                    \$this
                        .closest('.control').siblings('.results')
                        .append([
                            '<a class="thumbnail pull-left" target="_blank" href="' + file.url + '" style="margin: 0 10px 10px 0;">',
                                '<div class="text-center" style="min-height: 80px;"><img src="' + file.thumbnailUrl + '"></div>',
                                '<div class="caption">' + file.name + '</div>',
                            '</a>'
                        ].join(''));
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