
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

*/

 let mainNav = document.querySelector(".nav");
let navBarToggle = document.querySelector(".menuButton");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("show");
});


$(document).ready(function(){
  $('#slideshow').slick({
	  autoplay:true,
	  fade:true,
	  autoplaySpeed:800
  });
});
	


$(document).ready(function(){
  $('#slideshow2').slick({
	  autoplay:true,
	  fade:true,
	  autoplaySpeed:800
  });
});



function myFunction() {
  var x, text;

 
  x = document.getElementById("myText").value;

  
  if (x=="") {
    text = "Fields Are Empty!";
  } else {
    text = document.getElementById("comment").innerHTML = x;
  }
  document.getElementById("comment").innerHTML = text;
}





