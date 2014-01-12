var requiredJS = '<?php echo $fileupload_js; ?>',
    uploadURL = '<?php echo $upload_url; ?>';

$(function() {
    CIS.Script.require(requiredJS, function() {
        $('#file-upload').fileupload({
            url: uploadURL,
            dataType: 'json',
            progressall: function(e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10),
                    $control = $(this).closest('.js-control'),
                    $progress = $control.find($control.data('progress-holder'));
                $progress.find('.progress-bar').css({ width: progress + '%' });
            },
            done: function(e, data) {
                var $control = $(this).closest('.js-control');
                    $results = $control.find($control.data('results-holder'));
                $.each(data.result.files, function (index, file) {
                    if (file.url) {
                        $results.append([
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
                        $results.append([
                            '<div class="alert alert-danger">',
                                file.name, ': ', file.error,
                            '</div>'
                        ].join(''));
                    }
                });
            },
            fail: function(e, data) {
                var $control = $(this).closest('.js-control');
                    $results = $control.find($control.data('results-holder'));
                $.each(data.files, function (index, file) {
                    $results.append('<div class="alert alert-danger">File upload failed.</div>');
                });
            }
        }).prop('disabled', !$.support.fileInput);
    });
});