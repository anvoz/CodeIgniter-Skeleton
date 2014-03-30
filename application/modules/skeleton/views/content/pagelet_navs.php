<div class="row">
    <div class="col-sm-6">
        <div class="js-html-inspector" data-remove-target="p:first">
            <p><strong>ul.nav.nav-tabs</strong></p>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#">li.active a</a>
                </li>
                <li class="disabled">
                    <a href="#">li.disabled a</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        ... <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Link #1</a></li>
                        <li><a href="#">Link #2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="js-html-inspector" data-remove-target='["p:first","br"]'>
            <br><p><strong>ul.nav.nav-pills</strong></p>
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#">li.active a</a>
                </li>
                <li class="disabled">
                    <a href="#">Disabled</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        ... <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Link #1</a></li>
                        <li><a href="#">Link #2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-6 js-html-inspector" data-remove-target='["p:first","br"]'>
        <br><p><strong>ul.nav.nav-pills.nav-stacked</strong></p>
        <ul class="nav nav-pills nav-stacked">
            <li class="active">
                <a href="#">
                    li.active a
                    <span class="badge pull-right">.badge.pull-right</span>
                </a>
            </li>
            <li class="disabled">
                <a href="#">Disabled</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Link #1</a></li>
                    <li><a href="#">Link #2</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
    <br><p><strong>ul.nav.nav-tabs.nav-justified</strong></p>
    <ul class="nav nav-tabs nav-justified">
        <li class="active">
            <a href="#">
                li.active a
                <span class="badge">.badge</span>
            </a>
        </li>
        <li><a href="#">Link #2</a></li>
        <li><a href="#">Link #3</a></li>
    </ul>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
    <br><p><strong>ul.nav.nav-pills.nav-justified</strong></p>
    <ul class="nav nav-pills nav-justified">
        <li class="active">
            <a href="#">
                li.active a
                <span class="badge">.badge</span>
            </a>
        </li>
        <li><a href="#">Link #2</a></li>
        <li><a href="#">Link #3</a></li>
    </ul>
</div>