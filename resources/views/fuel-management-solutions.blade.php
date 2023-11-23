@extends('layout.main')
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar ">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="وقود" data-en="Fuel">
                        Fuel
                    </span>

                    <span class="solution-title" data-arb="الحلول الإدارية" data-en="Management Solutions"
                        style="max-width: 500px">
                        Management Solutions
                    </span>

                    {{-- <span class="solution-sub-title" data-arb="نظام مساعدة السائق المستقبلي"
                        data-en="A futuristic driver assistance system">
                        A futuristic driver assistance system
                    </span> --}}
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="يقدم TRACKING مجموعة واسعة من الميزات لمساعدة الشركات على مراقبة مستوى الوقود لديها بمساعدة التتبع المباشر والتقارير. بمساعدة تمكين التنبيه، سيتم إخطار المستخدمين كلما زاد الوقود أو انخفض عن حد معين للوقود. يتميز حل إدارة الوقود الخاص بنا بالميزات التالية"
                        data-en="TRACKING offers a wide range of features to help businesses to monitor their fuel level with help of live tracking and reports. With the help of enabling alerting, users will be notified whenever fuel increases or decreases a specific threshold of fuel. Our fuel management solution has the following features. ">
                        TRACKING offers a wide range of features to help businesses to monitor their fuel level with help of
                        live tracking and reports. With the help of enabling alerting, users will be notified whenever fuel
                        increases or decreases a specific threshold of fuel. Our fuel management solution has the following
                        features.
                    </span>

                    <span class="content-title" data-arb="وتشمل الميزات:" data-en="Features Include: ">
                        Features Include:
                    </span>

                    <div class="solution-feature-list d-flex flex-row">
                        <div style="margin-inline-end: 20px">
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="تتبع مباشر" data-en="Live tracking">
                                    Live tracking
                                </span>
                            </div>

                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb=" التقارير المتعلقة بالوقود"
                                    data-en="Fuel related reports">
                                    Fuel related reports
                                </span>
                            </div>

                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb=" الرسم البياني للوقود" data-en="Fuel graph">
                                    Fuel graph
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="قواعد تمكين مستويات الوقود المنخفضة/المرتفعة"
                                    data-en="Rules enabling for low/high fuel levels">
                                    Rules enabling for low/high fuel levels
                                </span>
                            </div>

                            <div class="feature">
                                <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                                <span class="feature-desc" data-arb="وحدة إدارة الوقود" data-en="Fuel management module">
                                    Fuel management module
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->

    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="مع حلول إدارة الوقود لدينا، يمكنك بسهولة تتبع الوقود المستهلك واستهلاك الوقود للمركبات. بمساعدة التنبيهات، سيتم إخطار المستخدمين عندما يتجاوز الوقود أو يقل عن قيمة عتبة محددة"
                        data-en="With our fuel management solutions, you can easily keep track of fuel consumed & fuel consumption of vehicles. With help of alerts, users will get notified whenever fuel goes above or less a defined threshold value.">
                        With our fuel management solutions, you can easily keep track of fuel consumed & fuel consumption of
                        vehicles. With help of alerts, users will get notified whenever fuel goes above or less a defined
                        threshold value.
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="التتبع المباشر - مراقبة حية للمركبة مع قيمة الوقود"
                                data-en="Live tracking - Live vehicle monitoring with fuel value.">
                                Live tracking - Live vehicle monitoring with fuel value.

                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="التقارير المتعلقة بالوقود - جميع التقارير المتعلقة باستهلاك الوقود"
                                data-en="Fuel related reports - All reports related to fuel consumption. ">
                                Fuel related reports - All reports related to fuel consumption.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="الرسم البياني للوقود - تمثيل رسومي للوقود"
                                data-en="Fuel graph - Graphical representation of fuel.                                 ">
                                Fuel graph - Graphical representation of fuel .
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="قواعد المحرك - قاعدة تمكين مستويات الوقود المنخفضة/المرتفعة"
                                data-en=" Rules engine - Rule enabling for low/high fuel levels.">
                                Rules engine - Rule enabling for low/high fuel levels.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="وحدة إدارة الوقود - تفاصيل الوقود والوقود المستهلك"
                                data-en=" Fuel management module - Fuel details & fuel consumed.">
                                Fuel management module - Fuel details & fuel consumed.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="الوزن" data-en="Elevate">
                        Elevate
                    </span>

                    <span class="solution-title" data-arb="عملك مع حل إدارة الوقود"
                        data-en="Your Business with fuel management solution">
                        Your Business with fuel management solution
                    </span>

                    <span class="solution-sub-title" data-arb="حل مراقبة الوزن مع إجراءات متطورة سلسة."
                        data-en="fuel management solution with advanced seamless measures.">
                        fuel management solution with advanced seamless measures.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->

    <!-- Live Tracking  start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="تتبع مباشر" data-en="Live Tracking">
                        Live Tracking
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض الموقع الحالي للسائق على الخريطة"
                                data-en="Display current location of driver on the map.">
                                Display current location of driver on the map.

                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عرض جميع معلومات السائق المرتبطة بالمركبة"
                                data-en="Display all the information of driver associated with vehicle. ">
                                Display all the information of driver associated with vehicle.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="تظهر الألوان المختلفة تماثيل مختلفة للأسطول: الأصفر: الأخضر الخامل: الأحمر المتحرك: إيقاف الإشعال الرمادي: عدم الإبلاغ"
                                data-en="Different colors shows differents statues of fleet.                                 ">
                                Different colors shows differents statues of fleet
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="قيمة الوقود المتبقية على الخريطة"
                                data-en=" Fuel remaining value on map.">
                                Fuel remaining value on map.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Live Tracking  End-->

    <!-- Reports Start -->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="التقارير" data-en="Reports">
                        Reports
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تتبع تقرير البيانات مع تفاصيل الوقود"
                                data-en="Track data report with fuel details.">
                                Track data report with fuel details.

                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تقرير تعبئة الوقود" data-en="Fuel refilled report. ">
                                Fuel refilled report.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="تقارير قابلة للتصدير بتنسيقات مختلفة (Excel، CSV، XML، PDF)"
                                data-en="Exportable reports in different formats (Excel,CSV,XML,PDF).                                 ">
                                Exportable reports in different formats (Excel,CSV,XML,PDF)
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                </div>
            </div>
        </div>
    </div>
    <!-- Reports End   -->

    <!--1 right image solution feature Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
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

    <!-- Rule Engine Start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="محرك القاعدة" data-en="Rule Engine">
                        Rule Engine
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="قاعدة زيادة الوقود - يتم تفعيلها عندما يتجاوز الوقود الحد المحدد"
                                data-en="Fuel increase rule - triggered when fuel goes above the set limit.">
                                Fuel increase rule - triggered when fuel goes above the set limit.

                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="قاعدة خفض الوقود - يتم تشغيلها عندما ينخفض ​​الوقود إلى أقل من ذلك"
                                data-en="Fuel decrease rule - triggered when fuel goes below    . ">
                                Fuel decrease rule - triggered when fuel goes below.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc"
                                data-arb="سيحصل المستخدمون على إشعارات سطح المكتب وتنبيهات الرسائل القصيرة والبريد الإلكتروني"
                                data-en="Users will get desktop notification, sms and email alerts.                                 ">
                                Users will get desktop notification, sms and email alerts
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rule Engine End -->

    <!-- Fuel Management module start-->
    <div class="container-fluid solution-header-section">
        <div class="container solution-header-main">
            <div class="row solution-header-row">

                <div class="col-6 solution-header-content-area">
                    <span class="content-title" data-arb="وحدة إدارة الوقود" data-en="Fuel Management module">
                        Fuel Management module
                    </span>
                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تفاصيل الوقود لكل حساب."
                                data-en="Fuel details for each account.">
                                Fuel details for each account.

                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تفاصيل استهلاك الوقود للأصل فيما يتعلق بالتاريخ والوقت"
                                data-en="Fuel consumed details for asset with respect to date and time. ">
                                Fuel consumed details for asset with respect to date and time.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" alt="feature arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تقارير تفاصيل الوقود والوقود المستهلك"
                                data-en="Reports of fuel details and fuel consumed.">
                                Reports of fuel details and fuel consumed.
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                </div>
            </div>
        </div>
    </div>
    <!-- Fuel Management module end -->

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
