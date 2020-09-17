/*
let navLinks = document.querySelectorAll(".nav li a");

for(let i = 0;i<navLinks.length;i++){
	navLinks[i].addEventListener("click",function(){
		if(this.nextElementSibling !=null){
		this.nextElementSibling.classList.toggle("active");
		}	
	
})
}

//function myFunction() {
  // var element = document.body;
   //element.classList.toggle("dark-mode");
//}
/*
let menuButton = document.querySelector("#menuButton");

let menu = document.querySelector(".masthead nav ul");

menuButton.addEventListener("click", function(){
	menu.classList.toggle("show");
})



 let mainNav = document.querySelector(".nav");
let navBarToggle = document.querySelector(".menuButton");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("show");
});
*/

$(document).ready(function(){
  $('#slideshow').slick({
	  autoplay:true,
	  fade:true,
	  autoplaySpeed:800,
	  arrows: false
  });
});
	


$(document).ready(function(){
  $('#slideshow2').slick({
	  autoplay:true,
	  fade:true,
	  autoplaySpeed:800,
	  arrows: false
  });
});













$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 1000);
});








function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

/*
console.log($('goog-te-gadget').html('Powered by ').replace('test'));

$(".goog-te-gadget:contains('Powered by ')").text("test");


$('.goog-te-gadget').each(function() {
   var text = $(this).html();
   $(this).html(text.replace('Powered by ', 'I love this text')); 

});
*/

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 900);
}

function showPage() {
  document.getElementById("socket").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


