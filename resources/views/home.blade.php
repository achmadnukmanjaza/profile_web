@extends('layouts.layout')
@section('konten')
    <div id="hero" class="hero">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Achmad Nukman Jaza</h1>
                    <div class="page-scroll">
                        <p class="job-title">Full Stack Developer</p>
                        <a href="#contact" class="btn btn-fill ">Hire me</a>
                        <div class="clearfix visible-xxs"></div>
                        <a href="#portfolio" class="btn btn-border">Explore more</a>
                    </div>
                </div>
            
                <div class="col-md-6 text-right">
                    <img src="assets/img/nukman.png" alt="alex-vidal">
                </div>

            </div>
        </div>
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section id="about" class="site-section section-about text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2>About</h2>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                        <p>Halo! Saya achmad Nukman Jaza biasa di panggil Nukman, Saya berasal dari kota malang, Lulusan SMK Telkom Malang tahun 2021 dengan keahlian Rekayasa Perangkat Lunak (RPL). Saat ini saya tersedia untuk pekerjaan freelance. Jika Anda memiliki proyek yang ingin Anda mulai atau berpikir Anda memerlukan bantuan saya dengan sesuatu, hubungi saya.</p>
                        <a href="assets/pdf/cv.pdf" class="btn btn-fill" target="_blank" download>Download my cv</a>
                    </div>
                </div>
            </div>
        </section><!-- /.secton-about -->

        <section class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>My Skills</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Framework Laravel</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>CSS</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="80"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Java</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                        <div class="skill">
                            <h4>Node Js</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-transitiongoal="65"></div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </div><!-- /.skill -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>What i do</h3>
                        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/front-end.svg" alt="Front End Developer">
                            <h4>Front-end</h4>
                            <p>Saya memiliki pengalaman dalam bekerja dengan jQuery atau kerangka kerja MVC yang lebih canggih</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/back-end.svg" alt="Back End Developer">
                            <h4>Back-end</h4>
                            <p>saya telah membuat sistem yang mendukung manusia (masyarakat maupun pemerintah), termasuk REST API, aplikasi pengaduan masyarakat, dan banyak lagi.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="assets/img/consultancy.svg" alt="Coding">
                            <h4>Consultancy</h4>
                            <p>Selain menyediakan layanan pengembangan, saya juga dapat membantu Anda memutuskan roadmap strategi melalui layanan konsultasi.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->

        <section id="portfolio" class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h3>My recent Works</h3>
                    <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-2.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem2"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-3.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem3"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-4.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem4"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-5.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem5"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-6.jpg" class="img-res" alt="">
                            <div class="portfolio-item-info">
                                <h4>Project Title</h4>
                                <a href="#" data-toggle="modal" data-target="#portfolioItem6"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                            </div><!-- /.portfolio-item-info -->
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-portfolio -->

        <section class="site-section section-counters text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <p class="counter start" data-to="4" data-speed="2000">0</p>
                        <h4>Years Experience</h4>
                    </div>
                    <!-- <div class="col-sm-4 col-xs-12">
                        <p class="counter start" data-to="120" data-speed="2000">0</p>       
                        <h4>Projects Delivered</h4>      
                    </div> -->
                    <div class="col-sm-6 col-xs-12">
                        <p id="infinity" class="counter" data-from="0" data-to="1" data-speed="1000">0</p>
                        <h4>Seconds on this site!<br>What are you waiting for?</h4>
                    </div>
                </div>
            </div>
        </section><!-- /.section-counters -->

        <section id="contact" class="site-section section-form text-center">
            <div class="container">

                <h3>Contact</h3>
                <img src="assets/img/lines.svg" class="img-lines" alt="lines">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control mt-x-0" placeholder="Name" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>   
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <button href="#" class="btn btn-border" type="submit">Hire Me <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </section><!-- /.section-form -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a class="icon facebook-bg" href="#"><i class="icon-facebook"></i></a>
                    <a class="icon twitter-bg" href="#"><i class="icon-twitter"></i></a>
                    <a class="icon gplus-bg" href="#"><i class="icon-linkedin"></i></a>
                    <a class="icon linkedin-bg" href="#"><i class="icon-gplus"></i></a>
                </div>
                <div class="col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3"><p class="copyright">2017. All Rights Reserved</p></div>
                <div class="col-sm-4 col-xs-3">
                    <div class="text-right page-scroll">
                        <a class="icon icon-up-bg" href="#hero"><i class="icon-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /#footer -->

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-1.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-2.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-3.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-4.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-5.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
            <img class="img-res" src="assets/img/portfolio-6.jpg" alt="">
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-fill">Visit Page</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop