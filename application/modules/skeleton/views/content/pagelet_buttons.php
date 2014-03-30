<!-- Styled buttons -->
<p class="bse-buttons js-html-inspector">
    <button class="btn btn-default" type="button">
        button.btn.btn-default
    </button>
    <button class="btn btn-primary" type="button">..btn-primary</button>
    <button class="btn btn-success" type="button">..btn-success</button>
    <button class="btn btn-info" type="button">..btn-info</button>
    <button class="btn btn-warning" type="button">..btn-warning</button>
    <button class="btn btn-danger" type="button">..btn-danger</button>
    <button class="btn btn-link" type="button">..btn-link</button>
</p>

<!-- Button sizes -->
<p class="bse-buttons js-html-inspector">
    <button class="btn btn-default btn-lg" type="button">...btn-lg</button>
    <button class="btn btn-default" type="button">Default button size</button>
    <button class="btn btn-default btn-sm" type="button">...btn-sm</button>
    <button class="btn btn-default btn-xs" type="button">...btn-xs</button>
</p>

<!-- Block level buttons -->
<p class="js-html-inspector">
    <button class="btn btn-primary btn-block" type="button">
        ..btn-primary.btn-block
    </button>
    <button class="btn btn-default btn-block" type="button">
        ..btn-default.btn-block
    </button>
</p>

<!-- Button tags -->
<p class="bse-buttons js-html-inspector">
    <a class="btn btn-default" href="#">a.btn.btn-default</a>
    <button class="btn btn-default" type="button">button..</button>
    <input class="btn btn-default" type="button" value="input[type='button']..">
    <input class="btn btn-default" type="submit" value="input[type='submit']..">
</p>

<p class="bse-buttons js-html-inspector">
    <!-- Active state -->
    <a class="btn btn-default active" href="#">a...active</a>
    <button class="btn btn-default active" type="button">
        button...active
    </button>

    <!-- Disabled state -->
    <a class="btn btn-default disabled" href="#">a...disabled</a>
    <button class="btn btn-default" type="button" disabled="disabled">
        button..[disabled]
    </button>
</p>

<!-- Button groups -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.btn-group</strong></p>
    <div class="btn-group">
        <button class="btn btn-default" type="button">
            button.btn.btn-default
        </button>
        <button class="btn btn-default" type="button">2</button>
        <button class="btn btn-default" type="button">3</button>
    </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first" data-remove-class-target="div.bse-buttons">
    <p><strong>.btn-toolbar .btn-group</strong></p>
    <div class="btn-toolbar bse-buttons">
        <!-- Large button group -->
        <div class="btn-group btn-group-lg">
            <button class="btn btn-default" type="button">
                ..btn-group-lg button
            </button>
            <button class="btn btn-default" type="button">2</button>
            <button class="btn btn-default" type="button">3</button>
        </div>

        <!-- Small button group -->
        <div class="btn-group btn-group-sm">
            <button class="btn btn-default" type="button">
                ..btn-group-sm button
            </button>
            <button class="btn btn-default" type="button">2</button>
            <button class="btn btn-default" type="button">3</button>
        </div>

        <!-- Extra small button group -->
        <div class="btn-group btn-group-xs">
            <button class="btn btn-default" type="button">
                ..btn-group-xs button
            </button>
            <button class="btn btn-default" type="button">2</button>
            <button class="btn btn-default" type="button">3</button>
        </div>
    </div>
</div><br>

<div class="btn-toolbar bse-buttons js-html-inspector">
    <!-- Button group with dropdown -->
    <div class="btn-group">
        <button class="btn btn-default" type="button">1</button>
        <button class="btn btn-default" type="button">2</button>
        <div class="btn-group">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                button.dropdown-toggle
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Link #1</a></li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
    </div>

    &nbsp;<!-- Only .btn-group has left padding inside .btn-toolbar -->

    <!-- Vertical button group with dropdown -->
    <div class="btn-group-vertical">
        <button class="btn btn-default" type="button">
            .btn-group-vertical button
        </button>
        <div class="btn-group">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Link #1</a></li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
        <button class="btn btn-default" type="button">3</button>
    </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.btn-group.btn-group-justified</strong></p>
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-default">Button</a>
        <a href="#" class="btn btn-default">2</a>
        <a href="#" class="btn btn-default">3</a>
    </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first" data-remove-class-target="div.bse-buttons">
    <p><strong>.btn-toolbar .btn-group.dropup</strong></p>
    <!-- Split button dropup -->
    <div class="btn-group dropup bse-buttons">
        <button class="btn btn-default" type="button">
            .dropdown-menu &rarr;
        </button>
        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
        </ul>
    </div>

    <!-- Split button right dropup -->
    <div class="btn-group dropup">
        <button class="btn btn-default" type="button">
            ..dropdown-menu-right &rarr;
        </button>
        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
        </ul>
    </div>
</div>