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
function reset() {
  for (let i = 0; i < sliderImage.length; i++) {
    sliderImage[i].style.display = "none";
  }
}

// init prev
function startSlide() {
  reset();
  sliderImage[0].style.display = "block";
  // Flex?
}

// Show prev
function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = "block";
    current--;
  }
  
  // Show next
  function slideRight() {
    reset();
    sliderImages[current + 1].style.display = "block";
    current++;
  }

//   left arrow click
arrowLeft.addEventListener("click", function () {
    if (cu)
})
  