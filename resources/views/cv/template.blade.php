<!doctype html>
<html lang="en">

<head>
    <title> Ayuob Ferwana </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Maha Personal cv/resume template for professional and personal website." />
    <meta name="keywords"
        content="creative, cv, designer,  online cv, online resume, powerful portfolio, professional, professional resume, responsive, resume, vcard " />
    <meta name="developer" content="Md. Siful Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{asset('cv/assets/images/favicon.ico')}}">
    <link rel="shortcut icon" href="assets/images/apple-icon.png">
    <link rel="shortcut icon" sizes="72x72" href="{{asset('cv/assets/images/apple-icon-72x72.png')}}">
    <link rel="shortcut icon" sizes="114x114" href="{{asset('cv/assets/images/apple-icon-114x114.png')}}">

    <!-- Google Font-->
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('cv/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('cv/assets/plugins/css/bootstrap.min.css')}}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{asset('cv/assets/plugins/css/animate.css')}}">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{asset('cv/assets/plugins/css/owl.css')}}">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{asset('cv/assets/plugins/css/jquery.fancybox.min.css')}}">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{asset('cv/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('cv/assets/css/responsive.css')}}">

    <!-- Colors -->
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/blue.css')}}" title="blue">
    <link rel="stylesheet" href="{{asset('cv/assets/css/colors/defauld.css')}}" title="defauld">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/green.css')}}" title="green">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/blue-munsell.css')}}" title="blue-munsell">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/orange.css')}}" title="orange">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/purple.css')}}" title="purple">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/slate.css')}}" title="slate">
    <link rel="alternate stylesheet" href="{{asset('cv/assets/css/colors/yellow.css')}}" title="yellow">
</head>

