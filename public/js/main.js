$(document).on('click', '.burger', function () {
    var target = $(this).attr('data-target');
    $(target).toggleClass('is-active');
});
