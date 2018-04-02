$(document).ready(function(){
    $("#spacer").height($(".topnav").height());
    $(window).resize(function() {
        $("#spacer").height($("nav").height());
    });
});