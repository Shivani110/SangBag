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

    <title>Apply Now page</title>
</head>
<body>
    <header class="hearder_wrapper hearder_inner">
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

    <section class="checkout_wrapper p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="3000">
                    <form action="{{ url('regitser') }}" method="post" class="checkout_from apply_member_cont">
                        @csrf
                        <div class="tab d-none">
                            <div class="checkout_innr">
                                <div class="checkout_text mt-0">
                                    <h4>Start Your Application <span>step 1/5</span></h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label  class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <label  class="form-label" for="password">Password</label>
                                            <input type="Password" class="form-control" name="password" id="password" placeholder="Enter Your Password" />
                                        </div>
                                        <div class="col-lg-12">
                                            <label  class="form-label" for="ref_code">Referral Code</label>
                                            <input type="Number" class="form-control" name="ref_code" id="ref_code" placeholder="Did an influencer or friend give you a referral code? Enter that here." />
                                        </div>
                                    </div>
                                </div>
                                <div class="card_footer text-end">
                                    <div class="d-flex">
                                        <button type="button" class="btn cta ms-auto next_button">Next</button>
                                    </div>
                                </div>
                            </div>
                            <ul class="shipp_bot list-unstyled">
                                <li>
                                    <h4>Tell Us About You <span>step 2/5</span></h4>
                                </li>
                                <li>
                                    <h4>Shipping Information <span>step 3/5</span></h4>
                                </li>
                                <li>
                                    <h4>Payment Details <span>step 4/5</span></h4>
                                </li>
                            </ul>
                        </div>

                        <div class="tab d-none">
                            <div class="checkout_innr shipping_hd mb-0" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Start Your Application </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr delivery_pro">
                                <div class="summary">
                                    <div class="shipping_hd">
                                        <h4>Tell Us About You <span>step 2/5</span></h4>
                                    </div>
                                    <div>
                                        <label class="form-label" for="dob">Birthday</label>
                                        <input type="date" class="form-control" name="dob" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="social_md_info">
                                        <span>Social Media (Optional)</span>
                                        <p>We would love to follow you! Enter your account handles or links below.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input_icon">
                                                <img src="{{ asset('asset/img/input_icon_1.svg') }}">
                                                <input type="text" name="fb" id="fb">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input_icon">
                                                <img src="{{ asset('asset/img/input_icon_2.png') }}">
                                                <input type="text" name="insta" id="insta">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input_icon">
                                                <img src="{{ asset('asset/img/input_icon_3.png') }}">
                                                <input type="text" name="twitter" id="twitter">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_footer text-end">
                                    <div class="d-flex">
                                        <button type="button" class="btn cta_link back_button">Previous</button>
                                        <button type="button" class="btn cta ms-auto next_button">Next</button>
                                    </div>
                                </div>
                            </div>
                            <ul class="shipp_bot list-unstyled">
                                <li>
                                    <h4>Shipping Information <span>step 3/5</span></h4>
                                </li>
                                <li>
                                    <h4>Payment Details <span>step 4/5</span></h4>
                                </li>
                            </ul>
                        </div>

                        <div class="tab d-none">
                            <div class="checkout_innr shipping_hd mb-0" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Start Your Application </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr shipping_hd mb-0 delivery_pro" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Tell Us About You </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr delivery_pro">
                                <div class="summary">
                                    <div class="shipping_hd">
                                        <h4>Shipping Information <span>step 3/5</span></h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="form-label" for="fname">First Name</label>
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Your First Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="lname">Last Name</label>
                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Your Last Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter shipping address">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="unit">Apt/ Unit / Suite</label>
                                            <input type="text" class="form-control" name="unit" id="unit">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="city">City</label>
                                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter shipping address">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="state">State</label>
                                            <input type="text" class="form-control" name="state" id="state">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" for="postal">Postal Code</label>
                                            <input type="number" class="form-control" name="postal" id="postal" placeholder="Enter">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label" name="phone">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="card_footer text-end">
                                    <div class="d-flex">
                                        <button type="button" class="btn cta_link back_button">Previous</button>
                                        <button type="button" class="btn cta ms-auto next_button">Next</button>
                                    </div>
                                </div>
                            </div>
                            <ul class="shipp_bot list-unstyled">
                                <li>
                                    <h4>Payment Details <span>step 4/5</span></h4>
                                </li>
                            </ul>
                        </div>

                        <div class="tab d-none">
                            <div class="checkout_innr shipping_hd mb-0" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Start Your Application </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr shipping_hd mb-0 delivery_pro" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Tell Us About You </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr shipping_hd mb-0 delivery_pro" style="background-color: transparent; border: 1px solid #000;">
                                <h4>Shipping Information </h4>
                                <button type="button" class="main_btn2  back_button">Edit</button>
                            </div>
                            <div class="checkout_innr delivery_pro">
                                <div class="summary">
                                    <div class="shipping_hd">
                                        <h4>Payment Details <span>step 4/5</span></h4>
                                    </div>
                                    <div class="paylatter_bg">
                                        <div class="paylatter_wrapper">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Credit card
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#">
                                                    <img src="{{ asset('asset/img/card-pay.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row border-0 custom-mx">
                                            <div class="col-lg-12 custom-px">
                                                <input type="number" class="form-control" placeholder="Card Number">
                                            </div>
                                            <div class="col-lg-12 custom-px">
                                                <input type="number" class="form-control" placeholder="Name on Card">
                                            </div>
                                            <div class="col-lg-6 custom-px">
                                                <input type="number" class="form-control" id="number" placeholder="Expiration date (MM / YY)">
                                            </div>
                                            <div class="col-lg-6 custom-px">
                                                <input type="number" class="form-control" placeholder="Security code">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios3">
                                                My billing address is the same as my shipping address
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_footer text-end">
                                    <div class="d-flex">
                                        <button type="button" class="btn cta_link back_button">Previous</button>
                                        <button type="button" class="btn cta ms-auto next_button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000">
                    <div class="your-application">
                        <div class="aply_right">
                            <h4>Start Your Application</h4>
                            <p>Membership Tier</p>
                        </div>
                        <div class="aply_membership">
                            <div class="plan_edit">
                                <a href="#">Edit Plan</a>
                                <p>Select Payment Frequency</p>
                            </div>
                            <select id="size_select">
                                <option value="option1">Pay Monthly</option>
                                <option value="option2">Yearly</option>
                            </select>

                            <div id="option1" class="size_chart">
                                <div class="plan_card">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox5" name="premier" checked>
                                                <label for="checkbox5">Premier</label>
                                            </div>
                                        </h4>
                                        <span><strong>$45</strong>/month</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Premier closet</p>
                                    <hr>
                                    <p>Includes access to the following items with a retail values up to $1,000:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag up to $1000</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="classique">
                                                <label for="checkbox6">Classique</label>
                                            </div>
                                        </h4>
                                        <span><strong>$119</strong>/month</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Classique closet</p>
                                    <hr>
                                    <p>Includes access to the following items with retail value up to $4,000:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="couture">
                                                <label for="checkbox6">Couture</label>
                                            </div>
                                        </h4>
                                        <span><strong>$219</strong>/month</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Couture closet</p>
                                    <hr>
                                    <p>Includes full access to the following items:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="coutureplus">
                                                <label for="checkbox6">Couture Plus</label>
                                            </div>
                                        </h4>
                                        <span><strong>$309</strong>/month</span>
                                    </div>
                                    <h6><span>2</span> item at a time</h6>
                                    <p>1 from the Classique closet & 1 from the Couture closet</p>
                                    <hr>
                                    <p>Includes full access to the following items:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                    </ul>
                                </div>
                                <div class="billing_wreap">
                                    <p>Your Billing Cycle</p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Subtotal:</p>
                                            <span>$45</span>
                                        </li>
                                        <li>
                                            <p>Estimated Sales Tax*:</p>
                                            <span>$0.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="monthly_chge">
                                    <h6>
                                        <p>Monthly Charge:</p>
                                        <span>$137.00</span>
                                    </h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Due Now:</p>
                                            <span>$0</span>
                                        </li>
                                    </ul>
                                    <p>
                                        Your billing cycle does not start until after you’ve borrowed your first item.*Sales tax is estimated based on your location and may differ slightly from the amount shown on your first invoice.
                                    </p>
                                </div>
                            </div>
                            <div id="option2" class="size_chart">
                                <div class="plan_card">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox5" name="premier" checked>
                                                <label for="checkbox5">Premier</label>
                                            </div>
                                        </h4>
                                        <span><strong>$540</strong>/year</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Premier closet</p>
                                    <hr>
                                    <p>Includes access to the following items with a retail values up to $1,000:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag up to $1000</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="classique">
                                                <label for="checkbox6">Classique</label>
                                            </div>
                                        </h4>
                                        <span><strong>$1428</strong>/year</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Classique closet</p>
                                    <hr>
                                    <p>Includes access to the following items with retail value up to $4,000:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="couture">
                                                <label for="checkbox6">Couture</label>
                                            </div>
                                        </h4>
                                        <span><strong>$2628</strong>/year</span>
                                    </div>
                                    <h6><span>1</span> item at a time</h6>
                                    <p>from the Couture closet</p>
                                    <hr>
                                    <p>Includes full access to the following items:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                    </ul>
                                </div>
                                <div class="plan_card plan_card_br">
                                    <div class="plan_pric">
                                        <h4>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkbox6" name="coutureplus">
                                                <label for="checkbox6">Couture Plus</label>
                                            </div>
                                        </h4>
                                        <span><strong>$3708</strong>/year</span>
                                    </div>
                                    <h6><span>2</span> item at a time</h6>
                                    <p>1 from the Classique closet & 1 from the Couture closet</p>
                                    <hr>
                                    <p>Includes full access to the following items:</p>
                                    <ul class="list-unstyled m-0">
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Hand bag</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Select bags</li>
                                        <li><img src="{{ asset('asset/img/check.svg') }}"> Limited Edition Pieces</li>
                                    </ul>
                                </div>
                                <div class="billing_wreap">
                                    <p>Your Billing Cycle</p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Subtotal:</p>
                                            <span>$100</span>
                                        </li>
                                        <li>
                                            <p>Estimated Sales Tax*:</p>
                                            <span>$0.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="monthly_chge">
                                    <h6>
                                        <p>yearly Charge:</p>
                                        <span>$245.00</span>
                                    </h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>Due Now:</p>
                                            <span>$0</span>
                                        </li>
                                    </ul>
                                    <p>
                                        Your billing cycle does not start until after you’ve borrowed your first item.*Sales tax is estimated based on your location and may differ slightly from the amount shown on your first invoice.
                                    </p>
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

</body>
</html>


