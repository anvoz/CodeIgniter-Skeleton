<div class="modal fade" id="<?php echo $id; ?>">
    <div class="modal-dialog<?php ( ! empty($size)) && print(' ' . $size); ?>">
        <div class="modal-content">
            <?php if ( ! empty($title)): ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $title; ?></h4>
                </div>
            <?php endif; ?>

            <?php ( ! empty($content)) && print($content); ?>

            <?php if ( ! empty($body)): ?>
                <div class="modal-body">
                    <?php echo $body; ?>
                </div>
            <?php endif; ?>

            <?php if ( ! empty($buttons)): ?>
                <div class="modal-footer">
                    <?php echo implode('', $buttons); ?>
                </div>
            <?php endif; ?>

            <?php ( ! empty($footer)) && print($footer); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->