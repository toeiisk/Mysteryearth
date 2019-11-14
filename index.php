<?php
$_SESSION['page'] = "home";
include('file/show.php');
?>
<!doctype html>
<html lang="en">
<head>
  <title>MYSTERYEARTH</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/0e0d28628f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" href="./pic/favicon.ico" type="image/x-icon">
  <script src="script/script.js"></script>
</head>

<body>

  <!-- site1 -->
  <!-- Navbar -->
  <section class="site1">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <div class="h1 eng font-weight-bold">MYSTERYEARTH</div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse h4 eng" id="navbarNav">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link menu" href="index.html">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link menu" href="#slide-1">Earth</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link menu" href="#site2">Blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link menu" href="#site3">Topic</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link menu" href="#site4">Team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Detail  -->
  <div class="container">
    <div class="detail text-light">
      <p class="h1" id="home1_title">
      </p><br>
      <p class="h4" id="home1_detail">
      </p><br>
      <p class="h5 text-muted eng" id="home1_description"></p><br>
      <a href="https://github.com/toeiisk/Mysteryearth">
        <button type="button" class="btn btn-outline-info eng">View on Github</button>
      </a>
      <a href="file/EditorPage.php">
        <button type="button" class="btn btn-outline-warning eng">EDITOR-PAGE</button>
      </a>
      <br><br>
      <a href="register/">
        <button type="button" class="btn btn-outline-light eng">REGISTER</button>
      </a>
      <a href="login/">
        <button type="button" class="btn btn-outline-success eng">LOGIN</button>
      </a>
      <a href="file/logout.php">
        <button type="button" class="btn btn-outline-danger eng">LOGOUT</button>
      </a>
    </div>
  </div>
</section>

<section class="slide-1 pb-5" id="slide-1" style="background-color: #efefef;">
  <div class="container-fluid">
    <div id="demo" class="carousel slide1 text-black" data-ride="carousel">

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="h1 text-center text-black shadow-w pb-4" style="text-decoration: underline;">UNIVERSE</div>
            <div class="row">
              <img class="col-lg img-fluid" src="pic/index1.jpg" data-aos="fade-right" data-aos-duration="1000">
              <p class="h5 col-md mt-4" data-aos="fade-left" data-aos-duration="1500" style="line-height: 1.7em;" id="home2_detail_1">
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="h1 text-center text-black shadow-w pb-4" style="text-decoration: underline;">โบโอธีส วอยด์ (Boötes void)</div>
            <div class="row">
              <img class="col-lg img-fluid" src="pic/index2.jpg">
              <p class="h5 col-md mt-4" style="line-height: 1.7em;" id="home2_detail_2">
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="h1 text-center text-black shadow-w pb-4" style="text-decoration: underline;">การกำเนิดโลก</div>
            <div class="row">
              <img class="col-lg img-fluid" src="pic/index3.jpg">
              <p class="h5 col-md mt-4" style="line-height: 1.7em;" id="home2_detail_3">
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>

