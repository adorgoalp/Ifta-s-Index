$(document).ready(function () {
    $("#calcSSB").click(function () {
        $("#sc").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#rrSSB").click(function () {
        $("#rr").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#kidelSSB").click(function () {
        $("#kidel").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#tmsSSB").click(function () {
        $("#tms").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#tttSSB").click(function () {
        $("#uttt").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#tajSSB").click(function () {
        $("#taj").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#raySSB").click(function () {
        $("#ray").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $("#hajjSSB").click(function () {
        $("#hajj").toggle(1000);
        $(this).text(function (i, text) {
            return text === "View" ? "Hide" : "View";
        });
    });
    $(document).ready(function () {
        $(".jumper").on("click", function (e) {

            e.preventDefault();

            $("body, html").animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 600);

        });
    });


});