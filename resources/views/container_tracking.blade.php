@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
                    <span class="solution-tag" data-arb="حاويات" data-en="Container">
                        Container
                    </span>

                    <span class="solution-title"Taxi Booking System data-arb="حل التتبع" data-en="Tracking">
                        Tracking
                    </span>

                    <span class="solution-sub-title" data-arb="حل تتبع الحاويات الذي يركز على السلامة"
                        data-en="Safety-focused Container Tracking solution">
                        Safety-focused Container Tracking solution
                    </span>
                </div>
                <div class="col-8 solution-header-content-area">
                    <span class="content-title"
                        data-arb="بدمج أحدث التقنيات الذكية ، يركز حل تتبع الحاويات لدينا على السلامة ، مع سجل حافل من بين حالات الاستخدام المختلفة."
                        data-en="Incorporating the latest smart technology, our Container Tracking solution is safety-focused, with a proven track record amongst various use cases.">
                        Incorporating the latest smart technology, our Container Tracking
                        solution is safety-focused, with a proven track record amongst
                        various use cases.
                    </span>

                    <div class="solution-feature-list d-flex flex-row">
                        <div style="margin-inline-end: 20px">
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="حل Smart E-Lock
                    "
                                    data-en="Smart E-Lock Solution">
                                    Smart E-Lock Solution
                                </span>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="حل Slave E-Lock
                    "
                                    data-en="Slave E-Lock Solution">
                                    Slave E-Lock Solution
                                </span>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="حل Master E-Lock
                    "
                                    data-en="Master E-Lock Solution">
                                    Master E-Lock Solution
                                </span>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="حل الغلق الإلكتروني الهجين GSM"
                                    data-en="GSM Hybrid E-Lock Solution">
                                    GSM Hybrid E-Lock Solution
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="تطبيق E-Lock قابل للتخصيص
                    "
                                    data-en="Customizable E-Lock Application">
                                    Customizable E-Lock Application
                                </span>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="توثيق الحاوية
                    "
                                    data-en="Container Documentation">
                                    Container Documentation
                                </span>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="سلامة وأمن عمليات النقل"
                                    data-en="Safety & Security of Transport Operations">
                                    Safety & Security of Transport Operations
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->

    <!--1 right image solution feature Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right"></div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-container"></div>
                    <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- right image solution feature End -->

    <!-- Why Tracking  Start -->
    <div class="container-fluid why-tracking-section">
        <div class="why-tracking-main default-margin">
            <video autoplay muted loop>
                <source src="{{ asset('video/tracking-vid2.mp4') }}" type="video/mp4" />
            </video>
            <span class="title bold-font-family text-white" data-arb="لماذا Tracking.me؟" data-en="Why Tracking.me?">
                Why Tracking.me?
            </span>

            <span class="desc semibold-font-family text-white"
                data-arb="لدينا فريق من المطورين والمحللين وفرق الحلول ذوي الخبرة الواسعة ملتزمون وعاطفيون ومستعدون لأن يكونوا مختلفين وجاهزين لتقديم حلول مصممة خصيصًا لتتناسب مع أي نوع من متطلبات العملاء."
                data-en="Our vastly experienced team of Developers, Analysts, and Solution teams are committed, passionate, and willing to be different and ready to provide tailor-made solutions to match any type of customer requirement.">
                Our vastly experienced team of Developers, Analysts, and Solution
                teams are committed, passionate, and willing to be different and ready
                to provide tailor-made solutions to match any type of customer
                requirement.
            </span>
        </div>
    </div>
    <!-- Why Tracking  End -->
@endsection
