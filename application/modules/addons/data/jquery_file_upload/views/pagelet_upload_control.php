<span class="js-control">
    <?php foreach (array('progress', 'holder', 'item', 'error') as $template_name): ?>
        <script type="text/template" class="js-<?php echo $template_name; ?>-template">
            <?php echo ${$template_name . '_template'}; ?>
        </script>
    <?php endforeach; ?>

    <?php if ( ! empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <input id="<?php echo $id; ?>"
        type="file" name="files[]" <?php ($is_multiple) && print('multiple'); ?>

        data-wrapper-selector="<?php echo $wrapper_selector; ?>"
        data-progress-selector="<?php echo $progress_selector; ?>"
        data-holder-selector="<?php echo $holder_selector; ?>"
        <?php if ( ! empty($image_holder_selector)): ?>
            data-image-holder-selector="<?php echo $image_holder_selector; ?>"
        <?php endif; ?>
    >
</span>