<?php
/**
 * HTML notes:
 *
 * js-control class is used for the upload handler to determine its wrapper.
 * And from there the handler can retrieve other data via:
 * - data-progress-holder: define the upload progress bar holder
 * - data-results-holder: define the holder that contains all results of the upload
 *
 * All classes that are used by Javascript should be named with "js-" prefix
 * to indicate that you must be careful when renaming or deleting them.
 *
 * Other Javascript dependent classes should be defined via "data-" attributes
 * so you don't have to edit the Javascript if the HTML is changed.
 */
?>
<div class="js-control" data-progress-holder=".progress" data-results-holder=".results">
    <p>Supports multiple file selection, drag&amp;drop, progress bar, cross-domain, chunked and resumable file uploads.</p>
    <p><input id="file-upload" type="file" name="files[]" multiple></p>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>
    <hr>
    <div class="results"></div>
</div>