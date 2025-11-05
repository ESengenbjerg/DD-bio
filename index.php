<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUT</title>
    <link rel="stylesheet" href="style.css" />
</head>
<!-- Work mobile first -->

<body>
    <header>
        <!-- Logo pic -->
        <img src="" alt="Big logo of the cinema" />
    </header>
    <nav>
        <section class="navbar">

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
            <div>
                <p>
                    Menu
                </p>
            </div>
            <div class="search"><img src="" alt="magnifying glass for search function" /></div>
        </section>
    </nav>


    <section class="currentSection">
        <div class="current">

            <!-- Currently showing:
            Mobile:
            2 movie images
            Arrows in both sides, click to show other??
            
            Desktop:
            3 movie images
            Each has a title and genre-->
            <h2>Currently showing</h2>
            <button class="btnSeeAllMovies">See all</button>

            <button class="leftArrow"></button>

            <div class="currentGrid">
                <div class="currentMovie">
                    <div class="currentMoviePoster">

                        <!-- <a href="movie.php"> -->
                        <!-- Poster 1 -->
                        <!-- <img class="currentPoster" src="" alt="" /> -->
                        <!-- </a> -->
                    </div>
                    <h4>MovieTitle</h4>
                    <p>Genre</p>
                </div>

                <div class="currentMovie">
                    <div class="currentMoviePoster">
                        <!-- <img class="currentPoster" src="" alt="" /> -->
                    </div>
                    <h4>MovieTitle</h4>
                    <p>Genre</p>
                </div>

                <div class="currentMovie">
                    <div class="currentMoviePoster">
                        <!-- <img class="currentPoster" src="" alt="" /> -->
                    </div>
                    <h4>MovieTitle</h4>
                    <p>Genre</p>
                </div>
            </div>

            <button class="rightArrow"></button>
        </div>
    </section>

    <section class="offersSection">
        <!-- Offers:
    
    Mobile:
     2 orange boxes with 1 offer in each.
     Next row: 1 box with button "See all"


     Desktop:
     1 row:
        2 orange boxes with 1 offer in each, followed by 1 red button "See all"
      -->
        <h2>Offers</h2>
        <div class="offersFlex">
            <div class="offerGrid">
                <div class="offer">
                    <p>Free popcorn</p>
                </div>
                <div class="offer">
                    <p>2 for 1 <br> all drinks</p>
                </div>
            </div>
            <!-- Vertical line https://www.w3schools.com/howto/howto_css_vertical_line.asp-->

            <div class="seeAllOffers">
                <button class="seeAllOffers">See all</button>
            </div>
        </div>
    </section>

    <section class="comingSection">
        <!-- Coming soon...

    Mobile:
     1 row with 3 mini images, arrow buttons on each side, click to show other

     Desktop:
     1 row with 5 mini images
    -->

        <h2>Coming soon...</h2>
        <button class="leftArrow"></button>
        <button class="rightArrow"></button>
        <div class="comingGrid">
            <div class="comingMoviePoster">
                <img src="" alt="" />
            </div>
            <div class="comingMoviePoster">
                <img src="" alt="" />
            </div>
            <div class="comingMoviePoster">
                <img src="" alt="" />
            </div>
        </div>
    </section>

    <div class="hr">
        <hr>
    </div>

    <section class="newsletterSection">
        <div class="newletterContainer">

            <!-- Newsletter:
            
            Mobile: "Want to know about offers and upcoming releases?
            Sign up to our newletter below!"
            
            Sign up here:
            Input box           Button
            -->

            <p>Want to know about offers and upcoming releases?<br>
                Sign up to our newletter below!</p>
            <label>Sign up here:</label><br>
            <input type="email"></input>
            <button>Sign up!</button>
        </div>
    </section>

    <div class="hr">
        <hr>
    </div>

    <?php
    require __DIR__ . "/footer.php"; ?>
    <!-- require in footer.php -->