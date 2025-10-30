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
        <!-- Currently showing:
    Mobile:
    2 movie images
    Arrows in both sides, click to show other??

    Desktop:
    3 movie images
    Each has a title and genre-->
        <h2>Currently showing</h2>
        <button class="currentMovies">See all</button>

        <button class="leftArrow"></button>
        <a>
            <img src="" alt="" />
        </a>
        <h4>MovieTitle</h4>
        <p>Genre</p>

        <a href="movie.php">
            <img src="" alt="" />
        </a>
        <h4>MovieTitle</h4>
        <p>Genre</p>

        <a>
            <img src="" alt="" />
        </a>
        <h4>MovieTitle</h4>
        <p>Genre</p>

        <button class="rightArrow"></button>
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
        <div class="offers">
            <h2>Offers</h2>
            <div>
                <div class="offer">
                    <p>Free popcorn</p>
                </div>
                <div class="offer">
                    <p>2 for 1 <br> all drinks</p>
                </div>
                <!-- Vertical line https://www.w3schools.com/howto/howto_css_vertical_line.asp-->
                <button>See all</button>
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

        <div class="comingMovieImg">
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
        </div>

        <button class="rightArrow"></button>
    </section>

    <div class="hr">
        <hr>
    </div>

    <section>
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
    </section>

    <div class="hr">
        <hr>
    </div>

    <?php
    require __DIR__ . "/footer.php"; ?>
    <!-- require in footer.php -->