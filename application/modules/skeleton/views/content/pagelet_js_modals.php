<p class="bse-buttons">
    Via data attributes: <code>data-toggle="modal"</code> <code>data-target="#modal"</code>
    <a class="btn btn-primary" data-toggle="modal" href="#modal">Launch modal</a>
</p>
<p class="bse-buttons">
    Via Javascript: <code>$('#modal').modal()</code>
    <a class="btn btn-primary" href="#" onclick="$('#modal').modal(); return false;">Launch modal</a>
</p>
<div>
    <a class="btn btn-primary" data-toggle="modal" href="#modal-lg">Large modal</a>
    <a class="btn btn-primary" data-toggle="modal" href="#modal-sm">Small modal</a>
</div>

<!-- Static modal example -->
<div class="js-html-inspector" data-remove-target='["p:first","span"]'>
    <!-- Only use inline style for static display -->
    <div class="modal" style="display: block; position: static; overflow: hidden;">
        <div class="modal-dialog">
            <p><strong>.modal .modal-dialog .modal-content</strong></p>
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button">&times;</button>
                    <h4 class="modal-title">
                        .modal-header h4.modal-title
                    </h4>
                </div>
                <div class="modal-body">
                    .modal-body
                </div>
                <div class="modal-footer">
                    <span>.modal-footer</span>
                    <button class="btn btn-default" data-dismiss="modal" type="button">
                        Close
                    </button>
                    <button class="btn btn-primary" type="button">
                        Button
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<p>Options: <code>backdrop: true|false|'static'</code> <code>keyboard: true|false</code> <code>show: true|false</code> <code>remote: false|path</code></p>
<p>Methods: <code>.modal('toggle')</code> <code>.modal('show')</code> <code>.modal('hide')</code></p>
<p>Events: <code>show.bs.modal</code> <code>shown.bs.modal</code> <code>hide.bs.modal</code> <code>hidden.bs.modal</code> <code>loaded.bs.modal</code></p>

<!-- Default modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">.modal-title</h4>
            </div>
            <div class="modal-body">
                .modal-body
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>
</div>
<!-- Optional sizes -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">.modal-title</h4>
            </div>
            <div class="modal-body">
                .modal-body
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">.modal-title</h4>
            </div>
            <div class="modal-body">
                .modal-body
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>
</div>