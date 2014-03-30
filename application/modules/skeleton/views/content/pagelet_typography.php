<!-- Headings -->
<div class="media bse-heading js-html-inspector" data-replace-target="> div">
    <div class="pull-left">
        <h1>
            h1 <small>small</small>
        </h1>
    </div>
    <div class="pull-left">
        <h2>
            h2 <small>small</small>
        </h2>
    </div>
    <div class="pull-left">
        <h3>
            h3 <small>small</small>
        </h3>
    </div>
    <div class="pull-left">
        <h4>
            h4 <span class="small">.small</span>
        </h4>
    </div>

    <div class="pull-left">
        <!-- .h1 through .h6 classes are also available -->
        <span class="h5">
            .h5 <small>small</small>
        </span>
    </div>
    <div class="pull-left">
        <span class="h6">
            .h6 <span class="small">.small</span>
        </span>
    </div>
</div>

<p class="js-html-inspector">
    <!-- Lead body copy -->
    <span class="lead">.lead</span>

    <!-- Bold -->
    <strong>strong</strong>
    <b>b</b>

    <!-- Small text -->
    <small>small</small>
    <span class="small">.small</span>

    <!-- Italics -->
    <em>em</em>
    <i>i</i>

    <!-- Abbreviations -->
    <abbr title="abbreviation">abbr</abbr>
    <abbr class="initialism" title="abbreviation.initialism">
        .initialism
    </abbr>

    <!-- Inline code -->
    <code>code</code>
    <!-- Sample output from a program -->
    <samp>samp</samp>

    <!-- User input -->
    <kbd>kbd</kbd>
</p>

<!-- Contextual colors -->
<p class="js-html-inspector">
    <span class="text-muted">.text-muted</span>
    <span class="text-primary">.text-primary</span>
    <span class="text-success">.text-success</span>
    <span class="text-info">.text-info</span>
    <span class="text-warning">.text-warning</span>
    <span class="text-danger">.text-danger</span>
</p>

<!-- Contextual backgrounds -->
<p class="js-html-inspector">
    <span class="bg-primary">.bg-primary</span>
    <span class="bg-success">.bg-success</span>
    <span class="bg-info">.bg-info</span>
    <span class="bg-warning">.bg-warning</span>
    <span class="bg-danger">.bg-danger</span>
</p>

<!-- Labels -->
<p class="js-html-inspector" data-remove-target="p:first">
    <span class="label label-default">.label.label-default</span>
    <span class="label label-primary">..label-primary</span>
    <span class="label label-success">..label-success</span>
    <span class="label label-info">..label-info</span>
    <span class="label label-warning">..label-warning</span>
    <span class="label label-danger">..label-danger</span>
</p>

<!-- Alerts -->
<div class="js-html-inspector">
    <div class="alert alert-dismissable">
        <button class="close" data-dismiss="alert" type="button">&times;</button>
        .alert.alert-dismissable
    </div>
</div>
<div class="row js-html-inspector" data-replace-target="> div">
    <div class="col-sm-6">
        <div class="alert alert-success">
            .alert.alert-success
            <a class="alert-link" href="#">a.alert-link</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="alert alert-info">
            ..alert-info
            <a class="alert-link" href="#">a.alert-link</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="alert alert-warning">
            ..alert-warning
            <a class="alert-link" href="#">a.alert-link</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="alert alert-danger">
            ..alert-danger
            <a class="alert-link" href="#">a.alert-link</a>
        </div>
    </div>
</div>

<!-- Wells -->
<div class="row js-html-inspector" data-replace-target="> div">
    <div class="col-sm-4">
        <div class="well well-lg">.well.well-lg</div>
    </div>
    <div class="col-sm-4">
        <div class="well">.well</div>
    </div>
    <div class="col-sm-4">
        <div class="well well-sm">.well.well-sm</div>
    </div>
</div>

<!-- Alignment classes -->
<div class="row js-html-inspector" data-replace-target="> div">
    <div class="col-xs-4">
        <p class="text-left">.text-left</p>
    </div>
    <div class="col-xs-4">
        <p class="text-center">.text-center</p>
    </div>
    <div class="col-xs-4">
        <p class="text-right">.text-right</p>
    </div>
    <div class="col-xs-12">
        <p class="text-justify">.text-justify</p>
    </div>
</div>

<!-- Addresses -->
<div class="js-html-inspector">
    <address>
        <strong>address strong</strong><br>
        address<br>
        <a href="mailto:#">first.last@example.com</a>
    </address>
