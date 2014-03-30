<p>Usage: <code>$('[data-toggle="popover"]').popover()</code></p>

<div class="text-center js-html-inspector">
    <button class="btn btn-primary" data-toggle="popover" data-placement="left" data-content="..." type="button" title="Popover on left">
        Left
    </button>
    <button class="btn btn-primary" data-toggle="popover" data-placement="top" data-content="..." type="button" title="Popover on top">
        Top
    </button>
    <button class="btn btn-primary" data-toggle="popover" data-placement="bottom" data-content="..." type="button" title="Popover on bottom">
        Bottom
    </button>
    <button class="btn btn-primary" data-toggle="popover" data-placement="right" data-content="..." type="button" title="Popover on right">
        Right
    </button>
</div>

<div class="text-center js-html-inspector">
    <!-- Static popover -->
    <div class="popover bottom" style="display: inline-block; position: relative; z-index: 1000;">
        <div class="arrow"></div>
        <h3 class="popover-title">Popover</h3>
        <div class="popover-content">
            <p>You must initialize them yourself</p>
        </div>
    </div>
</div>

<p><br>
    Options: <code>animation: true|false</code> <code>html: false|true</code> <code>selector: false|string</code><br>
    <code>title: ''|function</code> <code>content: ''|function</code> <code>container: false|string</code><br>
    <code>placement: right|location|auto|function</code><br>
    <code>trigger: click|hover|focus|manual</code><br>
    <code>delay: 0|{show:500, hide:100}</code>
</p>
<p>Methods: <code>.popover('show')</code> <code>.popover('hide')</code> <code>.popover('toggle')</code> <code>.popover('destroy')</code></p>
<p>Events: <code>show.bs.popover</code> <code>shown.bs.popover</code> <code>hide.bs.popover</code> <code>hidden.bs.popover</code></p>