<body class="dark-vertion black-bg">
    <!-- Start Loader -->
    <div class="section-loader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loader -->

    <!--
        ===================
           NAVIGATION
        ===================
        -->
    <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#mh-home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-skills">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-experience">Experiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-pricing">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!--
        ===================
            HOME
        ===================
        -->
    <section class="mh-home" id="mh-home">
        <div class="home-ovimg">
            <div class="container">
                <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                    <div class="col-sm-6">
                        <div class="mh-header-info">
                            <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <span>Hello I'm</span>
                            </div>

                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name }}
                            </h2>
                            <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->expertise
                                }}</h4>

                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i
                                        class="fa fa-envelope"></i><a href="mailto:">{{ $user->email }}</a></li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i
                                        class="fa fa-phone"></i><a href="callto:">+972 {{ $user->phone }}</a></li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i
                                        class="fa fa-map-marker"></i>
                                    <address>{{ $user->address }}</address>
                                </li>
                            </ul>

                            <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <li><a href="https://www.facebook.com/profile.php?id=100006618018904"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/AyuobFerwana"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/ayuob-ferwana-aa742127a/"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/ayuobnasser23"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                            <div class="img-border">
                                <img src="{{ $user->image }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ==================
            ABOUT
        =================
        -->
    <section class="mh-about" id="mh-about">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <img src="{{ asset('cv/assets/images/ab-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-inner">
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Hello, I’m a Patrick,
                            web-developer based on Paris.
                            I have rich experience in web site design & building
                            and customization. Also I am good at</p>
                        <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <ul>
                                <li><span>php</span></li>
                                <li><span> php Laravel </span></li>
                                <li><span>html</span></li>
                                <li><span>css</span></li>
                                <li><span>Javascript</span></li>
                            </ul>
                        </div>
                        <a href="{{ asset('cv/AyuobFerwanaCV.pdf') }}" class="btn btn-fill wow fadeInUp"
                            data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i
                                class="fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           SERVICE
        ===================
        -->
    <section class="mh-service">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s"
                    data-wow-delay="0.2s">
                    <h2>What I do</h2>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.3s">
                        <i class="fa fa-database purple-color"></i>
                        <h3>Database Analysis</h3>
                        <p>
                            I have the ability and sufficient experience in analyzing a database, I provide excellent
                            solutions for web projects.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <i class="fa fa-code iron-color"></i>
                        <h3>Web Development</h3>
                        <p>
                            I have a strong skill set and experience in creating powerful and efficient web
                            applications. I have deep understanding of programming languages like My SQL, JS, HTML, CSS,
                            Node.js ,
                            PHP and Laravel.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.7s">
                        <i class="fa fa-server sky-color"></i>
                        <h3>Server Manegment</h3>
                        <p>
                            Thanks to my experience and extensive knowledge in uploading web projects to servers, I can
                            operate and maintain the web infrastructure, and I can make the website work smoothly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           SKILLS
        ===================
        -->
    <section class="mh-skills" id="mh-skills">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <!--<h2>Skills</h2>-->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>Technical Skills</h3>
                            <div class="each-skills">
                                {{-- <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">{{ $skill->name }}</div>
                                            <div class="percentagem-num">%{{ $skill->skills }}</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width:{{ $skill->skills }}%;"></div>
                                        </div>
                                    </div>
                                </div> --}}

                                @foreach ($skills as $skill )
                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">{{ $skill->name }}</div>
                                            <div class="percentagem-num">{{ $skill->skills }}%</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: {{ $skill->skills }}%;"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <h3>Professional Skills</h3>
                        <ul class="mh-professional-progress">
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="95"></div>
                                <div class="pr-skill-name">Communication</div>
                            </li>
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="55"></div>
                                <div class="pr-skill-name">Team Work</div>
                            </li>
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="86"></div>
                                <div class="pr-skill-name">Project Management</div>
                            </li>
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="60"></div>
                                <div class="pr-skill-name">Creativity</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           EXPERIENCES
        ===================
        -->
    <section class="mh-experince" id="mh-experience">
        <div class="bolor-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-education">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                            <div class="mh-education-deatils">
                                <!-- Education Institutes-->
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.3s">
                                    <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a
                                        page when looking at its layout. The point of using Lorem Ipsum </p>
                                </div>
                                <!-- Education Institutes-->
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.5s">
                                    <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a
                                        page when looking at its layout. The point of using Lorem Ipsum </p>
                                </div>
                                <!-- Education Institutes-->
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.6s">
                                    <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a
                                        page when looking at its layout. The point of using L orem Ipsum </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                            <h3>Work Experience</h3>
                            <div class="mh-experience-deatils">
                                <!-- Education Institutes-->
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.4s">
                                    <h4>UI/UX Designer <a href="#">IronSketch</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <span>Responsibility :</span>
                                    <ul class="work-responsibility">
                                        <li><i class="fa fa-circle"></i>Validate CSS</li>
                                        <li><i class="fa fa-circle"></i>Project Management</li>
                                    </ul>
                                </div>
                                <!-- Education Institutes-->
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.6s">
                                    <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <span>Responsibility :</span>
                                    <ul class="work-responsibility">
                                        <li><i class="fa fa-circle"></i>Validate CSS</li>
                                        <li><i class="fa fa-circle"></i>Project Management</li>
                                    </ul>
                                </div>
                                <!-- Education Institutes-->
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.7s">
                                    <h4>Art & Multimedia From <a href="#">Oxford University</a></h4>
                                    <div class="mh-eduyear">2005-2008</div>
                                    <span>Responsibility :</span>
                                    <ul class="work-responsibility">
                                        <li><i class="fa fa-circle"></i>Validate CSS</li>
                                        <li><i class="fa fa-circle"></i>Project Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           PORTFOLIO
        ===================
        -->
    <section class="mh-portfolio" id="mh-portfolio">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <h3>Recent Portfolio</h3>
                </div>
                <div class="part col-sm-12">
                    <div class="portfolio-nav col-sm-12" id="filter-button">
                        <ul>
                            <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.1s"> <span>All Categories</span></li>
                            <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.2s"><span>Web Design</span></li>
                            <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.3s"><span>Branding</span></li>
                            <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.4s"><span>Mockups</span></li>
                            <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <span>Photography</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <div class="portfolioContainer row">
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g1.jpg') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a data-fancybox data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g2.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g2.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g3.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g3.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g5.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g5.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g4.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g4.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g6.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g6.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g8.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g8.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g9.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g9.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g7.jpg') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g7.jpg') }}"
                                            data-fancybox="gallery"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .grid .project-gallery -->
                </div> <!-- End: .part -->
            </div> <!-- End: .row -->
        </div>
        <div class="mh-portfolio-modal" id="mh">
            <div class="container">
                <div class="row mh-portfolio-modal-inner">
                    <div class="col-sm-5">
                        <h2>Wrap - A campanion plugin</h2>
                        <p>Wrap is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.
                        </p>

                        <p>It is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.
                        </p>
                        <div class="mh-about-tag">
                            <ul>
                                <li><span>php</span></li>
                                <li><span>html</span></li>
                                <li><span>css</span></li>
                                <li><span>php</span></li>
                                <li><span>wordpress</span></li>
                                <li><span>React</span></li>
                                <li><span>Javascript</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-fill">Live Demo</a>
                    </div>
                    <div class="col-sm-7">
                        <div class="mh-portfolio-modal-img">
                            <img src="{{ asset('cv/assets/images/pr-0.jif') }}" alt="" class="img-fluid">
                            <p>All variations are organized separately so you can use / customize the template very
                                easily.</p>
                            <img src="{{ asset('cv/assets/images/pr-1.jif') }}" alt="" class="img-fluid">
                            <p>All variations are organized separately so you can use / customize the template very
                                easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           PRICING
        ===================
        -->
    <section class="mh-pricing" id="mh-pricing">
        <div class="">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Pricing Table</h3>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.3s">
                            <i class="fa fa-calendar"></i>
                            <h4>Full-time work</h4>
                            <p>I am available for full time</p>
                            <h5>$1500</h5>
                            <ul>
                                <li>Web Development</li>
                                <li>Advetising</li>
                                <li>Game Development</li>
                                <li>Music Writing</li>
                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.5s">
                            <i class="fa fa-file"></i>
                            <h4>Fixed Price Project</h4>
                            <p>I am available for fixed roles</p>
                            <h5>$500</h5>
                            <ul>
                                <li>Web Development</li>
                                <li>Advetising</li>
                                <li>Game Development</li>
                                <li>Music Writing</li>
                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.7s">
                            <i class="fa fa-hourglass"></i>
                            <h4>Hourley work</h4>
                            <p>I am available for Hourley projets</p>
                            <h5>$50</h5>
                            <ul>
                                <li>Web Development</li>
                                <li>Advetising</li>
                                <li>Game Development</li>
                                <li>Music Writing</li>
                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           BLOG
        ===================
        -->
    <section class="mh-blog" id="mh-blog">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Featured Posts</h3>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <img src="{{ asset('cv/assets/images/b-3.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">A life without the daily traffic jams</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <img src="{{ asset('cv/assets/images/b-2.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">Proportion are what’s really needed</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        <img src="{{ asset('cv/assets/images/b-1.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">Mounts of paper work to remember the way</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           TESTIMONIALS
        ===================
        -->
    <section class="mh-testimonial" id="mh-testimonial">
        <div class="home-v-img">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Client Reviews</h3>
                    </div>
                    <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s"
                        data-wow-delay="0.3s">
                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>
                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>

                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>
                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>
                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>

                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('cv/assets/images/c-1.png') }}" alt="" class="img-fluid">
                                <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                <h4>John Mike</h4>
                                <span>CEO, Author.Inc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           FOOTER 1
        ===================
        -->
    <footer class="mh-footer" id="mh-contact">
        <div class="map-image image-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>Contact Me</h3>
                    </div>
                    <div class="col-sm-12 mh-footer-address">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <div class="each-icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>Address</h4>
                                        <address>
                                            5th Avenue, 34th floor, <br>
                                            New york
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.5s">
                                    <div class="each-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>Email</h4>
                                        <a href="mailto:yourmail@email.com">yourmail@email.com</a><br>
                                        <a href="mailto:yourmail@email.com">yourmail@email.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <div class="each-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>Phone</h4>
                                        <a href="callto:(880)-8976-987">(880)-8976-987</a><br>
                                        <a href="callto:(880)-8976-987">(880)-8976-987</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <input name="name" class="contact-name form-control" id="name" type="text"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input name="name" class="contact-email form-control" id="L_name" type="text"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="col-sm-12">
                                    <input name="name" class="contact-subject form-control" id="email" type="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="contact-message" id="message" rows="6" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <!-- Subject Button -->
                                <div class="btn-form col-sm-12">
                                    <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <div class="mh-map">
                            <div id="mh-map" class="shadow-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-left text-xs-center">
                                    <p><a href="templateshub.net">Templates Hub</a></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--
    ==============
    * JS Files *
    ==============
    -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery -->
    <script src="{{ asset('cv/assets/plugins/js/jquery.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('cv/assets/plugins/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('cv/assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('cv/assets/plugins/js/owl.carousel.js') }}"></script>
    <!-- validator -->
    <script src="{{ asset('cv/assets/plugins/js/validator.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('cv/assets/plugins/js/wow.min.js') }}"></script>
    <!-- mixin js-->
    <script src="{{ asset('cv/assets/plugins/js/jquery.mixitup.min.js') }}"></script>
    <!-- circle progress-->
    <script src="{{ asset('cv/assets/plugins/js/circle-progress.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ asset('cv/assets/plugins/js/jquery.nav.js') }}"></script>
    <!-- Fancybox js-->
    <script src="{{ asset('cv/assets/plugins/js/jquery.fancybox.min.js') }}"></script>
    <!-- isotope js-->
    <script src="{{ asset('cv/assets/plugins/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('cv/assets/plugins/js/packery-mode.pkgd.js') }}"></script>
    <!-- Map api -->
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc">
    </script>
    <!-- Custom Scripts-->
    <script src="{{ asset('cv/assets/js/map-init.js') }}"></script>
    <script src="{{ asset('cv/assets/js/custom-scripts.js') }}"></script>


    <!-- ****************
      After neccessary customization/modification, Please minify
      JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
    **************** -->
    <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
    <link rel="stylesheet" href="{{ asset('cv/demo/demo.css') }}">
    <script type="text/javascript" src="{{ asset('cv/demo/styleswitcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('cv/demo/demo.js') }}"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button"><i class="fa fa-snowflake-o fa-spin"></i></a>
        <div class="switched-options">
            <ul>
                <li class="mh-demo-styles">
                    <h4>Style One </h4>
                    <ul>
                        <li>
                            <a href="home-one.html"> <img src="{{ asset('cv/assets/images/h1w.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                        <li>
                            <a href="home-one-w.html"> <img src="{{ asset('cv/assets/images/h1.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </li>
                <li class="mh-demo-styles">
                    <h4>Style Two </h4>
                    <ul>
                        <li>
                            <a href="home-two.html"> <img src="{{ asset('cv/assets/images/h2w.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                        <li>
                            <a href="home-two-w.html"> <img src="{{ asset('cv/assets/images/h2.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </li>

                <li class="mh-demo-styles">
                    <h4>RTl</h4>
                    <ul>
                        <li>
                            <a href="home-rtl.html"> <img src="{{ asset('cv/assets/images/h3w.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                        <li>
                            <a href="home-rtl-w.html"> <img src="{{ asset('cv/assets/images/h3.png') }}" alt=""
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="config-title">
                Colors :
            </div>
            <ul class="styles">
                <li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" title="Blue">
                        <div class="blue"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('purple'); return false;" title="Purple">
                        <div class="purple"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('blue-munsell'); return false;" title="Blue Munsell">
                        <div class="blue-munsell"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" title="Orange">
                        <div class="orange"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('slate'); return false;" title="Slate">
                        <div class="slate"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('green'); return false;" title="Green">
                        <div class="green"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" title="Yellow">
                        <div class="yellow"></div>
                    </a>
                </li>
                <li><a href="#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
                        <div class="red"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>