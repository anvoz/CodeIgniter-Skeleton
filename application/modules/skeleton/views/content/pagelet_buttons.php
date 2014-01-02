<h2 id="buttons">Buttons</h2>

<p>
    <button class="btn btn-default" type="button">button.btn.btn-default</button>
    <button class="btn btn-primary" type="button">.btn-primary</button>
    <button class="btn btn-success" type="button">.btn-success</button>
    <button class="btn btn-info" type="button">.btn-info</button>
    <button class="btn btn-warning" type="button">.btn-warning</button>
    <button class="btn btn-danger" type="button">.btn-danger</button>
    <button class="btn btn-link" type="button">.btn-link</button>
</p>
<p>
    <button class="btn btn-default btn-lg" type="button">.btn-lg</button>
    <button class="btn btn-default" type="button">Default size button</button>
    <button class="btn btn-default btn-sm" type="button">.btn-sm</button>
    <button class="btn btn-default btn-xs" type="button">.btn-xs</button>
</p>
<p>
    <button class="btn btn-default btn-block" type="button">.btn-block</button>
    <button class="btn btn-default btn-block" type="button">.btn-block</button>
</p>
<p>
    <a class="btn btn-default" href="#">a.btn</a>
    <button class="btn btn-default" type="button">button.btn</button>
    <input class="btn btn-default" type="button" value="input.btn">

    <button class="btn btn-default" type="button" disabled="disabled">Disabled button</button>
    <a class="btn btn-default disabled" href="#">a.btn.disabled</a>
</p>
<div class="btn-group">
    <button class="btn btn-primary" type="button" data-loading-text="Loading..." data-complete-text="Completed" onclick="$(this).button('loading').siblings('button').prop('disabled',false);" autocomplete="off">
        .button('loading')
    </button>
    <button class="btn btn-primary" type="button" onclick="$(this).prop('disabled',true).parent().find('button:first').button('complete');" disabled="disabled" autocomplete="off">
        &larr; .button('complete')
    </button>
    <button class="btn btn-primary" type="button" onclick="$(this).parent().find('button:first').button('reset').siblings('button').prop('disabled',true);" disabled="disabled" autocomplete="off">
        &larr; .button('reset')
    </button>
</div>
<button type="button" class="btn btn-primary" data-toggle="button">data-toggle="button"</button>

<div>
    <br><p>div.btn-group</p>
    <div class="btn-toolbar">
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-default"><small>.btn-group-lg</small> button</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
        </div>
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-default"><small>.btn-group-sm</small> button</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
        </div>
        <div class="btn-group btn-group-xs">
            <button type="button" class="btn btn-default"><small>.btn-group-xs</small> button</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
        </div>
    </div>

    <div class="btn-group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>

        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                button.dropdown-toggle <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Link #1</a></li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
    </div>
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <small>.dropup</small> button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
        </ul>
    </div>
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            (.pull-right) <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
        </ul>
    </div>
    <div class="btn-group-vertical">
        <button class="btn btn-default" type="button"><small>.btn-group-vertical</small> button</button>
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                Dropdown <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Link #1</a></li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
        <button class="btn btn-default" type="button">3</button>
    </div>

    <p>.btn-group-justified</p>
    <div class="btn-toolbar">
        <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default">&lt;a&gt;</a>
            <a href="#" class="btn btn-default">2</a>
            <a href="#" class="btn btn-default">3</a>
        </div>
    </div>
</div>