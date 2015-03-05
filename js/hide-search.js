/* 
 * This toggles the header search on/off
 */
jQuery(document).ready(function($){
    $(".search-toggle").click(function(){
        $("#search-container").slideToggle('slow');        
    });
});