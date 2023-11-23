@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
            <span class="solution-tag" data-arb="متقدم" data-en="Advanced">
              Advanced
            </span>

                    <span
                        class="solution-title"
                        data-arb="أنظمة مساعدة السائق المتقدمة و كاميرا السيارة"
                        data-en="Driver Assistance System & DASHCAMS"
                        style="max-width: 500px"
                    >
              Driver Assistance System & DASHCAMS
            </span>

                    <span
                        class="solution-sub-title"
                        data-arb="نظام مساعدة السائق المستقبلي"
                        data-en="A futuristic driver assistance system"
                    >
              A futuristic driver assistance system
            </span>
                </div>
                <div class="col-8 solution-header-content-area">
            <span
                class="content-title"
                data-arb="مع الهدف الأساسي المتمثل في تحسين سلامة النقل وتمكين جهد جماعي لعدم وقوع حوادث أو وفيات متعلقة بالمركبة ، يوفر التعقب Dashcam وأنظمة مساعدة السائق المتقدمة."
                data-en="With the underlying goal of improving transportation safety & enabling a collective effort for zero vehicle related accidents and fatalities, Tracking provides Dashcam and Advanced Driver Assistance Systems in Saudi Arabia. "
            >
              With the underlying goal of improving transportation safety &
              enabling a collective effort for zero vehicle related accidents
              and fatalities, Tracking provides Dashcam and Advanced Driver
              Assistance Systems in Saudi Arabia.
            </span>

                    <span
                        class="content-title"
                        data-arb="وتشمل الميزات:"
                        data-en="Features Include: "
                    >
              Features Include:
            </span>

                    <div class="solution-feature-list d-flex flex-row">
                        <div style="margin-inline-end: 20px">
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" نظام تثبيت السرعة التكيفي"
                                    data-en="Adaptive Cruise Control"
                                >
                    Adaptive Cruise Control
                  </span>
                            </div>

                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" مساعد التوجيه"
                                    data-en="Steer Assist"
                                >
                    Steer Assist
                  </span>
                            </div>

                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" تحذير مغادرة المسار"
                                    data-en="Lane Departure Warning"
                                >
                    Lane Departure Warning
                  </span>
                            </div>
                        </div>
                        <div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" مراقبة النقطة العمياء"
                                    data-en="Blind Spot Monitoring"
                                >
                    Blind Spot Monitoring
                  </span>
                            </div>

                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" تنبيه حركة المرور الخلفية"
                                    data-en="Rear Cross Traffic Alert"
                                >
                    Rear Cross Traffic Alert
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" نظام المساعدة على الركن الأوتوماتيكي بالكامل"
                                    data-en="Fully Automatic Parking Assist"
                                >
                    Fully Automatic Parking Assist
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
                <div
                    class="right-image-solution-content default-margin-solutions-right"
                >
                    <span class="title bold-font-family text-white"> </span>

                    <span class="desc semibold-font-family text-white"> </span>

                    <span class="desc semibold-font-family text-white"> </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-driver-asist"></div>
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
                <source src="{{asset('video/tracking-vid2.mp4')}}" type="video/mp4" />
            </video>
            <span
                class="title bold-font-family text-white"
                data-arb="لماذا Tracking.me؟"
                data-en="Why Tracking.me?"
            >
          Why Tracking.me?
        </span>

            <span
                class="desc semibold-font-family text-white"
                data-arb="لدينا فريق من المطورين والمحللين وفرق الحلول ذوي الخبرة الواسعة ملتزمون وعاطفيون ومستعدون لأن يكونوا مختلفين وجاهزين لتقديم حلول مصممة خصيصًا لتتناسب مع أي نوع من متطلبات العملاء."
                data-en="Our vastly experienced team of Developers, Analysts, and Solution teams are committed, passionate, and willing to be different and ready to provide tailor-made solutions to match any type of customer requirement."
            >
          Our vastly experienced team of Developers, Analysts, and Solution
          teams are committed, passionate, and willing to be different and ready
          to provide tailor-made solutions to match any type of customer
          requirement.
        </span>
        </div>
    </div>
    <!-- Why Tracking  End -->
@endsection
