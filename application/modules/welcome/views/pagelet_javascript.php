<div>
    <h2 id="js-modals">Modals</h2>

    <div>
        <!-- Button trigger modal -->
        <p>
            Via data attributes: <code>data-toggle="modal"</code> <code>data-target="#modal"</code>
            <a data-toggle="modal" href="#modal" class="btn btn-primary">Launch modal</a>
        </p>
        <p>
            Via Javascript: <code>$('#modal').modal()</code>
            <a href="#" onclick="$('#modal').modal(); return false;" class="btn btn-primary">Launch modal</a>
        </p>
        <p>Options: <code>backdrop</code> <code>keyboard</code> <code>show</code> <code>remote</code></p>
        <p>Methods: <code>.modal('toggle')</code> <code>.modal('show')</code> <code>.modal('hide')</code></p>
        <p>Events: <code>show.bs.modal</code> <code>shown.bs.modal</code> <code>hide.bs.modal</code> <code>hidden.bs.modal</code></p>

        <!-- Modal -->
        <div class="modal fade" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><small>.modal .modal-dialog .modal-content .modal-header</small> h4.modal-title</h4>
                    </div>
                    <div class="modal-body">
                        <small>.modal-content</small> .modal-body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><small>.modal-content .modal-footer</small> .btn</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>

<div>
    <h2 id="js-dropdowns">Dropdowns</h2>

    <div>
        <p>Via data attributes: <code>data-toggle="dropdown"</code></p>
        <div class="dropdown">
            <a class="btn btn-primary" data-toggle="dropdown" href="#">Dropdown trigger</a>
            <ul class="dropdown-menu">
                <li><a href="#">Link #1</a></li>
                <li><a href="#">Link #2</a></li>
            </ul>
        </div>
    </div>
    <p><br>Via Javascript: <code>$('.dropdown-toggle').dropdown()</code></p>
    <p>Methods: <code>.dropdown('toggle')</code></p>
    <p>Events: <code>show.bs.dropdown</code> <code>shown.bs.dropdown</code> <code>hide.bs.dropdown</code> <code>hidden.bs.dropdown</code></p>
</div>

<div>
    <h2 id="js-scrollspy">ScrollSpy</h2>

    <div>
        <p>Via data attributes: <code>data-spy="scroll"</code> <code>data-target="#navbar-target"</code></p>
        <p>Via Javascript: <code>$('body').scrollspy({ target: '#navbar-target' })</code></p>
        <p>Options: <code>target</code> <code>offset</code></p>
        <p>Methods: <code>.scrollspy('refresh')</code></p>
        <p>Events: <code>activate.bs.scrollspy</code></p>
        <p>Example: <code>assets/js/modules/welcome.js</code></p>
    </div>
</div>

<div>
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
</div>

<div>
    <h2 id="js-tooltips">Tooltips</h2>

    <div>
        <p>Usage: <code>$('[data-toggle="tooltip"]').tooltip()</code></p>
        <div class="text-center">
            <button title="Tooltip on left" data-placement="left" data-toggle="tooltip" class="btn btn-default" type="button">Tooltip on left</button>
            <button title="Tooltip on top" data-placement="top" data-toggle="tooltip" class="btn btn-default" type="button">Tooltip on top</button>
            <button title="Tooltip on bottom" data-placement="bottom" data-toggle="tooltip" class="btn btn-default" type="button">Tooltip on bottom</button>
            <button title="Tooltip on right" data-placement="right" data-toggle="tooltip" class="btn btn-default" type="button">Tooltip on right</button>
        </div>
    </div>
    <p><br>Options: <code>animation</code> <code>html</code> <code>placement</code> <code>selector</code> <code>title</code> <code>trigger</code> <code>delay</code> <code>container</code></p>
    <p>Methods: <code>.tooltip('toggle')</code> <code>.tooltip('show')</code> <code>.tooltip('hide')</code> <code>.tooltip('destroy')</code></p>
    <p>Events: <code>show.bs.tooltip</code> <code>shown.bs.tooltip</code> <code>hide.bs.tooltip</code> <code>hidden.bs.tooltip</code></p>
</div>

