$(function() {
    var sidebarId = '#welcome-sidebar',
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
});