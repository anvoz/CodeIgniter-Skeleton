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
                    .modal .modal-dialog .modal-content<br>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span class="text-muted">&gt; .modal-header</span> h4.modal-title</h4>
                </div>
                <div class="modal-body">
                    <span class="text-muted">&gt; .modal-content</span> .modal-body
                </div>
                <div class="modal-footer">
                    &gt; .modal-footer
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>