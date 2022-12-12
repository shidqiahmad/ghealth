<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/images/favicon-enhanced.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" text="text/CSS"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet" />
    <title>G-Health - Child Therapy</title>
    <link rel="stylesheet" href="/css/childTherapy.css" />
</head>

<body>
    <!-- Navbar Section -->
    <nav>
        <a href="../index.html"><img class="audio-logo" src="/img/Logo.png" alt="Logo" /></a>

        <div class="nav-links" id="navLinks">
            <ul>
                <li><a href="../index.html">HOME</a></li>
                <li><a href="#about" class=".smooth-scroll">ABOUT</a></li>
                <li><a href="#images" class=".smooth-scroll">IMAGES </a></li>
                <li><a href="#videos" class=".smooth-scroll">VIDEOS </a></li>
            </ul>
        </div>
        <div class="hamburger" id="ham">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z">
                </path>
            </svg>
        </div>

    </nav>

    <!-- Mobile Layout Navbar -->
    <div class="menu" id="menu">
        <ul class="menu-link">
            <li><a href="../index.html">HOME</a></li>
            <li><a class="close" href="#about">ABOUT</a></li>
            <li><a class="close" href="#images">IMAGES </a></li>
            <li><a class="close" href="#videos">VIDEOS </a></li>
        </ul>
    </div>
    <!-- Mobile Layout Navbar Ends Here -->

    <!-- Navbar Section Ends Here -->

    <div class="menu" id="menu">
        <ul class="menu-link">
            <li><a href="../index.html">HOME</a></li>
            <li><a class="close" href="#about">ABOUT</a></li>
            <li><a class="close" href="#images">IMAGES </a></li>
            <li><a class="close" href="#videos">VIDEOS </a></li>
        </ul>
    </div>
    <header>
        <div class="center">
            <h1 id="title">Welcome to Our <br><span class="heading-span">Child Therapy</span></h1>
            <h3 id="subtitle">Learn more about child therapy. Watch their images<br> and videos to gain some happiness
                and relief <br> from your problems.</h3>
        </div>
    </header>
    <section id="about" class="about">
        <h1 class="section-headings">ABOUT</h1>
        <div class="bfit">
            <img src="/img/child/about-child.jpg" width="700" height="600">
            <div class="btext">
                <div class="baby-text">
                    <div class="baby-text">
                        <h3>A baby's smile is powerful that it can make you forget all the troubles </h3>
                    </div>
                    <div class="baby-text">
                        <h3>in the world.</h3>
                    </div>
                    <div class="baby-text">
                        <h3>Their smiles are one of the cutest thing in the world, and they can</h3>
                    </div>
                    <div class="baby-text">
                        <h3> melt your heart in a second.</h3>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <hr />
    <section id="images">
        <h1 class="section-headings">IMAGES</h1>
        <div class="main-scroll-div">
            <div>
                <button class="icon" onclick="scrolll()"> <i class="fas fa-angle-double-left"></i></button>
            </div>
            <div class="cover">
                <div class="scroll-images">
                    <div class="child"><img class="child-img" src="/img/child/slider-8.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-3.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-4.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-5.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-6.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-2.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-7.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-8.jpg" alt="image"></div>
                    <div class="child"><img class="child-img" src="/img/child/slider-9.jpg" alt="image"></div>
                </div>
            </div>
            <div>
                <button class="icon" onclick="scrollr()"> <i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>

        <br>
    </section>
    <hr />
    <!-- Video Section  -->
    <section id="videos">
        <h1 class="section-headings">VIDEOS</h1>
        <div class="collection">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/myz0kxHLnLU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zs21cKJs87E"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1YBheuHma8I"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/L49VXZwfup8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gB12TV38QBo"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GZECezeVg08"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>


    <!-- footer start -->

    <footer>
        <div class="footer-container">
            <!--logo and info column-->
            <div class="col">
                <!--logo insert-->
                <img src="/img/Logo.png" alt="logo" class="footlogo" />
                <div class="footercontent">
                    <h2 class="footerheading">G-Health</h2>
                    <p class="footerpara">Ayo Hidup Sehat</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/childTherapy.js"></script>
</body>

</html>
