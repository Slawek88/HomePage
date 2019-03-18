const btnText = document.querySelector('.myBtn');
dots = document.querySelector(".dots");
moreText = document.querySelector(".more");

// btnText. = function () {
//     if (dots.style.display === "none") {
//         dots.style.display = "inline";
//         btnText.innerHTML = "Pokaż więcej";
//         moreText.style.display = "none";
//     } else {
//         dots.style.display = "none";
//         btnText.innerHTML = "Pokaż mniej";
//         moreText.style.display = "inline";
//     }
// }

btnText.addEventListener('click', function () {
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Pokaż więcej";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Pokaż mniej";
        moreText.style.display = "inline";
    }
})