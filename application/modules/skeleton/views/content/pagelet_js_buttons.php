<p>Stateful button: <code>data-loading-text="Loading..."</code> <code>data-complete-text="Completed"</code></p>

<div class="bse-buttons js-html-inspector">
    <button class="btn btn-primary" data-loading-text="Loading..." data-complete-text="Completed" type="button" onclick="$(this).button('loading').siblings('button').prop('disabled',false);">
        $(this).button('loading')
    </button>
    <button class="btn btn-primary" type="button" onclick="$(this).prop('disabled',true).parent().find('button:first').button('complete');" disabled>
        $('&larr;').button('complete')
    </button>
    <button class="btn btn-primary" type="button" onclick="$(this).parent().find('button:first').button('reset').siblings('button').prop('disabled',true);" disabled>
        $('&larr; &larr;').button('reset')
    </button>
</div><br>

<div class="js-html-inspector">
    Single toggle: <button class="btn btn-primary" data-toggle="button" type="button">
        [data-toggle="button"]
    </button>
</div><br>

<div class="bse-buttons js-html-inspector">
    Checkbox: <code>data-toggle="buttons"</code>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="checkbox">
            #1
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">
            #2
        </label>
        <label class="btn btn-primary disabled">
            <input type="checkbox">
            Disabled
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">
            #4
        </label>
    </div>
</div><br>

<div class="bse-buttons js-html-inspector">
    Radio: <code>data-toggle="buttons"</code>
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary">
            <input name="optionsRadiosJS" type="radio" value="option1" checked>
            #1
        </label>
        <label class="btn btn-primary">
            <input name="optionsRadiosJS" type="radio" value="option2">
            #2
        </label>
        <label class="btn btn-primary disabled">
            <input name="optionsRadiosJS" type="radio" value="option3">
            Disabled
        </label>
        <label class="btn btn-primary">
            <input name="optionsRadiosJS" type="radio" value="option2">
            #4
        </label>
    </div>
</div><br>

<p>Methods: <code>.button('toggle')</code> <code>.button('loading')</code> <code>.button('reset')</code> <code>.button(string)</code></p>