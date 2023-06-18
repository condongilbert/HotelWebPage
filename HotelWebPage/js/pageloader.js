$(document).ready(()=>{
  setTimeout(()=>{
    $('#loadingDiv').fadeToggle();
  },400);
});

// const loadingDiv = document.querySelector('.loadingDiv');

// const fadeEffect = setInterval(() => {
//   // if we don't set opacity 1 in CSS, then   //it will be equaled to "", that's why we   // check it
//   if (!loadingDiv.style.opacity) {
//     loadingDiv.style.opacity = 1;
//   }
//   if (loadingDiv.style.opacity > 0) {
//     loadingDiv.style.opacity -= 0.1;
//   } else {
      
//     var elem = document.getElementById(".loadingDiv");
//     elem.parentNode.removeChild(elem);
//     clearInterval(fadeEffect);
  
    
//   }
//  }, 400);
// $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
// $(window).on('load', function(){
//   setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
// });
// function removeLoader(){
//     $( "#loadingDiv" ).fadeOut(500, function() {
//       // fadeOut complete. Remove the loading div
//       $( "#loadingDiv" ).remove(); //makes page more lightweight 
//   });  

