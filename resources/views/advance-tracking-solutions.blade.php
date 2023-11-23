@extends('layout.main')
@section('content')
    <!-- Advance Tracking Solutions Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    <span class="solution-tag" data-arb="يتقدم" data-en="Advance">
                        Advance
                    </span>

                    <span class="solution-title" data-arb="حلول التتبع" data-en="Tracking Solutions">
                        Tracking Solutions
                    </span>


                </div>
                <div class="col-6 solution-header-content-area">
                    <span class="content-title"
                        data-arb="يوفر TRACKING حلول تتبع متقدمة بصرف النظر عن التتبع الأساسي الذي يتضمن مراقبة الوزن ومراقبة درجة الحرارة والرطوبة وإدارة الوقود. نحن نوفر أيضًا إمكانية RFID التي تسمح لسائقين محددين فقط بالوصول إلى المركبات. تتميز حلول التتبع المتقدمة لدينا بالميزات التالية."
                        data-en="TRACKING provides advanced tracking solutions apart from basic tracking that includes weight monitoring, temperature & humidity monitoring, fuel management. We also provide RFID capability that allows only specific drivers to access the vehicles. Our advanced tracking solutions have the following features. ">
                        TRACKING provides advanced tracking solutions apart from basic tracking that includes weight
                        monitoring, temperature & humidity monitoring, fuel management. We also provide RFID capability that
                        allows only specific drivers to access the vehicles. Our advanced tracking solutions have the
                        following features.
                    </span>

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="مراقبة الوزن." data-en="Weight Monitoring.">
                                Weight Monitoring.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="مراقبة درجة الحرارة والرطوبة"
                                data-en="Temperature & humidity Monitoring.">
                                Temperature & humidity Monitoring.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="وظيفة RFID" data-en="RFID functionality.">
                                RFID functionality.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تحكم المستخدم مع الأدوار"
                                data-en="User control with roles.">
                                User control with roles.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="مسجلات MDVR للفيديو المباشر وتنبيهات سلوك السائق"
                                data-en="MDVRs for live video & driver behavior alerts.">
                                MDVRs for live video & driver behavior alerts.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="حل ETA للمركبات ذات الرحلة المحددة"
                                data-en="ETA solution for vehicles of specific trip.">
                                ETA solution for vehicles of specific trip.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advance Tracking Solutions End -->

    <!-- second section Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">

                    <span class="desc semibold-font-family text-white"
                        data-arb="من خلال حلول التتبع المتقدمة لدينا، يمكنك مراقبة درجة الحرارة والرطوبة في مخازن التبريد الخاصة بك. ومن خلال مراقبة الوزن، فإننا نسهل على العملاء الذين لديهم وسائل نقل جيدة المساعدة
                        لهم تتبع أوزانهم الجيدة. مع خدمات MDVR، يمكنك بسهولة تتبع أنشطة السائق
                        من خلال المراقبة الحية."
                        data-en="With our advanced Tracking solutions, you can monitor temperature and humidity of your cold
                        storages.With weight monitoring, we facilitate the customers who have good transportation to help
                        them keep track of their good weights. With MDVR services, you can easily track driver activities
                        through live monitoring.">
                        With our advanced Tracking solutions, you can monitor temperature and humidity of your cold
                        storages.With weight monitoring, we facilitate the customers who have good transportation to help
                        them keep track of their good weights. With MDVR services, you can easily track driver activities
                        through live monitoring.
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
    <!-- second section End -->

    <!-- Elevate Your Business start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-content-area">
                    {{-- <span class="content-title"
                        data-arb="من خلال حلول التتبع المتقدمة لدينا، يمكنك مراقبة درجة الحرارة والرطوبة في مخازن التبريد الخاصة بك. ومن خلال مراقبة الوزن، نقوم بتسهيل العملاء الذين لديهم وسائل نقل جيدة لمساعدتهم على تتبع أوزانهم الجيدة. مع خدمات MDVR، يمكنك بسهولة تتبع أنشطة السائق من خلال المراقبة المباشرة."
                        data-en="With our advanced Tracking solutions, you can monitor temperature and humidity of your cold storages.With weight monitoring, we facilitate the customers who have good transportation to help them keep track of their good weights. With MDVR services,  you can easily track driver activities through live monitoring.">
                        With our advanced Tracking solutions, you can monitor temperature and humidity of your cold
                        storages.With weight monitoring, we facilitate the customers who have good transportation to help
                        them keep track of their good weights. With MDVR services, you can easily track driver activities
                        through live monitoring.
                    </span> --}}

                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="الموقع المباشر للمركبة مع البيانات الأخرى من جهاز التعقب."
                                data-en="Live location of vehicle along with other data from tracker.">
                                Live location of vehicle along with other data from tracket.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="تم تجهيز جميع الأساطيل الثقيلة بأجهزة استشعار للوزن لمراقبة الوزن بسلاسة"
                                data-en="All heavy fleet are equipped with weight sensors to seamlessly monitor weight.">
                                All heavy fleet are equipped with weight sensors to seamlessly monitor weight.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="لتتبع حركة باب المركبات ومخازن التبريد."
                                data-en="To keep track of door movement of vehicles & cold storages.">
                                To keep track of door movement of vehicles & cold storages.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="يتم توفير علامات RFID للسائقين لمساعدتهم على الوصول إلى المركبات عن طريق مسحها ضوئيًا باستخدام ماسحات RFID المثبتة"
                                data-en="RFID tags are provided to drivers that will help them to access vehicles by scanning it with installed RFID scanners.">
                                RFID tags are provided to drivers that will help them to access vehicles by scanning it with
                                installed RFID scanners.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="أدوار محددة للمستخدمين للتحكم في الوصول إليها"
                                data-en="Specific roles for users to control its access.">
                                Specific roles for users to control its access.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="تركيب كاميرات داخل المركبات لمراقبة أنشطة السائق"
                                data-en=" Cameras to be installed within vehicles to monitor driver activities.">
                                Cameras to be installed within vehicles to monitor driver activities.
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="أن يكون لديك الوقت المقدر للوصول للرحلات المخصصة للمركبات"
                                data-en="To have estimated time of arrival for assigned trips for vehicles.">
                                To have estimated time of arrival for assigned trips for vehicles.
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

    <!-- Weight Monitoring Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="title bold-font-family text-white" data-arb="مراقبة الوزن" data-en="Weight Monitoring">
                        Weight Monitoring
                    </span>

                    <span class="desc semibold-font-family text-white" data-arb="عرض قراءات الوزن على التتبع المباشر"
                        data-en="Display weight readings on live tracking.">
                        Display weight readings on live tracking.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="عرض قراءة الوزن على تقرير التتبع المباشر."
                        data-en="Display of weight reading on live tracking report.">
                        Display of weight reading on live tracking report.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="من خلال تشابكه مع أدوات التحكم الرئيسية في الرفع، سيعمل حلنا على منع التحميل الزائد على الأسطح (ضمن المعلمات المحددة مسبقًا)."
                        data-en="Interlocked with the main lift controls, our solution will physically prevent overloading decks (within preset parameters).">
                        Interlocked with the main lift controls, our solution will physically prevent overloading decks
                        (within preset parameters).
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يتيح لك حلنا ضمان التوزيع الآمن للحمولة (الحفاظ على مركز الثقل ضمن حدود آمنة) ويضمن عدم تجاوز الحد الأقصى للحمولة الإجمالية."
                        data-en="Our solution allows you to ensure a safe load distribution (keeping the center of gravity within safe boundaries) and guarantees that maximum overall payload is not exceeded.">
                        Our solution allows you to ensure a safe load distribution (keeping the center of gravity within
                        safe boundaries) and guarantees that maximum overall payload is not exceeded.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يقيس الحمولة الصافية بسلاسة أثناء دورة التحميل للمقطورات ذات الطابقين."
                        data-en="Seamlessly measures payload during the loading cycle of double-deck trailers.">
                        Seamlessly measures payload during the loading cycle of double-deck trailers.
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
    <!-- Weight Monitoring End -->

    <!-- Temperature & humidity Monitoring Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-driver-1"></div>

                    <!-- <img src="./img/driver-1.svg" class="image"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="مراقبة درجة الحرارة والرطوبة"
                        data-en="Temperature & humidity Monitoring">
                        Temperature & humidity Monitoring
                    </span>

                    <span class="desc semibold-font-family"
                        data-arb="عرض قراءات درجة الحرارة والرطوبة على التتبع المباشر."
                        data-en="Display temperature & humidity readings on live tracking. ">
                        Display temperature & humidity readings on live tracking.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="عرض قراءة درجة الحرارة والرطوبة على تقرير التتبع المباشر."
                        data-en="Display of temperature & humidity reading on live tracking report. ">
                        Display of temperature & humidity reading on live tracking report.
                    </span>
                    <span class="desc semibold-font-family" data-arb="قاعدة لنطاق محدد من درجات الحرارة والرطوبة."
                        data-en="Rule for specific range of temperature & humidity. ">
                        Rule for specific range of temperature & humidity.
                    </span>
                    <span class="desc semibold-font-family"
                        data-arb="يقوم العميل بإخطار العميل من خلال إشعار البريد الإلكتروني وسطح المكتب عندما تتجاوز درجة الحرارة والرطوبة الحد المحدد."
                        data-en="Customer notifies through email & desktop notification whenever temperature & humidity across the set limit. ">
                        Customer notifies through email & desktop notification whenever temperature & humidity across the
                        set limit.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Temperature & humidity Monitoring End -->

    <!-- Door sensor & buzzer attachment Start -->
    <div class="bg-dark right-image-solution-section">
        <div class="right-image-solution-main">
            <div class="right-image-solution-row">
                <div class="right-image-solution-content default-margin-solutions-right">
                    <span class="title bold-font-family text-white" data-arb="مستشعر الباب ومرفق الجرس"
                        data-en="Door sensor & buzzer attachment">
                        Door sensor & buzzer attachment
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="مستشعر الباب الذي يكتشف فتح/إغلاق باب الأسطول."
                        data-en="Door sensor that detect the opening/closing to door of fleet.">
                        Door sensor that detect the opening/closing to door of fleet.
                    </span>

                    <span class="desc semibold-font-family text-white"
                        data-arb="يتم إرفاق أزرار الذعر بدلاً من الأسطول للسائقين للإشارة إلى أحداث الطوارئ."
                        data-en="Panic buttons are attached instead the fleet for drivers to indicate emergency events.">
                        Panic buttons are attached instead the fleet for drivers to indicate emergency events.
                    </span>
                    <span class="desc semibold-font-family text-white"
                        data-arb="يتم إنشاء تنبيهات الجرس والأبواب ذات الصلة كرسائل بريد إلكتروني وإشعارات سطح المكتب."
                        data-en="Related buzzer & door alerts are generated as emails & desktop notifications.">
                        Related buzzer & door alerts are generated as emails & desktop notifications.
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
    <!-- Door sensor & buzzer attachment End -->

    <!-- RFID Functionality start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-title-area">
                    {{-- <span class="solution-tag" data-arb="أسطول" data-en="Fleet">
                            Fleet
                        </span> --}}

                    <span class="solution-title" data-arb="وظيفة RFID" data-en="RFID Functionality  ">
                        RFID Functionality
                    </span>


                </div>
                <div class="col-6 solution-header-content-area">


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
                                Automated data logging and tracking of drivers.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RFID Functionality end -->

    <!-- User control with roles Start -->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>

                    <div class="image image-solution image-gps-2"></div>

                    <!-- <img src="./img/gps-2.svg" class="image reverse-image-in-arabic height-unset"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="تحكم المستخدم مع الأدوار"
                        data-en="User control with roles">
                        User control with roles
                    </span>

                    <span class="desc semibold-font-family" data-arb="دور مخصص مع الشاشات المطلوبة."
                        data-en="Customized role with desired screens. ">
                        Customized role with desired screens.
                    </span>
                    <span class="desc semibold-font-family" data-arb="يمكن إنشاء مستخدمين فرعيين بأدوار محددة مختلفة."
                        data-en="Can create sub users with different specific roles. ">
                        Can create sub users with different specific roles.
                    </span>
                    <span class="desc semibold-font-family" data-arb="يمنحك ميزة التحكم في وصول المستخدمين الفرعيين لديك."
                        data-en="Gives you the feature to control access of your sub users. ">
                        Gives you the feature to control access of your sub users.
                    </span>

                </div>
            </div>
        </div>
    </div>
    <!-- User control with roles End -->

    <!-- ETA Solution start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container solution-header-main">
            <div class="row solution-header-row">
                <div class="col-6 solution-header-content-area">


                    <div class="solution-feature-list">
                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="إنشاء محطة للمركبات."
                                data-en="Station creation for vehicles.">
                                Station creation for vehicles.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc" data-arb="إنشاء مسار محدد باستخدام محطات متعددة."
                                data-en="Specific route creation using multiple stations.">
                                Specific route creation using multiple stations.
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{ asset('img/arrow-orange.svg') }}" class="feature-arrow" alt="feature arrow" />
                            <span class="feature-desc"
                                data-arb="مراقبة حية لوقت الوصول المتوقع على الشاشة المثبتة في الحافلات."
                                data-en="Live ETA monitoring on screen installed in buses.">
                                Live ETA monitoring on screen installed in buses.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 solution-header-title-area">
                    {{-- <span class="solution-tag" data-arb="أسطول" data-en="Fleet">
                                Fleet
                            </span> --}}
                    <span class="solution-title" data-arb="حل ايتا" data-en="ETA Solution">
                        ETA Solution
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- ETA Solution end -->

    <!--  MDVRs for live video & driver behavior alerts start-->
    <div class="bg-white left-image-solution-section">
        <div class="left-image-solution-main">
            <div class="left-image-solution-row">
                <div class="left-image-solution-image">
                    <div class="light-gradiant"></div>
                    <div class="image image-solution image-driver-1"></div>

                    <!-- <img src="./img/driver-1.svg" class="image"> -->
                </div>

                <div class="left-image-solution-content default-margin-solutions-left">
                    <span class="title bold-font-family" data-arb="مسجلات MDVR للفيديو المباشر وتنبيهات سلوك السائق"
                        data-en=" MDVRs for live video & driver behavior alerts">
                        MDVRs for live video & driver behavior alerts

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
    <!--  MDVRs for live video & driver behavior alerts end-->

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
