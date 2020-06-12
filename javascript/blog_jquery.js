/**INDEX JAVASCRIPT */
/** a simpleh hide */
/** 
$(document).ready(function(){
    $("#jaytest").click(function(){
        $("#blogfirst").hide();
    });
});
*/

/**events */
/**
$(document).ready(function(){
    $("footer").mouseenter(function(){
        alert("You are in the footer range...!");
    });

    $("footer").mouseleave(function(){
        alert("Bye Bye");
    });
});
*/

//nav link hover change color and style
$(document).ready(function(){
    $(".nav-link").hover(
        function(){
        $(this).css("background-color", "sandybrown" );
    },
        function(){
            $(this).css("color", "black");
        }
    );

    
});

$(document).ready(function(){
    $("#trigger").click(function(){
        $("#overlay").animate({right: '500px'});
    });
});
    


