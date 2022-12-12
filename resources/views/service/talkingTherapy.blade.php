<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/images/favicon-enhanced.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
  <title>G-Health - Talking Therapy</title>
  <link rel="stylesheet" href="/css/talking.css" />
  <link rel="stylesheet" text="text/CSS"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body onload="myfunction()" id="main">
  <div id="load">
    <div style="background-color: white; height: 25vh; width: 100%; position: relative; top: -70px;"></div>
  </div>
  <div id="back-top-div" class="back-top-wrap">
    <i class="fas fa-arrow-up"></i>
  </div>

  <!-- Navbar Section -->
  <nav>
    <a href="../index.html"><img class="talking-logo" src="img/Logo.png" alt="Logo" /></a>

    <div class="nav-links" id="navLinks">
      <i class="fa fa-times" onclick="hidemenu()"></i>
      <ul>
        <li><a href="../index.html">HOME</a></li>
        <li><a href="#about" class=".smooth-scroll">ABOUT</a></li>
        <li><a href="#blogs" class=".smooth-scroll">BLOGS </a></li>
        <li><a href="#video" class=".smooth-scroll">VIDEOS </a></li>


      </ul>
    </div>
    <div class="hamburger" id="ham">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z"></path></svg>
    </div>
    </nav>

  <!-- Mobile Layout Navbar -->

  <div class="menu" id="menu">
    <ul class="menu-link">
      <li><a href="../index.html">HOME</a></li>
      <li><a onclick="closeMenu()" href="#about">ABOUT</a></li>
      <li><a onclick="closeMenu()" href="#blogs">BLOGS</a></li>
      <li><a onclick="closeMenu()" href="#videos">VIDEOS</a></li>
    </ul>
  </div>

  <!-- Mobile Layout Navbar Ends Here -->

  <!-- Navbar Section Ends Here -->

  <!-- Header Section-->
  <header>
    <div class="filter"></div>
    <div class="center">
      <h1 data-aos="flip-up" id="title">Welcome to Our <br><span class="heading-span">Talking
          Therapy</span></h1>
      <h3  id="subtitle">Read about Talking Therapy,its benefits and
        Counsellors<br>as one good conversation can shift
        the direction of change forever.</h3>
    </div>
  </header>
  <!-- Header Section Ends Here -->

  <!-- About Section -->
  <section id="about">
    <h1 data-aos="flip-up" class="section-headings">ABOUT</h1>
    <p  data-aos="fade-left" class="sub">Here are the signs that you need a Talking Therapy!</p>
    <div class="container">

      <div  data-aos="fade-up" data-aos-duration="800"  class="cause first">
        <div class="layer">
          <h3>Depression</h3>
        </div>
        <h2>Depression</h2>
        <p>
          Depression is a mood disorder that causes persistent feelings of sadness, emptiness, and loss of joy.It is
          different from the mood fluctuations.
        </p>
        <a href="https://www.medicalnewstoday.com/articles/8933#definition" target="_blank">
          Read More
        </a>
      </div>

      <div data-aos="fade-up" data-aos-duration="800"  class="cause second">
        <div class="layer">
          <h3>Anxiety</h3>
        </div>
        <h2>Anxiety</h2>
        <p>
          Anxiety is your body’s natural response to stress. It’s a feeling of fear or apprehension about what’s going
          to happen and how will it happen.
        </p>
        <a href="https://www.health.harvard.edu/blog/anxiety-what-it-is-what-to-do-2018060113955" target="_blank">
          Read More
        </a>
      </div>

      <div data-aos="fade-up" data-aos-duration="800"  class="cause third">
        <div class="layer">
          <h3>Stress</h3>
        </div>
        <h2>Stress</h2>
        <p>
          Stress is a feeling of emotional or physical tension. It can come from any event or thought that makes you
          feel frustrated or angry.
        </p>
        <a href="https://www.medicalnewstoday.com/articles/145855" target="_blank">
          Read More
        </a>
      </div>
    </div>
  </section>
  <!-- About Section Ends Here -->

  <!-- Blog section  -->
  <section id="blogs">
    <h1 data-aos="flip-up" class="section-headings">BLOGS</h1>
    <div class="blog-container">
      <div  data-aos="fade-up" data-aos-duration="800"  class="blog-box">
        <div class="blog-img">
          <img src="/img/talk/blog-1.jpg" alt="">
        </div>
        <div class="blog-content">
          <span>JUNE 23, 2022 MAHEVASH SHAIKH</span>
          <a href="https://www.healthyplace.com/blogs/copingwithdepression/2022/6/does-depression-make-you-feel-worthless-you-are-not-alone"
            target="_blank" class="blog-title">Does Depression Make You Feel Worthless? You Are Not Alone</a>
          <p>Has depression made you feel worthless? If so, you are not alone. You may even believe that you are
            worthless due to depression. Read on to find out how to fight this.</p>
          <a href="https://www.healthyplace.com/blogs/copingwithdepression/2022/6/does-depression-make-you-feel-worthless-you-are-not-alone"
            target="_blank">Read More-></a>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="blog-box">
        <div class="blog-img">
          <img src="/img/talk/blog-2.jpg" alt="">
        </div>
        <div class="blog-content">
          <span>JUNE 8, 2022 TJ DESALVO</span>
          <a href="https://www.healthyplace.com/blogs/anxiety-schmanxiety/2022/6/talking-to-others-about-my-mental-health"
            target="_blank" class="blog-title">Talking to Others About My Mental Health.Why Mental Health Is Hard to
            Talk About </a>
          <p>I've never been good at talking about my mental health with others, even those who I've known for years. In
            the past, I didn't have enough self-knowledge to be able to talk about it with anyone in an adequate way.
          </p>
          <a href="https://www.healthyplace.com/blogs/anxiety-schmanxiety/2022/6/talking-to-others-about-my-mental-health"
            target="_blank">Read More-></a>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="blog-box">
        <div class="blog-img">
          <img src="/img/talk/blog-3.jpg" alt="">
        </div>
        <div class="blog-content">
          <span>January 25, 2021 KELLY BILODEAU,</span>
          <a href="https://www.health.harvard.edu/blog/3-simple-strategies-for-stress-relief-2021012521806"
            target="_blank" class="blog-title">Stress Management-<br>Simple strategies for stress relief.
          </a>
          <p>The last few months of any year, with deadlines and holidays, often create a harried pace. The beginning of
            a new year can give you a chance to exhale. But even if you experience a few serene days or weeks, tight
            shoulders and tension are never far off.</p>
          <a href="https://www.health.harvard.edu/blog/3-simple-strategies-for-stress-relief-2021012521806"
            target="_blank">Read More-></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Section Ends Here -->

  <!-- Video Section  -->
  <section id="video">
    <h1 data-aos="flip-up" class="section-headings">VIDEOS</h1>

    <div class="video-container">
      <div  data-aos="fade-up" data-aos-duration="800"  class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380" src="https://www.youtube.com/embed/Nz9eAaXRzGg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380" src="https://www.youtube.com/embed/UQ1wDXtPxxI"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380" src="https://www.youtube.com/embed/rmeGVhhbGrM"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380"src="https://www.youtube.com/embed/8jPQjjsBbIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380" src="https://www.youtube.com/embed/4ZQkYSpmOdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div  data-aos="fade-up" data-aos-duration="800" class="collection">
        <div class="video">
          <iframe style="border-radius: 10px;" width="100%" height="380" src="https://www.youtube.com/embed/m3-O7gPsQK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    function myfunction(){
        preloader.style.display='none';
        scroll.style.overflow='scroll';
    }
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
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>