<!-- site2 -->
<section class="site2 pb-5 " id="site2" style="background-color: white">
  <p class="h1 text-center text-black shadow-w eng p-3" style="text-decoration: underline;">BLOG</p>
  <div class="cards mt-2">
    <div class="container-fluid">
      <div class="row">
        <div class="cardd col-md m-4 bg-light" data-aos="fade-up" div data-aos="zoom-in-down" data-aos-duration="1000">
          <a href="./galaxy/milkyway/">
            <img class="card-img-top"
            src="pic/milkyway.jpg" width="100%" height="auto"
            alt="Card image cap">
            <div class="card-body text-black">
              <h5 class="card-title">Milkyway Galaxy</h5>
              <p class="card-text" id="home3_detail_1"></p>
            </div>
          </a>
        </div>

        <div class="cardd col-md m-4 bg-light" data-aos="fade-up" div data-aos="zoom-in-down" data-aos-duration="1500">
          <a href="./outer/blackhole/">
            <img class="card-img-top"
            src="pic/blackhole.jpg"
            alt="Card image cap">
            <div class="card-body text-black">
              <h5 class="card-title">Blackhole Outer</h5>
              <p class="card-text" id="home3_detail_2"></p>
            </div>
          </a>
        </div>

        <div class="cardd col-md m-4 bg-light" data-aos="fade-up" div data-aos="zoom-in-down" data-aos-duration="2000">
          <a href="./star/mira/">
            <img class="card-img-top"
            src="pic/mira4.jpg"
            alt="Card image cap">
            <div class="card-body text-black">
              <h5 class="card-title">Mira Star</h5>
              <p class="card-text" id="home3_detail_3"></p>
            </div>
          </a>
        </div>

        <div class="cardd col-md m-4 bg-light" data-aos="fade-up" div data-aos="zoom-in-down" data-aos-duration="2000">
          <a href="./nebula/reflection/">
            <img class="card-img-top"
            src="pic/nebular1.jpg"
            alt="Card image cap">
            <div class="card-body text-black">
              <h5 class="card-title">Reflection Nebula</h5>
              <p class="card-text" id="home3_detail_4"></p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- site3 -->
    <section class="site3 pb-5" id="site3" style="background-color: #efefef;">
      <div class="container-fluid text-center">
        <p class="h1 text-center text-black shadow-w eng p-3 " style="text-decoration: underline;">Topic</p>
        <div data-aos="zoom-in-down" data-aos-duration="2000">
          <div class="container mt-5">
            <div class="row">
              <div class="col-xl-3 col-sm-6 mt-3">
                <div class="card">
                  <div class="front" style="background-image:url(./pic/star.jpg);"></div>
                  <div class="back">
                    <span>
                      <a href="./blog/index.html">
                        <div class="h1 text-light shadow-b">STAR</div>
                        <div class="h3 text-light shadow-b">This is Star.</div>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mt-3">
                <div class="card">
                  <div class="front" style="background-image:url(./pic/nebular1.jpg);"></div>
                  <div class="back">
                    <span>
                      <a href="./blog/index.html">
                        <div class="h1 text-light shadow-b">NEBULAR</div>
                        <div class="h3 text-light shadow-b">This is Nebular.</div>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mt-3">
                <div class="card">
                  <div class="front" style="background-image:url(./pic/bg-galaxy.jpg);"></div>
                  <div class="back">
                    <span>
                      <a href="./blog/index.html">
                        <div class="h1 text-light shadow-b">GALAXY</div>
                        <div class="h3 text-light shadow-b">This is Galaxy.</div>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 mt-3">
                <div class="card">
                  <div class="front" style="background-image:url(./pic/outer1.jpg);"></div>
                  <div class="back">
                    <span>
                      <a href="./blog/index.html">
                        <div class="h1 text-light shadow-b">OUTER</div>
                        <div class="h3 text-light shadow-b">This is Outer.</div>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- site4 -->
    <section class="site4 pb-5" id="site4" style="background-color: white">
      <div class="container-fluid">
        <!-- Section: Team v.1 -->
        <section class="team-section text-center">

          <!-- Section heading -->
          <div class="h1 eng  text-center text-black shadow-w p-3" style="text-decoration: underline;">MEMBERS</div>

          <!-- Grid row -->
          <div class="row mt-5 justify-content-center align-items-center">

            <!-- Grid column -->
            <div class="col-lg-2 col-md-4 mb-lg-0 mt-4 xl-mt-0">
              <div data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="mx-auto">
                  <img src="pic/ong.jpg" class="rounded-circle z-depth-1" width="150" height="150" style="box-shadow: 0px 1px 13px 4px rgba(0,0,0,0.75);">
                </div>
                <h5 class="font-weight-bold mt-4">นายจักรพรรดิ์ สุวรรณโณ</h5>
                <p class="text-uppercase"><strong>ID: 61070022<br>Back-end Developer</strong></p>
                <a href="https://github.com/ongsuwannoo"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.facebook.com/ongsuwannoo"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 col-md-4 mb-lg-0 mt-4 xl-mt-0">
              <div data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="mx-auto">
                  <img src="pic/prame.jpg" class="rounded-circle z-depth-1" width="150" height="150" style="box-shadow: 0px 1px 13px 4px rgba(0,0,0,0.75);">
                </div>
                <h5 class="font-weight-bold mt-4">นายปารเมศ คงเจริญ</h5>
                <p class="text-uppercase"><strong>ID: 61070121<br>Front-end Developer</strong></p>
                <a href="https://github.com/parametprame"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.facebook.com/parametparadox.kongjaroendogmen"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 col-md-4 mb-md-0 mt-4 xl-mt-0">
              <div data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="mx-auto">
                  <img src="pic/mona.jpg" class="rounded-circle z-depth-1" width="150" height="150" style="box-shadow: 0px 1px 13px 4px rgba(0,0,0,0.75);">
                </div>
                <h5 class="font-weight-bold mt-4">น.ส.ราโมน่า บราว</h5>
                <p class="text-uppercase"><strong>ID: 61070189<br>DESIGNER TEAM</strong></p>
                <i class="fab fa-github fa-2x"></i>
                <a href="https://www.facebook.com/profile.php?id=100001450568807"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 col-md-4 mb-md-0 mt-4 xl-mt-0">
              <div data-aos="zoom-in-up" data-aos-duration="2500">
                <div class="mx-auto">
                  <img src="pic/toei.jpg" class="rounded-circle z-depth-1" width="150" height="150" style="box-shadow: 0px 1px 13px 4px rgba(0,0,0,0.75);">
                </div>
                <h5 class="font-weight-bold mt-4">นายสุกฤษฎิ์ ลีลากรกิจ</h5>
                <p class="text-uppercase"><strong>ID: 61070245<br>Front-end Developer</strong></p>
                <a href="https://github.com/toeiisk"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.facebook.com/ToeiTuamTiam"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-2 col-md-4 mb-md-0 mt-4 xl-mt-0">
              <div data-aos="zoom-in-up" data-aos-duration="3000">
                <div class="mx-auto">
                  <img src="pic/non.jpg" class="rounded-circle z-depth-1" width="150" height="150" style="box-shadow: 0px 1px 13px 4px rgba(0,0,0,0.75);">
                </div>
                <h5 class="font-weight-bold mt-4">นายสุชานนท์ วิโรจรัตน์</h5>
                <p class="text-uppercase"><strong>ID: 61070246<br>DESIGNER TEAM</strong></p>
                <i class="fab fa-github fa-2x"></i>
                <a href="https://www.facebook.com/suchanon.wirotrat"><i class="fab fa-facebook-square fa-2x"></i></a>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Team v.1 -->
      </div>
    </section>

    <!-- footer -->
    <section class="footer bg-dark">
      <a href="index.html">
        <p class="h4 eng text-light shadow-b">MYSTERYEARTH</p>
      </a>
      <p class="h5 eng text-light shadow-b">©Copyright. All rights reserved.</p>
      <div class="container">
        <a href="https://www.figma.com/files/project/4454623/Mysteryearth">
          <img class="my-3" src="pic/figma.png" width="50" height="50">
        </a>
        <a href="https://github.com/toeiisk/Mysteryearth">
          <img class="my-3" src="pic/github.png" width="50" height="50">
        </a>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  </body>
  </html>