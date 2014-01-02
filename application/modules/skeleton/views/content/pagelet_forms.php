<h2 id="forms">Forms</h2>

<p>&lt;form&gt;</p>
<form>
    <div class="form-group">
        <label for="example-text-input">.form-group label</label>
        <input type="text" class="form-control" id="example-text-input" placeholder="input.form-control">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Disabled input" disabled>
    </div>
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder=".input-lg">
    </div>
    <div class="form-group">
        <input type="text" class="form-control input-sm" placeholder=".input-sm">
    </div>
    <div class="form-group">
        <label>.input-group</label>
        <div class="input-group">
            <span class="input-group-addon"><abbr title=".input-group-addon: The horizontal scroll will appear in IE9 if this content is too long">...</abbr></span>
            <input type="text" class="form-control" placeholder="Text input">
            <span class="input-group-addon"><input type="checkbox"></span>
            <span class="input-group-addon"><input type="radio"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Text input">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><small>.input-group-btn</small> button</button>
            </span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <span class="input-group-addon">.</span>
            <input type="text" class="form-control input-lg" placeholder=".input-group-lg input.input-lg">
            <span class="input-group-addon">.</span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-sm">
            <span class="input-group-addon">.</span>
            <input type="text" class="form-control input-sm" placeholder=".input-group-sm input.input-sm">
            <span class="input-group-addon">.</span>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="3">&lt;textarea&gt;</textarea>
    </div>
    <div class="form-group">
        <label for="example-file-input">input[type="file"]</label>
        <input type="file" id="example-file-input">
        <p class="help-block">.help-block: Example block-level help text here.</p>
    </div>
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess"><small>.has-success</small> label</label>
        <input type="text" class="form-control" id="inputSuccess">
    </div>
    <div class="form-group has-warning">
        <label class="control-label" for="inputWarning"><small>.has-warning</small> label</label>
        <input type="text" class="form-control" id="inputWarning">
    </div>
    <div class="form-group has-error">
        <label class="control-label" for="inputError"><small>.has-error</small> label</label>
        <input type="text" class="form-control" id="inputError">
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
            <input type="text" class="form-control" id="example-text-input3" placeholder="Text input">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Static control</label>
        <div class="col-lg-10">
            <p class="form-control-static">.form-control-static</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">&lt;select&gt;</label>
        <div class="col-lg-5">
            <p>
                <select class="form-control">
                    <option>&lt;option&gt;</option><option>Option #2</option><option>Option #3</option><option>Option #4</option><option>Option #5</option>
                </select>
            </p>
        </div>
        <div class="col-lg-5">
            <p>
                &lt;select multiple&gt;
                <select multiple class="form-control">
                    <option>Option #1</option><option>Option #2</option><option>Option #3</option><option>Option #4</option><option>Option #5</option>
                </select>
            </p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="checkbox">
                <label><input type="checkbox"><small>.checkbox label</small> input[type="checkbox"]</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <label class="checkbox-inline"><input type="checkbox" value="option1"><small>label.checkbox-inline</small> Checkbox #1</label>
            <label class="checkbox-inline"><input type="checkbox" value="option2">Checkbox #2</label>
            <label class="checkbox-inline"><input type="checkbox" value="option3">Checkbox #3</label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary"><input type="checkbox"><small>data-toggle="buttons"</small> Checkbox #1</label>
                <label class="btn btn-primary"><input type="checkbox">Checkbox #2</label>
                <label class="btn btn-primary"><input type="checkbox">Checkbox #3</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="radio">
                <label><input type="radio" name="optionsRadios" value="option1" checked><small>.radio label</small> input[type="radio"]</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <label class="radio-inline"><input type="radio" name="optionsRadios2" value="option1" checked><small>label.radio-inline</small> Radio #1</label>
            <label class="radio-inline"><input type="radio" name="optionsRadios2" value="option2">Radio #2</label>
            <label class="radio-inline"><input type="radio" name="optionsRadios2" value="option3">Radio #3</label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary"><input type="radio" name="optionsRadios3" value="option1" checked="checked"><small>data-toggle="buttons"</small> Radio #1</label>
                <label class="btn btn-primary"><input type="radio" name="optionsRadios3" value="option2">Radio #2</label>
                <label class="btn btn-primary"><input type="radio" name="optionsRadios3" value="option3">Radio #3</label>
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
        <input type="text" class="form-control" id="example-text-input2" placeholder="Text input">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Checkbox</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>