@extends('layout.main')
@section('content')
    <!-- Advanced Driver Assistance & Dashcams Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="يتقدم" data-en="Advance">
                        Advance
                    </span>
                    <span class="solution-title" data-arb="Driver Assistance & Dashcams" data-en="Waste management solution"
                        data-arb="حل إدارة النفايات">
                        Waste management solution
                    </span>
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="لا يعد التتبع بمثابة أداة بسيطة لتتبع أسطولك عبر الإنترنت فحسب، بل يمكن أن يكون أيضًا منقذًا للحياة في المواقف الحرجة. يمكن للأجهزة المدمجة مع أنظمتنا ضمان تتبع ليس فقط المركبات ولكن أيضًا أي كائن تقريبًا. تتميز حلول التتبع القياسية لدينا بالميزات التالية"
                        data-en="TRACKING serves not only as a simple tool to track your fleet online, but it can also be a lifesaver in critical situations. The devices that are integrated with our systems can ensure the tracking of not only vehicles but almost any object. Our standard tracking solutions have the following features">
                        TRACKING serves not only as a simple tool to track your fleet online, but it can also be a lifesaver
                        in critical situations. The devices that are integrated with our systems can ensure the tracking of
                        not only vehicles but almost any object. Our standard tracking solutions have the following features

                    </span>

                </div>
            </div>
        </div>
    </div>
    <!-- Advanced Driver Assistance & Dashcams End -->

    <!-- Standard Tracking Solutions Start -->
    <div class="bg-dark our-vision-section">
        <div class="our-vision-main">
            <div class="our-vision-row">
                <div class="our-vision-image">
                    <img src="{{ asset('img/car-rental-app-screen.jpg') }}" alt="horizon image" />
                </div>

                <div class="our-vision-content" style="padding: 20px">
                    <span class="title bold-font-family text-white" style="font-size: 38px" data-arb="حل إدارة النفايات"
                        data-en="Waste Monitoring Solutions">Waste Monitoring Solutions
                    </span>
                    <br>
                    <div class="desc medium-font-family text-white demo-2-container-text-1"
                        data-arb="من خلال حل التتبع الخاص بنا، سيكون لديك إمكانية الوصول إلى بوابة الإدارة بالإضافة إلى ما يمكنك الحصول عليه
                        مستخدمون متعددون لديهم أصول مخصصة محددة، مما يسمح لك بالحصول على أدوار مخصصة اعتمادًا على ذلك
                        رغبتك. للحصول على إمكانية وصول أفضل، سيكون لديك تطبيق للهاتف المحمول يمكنك من خلاله أيضًا
                        ستتمكن من الوصول إلى تتبع سيارتك عن بعد."
                        data-en="With our tracking solution, you will have access to the admin portal along with that you can have
                        multiple users with specific allocated assets, allowing you to have customized roles depending upon
                        your desire. To have better accessibility, you will have a mobile application as well through which
                        you will be able to access your vehicle tracking remotely.">
                        With our tracking solution, you will have access to the admin portal along with that you can have
                        multiple users with specific allocated assets, allowing you to have customized roles depending upon
                        your desire. To have better accessibility, you will have a mobile application as well through which
                        you will be able to access your vehicle tracking remotely.
                    </div>
                    <div class="demo-2-container">
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="عرض الموقع الحالي للمركبات على الخريطة"
                                data-en=" Display current location of vehicles on the map.">
                                Display current location of vehicles on the map.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="تظهر الألوان المختلفة تماثيل مختلفة للمركبات."
                                data-en=" Different colors shows differents statues of vehicles.">
                                Different colors shows differents statues of vehicles.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text"
                                data-arb="إلى جانب الموقع الحالي على الخريطة، ستكون المعلومات الأخرى، مثل السائق واسم الأصول والسرعة وقراءة عداد المسافات، مرئية أيضًا."
                                data-en=" Along with current location on map, other information i.e driver, asset name, speed , odometer reading will be visible too.">
                                Along with current location on map, other information i.e driver, asset name, speed ,
                                odometer reading will be visible too.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text"
                                data-arb="بالنسبة للمركبات المتحركة، سيتمكن المستخدم من رؤية مسار المركبات"
                                data-en="For moving vehicles, user will be able to see the path of vehicles.">
                                For moving vehicles, user will be able to see the path of vehicles.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text"
                                data-arb="يمكن رؤية جميع التنبيهات المحددة، مثل السرعة الزائدة، وتشغيل/إيقاف تشغيل الإشعال، والكبح القاسي، وما إلى ذلك، مع الوقت والتاريخ على شكل نوافذ منبثقة"
                                data-en="All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time & date as pop ups.">
                                All set alerts i.e Over speeding, ignition on/off, harsh braking etc can be seen with time &
                                date as pop ups.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="تعطيل وتعطيل المركبة عن طريق إرسال الأمر"
                                data-en="Immobilizing & demobilizing the vehicle by sending command.">
                                Immobilizing & demobilizing the vehicle by sending command
                            </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Standard Tracking Solution End -->



    <!-- Admin Portal  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="تتبع التاريخ" data-en="History Tracking">
                        History Tracking
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يمكن عرض حركة المسار خطوة بخطوة لأي فترة زمنية محددة مع تمكين المستخدم من تسريع أو إبطاء الحركة."
                                data-en="Can view the movement of path step by step for any specific time period while enabling the user to speed up or slow down the movement.">
                                Can view the movement of path step by step for any specific time period while enabling the
                                user to speed up or slow down the movement.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض إجمالي عدد الكيلومترات" data-en="View total mileage. ">
                                View total mileage.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="الاطلاع على قائمة المخالفات خلال الفترة المحددة"
                                data-en="View the list of violations during the specified period">
                                View the list of violations during the specified period
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض الوقت عند الإشارة إلى أي نقطة في المسار"
                                data-en="Time display when pointing at any point in the path">
                                Time display when pointing at any point in the path
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض العنوان عند وضع علامة على أي نقطة في المسار"
                                data-en="View the address when marking any point in the path.">
                                View the address when marking any point in the path.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_admin-customer-slide.png') }}" alt="horizon image" />
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Portal  End-->

    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="content-title text-white" data-arb="بوابة المشرف" data-en="Admin Portal">
                        Admin Portal
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="بفضل حلنا المتقدم الذي يستخدم Dashcams، يمكنك بسهولة تتبع برامج التشغيل الموجودة
                    المخصصة لمركبات محددة من خلال البث المباشر. سوف تحصل على التنبيهات كلما حدث أي حدث
                    يحدث أي سائق يستخدم الهاتف أو تنبيه التدخين."
                        data-en="With our advanced solution using Dashcams, you can easily keep track of drivers that are being
                        assigned to specific vehicles through live streaming. You will get the alerts whenever any event
                        occurs i.e driver using phone or smoking alert.">
                        With our advanced solution using Dashcams, you can easily keep track of drivers that are being
                        assigned to specific vehicles through live streaming. You will get the alerts whenever any event
                        occurs i.e driver using phone or smoking alert.
                    </span>
                </div>

                <div class="right-image-solution-image">
                    <div class="dark-gradiant"></div>
                    <div class="image image-solution image-fleet1"></div>
                    <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Live Tracking  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_Driver_portal.png') }}" alt="horizon image" />
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="خريطة الحرارة
                    " data-en="Heat Map">
                        Heat Map
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="يظهر المناطق التي زارتها المركبة على الخريطة."
                                data-en="Shows the areas visited by vehicle on map.">
                                Shows the areas visited by vehicle on map.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يُظهر اللون الأخضر المناطق التي يتم زيارتها بشكل أقل بواسطة السيارة"
                                data-en="Green shows the areas which are visited less by vehicle.">
                                Green shows the areas which are visited less by vehicle.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يُظهر اللون الأحمر المناطق التي يتم زيارتها غالبًا بواسطة السيارة."
                                data-en="Red shows the areas which are often visited by vehicle. ">
                                Red shows the areas which are often visited by vehicle.
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Live Tracking  End-->

    <!-- Live User control with roles  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="التقارير
                    " data-en="Reports">
                        Reports
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تقارير مختلفة تتعلق بالمركبة والسائق والرحلات."
                                data-en="Different reports related to vehicle, driver and trips.">
                                Different reports related to vehicle, driver and trips.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="تقارير قابلة للتصدير بتنسيقات مختلفة (Excel، CSV، XML، PDF)"
                                data-en="Exportable reports in different formats (Excel,CSV,XML,PDF).">
                                Exportable reports in different formats (Excel,CSV,XML,PDF).
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يمكن للمستخدم إرسال التقرير بالبريد الإلكتروني إلى صاحب الحساب"
                                data-en="User can email the report to the owner of the account. ">
                                User can email the report to the owner of the account.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_Driver_portal.png') }}" alt="horizon image" />
                </div>
            </div>
        </div>
    </div>
    <!-- Live User control with roles  End-->

    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_Driver_portal.png') }}" alt="horizon image" />
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="وحدة محرك القاعدة
                    "
                        data-en="Rule Engine Module">
                        Rule Engine Module
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="راقب سلوك السائق ووصوله وفواصله المفاجئة وتسارعه غير الضروري وما إلى ذلك.."
                                data-en="Keep an eye on the driver’s behavior, access, and sudden breaks, needless accelerations, and so on.">
                                Keep an eye on the driver’s behavior, access, and sudden breaks, needless accelerations, and
                                so on.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="سيساعدك تتبع سلوك السائق على تقليل تكلفة الوقود وصيانة المركبات."
                                data-en="Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance of the vehicles.">
                                Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance
                                of the vehicles.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يتم عرض التنبيهات للمستخدمين في شكل نوافذ منبثقة ورسائل بريد إلكتروني."
                                data-en="Alerts are shown to users in the form of pop up & emails.">
                                Alerts are shown to users in the form of pop up & emails.
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Live Tracking  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="إدارة السياج الجغرافي " data-en="Geofence Management">
                        Geofence Management
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="رسم مساحة المساحة الجغرافية بسهولة."
                                data-en="Easily draw the area of ​​the geographical space.">
                                Easily draw the area of ​​the geographical space.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="مع كل حركة للمركبة، يقوم النظام بالتحقق من خروج أي من المركبات خارج السياج الجغرافي المسموح بالحركة ضمنه."
                                data-en="With each vehicle movement, the system checks if any of the vehicles exited outside the geographical fence within which movement is permitted.">
                                With each vehicle movement, the system checks if any of the vehicles exited outside the
                                geographical fence within which movement is permitted.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="عند خروج المركبة خارج السياج الجغرافي المحدد لها يقوم النظام بإظهار تنبيهات على الخريطة تشير إلى وجود مخالفة تم تسجيلها."
                                data-en="When a vehicle exits outside the geographical fence specified for it, the system shows alerts on the map indicating the existence of a violation that has been recorded. ">
                                When a vehicle exits outside the geographical fence specified for it, the system shows
                                alerts on the map indicating the existence of a violation that has been recorded.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_Driver_portal.png') }}" alt="horizon image" />
                </div>
            </div>
        </div>
    </div>
    <!-- Live Tracking  End-->






    <!-- Why Tracking  Start -->
    <div class="container-fluid why-tracking-section">
        <div class="why-tracking-main default-margin">
            <video autoplay muted loop>
                <source src="{{ asset('video/tracking-vid2.mp4') }}" type="video/mp4" />
            </video>
            <span class="title bold-font-family text-white" data-arb="لماذا هذا الحل؟" data-en="Why this solution?">
                Why this solution?
            </span>

            <span class="desc semibold-font-family text-white"
                data-arb="يوفر حلنا لوحة إدارة بديهية وسهلة الاستخدام، مما يتيح لك التحكم الكامل في عمليات تأجير السيارات الخاصة بك. بدءًا من إدارة مخزون المركبات وحتى تتبع الحجوزات وإنشاء تقارير مفيدة، تعمل لوحة الإدارة لدينا على تبسيط عمليات الإدارة الخاصة بك، وتمكينك من اتخاذ قرارات قائمة على البيانات وتحسين أعمال التأجير الخاصة بك.."
                data-en="Our solution provides an intuitive and user-friendly Admin Panel, giving you full control over your car rental operations. From managing vehicle inventory to tracking reservations and generating insightful reports, our Admin Panel streamlines your management processes, empowering you to make data-driven decisions and optimize your rental business.">
                Our solution provides an intuitive and user-friendly Admin Panel, giving you full control over your car
                rental operations. From managing vehicle inventory to tracking reservations and generating insightful
                reports, our Admin Panel streamlines your management processes, empowering you to make data-driven decisions
                and optimize your rental business.
            </span>
        </div>
    </div>
    <!-- Why Tracking  End -->
@endsection
