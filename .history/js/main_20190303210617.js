// READ MORE
const btnText = document.querySelector(".myBtn");
dots = document.querySelector(".dots");
moreText = document.querySelector(".more");

btnText.addEventListener("click", function() {
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Pokaż więcej";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Pokaż mniej";
    moreText.style.display = "inline";
  }
});

// SLIDER

let sliderImage = document.querySelectorAll("slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

//Clear image

