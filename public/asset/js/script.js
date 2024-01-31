$(document).ready(function(){

    var helpers = {
        addZeros: function (n) {
            return (n < 10) ?  + n : '' + n;
        }
    };

    function sliderInit() {
        var $slider = $('.arrival_slider');
        $slider.each(function() {
            var $sliderParent = $(this).parent();
            $(this).slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                prevArrow:
                '<button class="slide-arrow prev-arrow"> <img src="img/left_2.svg" ></button>',
                nextArrow:
                '<button class="slide-arrow next-arrow"> <img src="img/right_1.svg" ></button>',
                responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false, 
                        arrows: false, 
                        dots: false,
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
            });

            if ($(this).find('.item').length > 1) {
                $(this).siblings('.slides-numbers').show();
            }

            $(this).on('afterChange', function(event, slick, currentSlide){
                $sliderParent.find('.slides-numbers .active').html(helpers.addZeros(currentSlide + 1));
            });

            var sliderItemsNum = $(this).find('.slick-slide').not('.slick-cloned').length;
            $sliderParent.find('.slides-numbers .total').html(helpers.addZeros(sliderItemsNum));

        });

    };

    sliderInit();

    $(".select-dropdown__button").on("click", function () {
        $(".select-dropdown__list").toggleClass("active");
    });
    $(".select-dropdown__list-item").on("click", function () {
        var itemValue = $(this).data("value");
        console.log(itemValue);
        $(".select-dropdown__button span")
        .text($(this).text())
        .parent()
        .attr("data-value", itemValue);
        $(".select-dropdown__list").toggleClass("active");
    });


    $('.reviews_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrow: true,
        speed: 400,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"> <img src="img/left_2.svg" ></button>',
        nextArrow: '<button class="slide-arrow next-arrow"> <img src="img/right_1.svg" ></button>',
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false, 
                dots: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                arrows: false, 
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]

    });

    $('.insta_slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrow: false,
        speed: 400,
        dots: false,
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: false,
                arrows: false, 
                dots: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                arrows: false, 
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }

        ]

    });

    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });


    var current = 0;
    var tabs = $(".tab");
    var tabs_pill = $(".tab-pills");

    loadFormData(current);

    function loadFormData(n) {
        $(tabs_pill[n]).addClass("active");
        $(tabs[n]).removeClass("d-none");
        $(".back_button").prop("disabled", n === 0);
        $(".next_button").prop("disabled", n === tabs.length - 1);
    }

    function next() {
        $(tabs[current]).addClass("d-none");
        $(tabs_pill[current]).removeClass("active");

        current++;
        loadFormData(current);
    }

    function back() {
        $(tabs[current]).addClass("d-none");
        $(tabs_pill[current]).removeClass("active");

        current--;
        loadFormData(current);
    }

    $(document).ready(function () {
        $(".back_button").on("click", back);
        $(".next_button").on("click", next);
    });


    $(".size_chart").hide();
    $("#option1").show();

    $("#size_select").change(function () {
        $(".size_chart").hide();
        $("#" + $(this).val()).show();
    });






    AOS.init();

});
