<h2 id="js-togglable-tabs">Togglable tabs</h2>

<div>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#js-tab-pane1" data-toggle="tab">
                data-toggle="tab"
            </a>
        </li>
        <li>
            <a href="#js-tab-pane2" onclick="$(this).tab('show'); return false;">
                $(this).tab('show')
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="js-tab-pane1">
            <p><span class="text-muted">.table-content</span> .tab-pane.active</p>
        </div>
        <div class="tab-pane" id="js-tab-pane2">
            <p><span class="text-muted">.table-content</span> .tab-pane</p>
        </div>
    </div>

    <p>Fade effect</p>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#js-tab-pane3" data-toggle="tab">Tab #1</a>
        </li>
        <li>
            <a href="#js-tab-pane4" data-toggle="tab">Tab #2</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="js-tab-pane3">
            <p><span class="text-muted">.table-content</span> .tab-pane.fade.in.active</p>
        </div>
        <div class="tab-pane fade" id="js-tab-pane4">
            <p><span class="text-muted">.table-content</span> .tab-pane.fade</p>
        </div>
    </div>

    <p>Events: <code>show.bs.tab</code> <code>shown.bs.tab</code></p>
</div>