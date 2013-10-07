(function(window, undefined) {
    'use strict';

    var // Localise globals
        document = window.document,
        $ = window.$,
        CIS = window.CIS = {};

    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        $(document).on('click', 'a[rel]', function(e) {
            var $a = $(this),
                rel = $a.attr('rel'),
                url = $a.attr('ajaxify');

            if (typeof url !== 'undefined') {
                switch (rel) {
                    case 'async':
                        CIS.Ajax.request.call(this, url);
                        break;
                }
                return false;
            }
            e.preventDefault();
        });
        $(document).on('submit', 'form[rel]', function(e) {
            var $form = $(this),
                rel = $form.attr('rel'),
                url = $form.attr('action');

            if (typeof url !== 'undefined') {
                switch (rel) {
                    case 'async':
                        CIS.Ajax.request.call(this, url, {
                            type: 'POST',
                            data: $form.serializeArray()
                        });
                        break;
                }
            }
            e.preventDefault();
        });
    });

    CIS.Ajax = {
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
        response: function(data) {
            var data = data || {},
                context = this;
            if (typeof data.scripts !== 'undefined') {
                for (var i = 0, length = data.scripts.length; i < length; i++) {
                    try {
                        (new Function(data.scripts[i])).call(context);
                    } catch(ex) {
                        console.log(ex);
                    }
                }
            }
        }
    };
})(window);