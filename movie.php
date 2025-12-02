<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE-TITLE</title>
    <link rel="stylesheet" href="general.css" />
    <link rel="stylesheet" href="styleMovie.css" />
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="footer.css" />
</head>

<body>
    <header>
        <h1>WEAPONS</h1>
    </header>

    <!-- Inserting navbar -->
    <?php require "nav.php"; ?>
    <!-- <nav>
        <section class="navbar">
            <a href="index.php">
                <img class="navLogo" src="https://images.unsplash.com/photo-1762661122540-10645eafc95c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1NXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900" alt="Mini logo of the cinema" />
            </a>
            <div>
                <p>
                    Current
                </p>
            </div>
            <div>
                <p>All Movies</p>
            </div>
            <div>
                <p>Information</p>
            </div>
        </section>
    </nav> -->

    <main>
        <section class="desktopFlex">

            <section class="factMovie">
                <div class="factMovie">
                    <div class="factHeader">

                        <p><strong>Length:</strong></p>
                        <p><strong>Director:</strong></p>
                        <p><strong>Age limit:</strong></p>
                        <p><strong>Actors:</strong></p>
                    </div>

                    <div class="factText">
                        <p>115 minutes</p>
                        <p>Rune</p>
                        <p>16 years</p>
                        <p>Rune's friend</p>
                        <p>Rune's mother</p>
                        <p>Rune's neighbor</p>
                        <p>Rune's plumber</p>
                    </div>
                </div>
            </section>


            <div class="moviePresentation">
                <div class="POSTER">
                    <img class="smallPoster" src="/assets/WEAPONS-POSTER.jpg" alt="movie poster" />
                </div>
                <div class="TEXT">
                    <p class="aboutMovie">When all but one child from the same class mysteriously vanish on the same night at exactly the same time, a community is left questioning who or what is behind their disappearance.</p>
                </div>
            </div>


        </section>

        <div class="hr">
            <hr>
        </div>

        <section class="tickets">
            <div class="ticketsHeader">
                <h2>Tickets</h2>
                <button class="screeningsButton hover">All Screenings</button>
            </div>
            <div class="date">
                <p class="date">Wednesday 3/12</p>
            </div>

            <div class="ticketContainer">
                <div class="dotLeft"></div>
                <div class="ticket">
                    <div class="ticketText">
                        <p class="startTime">19:00</p>
                        <p class="ticketTitle">Weapons</p>
                        <div class="ticketBoxes">
                            <span class="time">2h 8m</span>
                            <span class="age">Age: 15</span>
                        </div>
                    </div>

                    <div class="borderBox">
                        <button class="buyTicket">BUY<br>TICKET!</button>
                    </div>
                </div>
                <div class="dotRight"></div>
            </div>

            <div class="date">
                <p class="date">Wednesday 3/12</p>
            </div>

            <div class="ticketContainer">
                <div class="dotLeft"></div>
                <div class="ticket">
                    <div class="ticketText">
                        <p class="startTime">21:30</p>
                        <p class="ticketTitle">Weapons</p>
                        <div class="ticketBoxes">
                            <span class="time">2h 8m</span>
                            <span class="age">Age: 15</span>
                        </div>
                    </div>

                    <div class="borderBox">
                        <button class="buyTicket">BUY<br>TICKET!</button>
                    </div>
                </div>
                <div class="dotRight"></div>
            </div>

            <div class="date">
                <p class="date">Wednesday 3/12</p>
            </div>

            <div class="ticketContainer">
                <div class="dotLeft"></div>
                <div class="ticket">
                    <div class="ticketText">
                        <p class="startTime">19:00</p>
                        <p class="ticketTitle">Weapons</p>
                        <div class="ticketBoxes">
                            <span class="time">2h 8m</span>
                            <span class="age">Age: 15</span>
                        </div>
                    </div>

                    <div class="borderBox">
                        <button class="buyTicket">BUY<br>TICKET!</button>
                    </div>
                </div>
                <div class="dotRight"></div>
            </div>

            <!-- Tickets
     3 tickets in 3 div's in column 
     
     Same design in both mobile & desktop
     More height in mobile?-->
        </section>

        <h3>Photo Gallery</h3>
        <section class="imgFromMovie">
            <button id="prev" class="leftArrow"><img src="assets/ArrowLeft.png" alt="Left arrow"></button>
            <img id="slideshow" class="imgFromMovie" src="assets/weapon.jpg" alt="Slideshow with images" />
            <button id="next" class="rightArrow"><img src="assets/ArrowRight.png" alt="Right arrow"></button>

        </section>
        <div class="underImages">
            <img src="assets/we.jpg" alt="movie poster">
            <img src="assets/wep.jpg" alt="movie poster">
            <img src="assets/weap.jpg" alt="movie poster">
            <div class="photo"> <span> 99+ PHOTOS</span></div>
        </div>
        
        <!-- Require in footer -->
        <?php
        require __DIR__ . "/footer.php"; ?>

    </main>


    <script>
//         // ------------------ SLIDESHOW ON MOVIE PAGE ------------------
const images = [
  "assets/we.jpg",
  "assets/wep.jpg",
  "assets/weap.jpg",
  "assets/w.jpg",
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
    </script>

</body>

</html>