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

    <title>Product page</title>
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

    <section class="banner_inner" style="background-image: url({{ asset('asset/img/banner_inner_1.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="banner_content" data-aos="fade-up" data-aos-duration="3000">
                        <h1>Snag Collection</h1>
                        <div class="breadcrumb_wreap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">The Collection</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_wrapper p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_text" data-aos="fade-right" data-aos-duration="3000">
                        <h3>Collection</h3>
                        <div class="search_bar">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All Category</option>
                                @foreach($category as $ctg)
                                    <option value="{{ $ctg->id }}">{{ $ctg->category_name }}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control" placeholder="Search..." aria-label="First name">
                            <img src="{{ asset('asset/img/search_br.svg') }}" class="searc_br">
                        </div>
                    </div>
                    <div class="product_wreap">
                        <div class="product_right" data-aos="fade-right" data-aos-duration="3000">
                            <div class="view_all_pro border_bt">
                                <ul class="list-unstyled m-0">
                                    <li><h6>View All</h6></li>
                                    <li><a href="#">Handbags</a></li>
                                    <li><a href="#">Designer Handbags</a></li>
                                    <li><a href="#">Fine Handbags</a></li>
                                </ul>
                            </div>
                            <div class="view_all_narrow border_bt">
                                <h6>Narrow By</h6>
                                @foreach($style as $sty)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $sty->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            <div class="view_all_narrow">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingOne">
                                            <button class="accordion-button pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Brand
                                            </button>
                                        </h6>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @foreach($brand as $brd)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $brd->brand_name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Brand
                                            </button>
                                        </h6>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        lorem ipsum
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Color
                                            </button>
                                        </h6>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @foreach($color as $clr)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $clr->color_name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingfour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Occasion
                                            </button>
                                        </h6>
                                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        lorem ipsum
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingfive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Material 
                                            </button>
                                        </h6>
                                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @foreach($material as $mat)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $mat->name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_left" data-aos="fade-left" data-aos-duration="3000">
                            <div class="product_grid">
                                @foreach($product as $data)
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_6.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>{{ $data->product_name }}</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_7.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 02</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_8.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 03</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_9.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 04</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_10.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 05</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_11.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 06</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_12.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 07</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_13.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 08</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_14.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 09</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_15.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 10</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_16.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 11</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_17.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 12</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_18.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 13</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_19.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 14</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_20.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 15</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_21.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 16</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_22.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 17</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                                <div class="card arrival_crd text-center">
                                    <div class="arrival_img">
                                        <img src="img/bag_23.png">
                                    </div>
                                    <div class="card-body">
                                        <h6>Product Name 23</h6>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                        <a href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product_arrow_icon">
                                <ul class="list-unstyled m-0">
                                    <li class="active"><a href="#" class="btn"><img src="img/left_2.svg"></a></li>
                                    <li><a href="#" class="btn"><img src="img/right_1.svg"></a></li>
                                </ul>
                                <div class="product__count">
                                    <span>1/13</span>
                                </div>
                            </div>
                        </div>
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
                            <img src="{{ asset('asset/img/right_arrow.png') }}">
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


