@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="سائق" data-en="Driver ">
                        Driver
                    </span>

                    <span class="solution-title" data-arb="حل الإدارة" data-en="Management Solution">
                        Management Solution
                    </span>


                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="يقدم TRACKING مجموعة واسعة من الميزات لمساعدة الشركات على إدارة سائقي الأساطيل الخاصة بهم
                        تتبع أنشطتهم. باستخدام أجهزة تحديد الهوية بموجات الراديو (RFID)، يمكنك تقييد إمكانية الوصول إلى الأسطول
                        برامج تشغيل محددة. يحتوي حل إدارة السائق الخاص بنا على الميزات التالية.."
                        data-en="TRACKING offers a wide range of features to help businesses to manage their fleet drivers and to
                        keep track of their activities. With RFIDs, you can restrict the accessibility of the fleet to
                        specific drivers. Our driver management solution has the following features.. ">
                        TRACKING offers a wide range of features to help businesses to manage their fleet drivers and to
                        keep track of their activities. With RFIDs, you can restrict the accessibility of the fleet to
                        specific drivers. Our driver management solution has the following features.
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تتبع مباشر.." data-en="Live tracking.">
                                Live tracking.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="التقارير المتعلقة بالسائقين"
                                data-en="Driver related reports.">
                                Driver related reports.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="وحدة سلوك السائق من خلال القواعد"
                                data-en="Driver behavior module through rules.">
                                Driver behavior module through rules.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="إدارة الطريق" data-en="Route management.">
                                Route management.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="ميزة رفيد" data-en="RFID feature.">
                                RFID feature.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->

    <!-- Elevate Your Business start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="من خلال حلول إدارة السائقين لدينا، يمكنك بسهولة تتبع السائقين الذين تم تعيينهم لمركبات معينة. يمكن تمكين قواعد متعددة يمكنك من خلالها تحليل سلوك السائق.."
                        data-en="With our driver management solutions, you can easily keep track of drivers that are being assigned to specific vehicles. Multiple rules can be enabled through which you can analyze driver behavior.">
                        With our driver management solutions, you can easily keep track of drivers that are being assigned
                        to specific vehicles. Multiple rules can be enabled through which you can analyze driver behavior.
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="الموقع المباشر للأسطول إلى جانب البيانات الأخرى من جهاز التعقب."
                                data-en="Live location of fleet along with other data from tracker.">
                                Live location of fleet along with other data from tracker.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="جميع التقارير المتعلقة بالأسطول وأجهزة الاستشعار والتنبيهات بتنسيق قابل للتصدير."
                                data-en="All reports related to fleet, sensors & alerts in exportable format.">
                                All reports related to fleet, sensors & alerts in exportable format.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="يمكن تمكين جميع القواعد المتعلقة بسلوك السائق وسيتم إعلام الاستخدام من خلال سطح المكتب
                                الإخطارات ودفع الإخطارات."
                                data-en="All rules can be enabled related to driver behavior and use will get notify through desktop notifications and push notifications.">
                                All rules can be enabled related to driver behavior and use will get notify through desktop
                                notifications and push notifications.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="يمكن تعيين الطريق لمركبات محددة"
                                data-en="route can be assign to specific vehicles.">
                                route can be assign to specific vehicles.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="ميزة RFID - لتحديد هوية السائق والتحقق منه"
                                data-en=" RFID feature - for driver identification & verification.">
                                RFID feature - for driver identification & verification.
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="رفع" data-en="Elevate ">
                        Elevate
                    </span>

                    <span class="solution-title" data-arb="عملك" data-en="Your Business">
                        Your Business
                    </span>


                </div>
            </div>
        </div>
    </div>
    <!-- Elevate Your Business End-->

    <!-- Live Tracking Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="title bold-font-family text-white" data-arb="تتبع مباشر" data-en="Live Tracking">
                        Live Tracking
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="عرض الموقع الحالي للسائق على الخريطة وعرض جميع معلومات السائق المرتبطة
                        مع السيارة."
                        data-en="Display current location of driver on the map and Display all the information of driver associated
                        with vehicle.">
                        Display current location of driver on the map and Display all the information of driver associated
                        with vehicle.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="إلى جانب الموقع الحالي على الخريطة، ستكون المعلومات الأخرى، مثل السائق واسم الأصول والسرعة وقراءة عداد المسافات، مرئية أيضًا.."
                        data-en="Along with current location on map, other information i.e driver, asset name, speed , odometer
                        reading will be visible too.">
                        Along with current location on map, other information i.e driver, asset name, speed , odometer
                        reading will be visible too.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يمكن رؤية جميع التنبيهات المحددة، مثل السرعة الزائدة، وتشغيل/إيقاف الإشعال، والكبح القاسي وما إلى ذلك، مع الوقت والتاريخ كما هو موضح
                        تظهر النوافذ المنبثقة والألوان المختلفة تماثيل مختلفة للأسطول."
                        data-en="All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time & date as
                        pop ups and Different colors shows differents statues of fleet.">
                        All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time & date as
                        pop ups and Different colors shows differents statues of fleet.
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
    <!-- Live Tracking End -->

    <!-- Fleet Reports Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-driver-1"></div>

                    <!-- <img src="./img/driver-1.svg" class="image"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="التقارير" data-en="Reports">
                        Reports
                    </span>

                    <span class="desc semibold-font-family"
                        data-arb="تقارير مختلفة تتعلق بالسائق، مثل تقرير تسجيل الدخول وتقرير الأداء وتقرير العمل الإضافي."
                        data-en="Different reports related to driver i.e login report, performance report & overtime report ">
                        Different reports related to driver i.e login report, performance report & overtime report.
                    </span>
                    <span class="desc semibold-font-family" data-arb="تقارير قابلة للتصدير في أشكال مختلفة."
                        data-en="Exportable reports in different formats. ">
                        Exportable reports in different formats.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Fleet Reports End -->

    <!-- Driver behavior module                                                                                                Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="title bold-font-family text-white" data-arb="وحدة سلوك السائق"
                        data-en="Driver behavior module">
                        Driver behavior module
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="يمكن تكوين القواعد على سلوك السائق، ووصوله، وفواصله المفاجئة، وتسارعه غير الضروري، وما إلى ذلك.."
                        data-en="Rules can be configured on the driver’s behavior, access, and sudden breaks, needless accelerations, and so on.">
                        Rules can be configured on the driver’s behavior, access, and sudden breaks, needless accelerations,
                        and so on.
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="سيساعدك تتبع سلوك السائق على تقليل تكلفة الوقود وصيانة المركبات.."
                        data-en="Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance of the vehicles.">
                        Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance of the
                        vehicles.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يتم عرض التنبيهات للمستخدمين في شكل نوافذ منبثقة ورسائل بريد إلكتروني.."
                        data-en="Alerts are shown to users in the form of pop up & emails.">
                        Alerts are shown to users in the form of pop up & emails.
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
    <!-- Driver behavior module
                                                                                                                                                                     End -->
    <!-- Route management Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>

                    <div class="image image-solution image-gps-2"></div>

                    <!-- <img src="./img/gps-2.svg" class="image reverse-image-in-arabic height-unset"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="إدارة الطريق" data-en="Route management">
                        Route management
                    </span>

                    <span class="desc semibold-font-family"
                        data-arb="يمكن إنشاء طرق محددة باستخدام الخريطة أو السياج الجغرافي أو التاريخ.."
                        data-en="Specific routes can be created using map, geofence or history. ">
                        Specific routes can be created using map, geofence or history.
                    </span>
                    <span class="desc semibold-font-family" data-arb="يمكن تعيين الطريق لمركبات وسائق محدد."
                        data-en="Route can be assigned to specific vehicles and driver. ">
                        Route can be assigned to specific vehicles and driver.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="يمكن تحديد وقت وتاريخ الطرق التي سيكون المسار نشطًا خلالها."
                        data-en="Routes time & date can be defined during which route will be active. ">
                        Routes time & date can be defined during which route will be active.
                    </span>

                </div>
            </div>
        </div>
    </div>
    <!-- Route management End -->

    <!-- RFID Functionality start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-content-area">
                    <div class="heading-left" data-arb="وظيفة RFID" data-en="RFID Functionality">RFID Functionality</div>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تحديد هوية السائق والمصادقة عليه باستخدام بطاقات RFID."
                                data-en="Driver identification & authentication using RFID cards.">
                                Driver identification & authentication using RFID cards.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="التحكم في وصول السائق إلى المركبات باستخدام بطاقات RFID."
                                data-en="Access control of driver to vehicles using RFID cards.">
                                Access control of driver to vehicles using RFID cards.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تم دمج تقنية RFID مع التحكم في اشتعال المركبات."
                                data-en="RFID technology is integrated with ignition control of vehicles.">
                                RFID technology is integrated with ignition control of vehicles.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تسجيل البيانات الآلي وتتبع السائقين."
                                data-en="Automated data logging and tracking of drivers.">
                                Automated data logging and tracking of drivers
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    {{-- <span class="solution-tag" data-arb="أسطول" data-en="Fleet">
                        Fleet
                    </span> --}}

                    {{-- <span class="solution-title" data-arb="وظيفة RFID" data-en="RFID Functionality">
                        RFID Functionality
                    </span> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- RFID Functionality end -->

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
