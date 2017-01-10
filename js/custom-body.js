jQuery(document).ready(function() {
    // Mobile menu
    jQuery('.menu-toggle').click(function() {
        jQuery(this).toggleClass('closed open');
        jQuery(this).attr('aria-expanded', function(i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        jQuery('.primary-menu-ul').toggleClass('closed open');
        return false;
    });
});
