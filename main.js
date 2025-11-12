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
