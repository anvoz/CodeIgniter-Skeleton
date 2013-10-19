<div id="infoMessage" class="<?php ( ! empty($message)) && print('alert alert-danger'); ?>"><?php echo $message;?></div>

<?php echo form_open('auth/login', array('class' => 'form-horizontal', 'rel' => 'async')); ?>

    <div class="form-group">
        <label class="col-md-3 control-label" for="<?php echo $identity['id']; ?>"><?php echo lang('login_identity_label');?></label>
        <div class="col-md-9">
            <?php
            $identity['class'] = 'form-control';
            echo form_input($identity);
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="<?php echo $password['id']; ?>"><?php echo lang('login_password_label');?></label>
        <div class="col-md-9">
            <?php
            $password['class'] = 'form-control';
            echo form_input($password);
            ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" for="remember"><?php echo lang('login_remember_label');?></label>
        <div class="col-md-9">
            <div class="checkbox">
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-3 col-md-9">
            <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"');?>
            <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
        </div>
    </div>

<?php echo form_close();?>