<h2 id="typography">Typography</h2>

<div class="row">
    <div class="col-lg-2"><h1>h1 <small>small</small></h1></div>
    <div class="col-lg-2"><h2>h2 <small>small</small></h2></div>
    <div class="col-lg-2"><h3>h3 <small>small</small></h3></div>
    <div class="col-lg-2"><h4>h4 <small>small</small></h4></div>
    <div class="col-lg-2"><h5>h5 <small>small</small></h5></div>
    <div class="col-lg-2"><h6>h6 <small>small</small></h6></div>
</div>

<p>
    <span class="lead">.lead</span>
    <small>small</small>
    <span class="small">.small</span>
    <strong>strong</strong>
    <em>em</em>
    <abbr title="abbreviation">abbr</abbr>
    <abbr title="abbreviation.initialism" class="initialism">.initialism</abbr>
    <code>code</code>
</p>

<p>
    <span class="text-muted">.text-muted</span>
    <span class="text-primary">.text-primary</span>
    <span class="text-success">.text-success</span>
    <span class="text-info">.text-info</span>
    <span class="text-warning">.text-warning</span>
    <span class="text-danger">.text-danger</span>
</p>

<p>
    <span class="label label-default">.label.label-default</span>
    <span class="label label-primary">..label-primary</span>
    <span class="label label-success">..label-success</span>
    <span class="label label-info">..label-info</span>
    <span class="label label-warning">..label-warning</span>
    <span class="label label-danger">..label-danger</span>
</p>

<div class="alert alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    .alert.alert-dismissable <a class="alert-link" href="#">a.alert-link</a>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="alert alert-success">..alert-success <a class="alert-link" href="#">a.alert-link</a></div>
    </div>
    <div class="col-md-6">
        <div class="alert alert-info">..alert-info <a class="alert-link" href="#">a.alert-link</a></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="alert alert-warning">..alert-warning <a class="alert-link" href="#">a.alert-link</a></div>
    </div>
    <div class="col-md-6">
        <div class="alert alert-danger">..alert-danger <a class="alert-link" href="#">a.alert-link</a></div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="well well-lg">..well-lg</div>
    </div>
    <div class="col-md-4">
        <div class="well">.well</div>
    </div>
    <div class="col-md-4">
        <div class="well well-sm">..well-sm</div>
    </div>
</div>

<p class="text-left">.text-left</p>
<p class="text-center">.text-center</p>
<p class="text-right">.text-right</p>


<blockquote>
    <p>blockquote p</p>
    <small>small <cite title="Cite">cite</cite></small>
</blockquote>
<div class="clearfix">
    <blockquote class="pull-right">
        <p>blockquote.pull-right p</p>
        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>
</div>

<div class="row">
    <div class="col-md-4">
        <p>ul</p>
        <ul><li>li</li><li>List item<ul><li><span class="text-muted">ul</span> li</li><li>List item</li></ul></li><li>List item</li></ul>
        <br>
    </div>
    <div class="col-md-4">
        <p>ol</p>
        <ol><li>List item</li><li>List item<ol><li>List item</li><li>List item</li></ol></li><li>List item</li></ol>
        <br>
    </div>
    <div class="col-md-4">
        <p>ul.list-unstyled</p>
        <ul class="list-unstyled"><li>List item</li><li>List item<ul><li>List item</li><li>List item</li></ul></li><li>List item</li></ul>
        <br>
    </div>
</div>
<div>
    <p>ul.list-inline</p>
    <ul class="list-inline"><li>List item</li><li>List item</li><li>List item</li></ul>
    <br>
</div>
<div class="row">
    <div class="col-lg-4">
        <p>ul.list-group</p>
        <ul class="list-group">
            <li class="list-group-item">li.list-group-item</li>
            <li class="list-group-item"><span class="badge">.badge</span> List item</li>
            <li class="list-group-item">List item</li>
        </ul>
    </div>
    <div class="col-lg-4">
        <p>div.list-group</p>
        <div class="list-group">
            <a href="#" class="list-group-item active">a.list-group-item.active</a>
            <a href="#" class="list-group-item">Link #2</a>
            <a href="#" class="list-group-item">Link #3</a>
        </div>
    </div>
    <div class="col-lg-4">
        <p>div.list-group</p>
        <div class="list-group">
            <a href="#" class="list-group-item active">
                a.list-group-item.active
                <h4 class="list-group-item-heading">&gt; h4.list-group-item-heading</h4>
                <p class="list-group-item-text">&gt; p.list-group-item-text</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Paragraph</p>
            </a>
        </div>
    </div>
</div>

<address>
    <strong><span class="text-muted">address</span> strong</strong><br>
    address
</address>

<div class="row">
    <div class="col-md-6">
        <p>dl</p>
        <dl>
            <dt>dt</dt>
            <dd>dd</dd>
            <dt>Term</dt>
            <dd>Description<br>Description</dd>
        </dl>
    </div>
    <div class="col-md-6">
        <p>dl.dl-horizontal</p>
        <dl class="dl-horizontal">
            <dt>Term</dt>
            <dd>Description</dd>
            <dt>Horizontal description lists will truncate terms that are too long to fit in the left column with text-overflow.</dt>
            <dd>Description<br>Description</dd>
        </dl>
    </div>
</div>