<div>
    <h2 id="js-popovers">Popovers</h2>

    <div>
        <p>Usage: <code>$('[data-toggle="popover"]').popover()</code></p>
        <div class="text-center">
            <button title="Popover on left" data-content="..." data-placement="left" data-toggle="popover" class="btn btn-default" type="button">Popover on left</button>
            <button title="Popover on top" data-content="..." data-placement="top" data-toggle="popover" class="btn btn-default" type="button">Popover on top</button>
            <button title="Popover on bottom" data-content="..." data-placement="bottom" data-toggle="popover" class="btn btn-default" type="button">Popover on bottom</button>
            <button title="Popover on right" data-content="..." data-placement="right" data-toggle="popover" class="btn btn-default" type="button">Popover on right</button>
        </div>
    </div>
    <p><br>Options: <code>animation</code> <code>html</code> <code>placement</code> <code>selector</code> <code>title</code> <code>content</code> <code>trigger</code> <code>delay</code> <code>container</code></p>
    <p>Methods: <code>.popover('toggle')</code> <code>.popover('show')</code> <code>.popover('hide')</code> <code>.popover('destroy')</code></p>
    <p>Events: <code>show.bs.popover</code> <code>shown.bs.popover</code> <code>hide.bs.popover</code> <code>hidden.bs.popover</code></p>
</div>

<div>
    <h2 id="js-collapse">Collapse</h2>

    <div>
        <p>Via data attributes:</p>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
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
            <div class="panel panel-default">
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
</div>

<div>
    <h2 id="js-carousel">Carousel</h2>

    <div>
        <div class="carousel slide" id="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carousel"></li>
                <li data-slide-to="1" data-target="#carousel"></li>
                <li data-slide-to="2" data-target="#carousel"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img alt="First slide" src="data:image/png;base64,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AACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIQShAAAAKEEIQAAQChBCAAAEEoQAgAAhBKEAAAAoQQhAABAKEEIAAAQShACAACEEoQAAAChBCEAAEAoQQgAABBKEAIAAIT6P4OyaZU5bi23AAAAAElFTkSuQmCC">
                    <div class="carousel-caption">
                        <h3><small>.carousel-caption</small> h3</h3>
                        <p><small>.carousel-caption</small> p</p>
                    </div>
                </div>
                <div class="item">
                    <img alt="Second slide" src="data:image/png;base64,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CUIAAICgBCEAAEBQghAAACAoQQgAABCUIAQAAAhKEAIAAAQlCAEAAIIShAAAAEEJQgAAgKAEIQAAQFCCEAAAIChBCAAAEJQgBAAACEoQAgAABCUIAQAAghKEAAAAQQlCAACAoAQhAABAUIIQAAAgKEEIAAAQlCAEAAAIShACAAAEJQgBAACCEoQAAABBCUIAAICgBCEAAEBQghAAACAoQQgAABCUIAQAAAhKEAIAAAQlCAEAAIIShAAAAEEJQgAAgKAEIQAAQFCCEAAAIChBCAAAEJQgBAAACEoQAgAABCUIAQAAghKEAAAAQQlCAACAoAQhAABAUIIQAAAgKEEIAAAQlCAEAAAIShACAAAEJQgBAACCEoQAAABBCUIAAICgBCEAAEBQghAAACAoQQgAABCUIAQAAAhKEAIAAAQlCAEAAIIShAAAAEEJQgAAgKAEIQAAQFCCEAAAIChBCAAAEJQgBAAACEoQAgAABCUIAQAAghKEAAAAQQlCAACAoAQhAABAUIIQAAAgKEEIAAAQlCAEAAAIShACAAAEJQgBAACCEoQAAABBCUIAAICgBCEAAEBQghAAACAoQQgAABCUIAQAAAhKEAIAAAQlCAEAAIIShAAAAEEJQgAAgKAEIQAAQFCCEAAAIChBCAAAEJQgBAAACOr/AFCJEtUpNiPaAAAAAElFTkSuQmCC">
                </div>
                <div class="item">
                    <img alt="Third slide" src="data:image/png;base64,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UIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQglCAACAUIIQAAAglCAEAAAIJQgBAABCCUIAAIBQghAAACCUIAQAAAglCAEAAEIJQgAAgFCCEAAAIJQgBAAACCUIAQAAQv0f9GyLSGVXN1YAAAAASUVORK5CYII=">
                </div>
            </div>
            <a data-slide="prev" href="#carousel" class="left carousel-control">
                <span class="icon-prev"></span>
            </a>
            <a data-slide="next" href="#carousel" class="right carousel-control">
                <span class="icon-next"></span>
            </a>
        </div>
    </div>
    <p><br>Via data attributes: <code>data-target="#carousel"</code> <code>data-slide-to</code> <code>data-slide</code></p>
    <p>Via Javascript: <code>$('.carousel').carousel()</code></p>
    <p>Options: <code>interval</code> <code>pause</code> <code>wrap</code></p>
    <p>Methods: <code>.carousel('cycle')</code> <code>.carousel('pause')</code> <code>.carousel('number')</code> <code>.carousel('prev')</code> <code>.carousel('next')</code></p>
    <p>Events: <code>slide.bs.carousel</code> <code>slid.bs.carousel</code></p>
</div>