(function ($) {
    "use strict";
    // Initiate the wowjs
    new WOW().init();
    $('.dropdown').hover(function () {
        $('.dropdown-toggle').trigger('click');
    });
    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $('.fixed-top').addClass('shadow').css('top', 0);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        }
    });
    var dictionary = {
        "en": {
            "firstname_placeholder": "Type your first name",
            "lastname_placeholder": "Type your last name",
            "email_placeholder": "Type your email address",
            "phone_placeholder": "Type your phone number",
            "write_placeholder": "Write your message..",
            "placeholder_company": "Type your company name",
            "placeholder_address": "Type your address"

        },
        "arb": {
            "firstname_placeholder": "اكتب اسمك الأول",
            "lastname_placeholder": "اكتب اسمك الأخير",
            "email_placeholder": "اكتب اسمك الأخير",
            "phone_placeholder": "اكتب رقم جوالك",
            "write_placeholder": "اكتب رسالتك..",
            "placeholder_company": "اكتب اسم شركتك",
            "placeholder_address": "اكتب عنوانك"
        }
    };
    function switchLang(lang) {


        localStorage.setItem('tracking-language', lang);

        $("select#switchlang").find("option#" + lang + "").attr("selected", true);

        $("[data-" + lang + "]").text(function (i, e) {
            return $(this).data(lang);
        });


        $('#sumbit-button').attr('value', $('#sumbit-button').attr("data-" + lang + ""))

        if (lang == "arb") {
            $('body').addClass("arabic")
            $('#sheet2').remove();
            $('head').append('<link href="scss/arabic.css" rel="stylesheet" id="sheet1" />');
        } else {
            $('body').removeClass("arabic")
            $('#sheet1').remove();
            $('head').append('<link href="scss/eng.css" rel="stylesheet" id="sheet2" />');
        }


    }
    var set_lang = function (lang) {
        $("[data-translate]").each(function () {
            if ($(this).is("input")) {
                $(this).attr('placeholder', dictionary[lang][$(this).data("translate")])
            } else {
                $(this).text(dictionary[lang][$(this).data("translate")])
            }
        })
    };
    var lang = localStorage.getItem('tracking-language')
    if (lang == null || lang == 'null') {
        localStorage.setItem('tracking-language', "en");
        lang = "en";
    }
    switchLang(lang);
    set_lang(lang);
    $("#switchlang").on('change', function () {
        switchLang($(this).val())
        set_lang($(this).val());
    });
    var step = 1;
    setInterval(function () {

        if (step == 1) {
            $(".step4").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step3").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step2").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step1").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            step = 2;
        } else if (step == 2) {
            $(".step1").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step2").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            $(".step3").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step4").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            step = 3;

        } else if (step == 3) {
            $(".step1").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step2").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step3").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            $(".step4").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            step = 4;

        } else if (step == 4) {
            $(".step1").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step2").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step3").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step4").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            step = 1;
        }


    }, 3000);
    var step2 = 1;
    setInterval(function () {

        if (step2 == 1) {

            $(".step33").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step22").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step11").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            step2 = 2;
        } else if (step2 == 2) {
            $(".step11").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });
            $(".step22").each(function () {
                $(this).removeClass("passive-img");
                $(this).addClass("acitve-img");
            });
            $(".step33").each(function () {
                $(this).removeClass("acitve-img");
                $(this).addClass("passive-img");
            });

            step2 = 1;
        }


    }, 3000);

    // Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get all slide elements
    var slides = document.getElementsByClassName("slide");
  
    // Set the initial active slide index
    var activeSlide = 0;
  
    // Set the interval for automatic sliding (e.g., every 3 seconds)
    var interval = setInterval(function() {
      // Remove the 'active' class from the current slide
      slides[activeSlide].classList.remove("active");
  
      // Increment the active slide index
      activeSlide = (activeSlide + 1) % slides.length;
  
      // Add the 'active' class to the new active slide
      slides[activeSlide].classList.add("active");
    }, 3000); // 3000 milliseconds = 3 seconds
  });
  
})(jQuery);