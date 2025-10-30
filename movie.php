<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE-TITLE</title>
    <link rel="stylesheet" href="style.css" />
</head>
<!-- Work mobile first -->

<body>
    <header>
        <!-- Movie pic -->
        <img src="" alt="Big picture of the movie" />
    </header>
    <nav>
        <!-- Navbar
         Mobile version: 
         Minilogo
         Menu
         Search 
         
         Desktop version: 
         Midi-logo
         Menu
         Search-->
        <a href="index.php">
            <img src="" alt="Mini logo of the cinema" />
        </a>
        <div>Menu</div>
        <div class="search"><img src="" alt="magnifying glass for search function" /></div>
    </nav>
    <section class="forDesktop">

        <section class="moviePresentation">
            <!-- Mini image with movie affisch
            To the right: Text about the movie -->
            <div class="moviePresentation">
                <!-- Flexbox  -->
                <img src="" alt="movie affisch" />
                <p>Text about the movie</p>
            </div>
        </section>

        <section class="factMovie">
            <div class="factMovie">
                <p>Length:</p>
                <p>Director:</p>
                <p>Age limit:</p>
                <p>Actors:</p>

                <p>115 minutes</p>
                <p>Rune</p>
                <p>16 years</p>
                <p>Rune's friend</p>
                <p>Rune's mother</p>
                <p>Rune's neighbor</p>
                <p>Rune's plumber</p>
            </div>
            <!--  
                Mobile:
                1 box with 2 columns
                
                Desktop: This section is parallell with the section above-->
        </section>
    </section>

    <div class="hr">
        <hr>
    </div>

    <section class="tickets">
        <div class="ticketContainer">
            <div class="dot"></div>
            <div class="ticket">
                <p></p>
                <p></p>
                <p></p>
                <button class="bookTicket"></button>
            </div>
            <div class="dot"></div>
        </div>

        <div class="ticketContainer">
            <div class="dot"></div>
            <div class="ticket">
                <p></p>
                <p></p>
                <p></p>
                <button class="bookTicket"></button>
            </div>
            <div class="dot"></div>
        </div>

        <div class="ticketContainer">
            <div class="dot"></div>
            <div class="ticket">

                <p></p>
                <p></p>
                <p></p>
                <button class="bookTicket"></button>
            </div>
            <div class="dot"></div>
        </div>

        <!-- Tickets
     3 tickets in 3 div's in column 
     
     Same design in both mobile & desktop
     More height in mobile?-->
    </section>

    <section class="imgFromMovie">
        <button class="leftArrow"></button>
        <img src="" alt="" />
        <img src="" alt="" />
        <img src="" alt="" />
        <img src="" alt="" />
        <img src="" alt="" />
        <button class="rightArrow"></button>
    </section>

    <!-- Require in footer -->
    <?php
    require __DIR__ . "/footer.php"; ?>