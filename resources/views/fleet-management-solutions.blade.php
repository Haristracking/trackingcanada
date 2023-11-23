@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="أسطول" data-en="Fleet">
                        Fleet
                    </span>

                    <span class="solution-title" data-arb="حل الإدارة" data-en="Management Solution">
                        Management Solution
                    </span>


                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="يقدم TRACKING مجموعة واسعة من الميزات لمساعدة الشركات على إدارة أساطيل مركباتها بكفاءة. تساعد حلول إدارة الأسطول لدينا الشركات على تتبع أسطولها وصيانتها وجميع التقارير المتعلقة بالأسطول. يحتوي حل إدارة الأسطول الخاص بنا على الميزات التالية."
                        data-en="TRACKING offers a wide range of features to help businesses efficiently manage their fleets of vehicles. Our fleet management solutions help businesses keep track of their fleet, their maintenance and all fleet related reporting. Our fleet management solution has the following features. ">
                        TRACKING offers a wide range of features to help businesses efficiently manage their fleets of
                        vehicles. Our fleet management solutions help businesses keep track of their fleet, their
                        maintenance and all fleet related reporting. Our fleet management solution has the following
                        features.
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="Live tracking." data-en="Live tracking.">
                                Live tracking.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تتبع متعدد" data-en="Multi Tracking.">
                                Multi Tracking.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تقارير الأسطول" data-en="Fleet reports.">
                                Fleet reports.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="وحدة الصيانة" data-en="Maintenance module.">
                                Maintenance module.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="إدارة السياج الجغرافي" data-en="Geofence management.">
                                Geofence management.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="ميزة RFID لتعزيز سلامة الأسطول"
                                data-en="RFID feature to enhance safety of fleet.">
                                RFID feature to enhance safety of fleet.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="MDVR والتنبيهات المتعلقة بسلوك السائق"
                                data-en="MDVR & alerts related to driver behavior.">
                                MDVR & alerts related to driver behavior.
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
                        data-arb="مع حلول إدارة الأسطول لدينا، يمكنك بسهولة تتبع جميع الأسطول الخاص بك في منصة واحدة. مع MDVRS، سوف تكون على علم بجميع السائقين الذين يركبون الأسطول."
                        data-en="With our fleet management solutions, you can easily keep track of all your fleet in one platform. With MDVRS, you will be aware of all your drivers riding the fleet.">
                        With our fleet management solutions, you can easily keep track of all your fleet in one platform.
                        With MDVRS, you will be aware of all your drivers riding the fleet.
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
                                data-arb="الموقع المباشر لجميع الأسطول على خرائط منفصلة على نفس الشاشة"
                                data-en="Live location of all the fleet on separate maps on same screen.">
                                Live location of all the fleet on separate maps on same screen.
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
                            <span class="feature-desc" data-arb="تشغيل/إيقاف الإشعال عن بعد من خلال البوابة والتطبيق"
                                data-en="Remotely turn on/off ignition through portal & app.">
                                Remotely turn on/off ignition through portal & app.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تتبع جميع أعمال الصيانة التي تتم في الأسطول"
                                data-en="keep track of all maintenance done in fleet.">
                                keep track of all maintenance done in fleet.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="ويمكن تحديد مناطق محددة للمركبات"
                                data-en=" specific areas can be defined for vehicles.">
                                specific areas can be defined for vehicles.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="يمكن استخدامها لتتبع تحميل وتفريغ الشاحنات"
                                data-en="can be used to keep track of trucks loading and unloading.">
                                can be used to keep track of trucks loading and unloading.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تركيب كاميرات داخل المركبات لمراقبة أنشطة السائق"
                                data-en="Cameras to be installed within vehicles to monitor driver activities.">
                                Cameras to be installed within vehicles to monitor driver activities.
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
                    <div class="title bold-font-family text-white " data-arb="تتبع مباشر" data-en="Live Tracking">
                        Live Tracking
                    </div>
                    <span class="desc semibold-font-family text-white"
                        data-arb="Display current location of fleet on the map and Different colors shows differents statues of fleet.."
                        data-en="Display current location of fleet on the map and Different colors shows differents statues of fleet.">
                        Display current location of fleet on the map and Different colors shows differents statues of fleet.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="بالإضافة إلى الموقع الحالي على الخريطة، معلومات أخرى مثل السائق واسم الأصول والسرعة وعداد المسافات
                        القراءة سوف تكون مرئية أيضا."
                        data-en="Along with current location on map, other information i.e driver, asset name, speed , odometer
                        reading will be visible too.">
                        Along with current location on map, other information i.e driver, asset name, speed , odometer
                        reading will be visible too.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يمكن رؤية جميع التنبيهات المحددة، مثل السرعة الزائدة، وتشغيل/إيقاف الإشعال، والكبح القاسي وما إلى ذلك، مع الوقت والتاريخ كما هو موضح
                        النوافذ المنبثقة وشل حركة الأسطول وتسريحه عن طريق إرسال الأمر."
                        data-en="All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time & date as
                        pop ups and Immobilizing & demobilizing the fleet by sending command.">
                        All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time & date as
                        pop ups and Immobilizing & demobilizing the fleet by sending command.
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
                    <span class="title bold-font-family" data-arb="تقارير الأسطول" data-en="Fleet Reports">
                        Fleet Reports
                    </span>

                    <span class="desc semibold-font-family"
                        data-arb="تقارير الأسطول المختلفة مثل تقرير ملخص الأسطول وتقرير صيانة الأسطول وتقرير أداء المركبة."
                        data-en="Different fleet reports like fleet summary report, fleet maintenance report and vehicle performance report. ">
                        Different fleet reports like fleet summary report, fleet maintenance report and vehicle performance
                        report.
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

    <!-- Theft Control Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="title bold-font-family text-white" data-arb="مكافحة السرقة" data-en="Theft Control">
                        Theft Control
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="تشغيل المحرك عن بعد من خلال البوابة أو تطبيق الهاتف المحمول."
                        data-en="Remotely turning on the engine through portal or mobile app.">
                        Remotely turning on the engine through portal or mobile app.
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="إيقاف تشغيل المحرك عن بعد من خلال البوابة الإلكترونية أو تطبيق الهاتف المحمول."
                        data-en="Remotely turning off the engine through portal or mobile app.">
                        Remotely turning off the engine through portal or mobile app.
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
    <!-- Theft Control End -->

    <!-- Geofence Management Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>

                    <div class="image image-solution image-gps-2"></div>

                    <!-- <img src="./img/gps-2.svg" class="image reverse-image-in-arabic height-unset"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="إدارة السياج الجغرافي" data-en="Geofence Management">
                        Geofence Management
                    </span>

                    <span class="desc semibold-font-family" data-arb="رسم مساحة المساحة الجغرافية بسهولة.."
                        data-en="Easily draw the area of ​​the geographical space. ">
                        Easily draw the area of ​​the geographical space.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="مع كل حركة للمركبة، يقوم النظام بالتحقق من خروج أي من المركبات خارج السياج الجغرافي المسموح بالحركة ضمنه."
                        data-en="With each vehicle movement, the system checks if any of the vehicles exited outside the geographical fence within which movement is permitted. ">
                        With each vehicle movement, the system checks if any of the vehicles exited outside the geographical
                        fence within which movement is permitted.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="عند خروج المركبة خارج السياج الجغرافي المحدد لها يقوم النظام بإظهار تنبيهات على الخريطة تشير إلى وجود مخالفة تم تسجيلها."
                        data-en="When a vehicle exits outside the geographical fence specified for it, the system shows alerts on the map indicating the existence of a violation that has been recorded. ">
                        When a vehicle exits outside the geographical fence specified for it, the system shows alerts on the
                        map indicating the existence of a violation that has been recorded.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="إلى جانب إشعارات سطح المكتب، سيحصل المستخدم أيضًا على إشعارات الدفع على التطبيق أيضًا."
                        data-en="Along with desktop notifications, user will also get push notifications on app as well. ">
                        Along with desktop notifications, user will also get push notifications on app as well.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Geofence Management End -->

    <!-- RFID Functionality start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-content-area">
                    <div class="heading-left" data-arb="وظيفة RFID" data-en="RFID Functionality">RFID Functionality</div>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="تتيح تقنية RFID التقاط بيانات تلقائية ودقيقة للعناصر التي يتم تحميلها على الشاحنات أو تفريغها منها، مما يلغي الحاجة إلى المسح اليدوي وإدخال البيانات."
                                data-en="RFID technology enables automatic and accurate data capture of items being loaded onto or unloaded from trucks, eliminating the need for manual scanning and data entry.">
                                RFID technology enables automatic and accurate data capture of items being loaded onto or
                                unloaded from trucks, eliminating the need for manual scanning and data entry.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="تساعد علامات RFID في التحقق من تحميل العناصر الصحيحة أو تفريغها عن طريق مطابقة العناصر مع أمر الشحن، مما يقلل الأخطاء والتناقضات."
                                data-en="RFID tags help verify that the correct items are being loaded or unloaded by matching the items against the shipment order, reducing errors and discrepancies.">
                                RFID tags help verify that the correct items are being loaded or unloaded by matching the
                                items against the shipment order, reducing errors and discrepancies.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="يمكن لأنظمة RFID تعزيز الأمان من خلال تقييد الوصول إلى مناطق التحميل والتفريغ للموظفين المعتمدين الذين يحملون شارات أو بطاقات RFID، مما يحسن التحكم في العملية."
                                data-en="RFID systems can enhance security by restricting access to loading and unloading areas to authorized personnel with RFID badges or cards, improving control over the process.">
                                RFID systems can enhance security by restricting access to loading and unloading areas to
                                authorized personnel with RFID badges or cards, improving control over the process.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="يوفر نظام RFID رؤية في الوقت الحقيقي لحركة البضائع، مما يتيح تتبع ومراقبة عملية التحميل والتفريغ لضمان الكفاءة والتسليم في الوقت المناسب."
                                data-en="RFID provides real-time visibility into the movement of goods, enabling tracking and monitoring of the loading and unloading process to ensure efficiency and timely deliveries.">
                                RFID provides real-time visibility into the movement of goods, enabling tracking and
                                monitoring of the loading and unloading process to ensure efficiency and timely deliveries.
                            </span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-6 solution-header-title-area">
                    <span class="solution-title" data-arb="وظيفة RFID" data-en="RFID Functionality  ">
                        RFID Functionality
                    </span>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- RFID Functionality end -->

    <!-- MDVRs & alerts related to driver behavior start-->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-driver-1"></div>

                    <!-- <img src="./img/driver-1.svg" class="image"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="MDVRs والتنبيهات المتعلقة بسلوك السائق"
                        data-en="MDVRs and Alerts related to driver behavior">
                        MDVRs and Alerts related to driver behavior

                    </span>

                    <span class="desc semibold-font-family"
                        data-arb="مقاطع فيديو حية للسائق والمركبة من خلال أجهزة MDVR المثبتة."
                        data-en="Live videos of driver & vehicle through installed MDVRs. ">
                        Live videos of driver & vehicle through installed MDVRs.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="تنبيهات فيديو حية لسلوك السائق، مثل استخدام الهاتف أو التدخين"
                        data-en="Live video alerts of driver behavior i.e using phone or smoking. ">
                        Live video alerts of driver behavior i.e using phone or smoking.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="تطبيق Mobile V للوصول إلى مقاطع الفيديو المباشرة لـ MDVRs"
                        data-en="Mobile V-app to access live videos of MDVRs. ">
                        Mobile V-app to access live videos of MDVRs.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- MDVRs & alerts related to driver behavior end-->

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
