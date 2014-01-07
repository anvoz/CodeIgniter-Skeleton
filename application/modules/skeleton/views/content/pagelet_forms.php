<p><b>Note:</b> every input block should be wrapped by <code>.form-group</code> for optimum spacing.</p>
<p>form</p>
<form>
    <div class="form-group">
        <label for="example-text-input">label (clickable)</label>
        <input type="text" class="form-control" id="example-text-input" placeholder="input.form-control">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder=".[disabled]" disabled>
    </div>
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="..input-lg">
    </div>
    <div class="form-group">
        <input type="text" class="form-control input-sm" placeholder="..input-sm">
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="3">textarea.form-control</textarea>
    </div>
    <div class="form-group">
        <input type="file" id="example-file-input">
        <span class="help-block">.help-block: Example block-level help text here.</span>
    </div>

    <p>&gt; div.input-group</p>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><abbr title=".input-group-addon: The horizontal scrollbar will appear in IE9 if this content (abbr.text) is too long">...</abbr></span>
            <input type="text" class="form-control" placeholder="input.form-control">
            <span class="input-group-addon"><input type="checkbox"></span>
            <span class="input-group-addon"><input type="radio"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="input.form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="text-muted">span.input-group-btn</span> button</button>
            </span>
        </div>
    </div>
    <p>&gt; div.input-group.input-group-lg</p>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon">.</span>
            <input type="text" class="form-control input-lg" placeholder="input.form-control.input-lg">
            <span class="input-group-addon">.</span>
        </div>
    </div>
    <p>&gt; div.input-group.input-group-sm</p>
    <div class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-addon">.</span>
            <input type="text" class="form-control input-sm" placeholder="input.form-control.input-sm">
            <span class="input-group-addon">.</span>
        </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">
            <span class="text-muted">&gt; div.has-success</span> label.control-label
        </label>
        <input type="text" class="form-control" id="inputSuccess" placeholder="input.form-control">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning">
            <span class="text-muted">&gt; div.has-warning</span> label.control-label
        </label>
        <input type="text" class="form-control" id="inputWarning" placeholder="input.form-control">
    </div>
    <div class="form-group has-error">
        <label class="control-label" for="inputError">
            <span class="text-muted">&gt; div.has-error</span> label.control-label
        </label>
        <input type="text" class="form-control" id="inputError" placeholder="input.form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>

<p>form.form-horizontal</p>
<form class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-2 control-label" for="example-text-input3">label.control-label</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" id="example-text-input3" placeholder="input.form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Static control</label>
        <div class="col-lg-10">
            <p class="form-control-static">.form-control-static</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">select.form-control</label>
        <div class="col-lg-5">
            <select class="form-control">
                <option>option</option><option>Option #2</option><option>Option #3</option><option>Option #4</option><option>Option #5</option>
            </select>
            <br>
            <select class="form-control" disabled>
                <option>Disabled select</option>
            </select>
        </div>
        <div class="col-lg-5">
            select.form-control[multiple]
            <select class="form-control" multiple>
                <option>Option #1</option><option>Option #2</option><option>Option #3</option><option>Option #4</option><option>Option #5</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">
                    <span class="text-muted">.checkbox label</span>
                    input[type="checkbox"]
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <label class="checkbox-inline">
                <input type="checkbox" value="option1">
                <span class="text-muted">label.checkbox-inline</span>
                Checkbox #1
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="option2">Checkbox #2
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="option3" disabled>Disabled checkbox
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            [data-toggle="buttons"] label.btn.btn-primary
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="checkbox">Checkbox #1
                </label>
                <label class="btn btn-primary">
                    <input type="checkbox">Checkbox #2
                </label>
                <label class="btn btn-primary disabled">
                    <input type="checkbox">Disabled checkbox
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" value="option1" checked>
                    <span class="text-muted">.radio label</span>
                    input[type="radio"]
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <label class="radio-inline">
                <input type="radio" name="optionsRadios2" value="option1" checked>
                <span class="text-muted">label.radio-inline</span>
                Radio #1
            </label>
            <label class="radio-inline">
                <input type="radio" name="optionsRadios2" value="option2">Radio #2
            </label>
            <label class="radio-inline">
                <input type="radio" name="optionsRadios2" value="option3" disabled>Disabled radio
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            [data-toggle="buttons"] label.btn.btn-primary
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" name="optionsRadios3" value="option1" checked="checked">Radio #1
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="optionsRadios3" value="option2">Radio #2
                </label>
                <label class="btn btn-primary disabled">
                    <input type="radio" name="optionsRadios3" value="option3">Disabled radio
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>

<p>form.form-inline</p>
<form class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="example-text-input2">label.sr-only</label>
        <input type="text" class="form-control" id="example-text-input2" placeholder="input.form-control">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox">
            <span class="text-muted">.checkbox label</span>
            Checkbox
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>