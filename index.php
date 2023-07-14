    <?php
    include 'connection.php';
    if (isset($_POST['btnLogin']) == 'Login') {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $qry = "select Email,Password from clientTB where Email= '{$email}' and Password='{$pass}'";
        $res = mysqli_query($connect, $qry);

        if (mysqli_num_rows($res) == 0) {
            echo 'No data found!';
        }

        while ($row = mysqli_fetch_array($res)) {
            session_start();
            $_SESSION['uEmail'] = $row['Email'];
            $_SESSION['uPass'] = $row['Password'];

            if (
                $_SESSION['uEmail'] == 'anjali@gmail.com' &&
                $_SESSION['uPass'] == 'anjali123'
            ) {
                //echo '<br/> Admin login';
                header('Location: GrowAdvertisement-Admin/Assets/Home.php');
            } else {
                //echo '<br/> User login';
                header('Location: GrowAdvertisement-Client/Assets/Home.php');
            }
        }
        mysqli_close($connect);
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Grow Advertisement - Index</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <!-- Favicons -->
        <link href="assets/img/nature.jpg" rel="icon" />
        <link href="assets/img/nature.jpg" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: Grow - v4.7.1
  * Template URL: https://bootstrapmade.com/Grow-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="index.html">Grow</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <!-- <li>
              <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
            </li> -->
                        <li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <!-- <li><a href="blog.html">Blog</a></li> -->
                        <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <!-- <li><a class="getstarted scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#about">Login</a></li> -->
                        <li>
                            <a class="nav-link scrollto btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-bs-whatever="@mdo">
                                Login
                            </a>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">
                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">
                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(assets/img/slide/img03.jpg);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        Grow Your Business
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        Define as many advertisers as you need, create one, two, or
                                        many campaigns, and upload or input the banners for each
                                        campaign. Define your sites, and set up the zones where the
                                        ads should appear. Link each campaign to the zones in which
                                        they should be displayed. Get the invocation code (a.k.a.
                                        tag) for each zone and paste it into your sites.
                                    </p>
                                    <div>
                                        <a href="#about"
                                            class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-1.jpg);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        Activate Your Audiences Across The Grow Web. Seamlessly.
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        We believe in a thriving open web. It’s why we work hard,
                                        every day, to ensure the open web continues being a key
                                        source of information for consumers, a channel for
                                        publishers to drive effective ad-supported businesses, and
                                        the best possible path for marketers to reach their target
                                        audiences at scale.
                                    </p>
                                    <div>
                                        <a href="#about"
                                            class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item" style="background-image: url(assets/img/slide/img01.jfif);">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">
                                        At Grow
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        we are committed to building a suite of ad serving tools to
                                        improve your digital ecosystem
                                    </p>
                                    <div>
                                        <a href="#about"
                                            class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="row no-gutters">
                        <div
                            class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                        </div>
                        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                            <div class="content d-flex flex-column justify-content-center">
                                <h3>We value your content</h3>
                                <p>
                                    A complete patform to grow your bussinss and protect your
                                    brand wherever people are watching,playing or engaging.
                                </p>
                                <div class="row">
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Manage</h4>
                                        <p>
                                            One solution, all the advertising channels you need – less
                                            time spent switching from one Ads Manager to the other,
                                            more time making money.
                                        </p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Analyze</h4>
                                        <p>
                                            Web, PDF, Email, Excel – Get the actionable insights you
                                            need, when you need them.
                                        </p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-images"></i>
                                        <h4>Collaborate</h4>
                                        <p>
                                            Get easy access to your clients’ accounts and have them
                                            approve your campaigns before going live. In one click.
                                        </p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-shield"></i>
                                        <h4>Learn</h4>
                                        <p>
                                            Take your marketing skills to the next level with the most
                                            trustworthy resources at your fingertips.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .content-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <class class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Happy Clients</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>
                                    <strong>Projects</strong>
                                    we have completed
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>
                                    <strong>Publishers</strong>
                                    who give you a platform
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-people"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>
                                    <strong>Hard Workers</strong>
                                    rerum asperiores dolor
                                </p>
                            </div>
                        </div>
                    </div>
                </class>
            </section>
            <!-- End Counts Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Clients Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>Services</h2>
                        <!-- <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title">
                                <a href="">Sophisticated Ad Pod Management</a>
                            </h4>
                            <p class="description">
                                Controlling your ad breaks and pods has never been easier. With
                                Grow, publishers can painlessly manage ad break rules, and
                                leverage Grow’s unique approach for yield management that will
                                both satisfy existing business logic and maximize revenue.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title">
                                <a href="">Manage Your Third-Party Partners & Vendors</a>
                            </h4>
                            <p class="description">
                                Juggling the various partnerships for OTT applications can be
                                complicated. Grow offers the most comprehensive total management
                                solution for your advertising business.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Real-Time Reporting</a></h4>
                            <p class="description">
                                Nothing slows an advertising business down like delayed
                                reporting. With Grow, analytics are delivered in real time,
                                including OTT-focused reports such as pod-fill rate & ad
                                duration reports.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title">
                                <a href="">Direct & Programmatic Connect</a>
                            </h4>
                            <p class="description">
                                Grow enables businesses to interact with other platform members
                                in 1:1 buy / sell relationships. Negotiate rates, billing rules,
                                and targeting then flight and serve audience extension.
                                Consolidate activity with existing partners using grow into
                                Direct Connections.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <h4 class="title">
                                <a href="">Intelligent Inventory Routing</a>
                            </h4>
                            <p class="description">
                                Control your inventory with precision. Manage what percentage of
                                your inventory is kept vs. sent to a distribution partner or
                                platform. It’s an ideal solution for balanced A/B testing as
                                well as providing custom ad experiences for different user
                                groups.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Control Your Ad Schedules</a></h4>
                            <p class="description">
                                Managing ad schedules with legacy ad servers has traditionally
                                been a cumbersome, difficult process. Grow takes the messiness
                                out of this process with an elegant ad schedule management tool.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
                <div class="container">
                    <div class="section-title">
                        <h2>Why Us</h2>
                        <p>
                            We connect every element of the marketing supply chain
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box">
                                <span>01</span>
                                <h4>Visibility</h4>
                                <p>
                                    Complete visibility of all your partners & assets, throughout
                                    creation, clearance, deployment & performance
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>02</span>
                                <h4>Control</h4>
                                <p>
                                    which gives you the control you need to optimise all your
                                    marketing and investment processes
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>03</span>
                                <h4>Productivity</h4>
                                <p>
                                    to improve productivity across your marketing supply chain and
                                    increase your overall ROI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->

            <!-- ======= Portfolio Section ======= -->
            <!-- <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-1.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-1.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="App 1"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-2.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-2.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Web 3"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-3.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-3.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="App 2"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-4.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Card 2"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-5.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-5.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Web 2"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-6.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-6.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="App 3"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-7.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-7.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Card 1"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-8.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-8.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Card 3"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img
                  src="assets/img/portfolio/portfolio-9.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a
                      href="assets/img/portfolio/portfolio-9.jpg"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      title="Web 3"
                    >
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="portfolio-details.html" title="More Details">
                      <i class="bx bx-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
            <!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title">
                        <h2>Team</h2>
                        <p>
                            <!-- Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas. -->
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="member">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" />
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                            <div class="member">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" />
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Sarah Jhonson</h4>
                                        <span>Product Manager</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="member">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" />
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                            <div class="member">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="" />
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team Section -->

            <!-- ======= Pricing Section ======= -->
            <!-- <section id="pricing" class="pricing">
        <div class="container">
          <div class="section-title">
            <h2>Pricing</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="box">
                <h3>Free</h3>
                <h4>
                  <sup>$</sup>
                  0
                  <span>/ month</span>
                </h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li class="na">Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
              <div class="box recommended">
                <h3>Business</h3>
                <h4>
                  <sup>$</sup>
                  19
                  <span>/ month</span>
                </h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li class="na">Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
              <div class="box">
                <h3>Developer</h3>
                <h4>
                  <sup>$</sup>
                  29
                  <span>/ month</span>
                </h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Massa ultricies mi</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
            <!-- End Pricing Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <!--  <section id="faq" class="faq section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  class="collapse"
                  data-bs-target="#faq-list-1"
                >
                  Non consectetur a erat nam at lectus urna duis?
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div
                  id="faq-list-1"
                  class="collapse show"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id
                    volutpat lacus laoreet non curabitur gravida. Venenatis
                    lectus magna fringilla urna porttitor rhoncus dolor purus
                    non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-2"
                  class="collapsed"
                >
                  Feugiat scelerisque varius morbi enim nunc?
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div
                  id="faq-list-2"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque
                    habitant morbi. Id interdum velit laoreet id donec ultrices.
                    Fringilla phasellus faucibus scelerisque eleifend donec
                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                    ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-3"
                  class="collapsed"
                >
                  Dolor sit amet consectetur adipiscing elit?
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div
                  id="faq-list-3"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                    sagittis orci. Faucibus pulvinar elementum integer enim. Sem
                    nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                    pellentesque eu tincidunt. Lectus urna duis convallis
                    convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-4"
                  class="collapsed"
                >
                  Tempus quam pellentesque nec nam aliquam sem et tortor
                  consequat?
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div
                  id="faq-list-4"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo.
                    Dignissim suspendisse in est ante in. Nunc vel risus commodo
                    viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                    bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-5"
                  class="collapsed"
                >
                  Tortor vitae purus faucibus ornare. Varius vel pharetra vel
                  turpis nunc eget lorem dolor?
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div
                  id="faq-list-5"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo.
                    Mauris vitae ultricies leo integer malesuada nunc vel.
                    Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate
                    eu scelerisque.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> -->
            <!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>
                            Audience creation. Optimization. Bid guidance. Tell us what you’re
                            working toward, and we’ll do the heavy lifting.
                        </p>
                    </div>

                    <div class="row contact-info justify-content-center">
                        <!-- <div class="col-md-4">
              <div class="contact-address">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
              </div>
            </div> -->

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="bi bi-phone"></i>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+91 55895 54885">+91 55895 54885</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:growadvertisement@gmail.com">
                                        growadvertisement@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="form">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <!-- <div class="col-md-6 form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                </div> -->
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>Grow</h3>
                                <p>
                                    <!-- A108 Adam Street
                  <br />
                  NY 535022, USA
                  <br />
                  <br /> -->
                                    <strong>Phone:</strong>
                                    +91 55895 54885
                                    <br />
                                    <strong>Email:</strong>
                                    growadvertisement@gmail.com
                                    <br />
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                    <a href="#" class="instagram">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                    <a href="#" class="google-plus">
                                        <i class="bx bxl-skype"></i>
                                    </a>
                                    <a href="#" class="linkedin">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Services</a>
                                </li>
                                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Terms of service</a>
                </li> -->
                                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Privacy policy</a>
                </li> -->
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Web Development</a>
                </li> -->
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Product Management</a>
                                </li>
                                <li>
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#">Marketing</a>
                                </li>
                                <!-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Graphic Design</a>
                </li> -->
                            </ul>
                        </div>

                        <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>
                Tamen quem nulla quae legam multos aute sint culpa legam noster
                magna
              </p>
              <form action="" method="post">
                <input type="email" name="email" />
                <input type="submit" value="Subscribe" />
              </form>
            </div> -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright
                    <strong><span>Grow</span></strong>
                    . All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Grow-free-bootstrap-theme/ -->
                    Designed by
                    <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <!-- Login Popup -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" name="formLogin">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" name="email" id="recipient-name" />
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="floatingPassword" />
                                <br />

                            </div>
                            <div class="d-flex justify-content-between">

                                <a href="#" class="" id="forgetPass">
                                    Forget password?
                                </a>
                                <a href="registration.php" class="" id="reg">
                                    Register yourself!
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="btn-close" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="Submit" name="btnLogin" value="Login" class="btn btn-primary" id="btn-login">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>