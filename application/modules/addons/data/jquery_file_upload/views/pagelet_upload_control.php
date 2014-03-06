<span class="upload-control">
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

        data-parent="<?php echo $parent; ?>"
        data-progress-target="<?php echo $progress_target; ?>"
        data-holder-target="<?php echo $holder_target; ?>"
        <?php if ( ! empty($image_holder_target)): ?>
            data-image-holder-target="<?php echo $image_holder_target; ?>"
        <?php endif; ?>
    >
</span>