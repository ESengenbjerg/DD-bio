<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balthazar&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="general.css" />
    <link rel="stylesheet" href="styleIndex.css" />
    <link rel="stylesheet" href="styleMediaIndex.css" />
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="footer.css" />
</head>

<body>
    <header>
        <img class="headerImage" src="https://images.unsplash.com/photo-1487174244970-cd18784bb4a4?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGhvcnJvcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=900" alt="Big logo of the cinema" />
        <img class="headerLogo" src="/assets/TEMPORARY.png" alt="Big logo of the cinema" />
    </header>

    <!-- Inserting navbar -->
    <?php require "nav.php"; ?>

    <!-- Animation -->
    <button class="flicker">Dare to try?!</button>

    <div id="scare-overlay">
        <div class="scare-content">
            <img src="/assets/popup5.avif" alt="Scary girl" />
        </div>
    </div>

    <main>
        <section class="currentSection">
            <div class="current">
                <h2>Currently showing</h2>
                <button class="btnSeeAllMovies">See all</button>
                <div class="currentPosterGrid">
                    <div class="currentPosterContainer">
                        <a href="/movie.php">
                            <img class="currentPoster" src="/assets/BlackPhone-poster.jpg" alt="Black Phone poster" />
                            <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                        </a>
                        <div class="currentText">
                            <h4>Black Phone 2</h4>
                            <p>Psychological Horror</p>
                        </div>
                    </div>

                    <div class="currentPosterContainer">
                        <a href="/movie.php">
                            <img class="currentPoster" src="/assets/WEAPONS-POSTER.jpg" alt="Weapons poster" />
                            <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                        </a>
                        <div class="currentText">
                            <h4>Weapons</h4>
                            <p>Supernatural Mystery Horror</p>
                        </div>
                    </div>

                    <div class="currentPosterContainer">
                        <a href="/movie.php">
                            <img class="currentPoster" src="/assets/freddys2-poster.jpg" alt="Freddys2 poster" />
                            <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                        </a>
                        <div class="currentText">
                            <h4>Good Boy</h4>
                            <p>Supernatural Horror</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="offersSection">
            <h2>Offers</h2>
            <div class="offersFlex">
                <div class="offerGrid">
                    <div class="offer">
                        <p class="textPopcorn">Free popcorn</p>
                        <img class="popcorn" src="/assets/popcorn.png" alt="popcorn">
                    </div>
                    <div class="offer">
                        <p class="textSoda">2 for 1 <br> all drinks</p>
                        <img class="sodaCups" src="/assets/sodaPng.png" alt="soda cups">
                    </div>
                </div>
                <!-- Vertical line https://www.w3schools.com/howto/howto_css_vertical_line.asp-->

                <div class="seeAllOffers">
                    <img class="offersIcon" src="/assets/offersIcon.png" alt="Offers icon" />
                    <button class="seeAllOffers">See all</button>
                </div>
            </div>
        </section>

        <section class="comingSection">
            <h2>Coming soon...</h2>
            <div class="comingGridMobile">
                <button class="leftArrowIndex"><img src="assets/ArrowLeft.png" alt="Left arrow"></button>
                <button class="rightArrowIndex"><img src="assets/ArrowRight.png" alt="Right arrow"></button>

                <div class="comingContainer">
                    <img class="comingPoster" src="/assets/creepingfog.jpg" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainer">
                    <img class="comingPoster" src="/assets/echosinthedark.jpg" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainer">
                    <img class="comingPoster" src="/assets/nightmore-poster.png" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>
            </div>

            <div class="comingGridDesktop">
                <div class="comingContainerDesktop">
                    <img class="comingPosterDesktop" src="/assets/creepingfog.jpg" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainerDesktop">
                    <img class="comingPosterDesktop" src="/assets/echosinthedark.jpg" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainerDesktop">
                    <img class="comingPosterDesktop" src="/assets/nightmore-poster.png" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainerDesktop">
                    <img class="comingPosterDesktop" src="/assets/silentwoods.jpg" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>

                <div class="comingContainerDesktop">
                    <img class="comingPosterDesktop" src="/assets/possession-poster.png" alt="Fictive movie poster" />
                    <img class="bloodsplatter" src="/assets/bloodsplatter.png" alt="bloodsplatter" />
                </div>
            </div>
        </section>

        <div class="hr">
            <hr>
        </div>

        <section class="newsletterSection">
            <div class="newletterContainer">

                <p>Want to know about offers and upcoming releases?<br>
                    Sign up to our newletter below!</p>
                <label>Sign up here:</label><br>
                <input type="email" placeholder="name@email.com"></input>
                <button class="btnSignUp">Sign up!</button>
            </div>
        </section>

        <div class="hr hrLower">
            <hr>
        </div>

        <?php
        require __DIR__ . "/footer.php"; ?>

    </main>
    <script src="main.js"></script>
</body>

</html>