</div>

<!-- Blockquotes -->
<div class="row">
    <div class="col-sm-6 js-html-inspector">
        <blockquote>
            <p>blockquote p</p>
            <footer>
                footer
                <cite title="Cite">cite</cite>
            </footer>
        </blockquote>
    </div>
    <div class="col-sm-6 js-html-inspector">
        <blockquote class="blockquote-reverse">
            <p>blockquote.blockquote-reverse p</p>
            <footer>
                Someone famous in
                <cite title="Source Title">Source Title</cite>
            </footer>
        </blockquote>
    </div>
</div>

<div class="row">
    <!-- Unordered list -->
    <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>ul</strong></p>
        <ul>
            <li>li</li>
            <li>
                List item
                <ul>
                    <li>ul li</li>
                    <li>List item</li>
                </ul>
            </li>
            <li>List item</li>
        </ul>
    </div>

    <!-- Ordered list -->
    <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>ol</strong></p>
        <ol>
            <li>List item</li>
            <li>
                List item
                <ol>
                    <li>List item</li>
                    <li>List item</li>
                </ol>
            </li>
            <li>List item</li>
        </ol>
    </div>

    <!-- Unstyled list -->
    <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>ul.list-unstyled</strong></p>
        <ul class="list-unstyled">
            <li>List item</li>
            <li>
                List item
                <ul>
                    <li>List item</li>
                    <li>List item</li>
                </ul>
            </li>
            <li>List item</li>
        </ul>
    </div>

    <!-- Inline list -->
    <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>ul.list-inline</strong></p>
        <ul class="list-inline">
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>
    </div>
</div>

<!-- List group -->
<div class="row">
    <div class="col-sm-4 js-html-inspector" data-remove-target="p:first">
        <p><strong>ul.list-group</strong></p>
        <ul class="list-group">
            <li class="list-group-item">li.list-group-item</li>
            <li class="list-group-item">
                List item
                <span class="badge">.badge</span>
            </li>
            <li class="list-group-item">List item</li>
        </ul>
    </div>
    <div class="col-sm-4 js-html-inspector" data-remove-target="p:first">
        <p><strong>div.list-group</strong></p>
        <div class="list-group">
            <a class="list-group-item" href="#">
                a.list-group-item
            </a>
            <a class="list-group-item list-group-item-success" href="#">
                ..list-group-item-success
            </a>
            <a class="list-group-item list-group-item-info" href="#">
                ..list-group-item-info
            </a>
            <a class="list-group-item list-group-item-warning" href="#">
                ..list-group-item-warning
            </a>
            <a class="list-group-item list-group-item-danger" href="#">
                ..list-group-item-danger
            </a>
        </div>
    </div>
    <div class="col-sm-4 js-html-inspector" data-remove-target="p:first">
        <p><strong>div.list-group</strong></p>
        <div class="list-group">
            <a class="list-group-item active" href="#">
                a.list-group-item.active
            </a>
            <a class="list-group-item list-group-item-success active" href="#">
                ..list-group-item-success.active
            </a>
            <a class="list-group-item list-group-item-info active" href="#">
                ..list-group-item-info.active
            </a>
            <a class="list-group-item list-group-item-warning active" href="#">
                ..list-group-item-warning.active
            </a>
            <a class="list-group-item list-group-item-danger active" href="#">
                ..list-group-item-danger.active
            </a>
        </div>
    </div>
</div>
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>div.list-group</strong></p>
    <div class="list-group">
        <a class="list-group-item active" href="#">
            <h4 class="list-group-item-heading">h4.list-group-item-heading</h4>
            <p class="list-group-item-text">p.list-group-item-text</p>
        </a>
        <a class="list-group-item" href="#">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">Paragraph</p>
        </a>
    </div>
</div>

<div class="row">
    <!-- Description -->
    <div class="col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>dl</strong></p>
        <dl>
            <dt>dt</dt>
            <dd>dd</dd>
            <dt>Term</dt>
            <dd>Description<br>Description</dd>
        </dl>
    </div>

    <!-- Horizontal description -->
    <div class="col-xs-6 js-html-inspector" data-remove-target="p:first">
        <p><strong>dl.dl-horizontal</strong></p>
        <dl class="dl-horizontal">
            <dt>Term</dt>
            <dd>Description</dd>
            <dt>Long term will be truncated</dt>
            <dd>Description<br>Description</dd>
        </dl>
    </div>
</div>