document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".own1").ownCarousel({
    itemPerRow: 4,
    // autoplay: 5000,
    nav: true,
    responsive: {
      1000: [4, 24],
      900: [3, 32.5],
      800: [3, 32.5],
      700: [2, 49],
      600: [2, 49],
      500: [1, 100],
      400: [1, 100],
    },
  });
  responsive();
});

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".own2").ownCarousel({
    itemPerRow: 4,
    // autoplay: 10000,
    nav: true,
    responsive: {
      1000: [4, 24],
      900: [3, 32.5],
      800: [3, 32.5],
      700: [2, 49],
      600: [2, 49],
      500: [1, 100],
      400: [1, 100],
    },
  });
  responsive();
});

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".own3").ownCarousel({
    itemPerRow: 4,
    // autoplay: 5000,
    nav: true,
    responsive: {
      1000: [4, 24],
      900: [3, 32.5],
      800: [3, 32.5],
      700: [2, 49],
      600: [2, 49],
      500: [1, 100],
      400: [1, 100],
    },
  });
  responsive();
});

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".own4").ownCarousel({
    itemPerRow: 4,
    // autoplay: 5000,
    nav: true,
    responsive: {
      1000: [4, 24],
      900: [3, 32.5],
      800: [3, 32.5],
      700: [2, 49],
      600: [2, 49],
      500: [1, 100],
      400: [1, 100],
    },
  });
  responsive();
});

//Get the button
const upButton = document.getElementById("upButton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    upButton.style.display = "block";
  } else {
    upButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}