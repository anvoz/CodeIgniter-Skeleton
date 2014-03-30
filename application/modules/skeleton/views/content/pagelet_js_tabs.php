<p>Via data attributes: <code>data-toggle="tab"</code></p>

<div class="js-html-inspector">
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#js-tab-pane1">Tab #1</a>
        </li>
        <li>
            <a data-toggle="tab" href="#js-tab-pane2">Tab #2</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="js-tab-pane1">
            <p>Content #1: .table-content .tab-pane.active</p>
        </div>
        <div class="tab-pane" id="js-tab-pane2">
            <p>Content #2: .table-content .tab-pane</p>
        </div>
    </div>
</div>

<p>Via Javascript: <code>$(this).tab('show')</code></p>

<div class="js-html-inspector">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#js-tab-pane3" onclick="$(this).tab('show'); return false;">
                Tab #1
            </a>
        </li>
        <li>
            <a href="#js-tab-pane4" onclick="$(this).tab('show'); return false;">
                Tab #2
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="js-tab-pane3">
            <p>Content #1: .table-content .tab-pane.fade.in.active</p>
        </div>
        <div class="tab-pane fade" id="js-tab-pane4">
            <p>Content #2: .table-content .tab-pane.fade</p>
        </div>
    </div>
</div>

<p>Events: <code>show.bs.tab</code> <code>shown.bs.tab</code></p>