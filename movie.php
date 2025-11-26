<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE-TITLE</title>
    <link rel="stylesheet" href="styleMovie.css" />
</head>

<body>
    <header>
        <img class="headerPoster" src="/assets/weapons-hero.png" alt="WEAPONS hero" />
    </header>

    <nav>
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
    </nav>

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
            
            <section class="moviePresentation">
                <div class="moviePresentation">
                    <div class="POSTER">    
                        <img class="smallPoster" src="/assets/WEAPONS-POSTER.jpg" alt="movie poster" />
                    </div>
                    <div class="TEXT">
                        <p class="aboutMovie">When all but one child from the same class mysteriously vanish on the same night at exactly the same time, a community is left questioning who or what is behind their disappearance.</p>
                    </div>
                </div>
            </section>

        </section>

        <div class="hr">
            <hr>
        </div>

        <section class="tickets">
            <h2>Tickets</h2>
            <div class="screeningTop">
                <button class="screeningsButton">All Screenings</button>
            </div>
            <div class="date">
                <p class="date">Wednesday 3/12</p>
            </div>

            <div class="ticketContainer">
                <div class="dotLeft"></div>
                <div class="ticket">
                    <div class="ticketText">
                        <p class="startTime">19:00</p>
                        <p>Weapons</p>
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
                        <p>Weapons</p>
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
                        <p>Weapons</p>
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

        <section class="imgFromMovie">
            <button id="prev" class="leftArrow"><</button>
            <img id="slideshow" class="imgFromMovie" src="https://images.unsplash.com/photo-1762755126280-6d8a4f9d1115?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw5fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900" alt="Slideshow with images" />
            <button id="next" class="rightArrow">></button>
        </section>

        <!-- Require in footer -->
        <?php
        require __DIR__ . "/footer.php"; ?>

    </main>
    <script src="main.js"></script>

</body>

</html>