$(document).ready(function() {

  $("span.menu").on('click', function(event){
    clickAction.menuClick($(this).closest("nav"));
  });

  $(".background-fade").on('click', function(){
    clickAction.backgroundClick($(this));
  });

  $("nav#nav ul > li").on('click', function(event){
    clickAction.linkClick();
  });

}); //End - ready

var clickAction = (function(){

  return{

    menuClick: function(content){

      content.toggleClass("active");
      $(".background-fade").toggleClass("active");

    },

    backgroundClick: function(backgrondFade){

      backgrondFade.toggleClass("active");
      $("nav#nav").toggleClass("active");

    },

    linkClick: function(clickLink){

      $("nav#nav").toggleClass("active");
      $(".background-fade").toggleClass("active");

    }

  }//end return

})(); // end clickAction

