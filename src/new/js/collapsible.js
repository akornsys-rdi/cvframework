$("section.content a").click(function () {
    if ($(this).hasClass('collapsed')) {
        $(this).removeClass('collapsed');
        $(this).next("div").slideDown(200);
    }
    else {
        $(this).addClass('collapsed');
        $(this).next("div").slideUp(200);
    }
    return false;
});
