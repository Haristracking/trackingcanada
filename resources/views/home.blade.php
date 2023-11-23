<style>
    video {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        /* Place the video behind other content */
    }

    /* Optional: Add some content on top of the video */
    .content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        padding: 50px;
    }



    /* header-binner left logo start*/
    .flex-container {
        display: flex;
    }

    .flex-container>div {
        margin-top: 120px;
        padding-right: 10px;
        font-size: 30px;
    }

    /* for mobile view  */
    @media (min-width: 500px) and (max-width: 768px) {
        .flex-container {
            display: flex;
        }

        .flex-container>div {

            margin-top: 0px;
            padding-right: 10px;
            font-size: 30px;
        }
    }

    /* for mobile view  */
    @media (min-width: 300px) and (max-width: 499px) {
        .flex-container {
            display: flex;
        }

        .flex-container>div {
            margin-top: 0px;
            padding-right: 10px;
            font-size: 30px;
        }
    }

    /* header-binner left logo end*/

    /* Add these rules for fading animation start*/
    .fade-out {
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }

    .slider-container.fade-out .slider-content {
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }

    .slider-container {
        left: 0;
        top: 0;
        height: 20vh;
        width: 60%;
        color: #fff;
        overflow: hidden;
        transition: width 0.6s ease-in-out;

    }


    /* Style for the slider content */
    .slider-content {
        height: 25%;
        opacity: 1;
        transition: opacity 0.6s ease-in-out;
    }

    /* Style for the text within the slider */
    .slider-text {
        font-size: 20px;
        text-align: inherit;
        /* margin-top: -30px; */
        font-family: "poppins-medium" !important;
    }

    /* Style for the row of images */
    .headder-images {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 5px;
    }

    /* Style for individual images */
    .headder-images img {
        width: 100px;
        height: 90px;
        margin: 5px;
        object-fit: cover;
    }


    @media (min-width: 500px) and (max-width: 957px) {
        .slider-text {
            font-size: 10px;
            text-align: inherit;
            /* margin-top: -30px; */
            font-family: "poppins-medium" !important;
        }

        .headder-images {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        /* Style for individual images */
        .headder-images img {
            width: 40px;
            height: 40px;
            margin: 5px;
            object-fit: cover;
        }
    }

    @media (min-width: 260px) and (max-width: 500px) {
        .slider-container {
            left: 0;
            top: 0;
            height: 12vh;
            width: 100%;
            color: #fff;
            overflow: hidden;
            transition: width 0.6s ease-in-out;
        }

        .slider-text {
            width: 600px;
            font-size: 10px;
            text-align: inherit;
            /* margin-top: -30px; */
            font-family: "poppins-medium" !important;
        }

        .headder-images {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            /* margin-top: 10px; */
        }

        /* Style for individual images */
        .headder-images img {
            width: 60px;
            height: 60px;
            /* margin: 5px; */
            object-fit: cover;
        }
    }

    #top-heading {
        width: 40%;
        margin-top: 80px;
        font-size: 40px;
    }

    @media (min-width: 1400px) and (max-width: 2000px) {
        #top-heading {
            width: 40%;
            margin-top: 100px;
            font-size: 55px;
        }
    }

    @media (min-width: 500px) and (max-width: 1000px) {
        #top-heading {
            width: 60% !important;
            margin-top: 100px;
            font-size: 30px;

        }

        #video-player {
            margin-top: 100;
        }

        #header-binner-img {
            height: 600px !important;
        }

        #contact-us {
            margin-top: auto;
        }

        .slider-text {
            width: 600px;
            font-size: 14px;
            text-align: inherit;
            /* margin-top: -30px; */
            font-family: "poppins-medium" !important;
        }

        .headder-images {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            /* margin-top: 10px; */
        }

        /* Style for individual images */
        .headder-images img {
            width: 65px;
            height: 65px;
            /* margin: 5px; */
            object-fit: cover;
        }
    }

    @media (min-width: 1000px) and (max-width: 1247px) {
        #top-heading {
            width: 50% !important;
            margin-top: 100px;
        }

        #video-player {
            margin-top: 100;
        }

        #header-binner-img {
            height: 600px !important;
        }

        #contact-us {
            margin-top: auto;
        }

        .slider-text {
            width: 600px;
            font-size: 14px;
            text-align: inherit;
            /* margin-top: -30px; */
            font-family: "poppins-medium" !important;
        }

        .headder-images {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            /* margin-top: 10px; */
        }

        /* Style for individual images */
        .headder-images img {
            width: 65px;
            height: 65px;
            /* margin: 5px; */
            object-fit: cover;
        }
    }


    @media (min-width: 260px) and (max-width: 500px) {
        #top-heading {
            width: 70% !important;
            font-size: 18px !important;
            margin: 40px 0px 10px 0px;
        }

        #video-player {
            margin-top: 100;
        }

        #header-binner-img {
            height: 400px !important;
        }

        #contact-us {
            margin-top: auto;
        }

        .slider-text {
            width: 500px;
            font-size: 10px;
            text-align: inherit;
            /* margin-top: -30px; */
            font-family: "poppins-medium" !important;
        }

        .headder-images {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            /* margin-top: 10px; */
        }

        /* Style for individual images */
        .headder-images img {
            width: 40px;
            height: 40px;
            /* margin: 5px; */
            object-fit: cover;
        }
    }

    @media (min-width: 1026px) and (max-width: 1099px) {
        .secondary {
            width: 100% !important;
        }
    }

    @media (min-width: 769px) and (max-width: 1500px) {
        #animal-sollution {
            margin-top: 80px;
        }

        #camel-sollution {
            margin-top: 80px;
        }
    }

    @media (max-width: 550px) {
        #customer-review-top {
            margin-bottom: -20px !important;
        }

        #slider-radio {
            /* margin-bottom: 5px !important; */

        }

        #customer-review-desc {
            font-size: 14px !important;

        }
    }
