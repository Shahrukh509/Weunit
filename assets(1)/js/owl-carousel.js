//Slider 1

$(document).ready(function () {
    if ($(".bbb_viewed_slider").length) {
        var viewedSlider = $(".bbb_viewed_slider");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_prev").length) {
            var prev = $(".bbb_viewed_prev");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_next").length) {
            var next = $(".bbb_viewed_next");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 2

$(document).ready(function () {
    if ($(".bbb_viewed_slider_2").length) {
        var viewedSlider = $(".bbb_viewed_slider_2");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_prev_2").length) {
            var prev = $(".bbb_viewed_prev_2");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_next_2").length) {
            var next = $(".bbb_viewed_next_2");
            next.on("click", function () {
                alert();
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 3

$(document).ready(function () {
    if ($(".bbb_viewed_slider_3").length) {
        var viewedSlider = $(".bbb_viewed_slider_3");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_3").length) {
            var prev = $(".bbb_viewed_prev_3");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_3").length) {
            var next = $(".bbb_viewed_next_3");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 4

$(document).ready(function () {
    if ($(".bbb_viewed_slider_4").length) {
        var viewedSlider = $(".bbb_viewed_slider_4");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 3,
                },
                575: {
                    items: 3,
                },
                768: {
                    items: 3,
                },
                991: {
                    items: 3,
                },
                1199: {
                    items: 3,
                },
            },
        });

        if ($(".bbb_viewed_prev_4").length) {
            var prev = $(".bbb_viewed_prev_4");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_next_4").length) {
            var next = $(".bbb_viewed_next_4");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 5

$(document).ready(function () {
    if ($(".bbb_viewed_slider_5").length) {
        var viewedSlider = $(".bbb_viewed_slider_5");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_prev_5").length) {
            var prev = $(".bbb_viewed_prev_5");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_next_5").length) {
            var next = $(".bbb_viewed_next_5");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 6

$(document).ready(function () {
    if ($(".bbb_viewed_slider_6").length) {
        var viewedSlider = $(".bbb_viewed_slider_6");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_6").length) {
            var prev = $(".bbb_viewed_prev_6");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_6").length) {
            var next = $(".bbb_viewed_next_6");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 7

$(document).ready(function () {
    if ($(".bbb_viewed_slider_7").length) {
        var viewedSlider = $(".bbb_viewed_slider_7");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_7").length) {
            var prev = $(".bbb_viewed_prev_7");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_7").length) {
            var next = $(".bbb_viewed_next_7");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 8

$(document).ready(function () {
    if ($(".bbb_viewed_slider_8").length) {
        var viewedSlider = $(".bbb_viewed_slider_8");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_8").length) {
            var prev = $(".bbb_viewed_prev_8");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_8").length) {
            var next = $(".bbb_viewed_next_8");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 9

$(document).ready(function () {
    if ($(".bbb_viewed_slider_9").length) {
        var viewedSlider = $(".bbb_viewed_slider_9");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 7,
                },
                575: {
                    items: 7,
                },
                768: {
                    items: 7,
                },
                991: {
                    items: 7,
                },
                1199: {
                    items: 7,
                },
            },
        });
        if ($(".bbb_viewed_prev_9").length) {
            var prev = $(".bbb_viewed_prev_9");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_9").length) {
            var next = $(".bbb_viewed_next_9");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 10

$(document).ready(function () {
    if ($(".bbb_viewed_slider_10").length) {
        var viewedSlider = $(".bbb_viewed_slider_10");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_10").length) {
            var prev = $(".bbb_viewed_prev_10");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_10").length) {
            var next = $(".bbb_viewed_next_10");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//Slider 11

$(document).ready(function () {
    if ($(".bbb_viewed_slider_11").length) {
        var viewedSlider = $(".bbb_viewed_slider_11");
        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });
        if ($(".bbb_viewed_prev_11").length) {
            var prev = $(".bbb_viewed_prev_11");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }
        if ($(".bbb_viewed_next_11").length) {
            var next = $(".bbb_viewed_next_11");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Sliders

//Slider 1

$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev").length) {
            var prev = $(".bbb_viewed_preview_prev");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_next").length) {
            var next = $(".bbb_viewed_preview_next");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 2
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_2").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_2");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_2").length) {
            var prev = $(".bbb_viewed_preview_prev_2");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_2").length) {
            var next = $(".bbb_viewed_preview_nex_2");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 3
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_3").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_3");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_3").length) {
            var prev = $(".bbb_viewed_preview_prev_3");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_3").length) {
            var next = $(".bbb_viewed_preview_nex_3");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 4
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_4").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_4");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_4").length) {
            var prev = $(".bbb_viewed_preview_prev_4");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_4").length) {
            var next = $(".bbb_viewed_preview_nex_4");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 5
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_5").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_5");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_5").length) {
            var prev = $(".bbb_viewed_preview_prev_5");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_5").length) {
            var next = $(".bbb_viewed_preview_nex_5");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 6
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_6").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_6");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_6").length) {
            var prev = $(".bbb_viewed_preview_prev_6");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_6").length) {
            var next = $(".bbb_viewed_preview_nex_6");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 7
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_7").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_7");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_7").length) {
            var prev = $(".bbb_viewed_preview_prev_7");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_7").length) {
            var next = $(".bbb_viewed_preview_nex_7");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 8
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_8").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_8");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_8").length) {
            var prev = $(".bbb_viewed_preview_prev_8");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_8").length) {
            var next = $(".bbb_viewed_preview_nex_8");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 9
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_9").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_9");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_9").length) {
            var prev = $(".bbb_viewed_preview_prev_9");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_9").length) {
            var next = $(".bbb_viewed_preview_nex_9");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 10
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_10").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_10");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_10").length) {
            var prev = $(".bbb_viewed_preview_prev_10");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_10").length) {
            var next = $(".bbb_viewed_preview_nex_10");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});

//  Preview Slider 11
$(document).ready(function () {
    if ($(".bbb_viewed_slider_preview_11").length) {
        var viewedSlider = $(".bbb_viewed_slider_preview_11");

        viewedSlider.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 1000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 5,
                },
                575: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                991: {
                    items: 5,
                },
                1199: {
                    items: 5,
                },
            },
        });

        if ($(".bbb_viewed_preview_prev_11").length) {
            var prev = $(".bbb_viewed_preview_prev_11");
            prev.on("click", function () {
                viewedSlider.trigger("prev.owl.carousel");
            });
        }

        if ($(".bbb_viewed_preview_nex_11").length) {
            var next = $(".bbb_viewed_preview_nex_11");
            next.on("click", function () {
                viewedSlider.trigger("next.owl.carousel");
            });
        }
    }
});
