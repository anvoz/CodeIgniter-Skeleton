<section class="todo-control">
    <header>
        <?php echo form_open('todo_ajax/create', 'rel="async" class="form-horizontal"'); ?>
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
        <?php echo form_close(); ?>
    </header><hr>

    <section class="todo-list">
        <?php foreach ($items as $item): ?>
            <?php echo Modules::run('todo/_pagelet_item', $item); ?>
        <?php endforeach; ?>
    </section><hr>

    <footer class="clearfix">
        <div class="pull-left">
            <strong class="todo-count"><?php echo $items_left; ?></strong> item(s) left
        </div>
        <ul class="list-inline pull-right">
            <li>
                <a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/all'); ?>">
                    <strong>All</strong>
                </a>
            </li>
            <li>
                <a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/active'); ?>">
                    Active
                </a>
            </li>
            <li>
                <a rel="async" href="#" ajaxify="<?php echo site_url('todo/todo_ajax/filter/completed'); ?>">
                    Completed
                </a>
            </li>
        </ul>
    </footer>
</section>