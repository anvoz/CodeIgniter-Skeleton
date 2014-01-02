<h2 id="js-togglable-tabs">Togglable tabs</h2>

<div>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#js-tab-pane1" data-toggle="tab">data-toggle="tab"</a></li>
        <li><a href="#js-tab-pane2" onclick="$(this).tab('show'); return false;">$(this).tab('show')</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="js-tab-pane1"><p><small>.table-content</small> .tab-pane.active</p></div>
        <div class="tab-pane" id="js-tab-pane2"><p><small>.table-content</small> .tab-pane</p></div>
    </div>
    <p>Events: <code>show.bs.tab</code> <code>shown.bs.tab</code></p>
</div>