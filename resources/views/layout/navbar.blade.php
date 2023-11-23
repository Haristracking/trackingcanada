<style>
    @media (min-width: 768px) and (max-width: 1077px) {
        #shop {
            margin-top: 0px !important;
            margin-left: 0px !important;
            font-size: 16px !important;
            width: 30%;
        }

        #login {
            margin-right: 5px !important;
        }

        #shop-img {
            margin-top: 0px !important;
        }
    }

    @media (min-width: 1047px) and (max-width: 1387px) {
        #login {
            margin-right: 10px !important;
        }
    }

    @media (min-width: 1077px) and (max-width: 1104px) {
        #header {
            padding-left: 40px !important;
            padding-right: 100px !important;
            font-size: 6px !important;
        }
    }

    @media (min-width: 1219px) and (max-width: 1387px) {
        #top-menu {
            margin-left: -20px;

            font-size: 15px;
            margin-top: 0px;
        }
    }

    @media (min-width: 1042px) and (max-width: 1218px) {
        #top-menu {
            margin-left: -20px;
            font-size: 13px;
            margin-top: 8px;
        }
    }

    @media (min-width: 1042px) and (max-width: 1101px) {
        #top-menu {
            margin-left: -20px;
            font-size: 10px;
            margin-top: 8px;
        }
    }

    @media (min-width: 992px) and (max-width: 1041px) {
        #top-menu {
            margin-left: -8px;
            font-size: 10px;
            margin-top: 10px;
        }
    }
