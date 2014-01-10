<h1><?php echo lang('change_password_heading');?></h1>

<div <?php ( ! empty($message)) && print('class="alert alert-info"'); ?> id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

    <p>
        <?php echo lang('change_password_old_password_label', 'old');?> <br />
        <?php echo bs_form_input($old_password);?>
    </p>

    <p>
        <label for="new"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
        <?php echo bs_form_input($new_password);?>
    </p>

    <p>
        <?php echo lang('change_password_new_password_confirm_label', 'new_confirm');?> <br />
        <?php echo bs_form_input($new_password_confirm);?>
    </p>

    <?php echo form_input($user_id);?>
    <p><?php echo bs_form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
