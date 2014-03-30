<p>Usage: <code>$('[data-toggle="tooltip"]').tooltip()</code></p>

<div class="text-center js-html-inspector">
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" type="button" title="Tooltip on left">
        Left
    </button>
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" type="button" title="Tooltip on top">
        Top
    </button>
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" type="button" title="Tooltip on bottom">
        Bottom
    </button>
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="right" type="button" title="Tooltip on right">
        Right
    </button>
</div>

<div class="text-center js-html-inspector">
    <!-- Static tooltip -->
    <div class="tooltip bottom" style="display: inline-block; position: relative; opacity: 1; filter: alpha(opacity=100); z-index: 1000;">
        <div class="tooltip-inner">You must initialize them yourself</div>
        <div class="tooltip-arrow"></div>
    </div>
</div>

<p>
    Options: <code>animation: true|false</code> <code>html: false|true</code> <code>selector: false|string</code><br>
    <code>title: ''|function</code> <code>container: false|string</code><br>
    <code>placement: top|location|auto|function</code><br>
    <code>trigger: hover focus|click|manual</code><br>
    <code>delay: 0|{show:500, hide:100}</code>
</p>
<p>Methods: <code>.tooltip('show')</code> <code>.tooltip('hide')</code> <code>.tooltip('toggle')</code> <code>.tooltip('destroy')</code></p>
<p>Events: <code>show.bs.tooltip</code> <code>shown.bs.tooltip</code> <code>hide.bs.tooltip</code> <code>hidden.bs.tooltip</code></p>