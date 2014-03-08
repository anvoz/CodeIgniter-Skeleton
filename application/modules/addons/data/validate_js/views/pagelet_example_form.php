<?php
$form_attributes = array(
    'name' => $form_name,
    'class' => 'form-horizontal',
    'rel' => 'async',
    'autocomplete' => 'off',
);
echo form_open('form_validation_example/form_validation_example_ajax/submit', $form_attributes);
?>
    <?php
    foreach ($form_fields as $field_name => $field_data):
        $label = $field_data['display'];
        // Only keep field data that will be used for CI form helper
        unset($field_data['display']);
        unset($field_data['rules']);
    ?>
        <div class="form-group">
            <label class="col-md-3 control-label" for="<?php echo $field_data['name']; ?>">
                <?php echo $label; ?>
            </label>
            <div class="col-md-9">
                <?php echo bs_form_input($field_data); ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="form-group">
        <div class="col-md-offset-3 col-md-9">
            <?php echo bs_form_submit('submit', 'Submit');?>
        </div>
    </div>

<?php echo form_close();?>