</style>

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn bg-dark default-padding" data-wow-delay="0.1s" id="header">

    <nav class="navbar navbar-expand-lg navbar-light wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" style="height: 50px">
        </a>
        <button type="button" class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <img src="{{ asset('img/menu.svg') }}" alt="menu">
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <div class="only-mobile">
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <img src="{{ asset('img/close.svg') }}" alt="close menu" style="height:20px ">
                    </button>
                </div>
                <a href="{{ route('home') }}" class="nav-item nav-link  @if (Request::route()->getName() == 'home') active @endif"
                    data-en="Home" id="top-menu" data-arb="الرئيسية">Home</a>
                {{-- <a href="{{route('demo')}}"
                    class="nav-item nav-link  @if (Request::route()->getName() == 'demo') active @endif" data-en="Demo"
                    id="top-menu" data-arb="تجريبي">Demo</a> --}}

                <a href="{{ route('about') }}"
                    class="nav-item nav-link  @if (Request::route()->getName() == 'about') active @endif" data-en="About"
                    id="top-menu" data-arb="الرئيسية">About</a>
                <a href="{{ route('Product') }}"
                    class="nav-item nav-link  @if (Request::route()->getName() == 'Product') active @endif" data-en="Product"
                    id="top-menu" data-arb="الرئيسية">Product</a>

                {{-- <a href="{{ route('about')" class="nav-item nav-link @if (Request::route()->getName() == 'about') active @endif"
                    data-en="About" id="top-menu" data-arb= }}"من نحن">About</a> --}}


                <!-- <a href="{{ route('tracking_pakistan') }}"
                    class="nav-item nav-link @if (Request::route()->getName() == 'tracking_pakistan') active @endif"
                    data-en="Tracking Pakistan" id="top-menu" data-arb="تراكينج باكستان">Tracking Pakistan</a> -->

                {{-- <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle text-white px-0 @if (Request::route()->getName() == 'standard_tracking' || Request::route()->getName() == 'advanced_tracking' || Request::route()->getName() == 'fleet_management' || Request::route()->getName() == 'driver_management' || Request::route()->getName() == 'weight_monitoring' || Request::route()->getName() == 'temperature_humidity_management' || Request::route()->getName() == 'waste_management' || Request::route()->getName() == 'taxi_management' || Request::route()->getName() == 'container_tracking' || Request::route()->getName() == 'oil_tracking' || Request::route()->getName() == 'school_tracking' || Request::route()->getName() == 'smart_metering' || Request::route()->getName() == 'cold_chain_management' || Request::route()->getName() == 'fuel_management' || Request::route()->getName() == 'shipment_tracking' || Request::route()->getName() == 'dashcam_solution' || Request::route()->getName() == 'transport_solution') active @endif"
                        data-bs-toggle="dropdown" data-en="Solutions" id="top-menu" data-arb="الحلول">Solutions</a>
                    <div class="dropdown-menu m-0" style="max-height: 600px; overflow-y: scroll;">
                        <div class="d-flex justify-content-around py-4 dropdown-menu-inner">
                            <div class="dropdown-menu-left">
                                <div class="d-flex solution-item">
                                    <a href="{{ route('standard_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"  
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل التتبع القياسي"
                                            data-en="Standard Tracking Solution">Standard Tracking Solution</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('advanced_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل التتبع المتقدم"
                                            data-en="Advanced Tracking Solution">Advanced Tracking Solution</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('fleet_management') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل إدارة الأسطول"
                                            data-en="Fleet Management Solution">Fleet Management Solution</span>


                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('driver_management') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل إدارة السائق"
                                            data-en="Driver Management Solution">Driver Management Solution</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('weight_monitoring') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل مراقبة الوزن"
                                            data-en="Weight Monitoring Solution">Weight Monitoring Solution</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('temperature_humidity_management') }}" class="d-flex">
                                        <div><img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow"></div>
                                        <div class="solution-name" data-arb="حل إدارة درجة الحرارة"
                                            data-en=" Temperature Management Solution"> Temperature Management Solution
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('waste_management') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل إدارة النفايات"
                                            data-en="Waste Management Solution">Waste Management Solution</span>
                                    </a>
                                </div>

                                <div class="d-flex solution-item">
                                    <a href="{{ route('container_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل تتبع الحاويات"
                                            data-en="Container Tracking">Container Tracking</span>
                                    </a>
                                </div>



                                <div class="d-flex solution-item">
                                    <a href="{{ route('transport_solution') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حلول نقل الحج والعمرة"
                                            data-en="Hajj & Umrah Transport Solution">Hajj & Umrah Transport
                                            Solution</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-menu-right">
                                <div class="d-flex solution-item">
                                    <a href="{{ route('oil_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="تتبع الزيت" data-en="Oil Tracking">Oil
                                            Tracking</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('school_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل تتبع المدارس"
                                            data-en="School Tracking">School Tracking</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('smart_metering') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل القياس الذكي"
                                            data-en="Smart Metering">Smart Metering</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('cold_chain_management') }}">
                                        <span>
                                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow">
                                        </span>
                                        <span class="solution-name" data-arb="إدارة سلسلة التبريد"
                                            data-en="Cold Chain Management">Cold Chain Management</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ route('fuel_management') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل إدارة الوقود"
                                            data-en="Fuel Management Solution">Fuel Management Solution</span>
                                    </a>
                                </div>
                                <div class="d-flex solution-item">
                                    <a href="{{ asset('shipment_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="حل تتبع الشحنات"
                                            data-en="Shipment Tracking">Shipment Tracking</span>
                                    </a>
                                </div>

                                <div class="d-flex solution-item ">
                                    <a href="{{ route('dashcam_solution') }}" class="d-flex">
                                        <div><img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow"></div>
                                        <div class="solution-name"
                                            data-arb="أنظمة مساعدة السائق المتقدمة و كاميرا السيارة"
                                            data-en="Advanced Driver Assistance System & DASHCAMS">Advanced Driver
                                            Assistance System & DASHCAMS
                                        </div>
                                    </a>
                                </div>

                                <div class="d-flex solution-item">
                                    <a href="{{ route('camel_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="تتبع نماذج الياقات القياسية مع تراكينج"
                                            data-en="Camel Tracking Solution">Camel Tracking Solution
                                        </span>
                                    </a>
                                </div>
                                <!-- Animal Tracking -->
                                <div class="d-flex solution-item">
                                    <a href="{{ route('animal_tracking') }}">
                                        <span> <img src="{{ asset('img/arrow-orange.svg') }}"
                                                alt="orange arrow"></span>
                                        <span class="solution-name" data-arb="تتبع الحيوانات مع تراكينج"
                                            data-en="Animal Tracking Solution">Animal Tracking Solution</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                 --}}
                {{-- <a href="{{ route('trackers') }}"
                    class="nav-item nav-link @if (Request::route()->getName() == 'trackers') active @endif"
                    data-en="Tracking Devices" id="top-menu" data-arb="أجهزة التتبع">Tracking Devices</a> --}}

                <a href="{{ route('our_team') }}"
                    class="nav-item nav-link @if (Request::route()->getName() == 'our_team') active @endif" data-en="Team"
                    id="top-menu" data-arb="الفريق">Team</a>

                {{-- <a href="{{ route('ceo_corner') }}" class="nav-item nav-link" data-en="CEO Corner" id="top-menu"
                    data-arb="تواصل معنا">CEO Corner</a> --}}

                {{-- <a href="https://login.tracking.me/" target="_blank"
                    class=" navbar-login-btn  nav-link medium-font-family" id="login">
                    <img src="{{ asset('img/login.png') }}" alt="cart" class="login-btn">
                    <img src="{{ asset('img/loginblue.png') }}" alt="cart" class="login-btn-hover">

                    <span data-en="Login" data-arb="المتجر">
                        Login
                    </span>

                </a>
                <a href="https://shop.tracking.me/" target="_blank"
                    class=" navbar-shop-btn  nav-link medium-font-family " id="shop">
                    <img src="{{ asset('img/cart.svg') }}" alt="cart" class="shop-btn" id="shop-img">
                    <img src="{{ asset('img/cart2.svg') }}" alt="cart" class="shop-btn-hover">

                    <span data-en="Shop" data-arb="المتجر">
                        Shop
                    </span>
                </a> --}}

            </div>

        </div>
    </nav>
</div>
<!-- Navbar End -->
