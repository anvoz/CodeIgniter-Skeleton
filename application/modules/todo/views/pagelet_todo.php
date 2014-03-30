<section class="todo-control">
    <header>
        <?php echo form_open('todo/todo_ajax/create', 'rel="async" class="form-horizontal" autocomplete="off"'); ?>
            <div class="form-group">
                <div class="col-xs-1">
                    <a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/toggle_all'); ?>">
                        <label><input class="todo-toggle-all" type="checkbox"></label>
                    </a>
                </div>
                <div class="col-xs-11">
                    <input class="todo-input form-control" name="title" placeholder="What needs to be done?" autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-1 col-xs-11">
                    <?php if ( ! empty($pagelet_upload_control)): ?>
                        <?php echo $pagelet_upload_control; ?>
                    <?php else: ?>
                        Install the <a href="<?php echo site_url('addons#jquery-file-upload'); ?>" target="_blank">jQuery file upload add-on</a>
                        to show an upload control here.
                    <?php endif; ?>
                </div>
            </div>
        <?php echo form_close(); ?>
    </header><hr>

    <section class="todo-list" data-filter="all">
        <?php foreach ($items as $item): ?>
            <?php echo Modules::run('todo/_pagelet_item', $item); ?>
        <?php endforeach; ?>
    </section><hr>

    <footer class="clearfix">
        <div class="pull-left">
            <strong class="todo-count"><?php echo $items_left; ?></strong> item(s) left
        </div>
        <ul class="todo-filter list-inline pull-right">
            <li><a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/all'); ?>">All</a></li>
            <li><a class="text-muted" rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/active'); ?>">Active</a></li>
            <li><a class="text-muted" rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/completed'); ?>">Completed</a></li>
        </ul>
    </footer>
</section>