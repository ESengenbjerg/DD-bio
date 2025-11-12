<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUT</title>
    <link rel="stylesheet" href="styleIndex.css" />
</head>

<body>
    <header>
        <!-- Logo pic - CHANGE THIS! -->
        <img class="headerImage" src="https://images.unsplash.com/photo-1487174244970-cd18784bb4a4?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGhvcnJvcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=900" alt="Big logo of the cinema" />
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
            <!-- <div class="search"><img src="" alt="magnifying glass for search function" /></div> -->
        </section>
    </nav>

    <main>

        <section class="currentSection">
            <div class="current">
                <h2>Currently showing</h2>
                <button class="btnSeeAllMovies">See all</button>
                <div class="currentPosterGrid">
                    <button class="leftArrow"></button>
                    <button class="rightArrow"></button>
                    <a href="/movie.php">
                        <!-- Poster 1 -->
                        <img class="currentPoster" src="/assets/BlackPhone-poster.jpg" alt="Black Phone poster" />
                    </a>

                    <a href="/movie.php">
                        <img class="currentPoster" src="/assets/WEAPONS-POSTER.jpg" alt="Weapons poster" />
                    </a>

                    <a href="/movie.php">
                        <img class="currentPoster" src="/assets/freddys2-poster.jpg" alt="Freddys2 poster" />
                    </a>
                </div>

                <div class="currentTextGrid">
                    <div class="currentText">
                        <h4>Black Phone 2</h4>
                        <p>Psychological Horror</p>
                    </div>

                    <div class="currentText">
                        <h4>Weapons</h4>
                        <p>Supernatural Mystery Horror</p>
                    </div>

                    <div class="currentText">
                        <h4>Good Boy</h4>
                        <p>Supernatural Horror</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="offersSection">
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
            <h2>Coming soon...</h2>
            <div class="comingGrid">
                <button class="leftArrow"></button>
                <button class="rightArrow"></button>
                <!-- ÄNDRA BILDERNA!!! -->
                <img class="comingPoster" src="https://images.unsplash.com/photo-1762770663487-6c03bb94fe84?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900" alt="" />
                <img class="comingPoster" src="https://images.unsplash.com/photo-1762779943612-02464f850c54?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw1fHx8ZW58MHx8fHx8&auto=format&fit=crop&q=60&w=900" alt="" />
                <img class="comingPoster" src="https://images.unsplash.com/photo-1762062313553-03cc927933d4?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=60&w=900" alt="" />
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
                <input type="email"></input>
                <button>Sign up!</button>
            </div>
        </section>

        <div class="hr">
            <hr>
        </div>

        <?php
        require __DIR__ . "/footer.php"; ?>

    </main>
    <script src="main.js"></script>
</body>

</html>