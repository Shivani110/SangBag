<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/fonts/fonts.css') }}">

    <title>Home page</title>
</head>
<body>
    <header class="hearder_wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('asset/img/site_logo.svg') }}" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bars bar1 navbar-toggler-icon"></span>
                    <span class="bars bar2 navbar-toggler-icon"></span>
                    <span class="bars bar3 navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">                       
                            <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">The Collection </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">lorem ipsum</a></li>
                                <li><a class="dropdown-item" href="#">lorem ipsum</a></li>
                                <li><a class="dropdown-item" href="#">lorem ipsum</a></li>
                                <li><a class="dropdown-item" href="#">lorem ipsum</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Club Perks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How It Works</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
                        <button class="btn cta" type="submit">Apply  |  Login</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner_wreap" style="background-image: url({{ asset('/asset/img/banner_home.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="banner_content" data-aos="fade-right" data-aos-duration="3000">
                        <h1>snag it <span>and bag it</span></h1>
                        <a href="#" class="expl_btn">Explore</a>
                        <div class="tole_tip">
                            <p>lorem ipsum</p>
                            <img src="{{ asset('asset/img/A_3.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_down">
            <ul class="list-unstyled">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <a href="#drop_sec" class="scroll_lnk"><img src="{{ asset('asset/img/drop_down.svg') }}"></a>
        </div>
    </section>

    <section class="arrival_wrapper p_120" id="drop_sec" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="arrival_content">
                        <div class="arrival_hd">
                            <h3>New Arrival</h3>
                            <a href="#" class="expl_btn expl__btn">View All Collections</a>
                        </div>
                        <div class="arrival_slider">
                            <div class="card arrival_crd">
                                <div class="arrival_img">
                                    <img src="{{ asset('asset/img/bag_1.png') }}">
                                </div>
                                <div class="card-body">
                                    <h6>Product Name 01</h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                            <div class="card arrival_crd">
                                <div class="arrival_img">
                                    <img src="{{ asset('asset/img/bag_2.png') }}">
                                </div>
                                <div class="card-body">
                                    <h6>Product Name 02</h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                            <div class="card arrival_crd">
                                <div class="arrival_img">
                                    <img src="{{ asset('asset/img/bag_3.png') }}">
                                </div>
                                <div class="card-body">
                                    <h6>Product Name 03</h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                            <div class="card arrival_crd">
                                <div class="arrival_img">
                                    <img src="{{ asset('asset/img/bag_4.png') }}">
                                </div>
                                <div class="card-body">
                                    <h6>Product Name 04</h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                            <div class="card arrival_crd">
                                <div class="arrival_img"> 
                                    <img src="{{ asset('asset/img/bag_5.png') }}">
                                </div>
                                <div class="card-body">
                                    <h6>Product Name 05</h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="slides-numbers" style="display: block;">
                            <span class="active">1</span> / <span class="total"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="start_wrapper">
        <ul class="start_list list-unstyled m-0">
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Alexander McQueen</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Balenciaga</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Bottega Veneta</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Cartier</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Celine</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Chanel</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Chloe</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Chopard</li>
            <li><img src="{{ asset('asset/img/Star_1.svg') }}">Christian Dior</li>
        </ul>
    </section>

    <section class="closet_wrapper p_120 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_hd text-center" data-aos="fade-right" data-aos-duration="3000">
                        <span>Our Closet is Your Closet</span>
                        <h2>Lorem Ipsum is simply dummy text of the printing and</h2>
                        <a href="#" class="btn cta">Join Us Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="a_img_bg img" data-aos="fade-left" data-aos-duration="3000">
            <img src="{{ asset('asset/img/a_bg_1.png') }}">
        </div>
    </section>

    <section class="snag_wrapper bg_img" style="background-image: url({{ asset('asset/img/snag_bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="snag_content text-white" data-aos="fade-left" data-aos-duration="3000">
                        <h2 class="text-white">Browse Snag My Bag’s Closet</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <a href="#" class="btn cta btn_white">View More Closest</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pro_mn_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card" data-aos="fade-right" data-aos-duration="3000">
                        <div class="prod_bg_lt">
                            <img src="{{ asset('asset/img/prod_1.png') }}">
                        </div>
                        <div class="card-body">
                            <h4>Product Name</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <a href="#" class="btn cta">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1"></div>
            </div>
        </div>
        <div class="pro_mn_img img" data-aos="zoom-in" data-aos-duration="3000">  
            <img src="{{ asset('asset/img/prod_bg_1.png') }}">
        </div>
    </section>

    <section class="pro_mn_wrapper collec_wrap" style="background-color: #000000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="card text-white">
                        <div class="prod_bg_lt">
                            <img src="{{ asset('asset/img/A_1.png') }}">
                        </div>
                        <div class="card-body text-white" data-aos="fade-left" data-aos-duration="3000">
                            <h3 class="text-white">New Arrivals Weekly</h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <a href="#" class="btn cta btn_white">View The Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro_mn_img img" data-aos="zoom-in" data-aos-duration="3000">
            <img src="{{ asset('asset/img/prod_bg_2.png') }}">
        </div>
    </section>

    <section class="membership_wrapper p_120 position-relative">
        <div class="a_img_bg a_lt_bg img" data-aos="fade-right" data-aos-duration="3000">
            <img src="{{ asset('asset/img/a_bg_1.png') }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_hd">
                        <div data-aos="fade-right" data-aos-duration="3000">
                            <h2>Snag Our Membership Tiers</h2>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="3000">
                            <div class="line"></div>
                            <p>
                                Our pricing plan are crafted to suit your budget and customized to your specificrequirements, offering you flexibility and affordability
                            </p>
                        </div>
                    </div>
                    <div class="select_dpd text-end">
                        <div class="select-dropdown">
                            <button href="#" role="button" data-value="" class="select-dropdown__button"><img src="{{ asset('asset/img/A_2.svg') }}"> <span>SELECT ITEMS </span> <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <ul class="select-dropdown__list">
                                <li data-value="1" class="select-dropdown__list-item">Item 1</li>
                                <li data-value="2" class="select-dropdown__list-item">Item 2</li>
                                <li data-value="3" class="select-dropdown__list-item">Item 3</li>
                                <li data-value="4" class="select-dropdown__list-item">Item 4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="membership_grid">
                        <div class="card" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('asset/img/Star_2.svg') }}">
                            <h4>Premier</h4>
                            <h6><span>1</span> item at a time</h6>
                            <p>
                                from the Premier closet
                            </p>
                            <div class="membership_inr">
                                <p>
                                    Includes access to the following items with a retail values up to $1,000:
                                </p>
                                <ul class="list-unstyled m-0">
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag up to $1000</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                </ul>
                                <strong>$45 <span>/month</span></strong>
                                <a href="#" class="btn cta">Apply Now</a>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="1500">
                            <img src="{{ asset('asset/img/Star_2.svg') }}">
                            <h4>Classique</h4>
                            <h6><span>1</span> item at a time</h6>
                            <p>
                                from the Classique closet
                            </p>
                            <div class="membership_inr">
                                <p>
                                    Includes access to the following items with retail value up to $4,000:
                                </p>
                                <ul class="list-unstyled m-0">
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                </ul>
                                <strong>$119 <span>/month</span></strong>
                                <a href="#" class="btn cta">Apply Now</a>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="2500">
                            <img src="{{ asset('asset/img/Star_2.svg') }}">
                            <h4>Couture</h4>
                            <h6><span>1</span> item at a time</h6>
                            <p>
                                from the Couture closet
                            </p>
                            <div class="membership_inr">
                                <p>
                                    Includes full access to the following items:
                                </p>
                                <ul class="list-unstyled m-0">
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                </ul>
                                <strong>$219 <span>/month</span></strong>
                                <a href="#" class="btn cta">Apply Now</a>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="{{ asset('asset/img/Star_2.svg') }}">
                            <h4>Couture Plus</h4>
                            <h6><span>1</span> item at a time</h6>
                            <p>
                                1 from the Classique closet & 1 from the Couture closet
                            </p>
                            <div class="membership_inr">
                                <p>
                                    Includes full access to the following items:
                                </p>
                                <ul class="list-unstyled m-0">
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                </ul>
                                <strong>$309 <span>/month</span></strong>
                                <a href="#" class="btn cta">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="mamber_italic">
                        <i>*Optionally add $18/mo for premium insurance.</i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="snag_wrapper bg_img" style="background-image: url({{ asset('asset/img/snag_bg_2.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="snag_content text-white" data-aos="fade-left" data-aos-duration="3000">
                        <h2 class="text-white">The Desk to Dinner Edit</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <a href="#" class="btn cta btn_white">View The Edits</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews_wrapper p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text_hd mb-50 text-center" data-aos="flip-down" data-aos-duration="3000">
                        <span>Reviews</span>
                        <h2>What People Say?</h2>
                    </div>
                    <div class="reviews_slider" data-aos="fade-up" data-aos-duration="3000">
                        <div class="review_card">
                            <h4>Lorem Ipsum is simply</h4>
                            <ul class="list-unstyled m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <p>
                                “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.”
                            </p>
                            <span>Margaret C. Still</span>
                        </div>
                        <div class="review_card">
                            <h4>Lorem Ipsum is simply</h4>
                            <ul class="list-unstyled m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <p>
                                “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.”
                            </p>
                            <span>Margaret C. Still</span>
                        </div>
                        <div class="review_card">
                            <h4>Lorem Ipsum is simply</h4>
                            <ul class="list-unstyled m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <p>
                                “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.”
                            </p>
                            <span>Margaret C. Still</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="works_wrapper p_120">
        <div class="container">
            <div class="row text_align">
                <div class="col-lg-6">
                    <div class="works_img img" data-aos="fade-right" data-aos-duration="3000">
                        <img src="{{ asset('asset/img/prod_bg_3.png') }}">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="works_cont text_hd" data-aos="fade-left" data-aos-duration="3000">
                        <h2>How It works?</h2>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>1</span> Lorem Ipsum is simply dummy
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>2</span> Lorem Ipsum is simply dummy
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>3</span> It has survived not only five centuries
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span>4</span> Contrary to popular belief
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="a_img_bg img" data-aos="fade-up" data-aos-duration="3000">
            <img src="{{ asset('asset/img/a_bg_1.png') }}">
        </div>
    </section>

    <section class="snag_wrapper snag_innr_wrap bg_img position-relative" style="background-image: url({{ asset('asset/img/snag_bg_3.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="snag_content text-white" data-aos="fade-up" data-aos-duration="3000">
                        <h2 class="text-white">Join our club with a membership that’s right for your lifestyle.</h2>
                        <a href="#" class="btn cta btn_white">View Membership Tiers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="membership_wrapper gift_wreap p_120">
        <div class="a_img_bg a_lt_bg img" data-aos="fade-up" data-aos-duration="3000">
            <img src="{{ asset('asset/img/a_bg_1.png') }}">
        </div>
        <div class="container">
            <div class="row text_align">
                <div class="col-lg-12">
                    <div class="text_hd" data-aos="fade-right" data-aos-duration="3000">
                        <h2 style="text-transform: uppercase; color: #000;">Give the gift of our closet!</h2>
                        <div>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="gift_content" data-aos="fade-right" data-aos-duration="3000">
                        <div class="line"></div>
                        <h4>Galley of type and scrambled it to make a type specimen book.</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <a href="#" class="btn cta">Shop Gift Cards</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="img" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{ asset('asset/img/prod_bg_4.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="snag_wrapper email_wrap bg_img" style="background-image: url({{ asset('asset/img/snag_bg_4.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="snag_content text-white" data-aos="flip-down" data-aos-duration="3000">
                        <h2 class="text-white">Join our mailing list to stay up to date on the latest trends and new arrivals.</h2>
                        <div class="email_wreap">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <img src="{{ asset('img/right_arrow.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="insta_wrapper p_120" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="insta_content text-white">
                        <h2>@snag_my_bag</h2>
                        <div class="insta_slider">
                            <div>
                                <img src="{{ asset('asset/img/insta_view_1.png') }}">
                            </div>
                            <div>
                                <img src="{{ asset('asset/img/insta_view_2.png') }}">
                            </div>
                            <div>
                                <img src="{{ asset('asset/img/insta_view_3.png') }}">
                            </div>
                            <div>
                                <img src="{{ asset('asset/img/insta_view_4.png') }}">
                            </div>
                            <div>
                                <img src="{{ asset('asset/img/insta_view_5.png') }}">
                            </div>
                            <div>
                                <img src="{{ asset('asset/img/insta_view_6.png') }}">
                            </div>
                        </div>
                        <div class="text-center" data-aos="zoom-in" data-aos-duration="3000">
                            <a href="#" class="btn cta btn_dark"><i class="fa-brands fa-instagram"></i> View On Instgram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 footer_tp" data-aos="fade-up" data-aos-duration="2000">
                    <div class="footer_cont">
                        <div class="footer_text">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Our Collection</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Handbags</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Gift Cards</a></li>
                            </ul>
                        </div>
                        <div class="footer__text">
                            <h5>Follow on</h5>
                            <ul class="list-unstyled m-0">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_italic">
                        <i>Snag My Bag is independent from any brand affiliation. Brands are not responsible for any product on the website. Snag My Bag guarantees the authenticity of goods sold.</i>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1" data-aos="fade-up" data-aos-duration="3000">
                    <div class="social_text">
                        <ul class="list-unstyled m-0">
                            <li><strong>Address:</strong> 8975 W Charleston Blvd. Suite 190Las Vegas, NV 89117</li>
                            <li><strong>Phone:</strong> <a href="tel:0 123 4567 890">0 123 4567 890</a></li>
                            <li><strong>Email:</strong> <a href="mailto:contact@snagmybag.com">contact@snagmybag.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_bt_cont">
                            <p>© 2023 Snag My Bag, All rights reserved.</p>
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

</body>
</html>


