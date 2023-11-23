@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
            <span class="solution-tag" data-arb="الشحن" data-en="Shipment">
              Shipment
            </span>

                    <span
                        class="solution-title"
                        data-arb="حل التتبع"
                        data-en="Tracking"
                    >
              Tracking
            </span>

                    <span class="solution-sub-title col-10"
                          data-arb="تتبع الشحنات مع الميزات المتقدمة في الوقت الحقيقي."
                          data-en="Shipment tracking with real-time advanced features."
                    >
              Shipment tracking with real-time advanced features.
            </span>
                </div>
                <div class="col-8 solution-header-content-area">
            <span
                class="content-title"
                data-arb="يتم توفير حلول التتبع في الوقت الحقيقي من خلال تتبع الشحنة. تعمل حلولنا على زيادة الرؤية والأفكار التي يمكنك من خلالها تتبع شحنتك في أي مكان وزمان."
                data-en="The real time tracking solutions are provided by the shipment tracking. Our solutions increase the visibility and insights with the help of which you can track your shipment anywhere and anytime. "
            >
              The real time tracking solutions are provided by the shipment
              tracking. Our solutions increase the visibility and insights with
              the help of which you can track your shipment anywhere and
              anytime.
            </span>

                    <span
                        class="content-title"
                        data-arb="تستخدم تقنية الشحن تقنية إنترنت الأشياء المبتكرة والقائمة على البيانات والتي تقدم إخطارات وتنبيهات في الوقت الفعلي عندما تكون الحدود محظورة."
                        data-en="Shipment technology use IoT innovative and data driven technology which gives real time notifications and alerts when boundaries are  prohibited.   "
                    >
              Shipment technology use IoT innovative and data driven technology
              which gives real time notifications and alerts when boundaries are
              prohibited.
            </span>
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
                ></div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-tracking"></div>
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
