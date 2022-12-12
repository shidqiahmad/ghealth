<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- SERVICES SECTION -->
  <section id="services">
    <h1>Our Services</h1>
    <div data-aos="zoom-in" data-aos-duration="800" class="container">
      <div class="responsive audio">
        <div class="round-image">
          <img src="/img/audio.png" alt="audio" loading="lazy" />
        </div>
        <div class="description">
          <h2>Audio Therapy</h2>
          <p>
            Listening to music & other audio files often enlightens our mood.
          </p>
          <a href="{{ url('/AudioTherapy') }}" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive reading">
        <div class="round-image">
          <img src="/img/reading.png" alt="read" loading="lazy" />
        </div>
        <div class="description">
          <h2>Reading Therapy</h2>
          <p>
            Motivational quotes and books can help us to divert and change our mood.
          </p>
          <a href="{{ url('/ReadTherapy') }}" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive talk">
        <div class="round-image">
          <img src="/img/talking.png" loading="lazy" alt="talking" />
        </div>
        <div class="description">
          <h2>Talking Therapy</h2>
          <p>
            A quick short conversation can often bring smile to our face.
          </p>
          <a href="{{ url('/TalkTherapy') }}" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive doctor">
        <div class="round-image">
          <img src="/img/doctor.png" alt="doctor" loading="lazy" />
        </div>
        <div class="description">
          <h2>Consult A Doctor</h2>
          <p>
            If you're facing too much problem, you should consult a doctor.
          </p>
          <a href="https://www.halodoc.com/tanya-dokter" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div class="responsive child">
        <div class="round-image">
          <img src="/img/child.jpg" alt="child" loading="lazy" />
        </div>
        <div class="description">
          <h2>Child Therapy</h2>
          <p>
            Children make us forget about worries with thier innocence
          </p>
          <a href="{{ url('/ChildTherapy') }}" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div class="responsive spiritual">
        <div class="round-image">
          <img src="/img/spiritualtherapy.jpg" alt="spiritual" loading="lazy" />
        </div>
        <div class="description">
          <h2>Spiritual Therapy</h2>
          <p>
            Helps you to become more mindful in your thinking
          </p>
          <a href="{{ url('/SpiritualTherapy') }}" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
