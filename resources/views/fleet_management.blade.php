@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-4 solution-header-title-area">
            <span class="solution-tag" data-arb="أسطول" data-en="Fleet">
              Fleet
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
                        data-arb="حل إدارة الأسطول بميزات متقدمة."
                        data-en="Fleet management solution with advanced features."
                    >
              Fleet management solution with advanced features.
            </span>
                </div>
                <div class="col-8 solution-header-content-area">
            <span
                class="content-title"
                data-arb="يتيح حل إدارة الأسطول المتقدم لدينا لمديري الأساطيل الحصول على نظرة عامة شاملة لجميع مركباتهم ، مما يسمح لهم بإدارة شبكة مركباتهم بالكامل من خلال وسيط واحد."
                data-en="Our advanced fleet management solution enables fleet managers to get an holistic overview of all their vehicles, allowing them to manage their entire vehicle network through a single medium. "
            >
              Our advanced fleet management solution enables fleet managers to
              get an holistic overview of all their vehicles, allowing them to
              manage their entire vehicle network through a single medium.
            </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                            <span
                                class="feature-desc"
                                data-arb="سجل الرحلة مع إمكانية التشغيل."
                                data-en="Trip history with playback capability."
                            >
                  Trip history with playback capability.
                </span>
                        </div>

                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                            <span
                                class="feature-desc"
                                data-arb="تحديد عوامل خفض التكلفة."
                                data-en="Identification of cost-reducing factors."
                            >
                  Identification of cost-reducing factors.
                </span>
                        </div>

                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                            <span
                                class="feature-desc"
                                data-arb="الاحتفاظ بسجلات نشاط السيارة لمدة تصل إلى 30 يومًا."
                                data-en="Keep records of vehicle activity for up to 30 days."
                            >
                  Keep records of vehicle activity for up to 30 days.
                </span>
                        </div>

                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="feature arrow" />
                            <span
                                class="feature-desc"
                                data-arb="حدد السائقين الجيدين والسيئين في أسطولك."
                                data-en="Identify the good and bad drivers in your fleet."
                            >
                  Identify the good and bad drivers in your fleet.
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->

    <!-- right image solution feature Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div
                    class="right-image-solution-content default-margin-solutions-right"
                >
            <span
                class="title bold-font-family text-white"
                data-arb="إدارة الأسطول"
                data-en="Fleet Management"
            >
              Fleet Management
            </span>

                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="قلل عبء العمل على إدارة الأسطول والمركبات من خلال حلول التتبع المتقدمة وميزات إدارة الأسطول."
                        data-en="Reduce your workload of fleet and vehicle management with our advanced tracking solutions and fleet management features."
                    >
              Reduce your workload of fleet and vehicle management with our
              advanced tracking solutions and fleet management features.
            </span>
                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="تسمح حلولنا أيضًا بالتعامل مع عمليات تسليم الطلبات في أ
بطريقة فعالة وفي الوقت المناسب ويساعد أيضًا في تقليل تكاليف صيانة السيارة."
                        data-en="Our solutions also allows for the handling of order deliveries in a timely and efficient manner and also helps reduce vehicle maintenance costs."
                    >
              Our solutions also allows for the handling of order deliveries in
              a timely and efficient manner and also helps reduce vehicle
              maintenance costs.
            </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-fleet"></div>
                    <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- right image solution feature End -->

    <!-- left image solution feature Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-driver-1"></div>

                    <!-- <img src="./img/driver-1.svg" class="image"> -->
                </div>

                <div
                    class="left-image-solution-content default-margin-solutions-left"
                >
            <span
                class="title bold-font-family"
                data-arb="حلول لتحديات السائق"
                data-en="Driver Challenge Resolution"
            >
              Driver Challenge Resolution
            </span>

                    <span
                        class="desc semibold-font-family"
                        data-arb="ساعد سائقي أسطولك في التغلب على تحدياتهم من خلال السماح لحلولنا بإظهار مخرج لهم من حركة المرور ، والاتصال بخدمات الطوارئ بلمسة واحدة على زر ، وتنبيههم إلى إجراءات الصيانة المجدولة."
                        data-en="Help your fleet drivers overcome their challenges by allowing our solution to show them a way out of traffic, contact emergency services with a single touch of a button, and alerting them for scheduled maintenance routines. "
                    >
              Help your fleet drivers overcome their challenges by allowing our
              solution to show them a way out of traffic, contact emergency
              services with a single touch of a button, and alerting them for
              scheduled maintenance routines.
            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- left image solution feature End -->

    <!-- right image solution feature Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div
                    class="right-image-solution-content default-margin-solutions-right"
                >
            <span
                class="title bold-font-family text-white"
                data-arb="تتبع سلوك السائق"
                data-en="Driver Behavior Tracking"
            >
              Driver Behavior Tracking
            </span>

                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="راقب سلوك السائق ، وإمكانية الوصول ، والفواصل المفاجئة ، والتسارع غير الضروري ، وما إلى ذلك."
                        data-en="Keep an eye on the driver’s behavior, access, and sudden breaks, needless accelerations, and so on."
                    >
              Keep an eye on the driver’s behavior, access, and sudden breaks,
              needless accelerations, and so on.
            </span>

                    <span
                        class="desc semibold-font-family text-white"
                        data-arb="سيساعدك تتبع سلوك السائق على تقليل تكلفة الوقود وصيانة المركبات. يسمح حلنا أيضًا بتحسين أداء السائق بشكل تدريجي."
                        data-en="Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance of the vehicles. Our solution also allows for the improvement of driver performance gradually."
                    >
              Keeping track of the driver’s behavior will help you reduce the
              cost of fuel and maintenance of the vehicles. Our solution also
              allows for the improvement of driver performance gradually.
            </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>

                    <div class="image image-solution image-driver-2"></div>

                    <!-- <img src="./img/driver-2.svg" class="image"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- right image solution feature End -->

    <!-- left image solution feature Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>

                    <div class="image image-solution image-gps-2"></div>

                    <!-- <img src="./img/gps-2.svg" class="image reverse-image-in-arabic height-unset"> -->
                </div>

                <div
                    class="left-image-solution-content default-margin-solutions-left"
                >
            <span
                class="title bold-font-family"
                data-arb="تتبع المركبات عبر نظام تحديد المواقع العالمي (GPS)"
                data-en="GPS Vehicle Tracking"
            >
              GPS Vehicle Tracking
            </span>

                    <span
                        class="desc semibold-font-family"
                        data-arb="تتبع جميع مركباتك وأصولك من خلال نظام تتبع المركبات عبر نظام تحديد المواقع العالمي (GPS) المباشر."
                        data-en="Track all your vehicles and assets with our live GPS vehicle tracking system. "
                    >
              Track all your vehicles and assets with our live GPS vehicle
              tracking system.
            </span>
                    <span
                        class="desc semibold-font-family"
                        data-arb="ساعات عمل السجلات والساعات التي قضاها خلف عجلة القيادة."
                        data-en="Records hours worked and hours spent behind the wheel. "
                    >
              Records hours worked and hours spent behind the wheel.
            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- left image solution feature End -->

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
