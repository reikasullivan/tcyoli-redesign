$(document).ready(function(){
    $(".defaultButton").click(function(){
        $(".toggleContent").toggle(1500);;
    });

    $("#directorButton").click(function(){
        $("#toggleDirector").toggle(1500);
    });

    $("#staffButton").click(function(){
        $("#toggleStaff").toggle(1500);
    });

    $("#mediaButton").click(function(){
        $("#toggleMedia").toggle(1500);
    });

    $("#momButton").click(function(){
        $("#toggleMom").toggle(1500);
    });
});
