<!-- Basic example -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>form</strong></p>
    <form>
        <!-- Inputs with different sizes -->
        <div class="form-group">
            <input class="form-control" type="text" placeholder="input.form-control">
        </div>
        <div class="form-group">
            <input class="form-control input-lg" type="text" placeholder="input.form-control.input-lg">
        </div>
        <div class="form-group">
            <input class="form-control input-sm" type="text" placeholder="input.form-control.input-sm">
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <textarea class="form-control" rows="3">textarea.form-control</textarea>
        </div>

        <!-- File input -->
        <div class="form-group">
            <label for="example-file-input">input[type="file"]</label>
            <input id="example-file-input" type="file">
            <span class="help-block">
                .help-block: Wrap labels and controls in
                <code>.form-group</code>
                for optimum spacing.
            </span>
        </div>

        <!-- Button -->
        <div class="form-group">
            <button class="btn btn-default" type="submit">Submit</button>
        </div>
    </form>
</div>

<!-- Inline form -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>form.form-inline</strong></p>
    <form class="form-inline">
        <div class="form-group">
            <input class="form-control" id="example-text-input-inline" type="text" placeholder="input.form-control">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">
                .checkbox label input[type="checkbox"]
            </label>
        </div>
        <button class="btn btn-default" type="submit">Submit</button>
    </form>
</div>
<br>

<!-- Horizontal form -->
<div class="js-html-inspector" data-remove-target='["p:not([class])","br"]'>
    <p><strong>form.form-horizontal</strong></p>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="example-text-input-horizontal">
                label.control-label
            </label>
            <div class="col-sm-9">
                <input class="form-control" id="example-text-input-horizontal" type="text" placeholder="input.form-control">
            </div>
        </div>

        <!-- Checkbox -->
        <div class="form-group">
            <label class="col-sm-3 control-label">Checkboxes</label>
            <div class="col-sm-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                        .checkbox label input[type="checkbox"]
                    </label>
                </div>
            </div>
        </div>
        <!-- Inline checkboxes -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="option1">
                    label.checkbox-inline Checkbox #1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="option2">
                    Checkbox #2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="option3" disabled>
                    Disabled checkbox
                </label>
            </div>
        </div>

        <!-- Radio -->
        <div class="form-group">
            <label class="col-sm-3 control-label">Radios</label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="optionsRadios" type="radio" value="option1" checked>
                        .radio label input[type="radio"]
                    </label>
                </div>
            </div>
        </div>
        <!-- Inline radios -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <label class="radio-inline">
                    <input name="optionsRadios2" type="radio" value="option1" checked>
                    label.radio-inline Radio #1
                </label>
                <label class="radio-inline">
                    <input name="optionsRadios2" type="radio" value="option2">
                    Radio #2
                </label>
                <label class="radio-inline">
                    <input name="optionsRadios2" type="radio" value="option3" disabled>
                    Disabled radio
                </label>
            </div>
        </div>

        <!-- Select -->
        <div class="form-group">
            <label class="col-sm-3 control-label">select.form-control</label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option>option</option>
                    <option>Option #2</option>
                    <option>Option #3</option>
                </select>
                <br>
                <select class="form-control" disabled>
                    <option>select[disabled]</option>
                </select>
            </div>
            <div class="col-sm-5">
                <br class="visible-xs">
                <p><strong>select.form-control[multiple]</strong></p>
                <select class="form-control" multiple>
                    <option>Option #1</option>
                    <option selected>option[selected]</option>
                    <option>Option #3</option>
                    <option selected>Option #4</option>
                    <option>Option #5</option>
                </select>
            </div>
        </div>

        <!-- Static control -->
        <div class="form-group">
            <label class="col-sm-3 control-label">Static control</label>
            <div class="col-sm-9">
                <p class="form-control-static">p.form-control-static</p>
            </div>
        </div>

        <!-- Disabled input -->
        <div class="form-group">
            <label class="col-sm-3 control-label">Disabled input</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" placeholder=".form-control[disabled]" disabled>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button class="btn btn-default" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

<!-- Validation states -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>Validation styles on form controls</strong></p>
    <form class="form-horizontal">
        <!-- Success state -->
        <div class="form-group has-success">
            <label class="col-sm-3 control-label" for="inputSuccess">
                .has-success
            </label>
            <div class="col-sm-9">
                <input class="form-control" id="inputSuccess" type="text" placeholder="input.form-control">
            </div>
        </div>

        <!-- Warning state -->
        <div class="form-group has-warning">
            <label class="col-sm-3 control-label" for="inputWarning">
                .has-warning
            </label>
            <div class="col-sm-9">
                <input class="form-control" id="inputWarning" type="text" placeholder="input.form-control">
            </div>
        </div>

        <!-- Error state -->
        <div class="form-group has-error">
            <label class="col-sm-3 control-label" for="inputError">
                .has-error
            </label>
            <div class="col-sm-9">
                <input class="form-control" id="inputError" type="text" placeholder="input.form-control">
            </div>
        </div>
    </form>
</div>

<!-- Input groups -->
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.form-group .input-group</strong></p>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">
                .input-group-addon
            </span>
            <input class="form-control" type="text" placeholder="input.form-control">
            <span class="input-group-addon">
                <input type="checkbox">
            </span>
            <span class="input-group-addon">
                <input type="radio">
            </span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="input.form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    span.input-group-btn button
                </button>
            </span>
        </div>
    </div>
</div>
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.form-group .input-group.input-group-lg</strong></p>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon">.</span>
            <input class="form-control input-lg" type="text" placeholder="input.form-control.input-lg">
            <span class="input-group-addon">.</span>
        </div>
    </div>
</div>
<div class="js-html-inspector" data-remove-target="p:first">
    <p><strong>.form-group .input-group.input-group-sm</strong></p>
    <div class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-addon">.</span>
            <input class="form-control input-sm" type="text" placeholder="input.form-control.input-sm">
            <span class="input-group-addon">.</span>
        </div>
    </div>
</div>