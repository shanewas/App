$(document).ready(function () {

    $(".alert").addClass("in").fadeOut(4500);

    $('#myModal').modal('hide');

    /* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function () {
        // toggle icon
        $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });

});