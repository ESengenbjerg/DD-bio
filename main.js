// ------------------ NAVBAR BLOOD DRIP ------------------

function createBloodDrop(container) {
  const drop = document.createElement("div");
  drop.classList.add("blood");

  // Random position
  drop.style.left = Math.random() * container.offsetWidth + "px";

  // Random time stamps
  drop.style.animationDuration = 1 + Math.random() + "s";

  container.appendChild(drop);

  // Remove drop when fallen
  setTimeout(() => drop.remove(), 2000);
}

function startBlood(containerSelector) {
  const container = document.querySelector(containerSelector);
  setInterval(() => createBloodDrop(container), 400 + Math.random() * 600);
}

startBlood(".navbar .blood-container");

// ------------------ JUMPSCARE ------------------
document.querySelector(".flicker").addEventListener("click", () => {
  const overlay = document.getElementById("scare-overlay");

  // Fade to black
  overlay.style.opacity = "1";

  // After fade, flash spooky content
  setTimeout(() => {
    overlay.classList.add("show");

    // Remove after a moment
    setTimeout(() => {
      overlay.classList.remove("show");
      overlay.style.opacity = "0";
    }, 500); // Duration of the scare moment
  }, 4000); // Duration of fade-to-black
});

// ------------------ SLIDESHOW ON INDEX Coming section -------------------
document.addEventListener("DOMContentLoaded", () => {
  // All posters
  const posters = [
    "/assets/creepingfog.jpg",
    "/assets/echosinthedark.jpg",
    "/assets/nightmore-poster.png",
    "/assets/silentwoods.jpg",
    "/assets/possession-poster.png",
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

  // --- Touch swipe for mobile phone ---
  let touchStartX = 0;
  let touchEndX = 0;
  const swipeThreshold = 50; // swipe distance to trigger

  comingGrid.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  comingGrid.addEventListener("touchmove", (e) => {
    touchEndX = e.changedTouches[0].screenX;
  });

  comingGrid.addEventListener("touchend", () => {
    const distance = touchEndX - touchStartX;

    // swipe right - previous image
    if (distance > swipeThreshold) {
      startIndex = (startIndex - 1 + posters.length) % posters.length;
      updatePosters();
    }

    // swipe left - next image
    if (distance < -swipeThreshold) {
      startIndex = (startIndex + 1) % posters.length;
      updatePosters();
    }

    touchStartX = 0;
    touchEndX = 0;
  });
});

// ------------------ SLIDESHOW ON MOVIE PAGE ------------------
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
