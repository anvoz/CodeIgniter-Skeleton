<p>Via data attributes: <code>data-toggle="collapse"</code></p>

<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>#accordion.panel-group</strong></p>
    <div class="panel-group" id="accordion">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                        data-toggle="collapse" data-parent="#accordion" href="#collapse-one"
                    </a>
                </h4>
            </div>
            <div class="panel-collapse collapse in" id="collapse-one">
                <div class="panel-body">#collapse-one.collapse.in</div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-two">
                        data-toggle="collapse" data-parent="#accordion" href="#collapse-two"
                    </a>
                </h4>
            </div>
            <div class="panel-collapse collapse" id="collapse-two">
                <div class="panel-body">#collapse-two.collapse</div>
            </div>
        </div>
    </div>
</div>

<p>Via Javascript: <code>$(".collapse").collapse()</code></p>
<p>Options: <code>parent: false|selector</code> <code>toggle: true|false</code></p>
<p>Methods: <code>.collapse('toggle')</code> <code>.collapse('show')</code> <code>.collapse('hide')</code></p>
<p>Events: <code>show.bs.collapse</code> <code>shown.bs.collapse</code> <code>hide.bs.collapse</code> <code>hidden.bs.collapse</code></p>