@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <div id="hero" class="container-fluid px-4 py-4 text-center">
        <h1 class="display-5 fw-bold">G-Health</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-2">Platfrom bagi masyarakat yang ingin menenangkan diri dan pikiran. <br> G-Health memberikan pelayanan yang dapat digunakan oleh para pengguna.</p>
            <a href="/login" target="_blank" class="btn btn-primary btn-lg px-4 gap-3">Get Started</a>
        </div>
    </div>
    <!-- End Hero -->

    <!-- About -->
    <div class="container-fluid col-xxl-8 px-4 py-5" id="about">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/tress.jpg"
                    class="d-block mx-lg-auto img-fluid" loading="lazy" style="width: 100%; height:50%;">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold lh-1 mb-3">About GHealth</h2>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Services -->
    <div class="container px-4 py-5" id="service">
        <h2 class="pb-2 text-center">Services</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-spotify"></i>
                </div>
                <div>
                    <h3 class="fs-2">Audio Therapy</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-book"></i>
                </div>
                <div>
                    <h3 class="fs-2">Reading Therapy</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-emoji-laughing-fill"></i>
                </div>
                <div>
                    <h3 class="fs-2">Talking Therapy</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-peace-fill"></i>
                </div>
                <div>
                    <h3 class="fs-2">Spiritual Therapy</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-person-hearts"></i>
                </div>
                <div>
                    <h3 class="fs-2">Child Therapy</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div
                    class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <i class="bi bi-hospital"></i>
                </div>
                <div>
                    <h3 class="fs-2">Consult A Doctor</h3>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                        and probably just keep going until we run out of words.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Testimonial  -->
    <div class="client pt-3 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-3 text-dark">Testimonials</h1>
                    <hr class="bg-white mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
                    <p class="p-text text-dark">What our clients are saying</p>
                </div>
            </div>
            <div class="row align-items-md-center text-dark">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam,
                                            quae consectetur! Fugit repellat sit placeat rerum animi, facilis exercitationem
                                            sunt aliquid magni deserunt eum harum?.</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-3">
                                            <img src="/img/testimonial/photo1.jpeg"
                                                class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Nopals Purnomo</strong></h4>
                                            <p class="testimonial_subtitle"><span>Football Manager</span><br>
                                                <span>Manchester United</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aliquid
                                            cum atque, eius velit dolore repellendus libero recusandae accusantium ut
                                            blanditiis sunt modi eveniet asperiores.
                                        </p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 pt-4">
                                            <img src="/img/testimonial/photo2.jpg"
                                                class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-lg-block"></div>
                                            <h4><strong>Esther Zawadi</strong></h4>
                                            <p class="testimonial_subtitle"><span>
                                                    digital strategist</span><br>
                                                <span>Vaxa digital</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row p-4">
                                    <div class="t-card">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                                            quibusdam libero optio pariatur veniam, expedita ipsa voluptatibus, cum quis,
                                            deserunt qui dolorem porro facere laudantium.</p>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="row text-lg-start">
                                        <div class="col-sm-2 pt-4 align-items-center">
                                            <img src="/img/testimonial/photo3.jpg"
                                                class="rounded-circle img-responsive img-fluid">
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="arrow-down d-none d-md-block"></div>
                                            <h4><strong>Patrick muriungi</strong></h4>
                                            <p class="testimonial_subtitle"><span>Web Technologist</span><br>
                                                <span>Vaxa digital</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls push-right">
                        <a class="bi bi-arrow-left btn btn-outline-dark" href="#carouselExampleCaptions"
                            data-bs-slide="prev"></a>
                        <a class="bi bi-arrow-right btn btn-outline-dark" href="#carouselExampleCaptions"
                            data-bs-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonial -->

    <div id="team" class="team team-bg py-5">
        <div class="container">
            <div class="section-title">
                <p class="main-team-subheading">Team</p>
                <p class="main-team-heading">Our GACOR's Team</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/team/atep.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Anisa Theryana Putri</p>
                            <span>Frontend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href=""><i class="bi bi-linkedin"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/team/sri2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Sri Lestari</p>
                            <span>Frontend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href=""><i class="bi bi-linkedin"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/team/pute.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Putri Ade Novianti</p>
                            <span>Backend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href=""><i class="bi bi-linkedin"></i></a>
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="/img/team/sopian.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <p class="member-heading">Muhammad Sopian</p>
                            <span>Backend Developer</span>
                            <p class="member-para">Mahasiswa PSTI</p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/msopiann190/" target="_blank"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="https://twitter.com/smartestmuggles/" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://instagram.com/msopiann/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://github.com/msopiann190/" target="_blank"><i
                                        class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Team --}}

    {{-- Footer --}}
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">&copy; GHealth, 2022</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-meta"></i></a></li>
            </ul>
        </footer>
    </div>

    {{-- End Footer --}}
@endsection
