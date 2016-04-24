$(document).ready(function(){
    //Toggle Navigation
    jQuery (".menu-trigger").click(function(){
        jQuery(".contact").slideToggle(400,function(){
            jQuery(this).toggleClass("nav-expanded").css('display','');
        });
    });    
});//Document Ready End