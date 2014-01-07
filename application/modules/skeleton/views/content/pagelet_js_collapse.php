<div>
    <p>Via data attributes:</p>
    <div class="panel-group" id="accordion">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        data-toggle="collapse" data-target="#collapseOne"
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">#collapseOne.collapse.in</div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        data-toggle="collapse" data-target="#collapseTwo"
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">#collapseTwo.collapse</div>
            </div>
        </div>
    </div>
    <p><br>Via Javascript: <code>$(".collapse").collapse()</code></p>
    <p>Options: <code>parent</code> <code>toggle</code></p>
    <p>Methods: <code>.collapse('toggle')</code> <code>.collapse('show')</code> <code>.collapse('hide')</code></p>
    <p>Events: <code>show.bs.collapse</code> <code>shown.bs.collapse</code> <code>hide.bs.collapse</code> <code>hidden.bs.collapse</code></p>
</div>