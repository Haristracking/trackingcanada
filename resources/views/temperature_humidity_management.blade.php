@extends('layout.main')
@section('head-scripts')
<title>Follow SFDA to provide Temperature management Solution in All over Saudi Arabia</title>
<meta name="description" content="We stand ready to provide a complete solution for temperature management and vehicle interior temperature monitor with the best international standards.">
<meta name="keywords" content="vehicle temperature monitor, car temperature monitoring, vehicle interior temperature monitor">
@endsection
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
            <span
                class="solution-tag"
                data-arb="درجة الحرارة والرطوبة"
                data-en="Temperature & Humidity"
            >
              Temperature & Humidity
            </span>

                    <span
                        class="solution-title"
                        data-arb="حل الإدارة"
                        data-en="Management Solution"
                    >
              Management Solution
            </span>

                    <span
                        class="solution-sub-title"
                        data-arb="حل إدارة درجة الحرارة والرطوبة مع حماية متقدمة."
                        data-en="Temperature & humidity management solution with advanced protection."
                    >
              Temperature & humidity management solution with advanced
              protection.
            </span>
                </div>
                <div class="col-8 solution-header-content-area">
            <span
                class="content-title"
                data-arb="وفقًا لهيئة الغذاء والدواء السعودية (SFDA) ، فإن نقل وتخزين الأغذية والأدوية يتطلب التحكم الأمثل في درجة الحرارة لتحقيق أعلى معايير السلامة وصحة الإنسان والتغذية."
                data-en="According to the Saudi Food & Drug Authority (SFDA), the transport and storage of Food and Medicine necessitates optimum temperature control to achieve the highest standards of safety, human health, and nutrition."
            >
              According to the Saudi Food & Drug Authority (SFDA), the transport
              and storage of Food and Medicine necessitates optimum temperature
              control to achieve the highest standards of safety, human health,
              and nutrition.
            </span>

                    <span
                        class="content-title"
                        data-arb="يقف مهندسونا وموظفو التصنيع ومراكز الخدمة لدينا على استعداد لتقديم حل كامل لإدارة درجة الحرارة وتلبية المواصفات المطلوبة ورسم خرائط درجات الحرارة بأفضل المعايير الدولية."
                        data-en="Our engineers, manufacturing personnel, and service centers stand ready to provide a complete solution for temperature management, meeting required specifications, and Temperature Mapping with the best international standards."
                    >
              Our engineers, manufacturing personnel, and service centers stand
              ready to provide a complete solution for temperature management,
              meeting required specifications, and Temperature Mapping with the
              best international standards.
            </span>

                    <div class="solution-feature-list d-flex ">
                        <div style="margin-inline-end: 20px">
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb="صيانة درجة حرارة العملية
                  "
                                    data-en="Sensors configured/calibrated for the required circumstances.
                                    "
                                >
                    Process Temperature Maintenance
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb="الحماية من التجمد"
                                    data-en="Put our broad platform of products and extensive application knowledge to work for you.                                    "
                                >
                    Freeze Protection
                  </span>
                            </div>
                        </div>
                        <div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb="حلول فصل الشتاء
                  "
                                    data-en="Meet your budget expectations.                                     "
                                >
                    Freeze Protection
                  </span>
                            </div>
                            <div class="feature">
                                <img src="{{asset('img/arrow-orange.svg')}}" alt="feature arrow" class="feature-arrow" />
                                <span
                                    class="feature-desc"
                                    data-arb="التخزين البارد"
                                    data-en="Process Temperature Maintenance feature."
                                >
                    Cold Storage
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
            <span
                class="title bold-font-family text-white"
                data-arb="الحل الكامل"
                data-en="Complete Solution"
            >
              Complete Solution
            </span>

                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="حل كامل لإدارة درجة الحرارة لتجاوز مواصفات الأداء الخاصة بك ، وتلبية توقعات ميزانيتك ، وتقليل المخاطر على عملياتك الإجمالية."
                        data-en="A complete Temperature Management Solution to exceed your performance specifications, meet your budget expectations, and minimize risk to your overall operations."
                    >
              A complete Temperature Management Solution to exceed your
              performance specifications, meet your budget expectations, and
              minimize risk to your overall operations.
            </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-complete-solution"></div>
                    <!-- <img src="{{asset('img/fleet.svg')}}" class="image image-fleet.svg"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- right image solution feature End -->

    <!--2 left image solution feature Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-freeze"></div>

                    <!-- <img src="{{asset('img/driver-1.svg')}}" class="image"> -->
                </div>

                <div
                    class="left-image-solution-content default-margin-solutions-left"
                >
            <span
                class="title bold-font-family"
                data-arb="الحماية من التجمد"
                data-en="Freeze Protection"
            >
              Freeze Protection
            </span>

                    <span
                        class="desc semibold-font-family"
                        data-arb="توفر منصة حلول إدارة درجة الحرارة الخاصة بنا صيانة درجة حرارة العملية وحماية التجميد / حلول فصل الشتاء للأنابيب والخزانات والصمامات والأجهزة."
                        data-en="Our Temperature Management Solution platform provides Process Temperature Maintenance and freezes protection/Winterization solutions for pipes, tanks, valves, and instrumentation. "
                    >
              Our Temperature Management Solution platform provides Process
              Temperature Maintenance and freezes protection/Winterization
              solutions for pipes, tanks, valves, and instrumentation.
            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- left image solution feature End -->

    <!--1 right image solution feature Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div
                    class="right-image-solution-content default-margin-solutions-right"
                >
            <span
                class="title bold-font-family text-white"
                data-arb="التخزين البارد"
                data-en="Cold Storage"
            >
              Cold Storage
            </span>

                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="حلول خاصة لمخازن التبريد وقطاع النفط والغاز والمستودعات وخزانات التشحيم ومصانع التصنيع."
                        data-en="Special solutions for Cold Store, oil & gas sector, warehouses, lubricant tanks, manufacturing plants."
                    >
              Special solutions for Cold Store, oil & gas sector, warehouses,
              lubricant tanks, manufacturing plants.
            </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-cold-storage"></div>
                    <!-- <img src="{{asset('img/fleet.svg')}}" class="image image-fleet.svg"> -->
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
