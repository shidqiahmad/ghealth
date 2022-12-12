<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/images/favicon-enhanced.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      text="text/CSS"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap"
      rel="stylesheet"
    />
    <title>G-Health - Audio Therapy</title>

    <link rel="stylesheet" href="/css/audio.css" />
  </head>

  <style>
    .nature-sound {
      text-align: center;
      padding: 30px;
    }
  </style>

<body onload="myfunction()" id="main">

  <div id="load">
    <div style="background-color: white; height: 25vh; width: 100%; position: relative; top: -70px;"></div>
  </div>

  <div id="back-top-div" class="back-top-wrap">
    <i class="fas fa-arrow-up"></i>
  </div>


  <!-- Navbar Section -->
  <nav>
    <a href="{{ url('/') }}"><img class="audio-logo" src="/img/Logo.png" alt="Logo" /></a>

    <div class="nav-links" id="navLinks">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#music" class=".smooth-scroll">MUSIC</a></li>
        <li><a href="#podcasts" class=".smooth-scroll">PODCASTS </a></li>
        <li><a href="#audiobooks" class=".smooth-scroll">AUDIOBOOKS </a></li>
      </ul>
    </div>
    <div class="hamburger" id="ham">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em"
        xmlns="http://www.w3.org/2000/svg">
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
      <li><a class="close" href="#music">MUSIC</a></li>
      <li><a class="close" href="#podcasts">PODCASTS </a></li>
      <li><a class="close" href="#audiobooks">AUDIOBOOKS </a></li>
    </ul>
  </div>
  <!-- Mobile Layout Navbar Ends Here -->

  <!-- Navbar Section Ends Here -->

  <div class="menu" id="menu">
    <ul class="menu-link">
      <li><a href="/index.html">HOME</a></li>
      <li><a href="#music">MUSIC</a></li>
      <li><a href="#podcasts">PODCASTS</a></li>
      <li><a href="#audiobooks">AUDIOBOOKS</a></li>
    </ul>
  </div>


    <!-- Header Section-->
    <header>
      <div class="filter"></div>
      <div class="center">
        <h1 id="title" data-aos="fade-up" data-aos-duration="800">
          Welcome to Our <br /><span class="heading-span">Audio Therapy</span>
        </h1>
        <h3 id="subtitle" data-aos="fade-up" data-aos-duration="800">
          Listen to Music, Motivational Podcasts and Audiobooks <br />
          to gain some happiness, knowledge and also lighten your stress side by side.
        </h3>
      </div>
    </header>
    <!-- Header Section Ends here -->

    <!-- Music Section-->
    <section id="music">
      <h1 class="section-headings">Music</h1>
      <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000" class="collection">
          <h2>Stress Relief Sounds</h2>
          <div class="playlist" >
            <iframe
              style="border-radius: 12px"
              src="https://open.spotify.com/embed/playlist/37i9dQZF1DWXe9gFZP0gtP?utm_source=generator"
              width="100%"
              height="380"
              frameborder="0"
              allowfullscreen=""
              allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            ></iframe>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="collection">
          <h2>Peaceful Guitar</h2>
          <div class="playlist">
            <iframe
              style="border-radius: 12px"
              src="https://open.spotify.com/embed/playlist/37i9dQZF1DX0jgyAiPl8Af?utm_source=generator"
              width="100%"
              height="380"
              frameborder="0"
              allowfullscreen=""
              allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            ></iframe>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="collection">
          <h2>Calm Nature Sounds</h2>
          <div class="playlist">
            <iframe
              style="border-radius: 12px"
              src="https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO2pMckE?utm_source=generator"
              width="100%"
              height="380"
              frameborder="0"
              allowfullscreen=""
              allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            ></iframe>
          </div>
        </div>
      </div>
      </section>
    <!-- Music Section Ends Here-->

    <hr />

    <!-- Podcasts Section-->
    <section id="podcasts">
      <h1 class="section-headings">Podcasts</h1>
      <div class="collection">
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/4feTGTT8jp9e18w90mBtXc?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/show/5ZxgpIlnsT8kILxQItEQ5f?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/4ahVo34YZsDDtCgXX5KS5P?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/3ZvJ1jpxtjFIZ8sTghil7u?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/0vEWGG6S1wL6IbxJsxb3sF?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/0PLXymZ2KH89Ty2KGFpREP?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/3qZRmQtsUgHyOVNmZzxxPw?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/3rG0WSWKcQ4iEM4JkLQRGg?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/2UmljSQsLNonJRZ88b2zfx?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/24JEpPldCxgeqGprKO7kMI?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/5nWxL1XA1Jr3C3aJLem5ZK?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/06OxqMY33JiZ23Pxw8NmDs?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/1496yN5qwJAwbLB30XzrvR?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/54UlEUdnxJ96kGkrcskhGf?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/6lbYN222AInVmmLj674vKB?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
        <div data-aos="fade-up" data-aos-duration="800" class="show">
          <iframe
            src="https://open.spotify.com/embed/episode/19XfB2nyuc1Uh3BservSyf?utm_source=generator"
            width="100%"
            height="152"
            frameborder="0"
            allowfullscreen=""
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          ></iframe>
        </div>
      </div>
    </section>
    <!-- Podcasts Section Ends Here -->

    <hr />

    <!-- AudioBooks Section-->
    <section id="audiobooks">
      <h1 class="section-headings">Audiobooks</h1>
      <div class="cards">
        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/41wuB-s8vRL._SL300_.jpg" alt="Atomic Habits"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Atomic Habits</h3>
              <p>
                Let's listen to the famous audiobook by James Clear.<br />
              </p>
              <a href="https://www.audible.in/pd/Atomic-Habits-Audiobook/B07J1PK5Q7?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
              class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51jRBz6Ug3L._SL500_.jpg" alt="The Psychology of Money"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>The Psychology of Money</h3>
              <p>
                Let's listen to the famous audiobook by Morgan Housel.<br />
              </p>
              <a href="https://www.audible.in/pd/The-Psychology-of-Money-Audiobook/B08D9WJCBT?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
              class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51MT0MbpD7L._SL500_.jpg" alt="The Subtle Art of Not Giving a F*ck"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>The Subtle Art of Not Giving a F*ck</h3>
              <p>
                Let's listen to the famous audiobook by Mark Manson.<br />
              </p>
              <a href="https://www.audible.in/pd/The-Subtle-Art-of-Not-Giving-a-F-ck-Audiobook/B079BC54JT?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/511HccWipML._SL500_.jpg" alt="Ikigai"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Ikigai</h3>
              <p>
                Let's listen to the famous audiobook by Héctor García and Francesc Miralles.<br />
              </p>
              <a href="https://www.audible.in/pd/Ikigai-Audiobook/B0759Y4LYM?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShar" target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51n4UO2a+VS._SL500_.jpg" alt="Think Like A Monk"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Think Like A Monk</h3>
              <p>
                Let's listen to the famous audiobook by Jay Shetty.<br />
              </p>
              <a href="https://www.audible.in/pd/Think-Like-A-Monk-Audiobook/B07YSQ8GT5?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/514sscPA15L._SL500_.jpg" alt="Life's Amazing Secrets"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Life's Amazing Secrets</h3>
              <p>
                Let's listen to the famous audiobook by Gaur Gopal Das.<br />
              </p>
              <a href="https://www.audible.in/pd/Lifes-Amazing-Secrets-Audiobook/B081S9NKRP?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51AHZGhzZEL._SL500_.jpg" alt="Rich Dad Poor Dad"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Rich Dad Poor Dad</h3>
              <p>
                Let's listen to the famous audiobook by Robert T. Kiyosaki.<br />
              </p>
              <a href="https://www.audible.in/pd/Rich-Dad-Poor-Dad-Audiobook/B079P9PGJB?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51nY2HMNVHL._SL500_.jpg" alt="Karma"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Karma: A Yogi’s Guide</h3>
              <p>
                Let's listen to the famous audiobook by Sadhguru and Leslie Howard.<br />
              </p>
              <a href="https://www.audible.in/pd/Karma-A-Yogis-Guide-to-Crafting-Your-Own-Destiny-Audiobook/9391149588?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51hAGh15bTL._SL500_.jpg" alt="How to Talk to Anyone"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>How to Talk to Anyone</h3>
              <p>
                Let's listen to the famous audiobook by Leil Lowndes.<br />
              </p>
              <a href="https://www.audible.in/pd/How-to-Talk-to-Anyone-Audiobook/B079TLJV49?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card" >
          <div class="image" id="rew">
            <img src="https://m.media-amazon.com/images/I/41jq-ouUBkL._SL500_.jpg" alt="Rework"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Rework</h3>
              <p>
                Let's listen to the famous audiobook by Jason Fried and David Heinemeier Hansson.<br />
              </p>
              <a href="https://www.audible.in/pd/Rework-Audiobook/B079VF9TV6?action_code=ASSGB149080119000H&share_location=pdp&shareTest=TestShare"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/51bmAi4DCML._SL500_.jpg" alt="The Monk Who Sold His Ferrari"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>The Monk Who Sold His Ferrari</h3>
              <p>
                Let's listen to the famous audiobook by Robin Sharma.<br />
              </p>
              <a href="https://www.audible.in/pd/The-Monk-Who-Sold-His-Ferrari-Audiobook/B072MR2L6V?qid=1663432045&sr=1-2&ref=a_search_c3_lProduct_1_2&pf_rd_p=2d02bc98-4366-4f94-99d9-5e898cda0766&pf_rd_r=PBF08GY7EPN53D1K48CC"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>

        <article data-aos="fade-up" data-aos-duration="800" class="card">
          <div class="image">
            <img src="https://m.media-amazon.com/images/I/41iYeNKefoL._SL500_.jpg" alt="Good Vibes, Good Life"/>
          </div>
          <div class="details">
            <div class="center">
              <h3>Good Vibes, Good Life</h3>
              <p>
                Let's listen to the famous audiobook by Vex King.<br />
              </p>
              <a href="   https://www.audible.in/pd/Good-Vibes-Good-Life-Audiobook/1788174992?qid=1663432525&sr=1-1&ref=a_search_c3_lProduct_1_1&pf_rd_p=2d02bc98-4366-4f94-99d9-5e898cda0766&pf_rd_r=PFHFS2XZPZE9CNS18WVB"target="_blank"
                class="btn btn-border">Play Now</a>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!-- AudioBooks Section Ends Here -->

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

  <!-- AudioBooks Section Ends Here -->
  <script type="text/javascript" src="/js/scrollsmooth.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    const ham = document.getElementById("ham");
    const menu = document.getElementById("menu");
    const close = document.querySelectorAll('.close');
    const closeMenu = () => {
      if (menu.classList.contains("open")) {
        menu.classList.remove("open");

        console.log("open");
      }
      ham.innerHTML = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>'
    }

    const toggleMenu = () => {
      if (menu.classList.contains("open")) {
        menu.classList.remove("open");
        ham.innerHTML = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>'
        console.log("open");
      } else {
        menu.classList.add("open");
        ham.innerHTML = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg>'
        console.log("close");
      }
    };
    ham.addEventListener("click", toggleMenu);
    close.forEach(ele => {
      ele.addEventListener("click", closeMenu);
    }
    )

  </script>
  <script>
    var preloader = document.getElementById('load');
    var scroll = document.getElementById('main');
    function myfunction() {
      preloader.style.display = 'none';
      scroll.style.overflow = 'scroll';

      const backTopElement = document.getElementById("back-top-div");
      const minScolledAmountToBackTop = 800;

      window.addEventListener("scroll", () => {
        if (window.scrollY < minScolledAmountToBackTop) {
          backTopElement.classList.add("hidden");
        } else {
          backTopElement.classList.remove("hidden");
        }
      });

      const backTop = () => {
        window.scrollTo(0, 0);
      };

      backTopElement.addEventListener("click", backTop);
      ham.addEventListener("click", toggleMenu);

    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>

</html>
