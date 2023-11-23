@extends('layout.main')
@section('head-scripts')
<title>solid waste management | Waste Management Solutions| Saudi Arabia</title>
<meta name="description" content="We Provide Asset Location Tracking | Collecting/Washing Supervision | Periodic Reporting | Bin/Asset Maintenance Tracking | Durable Tags in All over Saudi Arabia.">
<meta name="keywords" content="waste management, solid waste management, Advance Waste Management Solutions">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
            <span class="solution-tag" data-arb="نفايات" data-en="Waste">
              Waste
            </span>

                    <span
                        class="solution-title"
                        data-arb=" حل إدارة النفايات"
                        data-en="Management Solution"
                    >
              Management Solution
            </span>

                    <span
                        class="solution-sub-title"
                        data-arb="أمانة جدة المعتمدة لحل إدارة النفايات"
                        data-en="Jeddah Amanah approved Waste Management Solution"
                    >
              Jeddah Amanah approved Waste Management Solution
            </span>
                </div>
                <div class="col-8 solution-header-content-area">
            <span
                class="content-title"
                data-arb="يعمل مقاولو إدارة النفايات التابعون لأمانة جدة بموجب لوائح إلزامية تضعها الهيئة.
              "
                data-en="Waste management contractors under Jeddah Amanah are working under compulsory regulations set by the authority.
"
            >
              Waste management contractors under Jeddah Amanah are working under
              compulsory regulations set by the authority.
            </span>
                    <span
                        class="content-title"
                        data-arb="تم اعتماد التتبع لتوفير حلول مصممة خصيصًا مع أجهزة قراءة RFID عالية الأداء مع هوائي مدمج وعلامات دائمة يمكن تثبيتها في أي نوع من حاويات النفايات من أجل جعل شركات إدارة النفايات تلبي المعايير المحددة التي تم وضعها وتتوافق معها من النقابه."
                        data-en="Tracking is accredited for the provision of tailored made solutions with high-performance RFID readers with integrated antenna and enduring tags which can be installed in any kind of waste container In order to make the waste management companies meet and comply with the specific standards that were set by Naqabah."
                    >
              Tracking is accredited for the provision of tailored made
              solutions with high-performance RFID readers with integrated
              antenna and enduring tags which can be installed in any kind of
              waste container In order to make the waste management companies
              meet and comply with the specific standards that were set by
              Naqabah.
            </span>
                    <div class="solution-feature-list d-flex flex-row">
                        <div style="margin-inline-end: 20px">
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" تتبع موقع الصندوق / الأصول
                  "
                                    data-en="Bin/Asset Location Tracking
"
                                >
                    Bin/Asset Location Tracking
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" جمع الحاويات / الإشراف على الغسيل
                  "
                                    data-en="Bin Collecting/Washing Supervision
"
                                >
                    Bin Collecting/Washing Supervision
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" التقارير الدورية"
                                    data-en="Periodic Reporting"
                                >
                    Periodic Reporting
                  </span>
                            </div>
                        </div>
                        <div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" تتبع صيانة الصندوق / الأصول
                  "
                                    data-en="Bin/Asset Maintenance Tracking
"
                                >
                    Bin/Asset Maintenance Tracking
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb=" علامات دائمة"
                                    data-en="Durable Tags"
                                >
                    Durable Tags
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
                    <div class="image image-solution image-smart-waste"></div>
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