</style>

@extends('layout.main')
@section('head-scripts')
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <script src="{{ asset('js/slider.js') }}"></script>
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Tracking.me",
    "image": "https://tracking.me/img/logo.svg",
    "@id": "https://tracking.me/",
    "url": "https://tracking.me/",
    "telephone": "+966 50 417 7866",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Black Stamp coffee Building 3rd floor , office no 15 Abi Bakr As Siddiq Rd, An Nafal Dist, Riyadh, Saudi Arabia",
        "addressLocality": "Jeddah",
        "postalCode": "22230",
        "addressCountry": "SA"
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Saturday",
            "Sunday"
        ],
        "opens": "09:00",
        "closes": "16:00"
    },
    "sameAs": [
        "https://www.facebook.com/trackingksa",
        "https://www.instagram.com/trackingksa/"
    ]
}
</script>
    <meta name="google-site-verification" content="NW7viQ5nzWZaMSg0tjITGCctGwtKpP2GAUuDJBVoy4I" />
    <meta name="google-site-verification" content="Z_39GYYO7ZzkxGxJozjdFHyBGgkCKPhzCRxvLvuym-U" />
    <title>Worried About Your Car Tracking, We Provide Solution in Saudi Arabia</title>
    <meta name="description"
        content="We Manage History, Events and Notifications, Remote Device Control, Secure Billing, Phone Tracking Apps, and 600+ Supported GPS Trackers in all over Saudi Arabia.">
    <meta name="keywords" content="Car tracking, Tracker for car, Car tracking device">
