var requiredJS = '<?php echo $fileupload_js; ?>',
    uploadURL = '<?php echo $upload_url; ?>',
    uploadID = '#<?php echo $options['id']; ?>',
    formData = <?php echo json_encode($options['form_data']); ?>,
    successCallback = <?php echo $options['success_callback']; ?>;

$(function() {
    CIS.Script.require(requiredJS, function() {
        CIS.FileUpload.init($(uploadID), {
            url: uploadURL,
            formData: formData,
            successCallback: successCallback
        });
    });
});