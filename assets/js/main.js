(function(window, undefined) {
    'use strict';

    var // Localise globals
        document = window.document,
        $ = window.$,
        CIS = window.CIS = window.CIS || {};

    CIS.Ajax = {
        /*
         * Hold the last context that was set by the request.
         * In most case, it will refer to a DOM element that trigger the request.
         * Best use for debugging a response from CIS.Ajax.request function.
         */
        lastContext: undefined,
        /**
         * Perform an Ajax request
         * The response will be handled by CI.Ajax.response function
         * url: the URL to which the request is sent
         * settings: settings for $.ajax() function (optional)
         */
        request: function(url, settings) {
            settings = settings || {};
            var context = settings.context || this;

            settings = $.extend({
                async: true,
                cache: false,
                dataType: 'json',
                type: 'GET',
                success: function(data) {
                    CIS.Ajax.response.call(context, data);
                }
            }, settings);
            $.ajax(url, settings);
        },
        /**
         * Handle JSON data responded from CI.Ajax.request function
         * data: JSON data
         *      contains array of scripts to be executed
         */
        response: function(data) {
            var data = data || {},
                context = this;
            CIS.Ajax.lastContext = context;

            if (typeof data.scripts === 'undefined') {
                return;
            }

            // Execute all scripts from the response
            for (var i = 0, length = data.scripts.length; i < length; i++) {
                try {
                    (new Function(data.scripts[i])).call(context);
                } catch(ex) {
                    console.log(ex);
                }
            }
        }
    };

    CIS.Script = $.extend({
        // Store all of the scripts that were randomly placed inside the page's body
        // to be executed later after the page was completely rendered
        queue: [],
        // List of Javascript files that were already loaded
        // by the CIS.Script.require function
        loadedFiles: {},

        /**
         * Load Javascript files if they were not loaded, then execute them
         * file: string or array of string
         * callback: function
         */
        require: function(file, callback) {
            var self = this,
                files = (file instanceof Array) ? file : [file],
                // List of Javascript files that were not loaded
                unloadedFiles = [],
                // List of functions that will be executed to load the Javascript file
                functions = [];

            // Prepare list of Javascript files that need to be loaded
            for (var i = 0; i < files.length; i++) {
                if (typeof files[i] === 'string' || files[i] instanceof String) {
                    // Check if the file was loaded or not
                    if ( ! self.loadedFiles.hasOwnProperty(files[i])) {
                        unloadedFiles.push(files[i]);
                        functions.push($.ajax({
                            dataType: "script",
                            cache: true,
                            url: files[i]
                        }));
                    }
                }
            }

            if (unloadedFiles.length > 0) {
                // Check if $() is ready
                functions.push($.Deferred(function(deferred) {
                    $(deferred.resolve);
                }));

                // Trigger callback after all Javascript files were loaded completely (random order)
                $.when.apply(self, functions).done(function() {
                    for (var j = 0; j < unloadedFiles.length; j++) {
                        // Mark as loaded
                        self.loadedFiles[unloadedFiles[j]] = true;
                    }
                    callback();
                });
            } else {
                // If all Javascript files were already loaded,
                // trigger callback right away
                callback();
            }
        }
    }, CIS.Script);

    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        // Ajaxify links
        $(document).on('click', 'a[rel]', function(e) {
            var $a = $(this),
                rel = $a.attr('rel'),
                url = $a.attr('ajaxify');

            if (typeof url === 'undefined') {
                e.preventDefault();
                return;
            }

            switch (rel) {
                case 'async':
                    CIS.Ajax.request(url, {
                        context: this,
                        beforeSend: function() {
                            if ($a.data('disabled')) {
                                return false;
                            }
                            // Disable this DOM element
                            // before performing an Ajax request
                            $a.data('disabled', true).addClass('disabled');
                        },
                        complete: function() {
                            // Enable when the request finished
                            $a.data('disabled', false).removeClass('disabled');
                        }
                    });
                    break;
            }
            return false;
        });
        // Ajaxify forms
        $(document).on('submit', 'form[rel]', function(e) {
            var $form = $(this),
                rel = $form.attr('rel'),
                url = $form.attr('action');

            if (typeof url === 'undefined') {
                e.preventDefault();
                return;
            }

            switch (rel) {
                case 'async':
                    CIS.Ajax.request(url, {
                        type: 'POST',
                        data: $form.serializeArray(),
                        context: this,
                        beforeSend: function() {
                            if ($form.data('disabled')) {
                                return false;
                            }
                            // Disable this form
                            $form.data('disabled', true);
                            // Disable all submit buttons of this form
                            $form.find('[type="submit"]').addClass('disabled');
                        },
                        complete: function() {
                            $form.data('disabled', false);
                            $form.find('[type="submit"]').removeClass('disabled');
                        }
                    });
                    break;
            }
            e.preventDefault();
        });
    });

    // Execute queued scripts
    (function(queue) {
        for (var i = 0, length = queue.length; i < length; i++) {
            if (typeof queue[i] === 'function') {
                queue[i]();
            }
        }
    })(CIS.Script.queue);
})(window);