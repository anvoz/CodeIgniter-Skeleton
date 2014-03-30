$(function() {
    var sidebarId = '#sidebar',
        $sidebar = $(sidebarId),
        $sidenav = $sidebar.children('.nav');

    // Call the ScrollSpy plugin which is for automatically
    // updating nav targets based on scroll position.
    $('body').scrollspy({
        target: sidebarId
    });

    /**
     * Keep expanding at least one item that contains subitems
     * Two states of an item:
     *      expanded: display all subitems
     *      activated: different visual appearance (bold text)
     *          and display all subitems if they existed
     */
    function keepExpandingSidebar() {
        if (
            // Check the current activated item, not include the first one
            // which is (by default) a built-in welcome item
            $sidenav.children('li:not(:first).active').length == 0 ||
            // Check if the current activated item contains any subitems
            $sidenav.children('li.active').children('.nav').length == 0
        ) {
            // Expand the first item that contains subitems
            $sidenav.find('.nav:first').addClass('show');
        } else {
            $sidenav.find('.nav:first').removeClass('show');
        }
    }

    // This event fires whenever a new item becomes activated by the scrollspy
    $sidebar.on('activate.bs.scrollspy', function (e) {
        keepExpandingSidebar();
    });
    keepExpandingSidebar();

    // Prevent demo links from navigating
    $('a[href="#"]:not([data-toggle], [rel="async"])').click(function() {
        return false;
    });
    // Prevent demo forms from submitting
    $('form:not([action])').submit(function() {
        return false;
    });

    // HTML inspector button
    var inspectorParentCls = 'js-html-inspector',
        inspectorBtnCls = 'js-btn-inspector',
        $inspectorDialog = $('#dialog-html-inspector'),
        $inspectorBtn = $('<button class="btn btn-default btn-xs ' + inspectorBtnCls + '">' +
            '&lt;&gt;' +
        '</button>');
    $inspectorBtn.click(function() {
        var $parent = $(this).closest('.' + inspectorParentCls).clone();

        // Replace elements
        var replaceTarget = $parent.data('replace-target');
        if (typeof replaceTarget !== 'undefined') {
            $parent.find(replaceTarget).each(function() {
                $(this).replaceWith($(this).html());
            });
        }

        // Remove elements
        var removeTargets = $parent.data('remove-target') || [];
        if ( ! (removeTargets instanceof Array)) {
            removeTargets = [removeTargets];
        }
        removeTargets.push('.' + inspectorBtnCls);
        $.each(removeTargets, function(index, target) {
            $parent.find(target).remove();
        });

        // Remove classes from elements
        var removeClassesTargets = $parent.data('remove-class-target') || [];
        if ( ! (removeClassesTargets instanceof Array)) {
            removeClassesTargets = [removeClassesTargets];
        }
        $.each(removeClassesTargets, function(index, target) {
            $parent.find(target).removeClass(target.split('.')[1]);
        });

        // Trim whitespaces
        var lines = $parent.html().split('\n');
        if (lines.length > 0) {
            // Remove all empty lines on the top
            while(lines[0].trim().length === 0) {
                lines.shift();
            }

            // Change indentation based on the first line
            var indentSize = lines[0].length - lines[0].trim().length,
                re = new RegExp(' {' + indentSize + '}'),
                html = [];
            $.each(lines, function(index, line) {
                if (line.trim().length > 0 && line.match(re)) {
                    html.push(line.substring(indentSize));
                } else if (line.length === 0) {
                    // Intended empty line
                    html.push('');
                }
            });

            // Copy html to dialog and launch
            $inspectorDialog
                .find('.modal-body code').text(html.join('\n')).end()
                .modal();
        }
    });
    // Add inspector button
    $('.' + inspectorParentCls).hover(function() {
        $(this).append($inspectorBtn);
    });
});