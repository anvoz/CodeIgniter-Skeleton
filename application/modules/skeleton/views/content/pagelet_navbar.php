<p>.navbar.navbar-default</p>
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><span class="text-muted">.navbar-header</span> .navbar-brand</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="text-muted">ul.nav.navbar-nav li.active</span> a</a></li>
        <li><a href="#">Link</a></li>
    </ul>
</nav>

<p>.navbar.navbar-inverse</p>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Brand</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Link</a></li>
    </ul>
</nav>

<p>Complex navbar with <code>navbar-left</code>,<code>navbar-right</code> and <code>navbar-collapse</code>.</p>
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Link #1</a></li>
                    <li><a href="#">Link #2</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Link #1</a></li>
                    <li><a href="#">Link #2</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>