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
                    <span class="solution-title" data-arb="Driver Assistance & Dashcams" data-en="Weight Monitoring Solutions"
                        data-arb="حلول مراقبة الوزن">
                        Weight Monitoring Solutions
                    </span>
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="بموجب اللوائح التي وضعتها الهيئة العامة للنقل، يجب أن تكون جميع المركبات الثقيلة مجهزة بجهاز تتبع GPS بالإضافة إلى أجهزة استشعار الوزن.

                        يشتمل حلنا المتقدم لمراقبة الوزن على أحدث أجهزة إنترنت الأشياء لضمان استيفاء جميع اللوائح.."
                        data-en="Under the regulations set forth by Transport General Authority, all heavy vehicles are to be equipped with a GPS tracking device along with weight sensors.

                        Our Advanced Weight Monitoring solution incorporates the latest IoT devices to ensure that all regulations are met.
                        .">
                        Under the regulations set forth by Transport General Authority, all heavy vehicles are to be
                        equipped with a GPS tracking device along with weight sensors.

                        Our Advanced Weight Monitoring solution incorporates the latest IoT devices to ensure that all
                        regulations are met.

                    </span>

                    {{-- <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="الوضع المباشر لكاميرات Dashcam."
                                data-en="Live status of dashcams.">
                                Live status of dashcams.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="مراقبة حية للسائق والمركبة باستخدام Dashcams"
                                data-en="Live monitoring of driver & vehicle using dashcams.">
                                Live monitoring of driver & vehicle using dashcams.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="مراقبة التاريخ" data-en="History monitoring.">
                                History monitoring.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تنبيهات الفيديو الحية المتعلقة بسلوك السائق"
                                data-en="Live video alerts related to driver behavior.">
                                Live video alerts related to driver behavior.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="إعداد التقارير" data-en="Reporting.">
                                Reporting.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="حل ETA للمركبات ذات الرحلة المحددة"
                                data-en="ETA solution.">
                                ETA solution.
                            </span>
                        </div>
                    </div> --}}
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
                    <span class="title bold-font-family text-white" style="font-size: 38px" data-arb="حلول مراقبة الوزن"
                        data-en="Weight Monitoring Solutions">Weight Monitoring Solutions
                    </span>
                    <br>
                    <div class="desc medium-font-family text-white demo-2-container-text-1"
                        data-arb="تقدم شركة Solutions by Tracking أحدث أجهزة الإنترنت للتحكم في الوزن لضمان الالتزام بجميع اللوائح التي وضعتها (TGA).!"
                        data-en="Solutions by Tracking offers the latest internet devices for weight control to ensure compliance with all regulations set by (TGA).!">
                        Solutions by Tracking offers the latest internet devices for weight control to ensure compliance
                        with all regulations set by (TGA).!
                    </div>
                    <div class="demo-2-container">
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="مراقبة الوزن على التتبع المباشر"
                                data-en=" Weight Monitoring on live Tracking.">
                                Weight Monitoring on live Tracking.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="التقارير المتعلقة بالوزن."
                                data-en=" Weight related reports.">
                                Weight related reports.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="ضوابط المستخدم مع الأدوار."
                                data-en=" User controls with roles.">
                                User controls with roles.
                            </span>
                        </div>
                        <div class="demo-2">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="orange arrow" class="feature-arrow" />
                            <span class="demo-2-text" data-arb="إدارة السياج الجغرافي.." data-en="Geofence management.">
                                Geofence management.
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
                    <span class="content-title" data-arb="بوابة المشرف" data-en="Admin Portal">
                        Admin Portal
                    </span>
                    <p data-arb="من خلال حل مراقبة الوزن الخاص بنا، يمكنك مراقبة وزن وفولتية حمولة مركباتك الثقيلة. من خلال مراقبة الوزن، بمساعدة أجهزة استشعار الوزن، يمكنك بسهولة تتبع تحميل وتفريغ/تفريغ البضائع."
                        data-en="With our weight monitoring solution, you can monitor the weight and voltages of load of your heavy vehicles. With weight monitoring, With help of weight sensors, you can easily track the loading and unloading/dumping of the goods.">
                        With our weight monitoring solution, you can monitor the weight and voltages of load of your heavy
                        vehicles. With weight monitoring, With help of weight sensors, you can easily track the loading and
                        unloading/dumping of the goods.</p>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض قراءات الوزن على التتبع المباشر."
                                data-en="Display weight readings on live tracking.">
                                Display weight readings on live tracking.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض قراءة الوزن على تقرير التتبع المباشر.."
                                data-en="Admin will be able to manage the routes. ">
                                Display of weight reading on live tracking report.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="ومن خلال تشابكه مع أدوات التحكم الرئيسية في الرفع، سيعمل حلنا على منع التحميل الزائد على الأسطح (ضمن المعلمات المحددة مسبقًا)."
                                data-en="Interlocked with the main lift controls, our solution will physically prevent overloading decks (within preset parameters)..                                 ">
                                Interlocked with the main lift controls, our solution will physically prevent overloading
                                decks (within preset parameters).
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يتيح لك حلنا ضمان التوزيع الآمن للحمولة (الحفاظ على مركز الثقل ضمن حدود آمنة) ويضمن عدم تجاوز الحد الأقصى للحمولة الإجمالية"
                                data-en="Our solution allows you to ensure a safe load distribution (keeping the center of gravity within safe boundaries) and guarantees that maximum overall payload is not exceeded">
                                Our solution allows you to ensure a safe load distribution (keeping the center of gravity
                                within safe boundaries) and guarantees that maximum overall payload is not exceeded.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="يقيس الحمولة الصافية بسلاسة أثناء دورة التحميل للمقطورات ذات الطابقين"
                                data-en="Seamlessly measures payload during the loading cycle of double-deck trailers">
                                Seamlessly measures payload during the loading cycle of double-deck trailers.
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
                    <span class="content-title" data-arb="التقارير المتعلقة بالوزن
                    "
                        data-en="Weight related Reports">
                        Weight related Reports
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تتبع تقرير البيانات مع تفاصيل الوزن وجهد الحمل."
                                data-en="Track data report with weight & load voltages details..">
                                Track data report with weight & load voltages details..
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تحميل/تفريغ التقرير" data-en="Loading/dumping report.">
                                Loading/dumping report.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="تقارير قابلة للتصدير بتنسيقات مختلفة (Excel، CSV، XML، PDF)."
                                data-en="Exportable reports in different formats (Excel,CSV,XML,PDF). ">
                                Exportable reports in different formats (Excel,CSV,XML,PDF).
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
                    <span class="content-title" data-arb="تحكم المستخدم مع الأدوار
                    "
                        data-en="User control with roles">
                        User control with roles
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="دور مخصص مع الشاشات المطلوبة."
                                data-en="Customized role with desired screens.">
                                Customized role with desired screens.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="يمكن إنشاء مستخدمين فرعيين بأدوار محددة مختلفة"
                                data-en="Can create sub users with different specific roles.">
                                Can create sub users with different specific roles.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="يمنحك ميزة التحكم في وصول المستخدمين الفرعيين لديك."
                                data-en="Gives you the feature to control access of your sub users. ">
                                Gives you the feature to control access of your sub users.
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

    <!-- Live Tracking  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <img src="{{ asset('img/car_Driver_portal.png') }}" alt="horizon image" />
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="إدارة السياج الجغرافي
                "
                        data-en="Geofence Management">
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
