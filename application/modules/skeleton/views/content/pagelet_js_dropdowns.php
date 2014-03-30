<p>Via data attributes: <code>data-toggle="dropdown"</code></p>

<div class="js-html-inspector">
    <div class="dropdown">
        <a class="btn btn-primary" data-toggle="dropdown" href="#">
            Dropdown trigger
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Link #1</a></li>
            <li><a href="#">Link #2</a></li>
        </ul>
    </div>
</div>

<p><br>Via Javascript: <code>$('.dropdown-toggle').dropdown()</code>(<code>data-toggle="dropdown"</code> still required)</p>
<p>Methods: <code>.dropdown('toggle')</code></p>
<p>Events: <code>show.bs.dropdown</code> <code>shown.bs.dropdown</code> <code>hide.bs.dropdown</code> <code>hidden.bs.dropdown</code></p>