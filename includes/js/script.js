/*

My Custom JS
============

Author:  Brad Hussey
Updated: August 2013
Notes:	 Hand coded for Udemy.com

*/
// FADE
// $("button").click(function(){
//     $("#more").fadeIn(3000);
//     $("#div2").fadeIn(3000);
//     $("#div3").fadeIn(3000);
// });
$(document).ready(function(){
    $("#back").click(function(){
        $(".container2").fadeOut(1000)
        $("#back").fadeOut()
        $("#btn").fadeIn()
        $(".container1").fadeIn(1000)
    });
    $("#btn").click(function(){
        $(".container2").fadeIn(1000)
        $("#back").fadeIn()
        $("#btn").fadeOut()
        $(".container1").fadeOut(1000)
    });
});
$(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });

