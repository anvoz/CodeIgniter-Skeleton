<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.navbar.navbar-default .container-fluid</strong></p>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    .navbar-header .navbar-brand
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">ul.nav.navbar-nav li.active a</a>
                </li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.navbar.navbar-inverse .container-fluid</strong></p>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <p class="navbar-text">
                p.navbar-text
                <a href="#" class="navbar-link">a.navbar-link</a>
            </p>

            <!-- Add the .navbar-btn class to <button> elements not residing
            in a <form> to vertically center them in the navbar. -->
            <button class="btn btn-default navbar-btn" type="button">
                ...navbar-btn
            </button>
            <button class="btn btn-default navbar-btn btn-sm" type="button">
                ....btn-sm
            </button>
            <button class="btn btn-default navbar-btn btn-xs" type="button">
                ....btn-xs
            </button>
        </div>
    </nav>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
    <p>Complex navbar with <code>navbar-left</code>, <code>navbar-right</code> and <code>navbar-collapse</code>.</p>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse2">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            .. Dropdown <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Link #1</a></li>
                            <li><a href="#">Link #2</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder=".navbar-form.navbar-left">
                    </div>
                    <button class="btn btn-default" type="submit">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            ...navbar-right Dropdown <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Link #1</a></li>
                            <li><a href="#">Link #2</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>