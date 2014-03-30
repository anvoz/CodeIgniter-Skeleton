<div class="sidebar hidden-print" id="sidebar" data-spy="affix">
    <ul class="nav sidenav">
        <li class="active"><a href="#welcome">Welcome</a></li>
        <?php foreach ($skeleton_data as $key => $items): ?>
            <li>
                <a href="#<?php echo $key; ?>"><?php echo ucfirst($key); ?></a>
                <?php if ( ! empty($items)): ?>
                    <ul class="nav">
                    <?php foreach ($items as $sub_key => $label): ?>
                        <li><a href="#<?php echo $sub_key; ?>"><?php echo $label; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="back-to-top" href="#top">Back to top</a>
</div>