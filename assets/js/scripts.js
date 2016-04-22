// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
$('.dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

$('.nav-tabs .col-md-3 a').click(function () {
    $('.nav-tabs .col-md-3 a').each(function () {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        }
    });
    $(this).parent().addClass('active');
});

/** Add 'active' class to active href */
$('#services .nav-tabs').children().each(function () {
    $(this).removeClass('active');
    if (this.href === window.location.href) {
        $(this).addClass('active');
    }
});

function tallestHeight(group) {
    var tallest = 0;
    group.each(function () {
        var thisHeight = $(this).height();
        if (thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.each(function () {
        $(this).height(tallest);
    });
}

$(document).ready(function() {
   tallestHeight($('#featured .thumbnail .caption .body p')); 
});