@endsection
@section('content')
    <!-- video start -->

    <div class="container-fluid ">

        <div class="row p-0">
            <div class="video-player p-0" id="video-player">
                <!-- <video playsinline preload muted autoplay loop id="myVideo" style="width: inherit;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <source src="{{ asset('video/background.mp4') }}" type="video/mp4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Your browser does not support HTML5 video.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </video> -->
                <img src="{{ asset('video/header-img.webp') }}" alt="Header Image" style="width: 100%; height: 100%;"
                    id="header-binner-img">
                <script>
                    var bgvideo = document.getElementById("myVideo");
                    bgvideo.muted = true;
                    bgvideo.play();
                </script>
            </div>

            <div class="video-player-text-main position-absolute flex flex-column  w-100 default-padding"
                id="video-player-text-main">
                <div class="index-headline-main">
                    <div class="flex-container">
                        {{-- <div><img src="{{asset('img/Partners/home-top-logo1.png')}}" class="img-fluid" alt="Image 1"
                            width="80" style="height: 75px"></div>
                    <div><img src="{{asset('img/Partners/home-top-logo2.png')}}" class="img-fluid" alt="Image 2"
                            width="130px" ></div> --}}
                    </div>

                    <h1 class="video-player-title text-white fw-bold bold-font-family"
                        data-arb="رواد أجهزة التتبع المصنوعة في المملكة العربية السعودية" id="top-heading"
                        data-en="Navigate Success with Tracking's Telematics Innovation" style=" margin-top: 230px">
                        Navigate Success with Tracking's Telematics Innovation
                    </h1>
                    <div>
                        <div class="slider-container" id="slider">
                            <div class="slider-content" id="slider-content">
                            </div>
                        </div>
                    </div>
                    <a class="primary" data-arb="اكتشف" target="_blank" data-en="Contact" href="{{ url('/') }}"
                        id="contact-us" style=" margin-top: -100px">
                        Contact</a>
                </div>
            </div>
        </div>
        <!-- video end -->
    </div>
    <!-- Customized Solutions Start -->
    <div class="container-fluid section customized-solutions-main" style="background-color: white">

        <div class="container">
            <div class="row  align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="section-title text-center" data-arb="حلول مخصصة" data-en="Customized Solutions">
                        Customized Solutions
                    </h3>
                </div>
            </div>
            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">

                <div class="row">

                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/Standard Tracking.svg') }}" class="solution-img" alt="Standard Tracking">
                        <span class="solution-name semibold-font-family text-black" data-arb="حل التتبع القياسي"
                            data-en="Vehicle Track & Trace Solution (Anti-Theft)">
                            Vehicle Track & Trace Solution (Anti-Theft)
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>

                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/Advanced Tracking Solution.svg') }}" class="solution-img"
                            alt="Advanced Tracking Solution">
                        <span class="solution-name semibold-font-family text-black" data-arb="حل التتبع المتقدم"
                            data-en="Weight Monitoring Solution" style="width: 140px">
                            Weight Monitoring Solution
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>
                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/School Tracking Solution.svg') }}" class="solution-img"
                            alt="Fleet Management Solution">
                        <span class="solution-name semibold-font-family text-black" style="width: 140px"
                            data-arb="حل إدارة الأسطول" data-en="Container tracking solution">
                            Container tracking solution
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>

                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/Fleet Management Solution.svg') }}" class="solution-img"
                            alt="Driver Management Solution">
                        <span class="solution-name semibold-font-family text-black" data-arb="حل إدارة السائق"
                            data-en="Temperature & Humidity Monitoring Solution">
                            Temperature & Humidity Monitoring Solution
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>


                </div>

                <div class="row mt-100">
                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/Fuel Management Solution.svg') }}" class="solution-img" alt="dashcam">
                        <span class="solution-name semibold-font-family text-black"
                            data-arb="أنظمة مساعدة السائق المتقدمة و كاميرا السيارة"
                            data-en="Fleet & Fuel Management System" style="   max-width: 350px;">
                            Fleet & Fuel Management System
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>

                    <div class="col-3 solution-item">
                        <img src="{{ asset('img/Driver Management Solution.svg') }}" class="solution-img"
                            alt="Fuel Management Solution">
                        <span class="solution-name semibold-font-family text-black" style="width: 280px"
                            data-arb="حل إدارة الوقود" data-en="Driver Management Solution">
                            Driver Management Solution
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>

                    <div class="col-3 solution-item mb-0">
                        <img src="{{ asset('img/dashcam.svg') }}" class="solution-img" alt="Oil Tracking Solution">
                        <span class="solution-name semibold-font-family text-black" style="width: 270px"
                            data-arb="حل تتبع الزيت" data-en="Advanced Driver Assistance">
                            Advanced Driver Assistance Systems
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div>

                    {{-- <div class="col-3 solution-item">
                        <img src="{{ asset('img/Weight Monitoring Solution.svg') }}" class="solution-img"
                            alt="Weight Monitoring Solution">
                        <span class="solution-name semibold-font-family text-black" style="width: 140px"
                            data-arb="حل مراقبة الوزن" data-en="Geo-Fencing Feature">
                            Geo-Fencing Feature
                        </span>
                        <a class="secondary" href="{{ url('/') }}">
                            <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                                LEARN MORE!
                            </span>
                            <img src="{{ asset('img/arrow-black.svg') }}" class="black-arrow" alt="arrow">
                            <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Customized Solutions End -->


    <!-- About Us Start -->
    <div class="container-fluid bg-dark section about-main-index">
        <div class="container">
            <div class="section-header  mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title m-0 text-white text-start" data-arb="حول تراكينج® :" data-en="About Us">About
                    Us
                    </h1>
            </div>
            <div class="row">

                <span class="section-sub-desc text-white wow fadeInUp col-12" data-wow-delay="0.1s"
                    data-arb=" تراكينج® هي شركة قائمة على إنترنت الأشياء متخصصة في تجهيز صناعة السيارات والخدمات اللوجستية بالأدوات والمعدات التكنولوجية المتطورة. الشركة الوحيدة التي تقدم أجهزة  صنع في السعودية
                    للتتبع في السوق مع جميع الاعتمادات والشهادات الرئيسية من الحكومة بما في ذلك منطقة التجارة التفضيلية،
                    إدارة السلع العلاجية و معتمدة من وزارة الاتصالات ووزارة النقل و وزارة التربية والتعليم، السياحة و
                    نقل السيارات. مع التركيز على الاستفادة من تحليلات البيانات المستندة إلى الذكاء الاصطناعي والخدمات
                    القائمة على خدمة السحابة بتطوير برمجيات ، تمكن تراكينج® الشركات من الحصول على رؤى قابلة للتنفيذ ،
                    مما يحدث ثورة في عمليات صنع القرار الخاصة بهم. كجزء من الممر الباكستاني السعودي والرؤية السعودية
                    لسنة 2030 ، تتمتع تراكينج® بوجودها في أكثر من 5 دول عبر المنطقة والآن كخطة توسع ، تلتزم تراكينج®
                     بتحويل تقنية التأمين عن بعد في المملكة العربيةالسعودية"
                    data-en="
                    Welcome to Tracking Canada, your trusted solution provider in the dynamic realms of IoT and telematics.
                    Specializing in enhancing the automotive and logistics sectors, we are dedicated to equipping businesses
                    with the power of actionable insights. At Tracking, our focus on user-friendly SaaS-based services
                    underscores our commitment to simplifying and revolutionizing decision-making processes. We take pride
                    in transforming telematics technology to ensure businesses across Canada thrive in the digital age. With
                    a customer-centric approach and a passion for innovation, we invite you to explore how Tracking Canada
                    is shaping the future of connectivity and efficiency for industries on the move.">
                    Welcome to Tracking Canada, your trusted solution provider in the dynamic realms of IoT and telematics.
                    Specializing in enhancing the automotive and logistics sectors, we are dedicated to equipping businesses
                    with the power of actionable insights. At Tracking, our focus on user-friendly SaaS-based services
                    underscores our commitment to simplifying and revolutionizing decision-making processes. We take pride
                    in transforming telematics technology to ensure businesses across Canada thrive in the digital age. With
                    a customer-centric approach and a passion for innovation, we invite you to explore how Tracking Canada
                    is shaping the future of connectivity and efficiency for industries on the move.
                </span>

                <div class="col-12 about-main-button-div">
                    <a class="third about-main-button" href="{{ url('/') }}">
                        <span data-arb="اعرف المزيد" data-en="LEARN MORE!">
                            LEARN MORE!
                        </span>
                        <img src="{{ asset('img/arrow-orange.svg') }}" class="orange-arrow" alt="arrow">
                        <img src="{{ asset('img/white-arrow.svg') }}" class="white-arrow" alt="arrow">
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="container-fluid about-main-customer-review-section default-margin bg-dark">
            <div class="row">
                <video autoplay muted loop>
                    <source src="{{ asset('video/background.mp4') }}" type="video/mp4" />
                </video>

                <div class="col-4 count-item text-center">
                    <img src="{{ asset('img/customer.svg') }}" alt="customer">
                    <span class="count text-white">4,242</span>
                    <span data-arb="عميل" data-en="CUSTOMERS" class="count-text text-white">CUSTOMERS</span>

                </div>
                <div class="col-4 count-item text-center">
                    <img src="{{ asset('img/area.svg') }}" alt="area">
                    <span class="count text-white">8</span>
                    <span data-arb="مناطق" data-en="AREAS" class="count-text text-white">AREAS</span>

                </div>

                <div class="col-4 count-item text-center">
                    <img src="{{ asset('img/like.svg') }}" alt="like">
                    <span class="count text-white">100%</span>
                    <span data-arb="رضا العملاء" data-en="CUSTOMER SATISFACTION" class="count-text text-white">CUSTOMER
                        SATISFACTION</span>

                </div>
            </div>

        </div> --}}

    </div>
    <!-- About Us End -->

    <!-- Our Customers Start -->
    {{-- <div class="container-fluid section our-customers-main-index">
        <div class="container">

            <div class="row  align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="section-title text-center" data-arb="عملائنا" data-en="Our Customers">
                        Our Customers
                    </h3>
                </div>
            </div>
            <div class="row customer-img-list">
                <img src="{{ asset('img/Customers/customerNew2.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew3.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew4.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew1.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew5.jpg') }}" class="customer-img passive-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/bayt-aleeba.jpg') }}" class="customer-img acitve-img step1"
                    alt="bayt aleeba">
                <img src="{{ asset('img/Customers/alessa.jpg') }}" class="customer-img passive-img step1"
                    alt="alessa">

                <img src="{{ asset('img/Customers/Al-raya.jpg') }}" class="customer-img passive-img step2"
                    alt="Al raya">
                <!-- <img src="{{ asset('img/Customers/APSCO.jpg') }}" class="customer-img acitve-img step1" alt="APSCO"> -->
                <img src="{{ asset('img/Customers/BST.jpg') }}" class="customer-img acitve-img step2" alt="BST">
                <img src="{{ asset('img/Customers/CGS.jpg') }}" class="customer-img acitve-img step2" alt="CGS">

                <img src="{{ asset('img/Customers/fuchs.jpg') }}" class="customer-img passive-img step2" alt="fuchs">
                <img src="{{ asset('img/Customers/Elm.jpg') }}" class="customer-img passive-img step2" alt="Elm">
                <img src="{{ asset('img/Customers/masarat.jpg') }}" class="customer-img passive-img step2"
                    alt="masarat">
                <img src="{{ asset('img/Customers/Seder-group.jpg') }}" class="customer-img passive-img step2"
                    alt="Seder group">
                <img src="{{ asset('img/Customers/SHL.jpg') }}" class="customer-img passive-img step3" alt="SHL">
                <img src="{{ asset('img/Customers/menabev.jpg') }}" class="customer-img passive-img step3"
                    alt="menabev">

                <img src="{{ asset('img/Customers/naqaba.jpg') }}" class="customer-img passive-img step3"
                    alt="naqaba">
                <img src="{{ asset('img/Customers/orkin.jpg') }}" class="customer-img passive-img step3" alt="orkin">
                <img src="{{ asset('img/Customers/road-logistics.jpg') }}" class="customer-img passive-img step3"
                    alt="road logistics">
                <img src="{{ asset('img/Customers/sankyu.jpg') }}" class="customer-img passive-img step3"
                    alt="sankyu">
                <img src="{{ asset('img/Customers/sasat.jpg') }}" class="customer-img passive-img step3" alt="sasat">
                <img src="{{ asset('img/Customers/gulf-star.jpg') }}" class="customer-img passive-img step4"
                    alt="gulf star">

                <img src="{{ asset('img/Customers/source.jpg') }}" class="customer-img passive-img step4"
                    alt="source">
                <img src="{{ asset('img/Customers/swvl.jpg') }}" class="customer-img passive-img step4" alt="SWVL">
                <img src="{{ asset('img/Customers/The-olayan-group.jpg') }}" class="customer-img passive-img step4"
                    alt="The olayan group">
                <img src="{{ asset('img/Customers/GSC.jpg') }}" class="customer-img passive-img step4" alt="GSC">
                <img src="{{ asset('img/Customers/gulf.jpg') }}" class="customer-img passive-img step4" alt="gulf">
                <img src="{{ asset('img/Customers/inzagr.jpg') }}" class="customer-img passive-img step4"
                    alt="inzagr">

            </div>

        </div>
    </div> --}}
    <!-- Our Customers End -->

    <!-- Our Partners Start -->
    {{-- <div class="container-fluid section our-partners-main-index">
        <div class="container">

            <div class="row  align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="section-title text-center" data-arb="شركاؤنا" data-en="Our Partners">
                        Our Partners
                    </h3>
                </div>
            </div>
            <div class="row customer-img-list">

                <img src="{{ asset('img/Partners/amanta-jaddah.jpg') }}" class="customer-img acitve-img step11"
                    alt="amanta jaddah">
                <img src="{{ asset('img/Partners/petroapp.jpg') }}" class="customer-img acitve-img step11"
                    alt="Petro App">
                <img src="{{ asset('img/Partners/diggipacks.png') }}" class="customer-img acitve-img step11"
                    alt="Diggipacks">

                <img src="{{ asset('img/Partners/A-telematics.jpg') }}" class="customer-img acitve-img step11"
                    alt="A telematics">
                <img src="{{ asset('img/Partners/Elm.jpg') }}" class="customer-img acitve-img step11" alt="Elm">
                <img src="{{ asset('img/Partners/fastcoo.jpg') }}" class="customer-img acitve-img step11"
                    alt="fastcoo">
                <img src="{{ asset('img/Partners/icar-visions.jpg') }}" class="customer-img acitve-img step11"
                    alt="icar visions">
                <img src="{{ asset('img/Partners/madina-city-management.jpg') }}" class="customer-img acitve-img step11 "
                    alt="madina city management">
                <img src="{{ asset('img/Partners/pioneers-factory.jpg') }}" class="customer-img passive-img step22"
                    alt="pioneers factory">
                <img src="{{ asset('img/Partners/public-transport-authority.jpg') }}"
                    class="customer-img passive-img step22" alt="public transport authority">
                <img src="{{ asset('img/Partners/saudi-foods-and-drug.jpg') }}" class="customer-img passive-img step22"
                    alt="saudi foods and drug">
                <img src="{{ asset('img/Partners/techno-trade.jpg') }}" class="customer-img passive-img step22">
                <img src="{{ asset('img/Partners/teltonika.jpg') }}" class="customer-img passive-img step22 ">
                <img src="{{ asset('img/Partners/T-zone.jpg') }}" class="customer-img passive-img step22">
                <img src="{{ asset('img/Partners/naqaba.jpg') }}" class="customer-img passive-img step22">
            </div>
        </div>
    </div> --}}
    <!-- Our Partners End -->


    <div class="customerDiv" style="padding-top: 30px;">
        <div class="row  align-items-center">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                <h3 class="section-title text-center" data-arb="حلول مخصصة" data-en="Why Choose Us?"
                    style="color: white;font-size:30px;font-weight: bold;font-style:initial">
                    Why Choose Us ?
                </h3>
            </div>
        </div>
    </div>
    <video autoplay muted loop>
        <source src="{{ asset('video/tracking-vid2.mp4') }}" type="video/mp4" />
    </video>
    <div class="slider content">

        <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" id="slider-radio" />
        <input type="radio" name="slider" title="slide2" class="slider__nav" id="slider-radio" />
        <input type="radio" name="slider" title="slide3" class="slider__nav" id="slider-radio" />
        <input type="radio" name="slider" title="slide4" class="slider__nav" id="slider-radio" />
        <input type="radio" name="slider" title="slide5" class="slider__nav" id="slider-radio" />

        <div class="slider__inner">
            <div class="slider__contents"><i class="slider__image fa fa-codepen"></i>
                <h2 class="slider__caption" data-arb="محمد خليل " data-en="Innovative Telematics Services"
                    style="font-size: 30px;color:orange">Innovative
                    Telematics Services</h2>

                <p class="slider__txt" id="customer-review-desc"
                    data-arb=" ودي عبر عن كل الشكر و الأمتنان لخدمتكم المتميزة مرة. شئ يسعدني دايم العمل معكم لأسباب كتيرة، خاصة توافركم لوقت الاستجابة السريعة. كانت أجهزة التتبع كتير موثوقة بشكل ملحوظ من اول يوم ، وفرتم لي بيانات في الوقت المناسب وميزات قيمة تفيد عملياتنا التجارية بشكل كبير. أنا معجب أيضا بمرونتكم في جدولة التركيبات، واستيعاب ساعاتنا غير التقليدية. شكرا لدعمكم الاستثنائي."
                    data-en="In Canada, we're introducing groundbreaking telematics solutions for dynamic tracking and management of vehicles and assets. Our offerings include cutting-edge fleet management systems, in-depth vehicle diagnostics, comprehensive driver behavior analytics, and predictive maintenance technologies. These tools are designed to revolutionize operational efficiency and enhance safety standards, leveraging the latest advancements in telematics.">
                    In Canada, we're introducing groundbreaking telematics solutions for dynamic tracking and management of
                    vehicles and assets. Our offerings include cutting-edge fleet management systems, in-depth vehicle
                    diagnostics, comprehensive driver behavior analytics, and predictive maintenance technologies. These
                    tools are designed to revolutionize operational efficiency and enhance safety standards, leveraging the
                    latest advancements in telematics.</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-newspaper-o"></i>
                <h2 class="slider__caption" data-arb="اميرة احمد" data-en="Disruptive IoT Solutions"
                    style="font-size: 30px;color:orange">Disruptive IoT
                    Solutions</h2>
                <p class="slider__txt" id="customer-review-desc"
                    data-arb=" أنا حقا بقدر مدى استجابتكم وسرعتكم في مساعدتي. في كل مرة بحتاج لسؤال أو
                مساعدة، بتكونوا حاضرين بالاجابة. نظام التتبع مرة سهل الاستخدام بشكل لا يصدق، و اللي بيساعدني اكون على
                اطلاع بنشاط السائقين بدون تعب. التقارير اللي جهزتوها لي رائعة نسمح لي بالبقاء على اتصال و استقبال
                التحديثات بالوقت المناسب. بفضل خدمتكم المتميزة، أنا دايم حاضر معكم. و ما فيني اشكركم كفاية "
                    data-en="Our IoT platform in Canada is a paradigm of modern connectivity and automation, custom-built for diverse applications. We specialize in intelligent infrastructure management, advanced industrial automation, proactive environmental monitoring, and efficient energy management. This is achieved through a sophisticated integration of sensors, state-of-the-art data analytics, and pioneering cloud technologies, setting new benchmarks in IoT implementations.">
                    Our IoT platform in Canada is a paradigm of modern connectivity and automation, custom-built for diverse
                    applications. We specialize in intelligent infrastructure management, advanced industrial automation,
                    proactive environmental monitoring, and efficient energy management. This is achieved through a
                    sophisticated integration of sensors, state-of-the-art data analytics, and pioneering cloud
                    technologies, setting new benchmarks in IoT implementations.</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-television"></i>
                <h2 class="slider__caption" data-arb="عمر ال - عبدالله" data-en="Market Focus"
                    style="font-size: 30px;color:orange">Market Focus:</h2>
                <p class="slider__txt" id="customer-review-desc"
                    data-arb=" في كل مرة بيكون عندي أسئلة أو مخاوف، فأنتم دائما موجودين للمساعدة. أنتم تخلونا نحس وكأننا عميل مرة مهم. اهتمامك فينا جد كتير مهم. نحن كتير راضيين عن خدمة العملاء الاستثنائية الخاصة فيكم،و ابدا ما راح نفكر مرتين لترشيحكم لأي شخص يريد شراء نظام تتبع GPS. نحن بنعرف أنهم سيكونوا في يد أمينة معكم "
                    data-en="As we enter the Canadian market, our primary focus is on serving commercial and industrial clients who seek to leverage telematics and IoT for enhanced operational efficiency, safety, and data-driven decision-making. We aim to serve key sectors such as transportation and logistics, manufacturing, smart cities, and utility services, where our solutions can bring transformative changes.">
                    As we enter the Canadian market, our primary focus is on serving commercial and industrial clients who
                    seek to leverage telematics and IoT for enhanced operational efficiency, safety, and data-driven
                    decision-making. We aim to serve key sectors such as transportation and logistics, manufacturing, smart
                    cities, and utility services, where our solutions can bring transformative changes.</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
                <h2 class="slider__caption" data-arb="ليلى ناصر" data-en="Technology and Innovation"
                    style="font-size: 30px;color:orange">Technology and
                    Innovation</h2>
                <p style="font-size: 15px" class="slider__txt" id="customer-review-desc"
                    data-arb=" من اول مرة في استخدام نظام التتبع و حسيت بالفرق. من لما اتواصلت مع أجهزة التتبع الخاصة فيكم لشاحناتنا، عاملوني بشكل مرة جبد. كانوا كتير محترفين وودودين و انتهوا من كل شيء بسرعة. كانت الأجهزة ميسورة التكلفة وكان التثبيت كتير سهل. أنهم فسروا لي كيف بستخدمها خطوة بخطوة. أنا مرة سعيد بنظام بالتتبع و برشحه لكل شخص بالمملكة العربية السعودية يحتاج إلى أجهزة تتبع "
                    data-en="Our approach in Canada is anchored in harnessing the most advanced technologies in wireless communication, cloud computing, and artificial intelligence. This strategic alignment ensures that our offerings are not just current but also pioneering, setting new standards in technological innovation. Each product and service we introduce is meticulously crafted for scalability, fortified security, and seamless interoperability, specifically tailored to meet and exceed the dynamic and ever-evolving requirements of our Canadian clientele. Our commitment is to deliver disruptive, innovative solutions that redefine the landscape of technology and drive transformative change.">
                    Our approach in Canada is anchored in harnessing the most advanced technologies in wireless
                    communication, cloud computing, and artificial intelligence. This strategic alignment ensures that our
                    offerings are not just current but also pioneering, setting new standards in technological innovation.
                    Each product and service we introduce is meticulously crafted for scalability, fortified security, and
                    seamless interoperability, specifically tailored to meet and exceed the dynamic and ever-evolving
                    requirements of our Canadian clientele. Our commitment is to deliver disruptive, innovative solutions
                    that redefine the landscape of technology and drive transformative change.</p>
            </div>
            <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
                <h2 class="slider__caption" data-arb="يوسف ابراهيم " data-en="Value Proposition"
                    style="font-size: 30px;color:orange">Value Proposition:</h2>
                <p class="slider__txt" id="customer-review-desc"
                    data-arb="ما بقدر أشكر Tracking كفاية على خدمتهم الرائعة. جد كانوا  كتير متعاونين ومتجاوبين بكل خطوة. نظام التتبع اللي بتقدموه مرة سهل الاستخدام بشكل غير معقول،الشئ اللي بيسمح لي بالمداومة على علم بكل اللي بيسويه سائقي من غير متاعب. ايضا  كان فريقهم متعاون بشكل كبي، ويعمل بشكل يتناسب مع جدول أعمالي لنضمن عمليات التثبيت السلسة. أوصي بشدة بالتتبع لأي شخص يحتاج إلى حل تتبع موثوق. إنهم حقا يبدعون بالعمل! "
                    data-en="To our Canadian clients, we offer a competitive edge through increased operational efficiency, reduced costs, enhanced safety, and improved environmental sustainability. Our solutions are custom-tailored to meet the unique challenges and opportunities of the Canadian market, backed by comprehensive support and continuous innovation.">
                    To our Canadian clients, we offer a competitive edge through increased operational efficiency, reduced
                    costs, enhanced safety, and improved environmental sustainability. Our solutions are custom-tailored to
                    meet the unique challenges and opportunities of the Canadian market, backed by comprehensive support and
                    continuous innovation.</p>
            </div>
        </div>
    </div>

    <script>
        // Function to change the active slider
        function changeSlider() {
            const sliders = document.querySelectorAll('.slider__nav');
            const currentIndex = Array.from(sliders).findIndex((slider) => slider.checked);
            const nextIndex = (currentIndex + 1) % sliders.length;
            sliders[nextIndex].checked = true;
        }

        // Function to start the auto-change timer
        function startAutoChange() {
            setInterval(changeSlider, 4000); // Change slider every 3000 milliseconds (3 seconds)
        }

        // Start the auto-change timer when the page loads
        window.addEventListener('load', startAutoChange);
    </script>

    <script>
        const slides = [{
                text: {
                    arb: "تحقيق النجاح مع حلول التتبع المحسّنة",
                    en: "Rev Up Efficiency with Tracking Canada's IoT Solutions"
                }
            },
            {
                text: {
                    arb: "دفع الكفاءة من خلال حلول SAAS المدعومة في التتبع",
                    en: "Chart on the Course of Revolutionized Future"
                }
            },
            {
                text: {
                    arb: "دفع الكفاءة من خلال حلول SAAS المدعومة في التتبع",
                    en: "Empower Your Drive with Saas Powered Solutions"
                }
            }
        ];

        let currentSlideIndex = 0;
        const sliderContainer = document.getElementById("slider");

        function nextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            sliderContainer.classList.add("fade-out");
            setTimeout(() => {
                sliderContainer.classList.remove("fade-out");
                updateSlider();
            }, 600);
        }

        function updateSlider() {
            const sliderContent = document.querySelector(".slider-content");
            const currentSlide = slides[currentSlideIndex];

            // const currentLanguage = 'en'; // Replace with the logic to determine the current language
            const currentLanguage = localStorage.getItem(
                'tracking-language'); // Replace with the logic to determine the current language
            const imagesHTML = currentSlide.images ?
                currentSlide.images.map((image, index) =>
                    `<img src="${image}" width="100" height="100" alt="image-${index}" />`).join("") :
                "";
            const currentText = currentSlide.text[currentLanguage];
            const currentDataArb = currentSlide.text.dataArb;
            const currentDataEn = currentSlide.text.dataEn;

            sliderContent.innerHTML = `
        <div class="slider-text" data-arb="${currentDataArb}" data-en="${currentDataEn}">
            ${currentText}
        </div>
        <div class="row headder-images">${imagesHTML}</div>
    `;
        }
        setInterval(nextSlide, 3000);
    </script>
@endsection
