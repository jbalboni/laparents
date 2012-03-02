var LAParents = {};

LAParents.showMenu = function(menuItem) {
                //Following events are applied to the subnav itself (moving subnav up and down)
                $(menuItem).find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

                $(menuItem).hover(function() {
                }, function(){
                        $(menuItem).find("ul.subnav").slideUp('fast'); //When the mouse hovers out of the subnav, move it back up
                });

                //Following events are applied to the trigger (Hover events for the trigger)
}

$(document).ready(function(){
        $("ul.subnav").each(function () { $(this).children("li").last().children("a").css("border-bottom","0px");});
        //$(".menu_left .section_text").html($("#"+menu_name).html());
        $("ul.topnav li").mouseover(function() {LAParents.showMenu(this);}).click(function() {LAParents.showMenu(this);}).hover(function() {
                        $(this).addClass("subhover"); //On hover over, add class "subhover"
                }, function(){  //On Hover Out
                        $(this).removeClass("subhover"); //On hover out, remove class "subhover"
        });

       $("a#inline").fancybox({overlayOpacity: .7, overlayColor: '#222'});
       $("a[class=single_image]").fancybox({overlayOpacity: .7, overlayColor: '#222',transitionIn: 'elastic', transitionOut: 'elastic'});
       $( "#accordion" ).accordion({autoHeight: false});
});

