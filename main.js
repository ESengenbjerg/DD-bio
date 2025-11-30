// NAVBAR BLOOD TEST

function createBloodDrop(container) {
  const drop = document.createElement("div");
  drop.classList.add("blood");

  // slumpmässig position
  drop.style.left = Math.random() * container.offsetWidth + "px";

  // slumpmässig fördröjning
  drop.style.animationDuration = 1 + Math.random() + "s";

  container.appendChild(drop);

  // ta bort droppen när den fallit klart
  setTimeout(() => drop.remove(), 2000);
}

function startBlood(containerSelector) {
  const container = document.querySelector(containerSelector);
  setInterval(() => createBloodDrop(container), 400 + Math.random() * 600);
}

// Exempel: för navbar
startBlood(".navbar .blood-container");

// SLUT TEST

// SLIDESHOW ON INDEX PAGE - Coming movies posters
document.addEventListener("DOMContentLoaded", () => {
  // All poster URLs
  const posters = [
    "https://images.unsplash.com/photo-1762770663487-6c03bb94fe84?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900",
    "https://images.unsplash.com/photo-1762779943612-02464f850c54?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900",
    "https://images.unsplash.com/photo-1762062313553-03cc927933d4?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900",
    "https://plus.unsplash.com/premium_photo-1758367455127-904475acb472?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900",
    "https://plus.unsplash.com/premium_photo-1710846919262-0105a293c276?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900",
  ];

  const comingGrid = document.querySelector(".comingGridMobile");
  const postersEls = comingGrid.querySelectorAll(".comingPoster");
  const leftArrow = comingGrid.querySelector(".leftArrow");
  const rightArrow = comingGrid.querySelector(".rightArrow");

  let startIndex = 0; // first visible poster

  function updatePosters() {
    postersEls.forEach((posterEl, i) => {
      const imgIndex = (startIndex + i) % posters.length;
      posterEl.src = posters[imgIndex];
    });
  }

  rightArrow.addEventListener("click", () => {
    startIndex = (startIndex + 1) % posters.length;
    updatePosters();
  });

  leftArrow.addEventListener("click", () => {
    startIndex = (startIndex - 1 + posters.length) % posters.length;
    updatePosters();
  });

  // initial display
  updatePosters();

  // --- Touch swipe för mobilt ---
  let touchStartX = 0;
  let touchEndX = 0;
  const swipeThreshold = 50; // minimalt svep-avstånd för att trigga

  comingGrid.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  comingGrid.addEventListener("touchmove", (e) => {
    touchEndX = e.changedTouches[0].screenX;
  });

  comingGrid.addEventListener("touchend", () => {
    const distance = touchEndX - touchStartX;

    // svep höger → visa FÖREGÅENDE bild
    if (distance > swipeThreshold) {
      startIndex = (startIndex - 1 + posters.length) % posters.length;
      updatePosters();
    }

    // svep vänster → visa NÄSTA bild
    if (distance < -swipeThreshold) {
      startIndex = (startIndex + 1) % posters.length;
      updatePosters();
    }

    // nollställ
    touchStartX = 0;
    touchEndX = 0;
  });
});

// SLIDESHOW ON MOVIE PAGE
const images = [
  "https://images.unsplash.com/photo-1762755126280-6d8a4f9d1115?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw5fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900",
  "https://plus.unsplash.com/premium_photo-1692640261941-bda4bcb52e1c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900",
  "https://images.unsplash.com/photo-1762793986911-9451716ac161?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw2fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900",
  "https://images.unsplash.com/photo-1757330878545-23961934f9ed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxNHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900",
];
let index = 0;
const imgElement = document.getElementById("slideshow");

function showImage(newIndex) {
  imgElement.style.opacity = 0;
  setTimeout(() => {
    index = (newIndex + images.length) % images.length; // wrap around both directions
    imgElement.src = images[index];
    imgElement.style.opacity = 1;
  }, 500);
}

// Manual controls
document
  .getElementById("next")
  .addEventListener("click", () => showImage(index + 1));
document
  .getElementById("prev")
  .addEventListener("click", () => showImage(index - 1));
