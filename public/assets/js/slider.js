var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
//   var slides = document.getElementsByClassName("mySlides");
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
//   slides[slideIndex-1].style.display = "block";
if (this.slides[i]){
    this.slides[i].style.display = "none";
}

  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
