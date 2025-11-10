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
        <!-- Movie pic -->
        <img src="" alt="Big picture of the movie" />
    </header>

    <nav>
        <section class="navbar">
            <a href="index.php">
                <img src="" alt="Mini logo of the cinema" />
            </a>
            <div>
                <p>Menu</p>
            </div>
            <div class="search"><img src="" alt="magnifying glass for search function" /></div>
        </section>
    </nav>

    <section class="desktopFlex">
        <section class="moviePresentation">
            <div class="moviePresentation">
                <img class="smallPoster" src="" alt="movie poster" />
                <p class="aboutMovie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quod ipsum eligendi culpa id aperiam optio accusantium perspiciatis laudantium aliquam vel officiis autem. Repellat ad blanditiis commodi laboriosam culpa minima, illum dolores magni laborum, dicta molestiae explicabo, aliquam necessitatibus? Iusto natus magnam ratione sit officiis dolor omnis ad quaerat ullam.</p>
            </div>
        </section>

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
    </section>

    <div class="hr">
        <hr>
    </div>

    <section class="tickets">
        <h2>Tickets</h2>
        <button class="screeningsButton">All Screenings</button>
        <div class="date">
            <p class="date">Wednesday 3/12</p>
        </div>

        <div class="ticketContainer">
            <div class="dotLeft"></div>
            <div class="ticket">
                <div class="ticketText">
                    <p>19:00</p>
                    <p>Weapons</p>
                    <span class="time">2h 8m</span>
                    <span class="age">Age: 15</span>
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
                    <p>21:30</p>
                    <p>Weapons</p>
                    <span class="time">2h 8m</span>
                    <span class="age">Age: 15</span>
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
                    <p>19:00</p>
                    <p>Weapons</p>
                    <span class="time">2h 8m</span>
                    <span class="age">Age: 15</span>
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
        <button class="leftArrow"></button>
        <img class="imgFromMovie" src="" alt="" />
        <button class="rightArrow"></button>
    </section>

    <!-- Require in footer -->
    <?php
    require __DIR__ . "/footer.php"; ?>