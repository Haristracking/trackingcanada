@extends('layout.main')
<style>
@media (max-width: 766px) {
    .solution-tag {
        margin-top: 120px;
    }

    .feature.ali {
        margin-bottom: 50px;
    }
}
</style>
@section('content')
<!-- Solution Header Start -->
<div class="container-fluid solution-header-section page-margin-navbar">
    <div class="container solution-header-main">
        <div class="row solution-header-row">
            <div class="col-4 solution-header-title-area">
                <span class="solution-tag" data-arb="الحيوانات" data-en="Animal"> Animal </span>

                <span class="solution-title" data-arb="حل التتبع" data-en="Tracking">
                    Tracking
                </span>

                <span class="solution-sub-title" data-arb="تتبع الحيوانات بإجراءات أمنية متقدمة."
                    data-en="Animal tracking with advanced security measures.">
                    Animal tracking with advanced security measures.
                </span>
            </div>
            <div class="col-8 solution-header-content-area">
                <span class="content-title"
                    data-arb="نقدم لنا حل تتبع الحيوانات المبتكر و المصمم لتوفير مراقبة دقيقة وتتبع الموقع لمجموعة متنوعة من الحيوانات. مع التكنولوجيا المتقدمة والميزات سهلة الاستخدام، يضمن حلنا سلامة ورفاهية حيواناتك"
                    data-en="Introducing our innovative Animal Tracking Solution, designed to provide accurate monitoring and location tracking for a variety of animals. With advanced technology and user-friendly features, our solution ensures the safety and well-being of your animals.">
                    Introducing our innovative Animal Tracking Solution, designed to provide accurate monitoring and
                    location tracking for a variety of animals. With advanced technology and user-friendly features, our
                    solution ensures the safety and well-being of your animals.
                </span>

                <span class="content-title" data-arb="الميزات بما في ذلك:" data-en=" Features including: ">
                    Features including:
                </span>

                <div class="solution-feature-list d-flex flex-row">
                    <div style="margin-inline-end: 20px">
                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="تتبع في الوقت الفعلي" data-en="Real-time Tracking">
                                Real-time Tracking
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="سياج جغرافي" data-en="Geo-Fencing">
                                Geo-Fencing
                            </span>
                        </div>

                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="واجهة سهلة الاستخدام"
                                data-en="User-Friendly Interface">
                                User-Friendly Interface
                            </span>
                        </div>

                    </div>
                    <div>
                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="رصد الحالة الصحية" data-en="Health Monitoring">
                                Health Monitoring
                            </span>
                        </div>
                        <div class="feature">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="عمر بطارية طويل" data-en="Long Battery Life">
                                Long Battery Life

                            </span>
                        </div>

                        <div class="feature ali">
                            <img src="{{asset('img/arrow-orange.svg')}}" alt="orange arrow" class="feature-arrow" />
                            <span class="feature-desc" data-arb="أمان قوي للبيانات" data-en="Robust Data Security">
                                Robust Data Security
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
            <div class="right-image-solution-content default-margin-solutions-right">
                <span class="title bold-font-family text-white" data-arb="تتبع في الوقت الفعلي مع تراكينج"
                    data-en="Real-time Tracking">
                    Real-time Tracking
                </span>

                <span class="desc semibold-font-family text-white"
                    data-arb="يوفر حل تتبع الحيوانات الخاص بنا تتبع الموقع في الوقت الفعلي، مما يسمح لك بمراقبة مكان وجود حيواناتك بدقة في أي وقت. ابق على اطلاع وتأكد من سلامتهم وأمنهم."
                    data-en="Our Animal Tracking Solution provides real-time location tracking, allowing you to monitor the precise whereabouts of your animals at any given time. Stay updated and ensure their safety and security.">
                    Our Animal Tracking Solution provides real-time location tracking, allowing you to monitor the
                    precise whereabouts of your animals at any given time. Stay updated and ensure their safety and
                    security.
                </span>
            </div>

            <div class="right-image-solution-image">
                <div class="dark-gradiant"></div>
                <div class="image image-solution gps1"></div>
                <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
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
                <div class="image image-solution act_rec"></div>

                <!-- <img src="./img/driver-1.svg" class="image"> -->
            </div>

            <div class="left-image-solution-content default-margin-solutions-left">
                <span class="title bold-font-family" data-arb="سياج جغرافي" data-en="Geo-Fencing
">
                    Geo-Fencing
                </span>

                <span class="desc semibold-font-family"
                    data-arb="قم بإعداد حدود افتراضية باستخدام سياج جغرافي، مما يتيح لك إنشاء مناطق آمنة لحيواناتك. تلقي إشعارات فورية إذا تجولوا خارج المنطقة المحددة، مما يساعدك على اتخاذ إجراء فوري."
                    data-en="Set up virtual boundaries with geo-fencing, enabling you to create safe zones for your animals. Receive instant notifications if they wander outside the designated area, helping you take immediate action.">
                    Set up virtual boundaries with geo-fencing, enabling you to create safe zones for your animals.
                    Receive instant notifications if they wander outside the designated area, helping you take immediate
                    action.
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
            <div class="right-image-solution-content default-margin-solutions-right">
                <span class="title bold-font-family text-white" data-arb="رصد الحالة الصحية"
                    data-en="Health Monitoring">
                    Health Monitoring
                </span>

                <span class="desc semibold-font-family text-white"
                    data-arb="راقب عن كثب رفاهية حيواناتك من خلال ميزة المراقبة الصحية الخاصة بنا. تتبع العلامات الحيوية ومستويات النشاط و المعايير الصحية الأخرى للتأكد من أنها في حالة مثالية."
                    data-en="Keep a close eye on your animals' well-being with our health monitoring feature. Track vital signs, activity levels, and other health parameters to ensure they are in optimal condition.">
                    Keep a close eye on your animals' well-being with our health monitoring feature. Track vital signs,
                    activity levels, and other health parameters to ensure they are in optimal condition.
                </span>
            </div>

            <div class="right-image-solution-image">
                <div class="dark-gradiant"></div>
                <div class="image image-solution health"></div>
                <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
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
                <div class="image image-solution bat_confg"></div>

                <!-- <img src="./img/driver-1.svg" class="image"> -->
            </div>

            <div class="left-image-solution-content default-margin-solutions-left">
                <span class="title bold-font-family" data-arb="عمر بطارية طويل" data-en="Long Battery Life">
                    Long Battery Life
                </span>

                <span class="desc semibold-font-family"
                    data-arb="تم تصميم حلنا للحصول على عمر بطارية طويل، مما يضمن التتبع والمراقبة المستمرة دون انقطاع. كن مطمئنا أنه يمكنك الاعتماد على النظام لفترات طويلة من الزمن."
                    data-en="Our solution is designed to have a long battery life, ensuring continuous tracking and monitoring without interruptions. Rest assured that you can rely on the system for extended periods of time.">
                    Our solution is designed to have a long battery life, ensuring continuous tracking and monitoring
                    without interruptions. Rest assured that you can rely on the system for extended periods of time.
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
            <div class="right-image-solution-content default-margin-solutions-right">
                <span class="title bold-font-family text-white" data-arb="واجهة سهلة الاستخدام"
                    data-en="User-Friendly Interface">
                    User-Friendly Interface
                </span>

                <span class="desc semibold-font-family text-white"
                    data-arb="تجعل واجهتنا البديهية وسهلة الاستخدام من السهل التنقل وإدارة نظام التتبع. يمكنك الوصول إلى المعلومات المهمة وعرض سجل المواقع وتخصيص الإعدادات دون عناء."
                    data-en="Our intuitive and user-friendly interface makes it easy to navigate and manage the tracking system. Access important information, view location history, and customize settings effortlessly.">
                    Our intuitive and user-friendly interface makes it easy to navigate and manage the tracking system.
                    Access important information, view location history, and customize settings effortlessly.
                </span>
            </div>

            <div class="right-image-solution-image">
                <div class="dark-gradiant"></div>
                <div class="image image-solution user"></div>
                <!-- <img src="./img/fleet.svg" class="image image-fleet.svg"> -->
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
                <div class="image image-solution security"></div>

                <!-- <img src="./img/driver-1.svg" class="image"> -->
            </div>

            <div class="left-image-solution-content default-margin-solutions-left">
                <span class="title bold-font-family" data-arb="أمان قوي للبيانات" data-en="Robust Data Security">
                    Robust Data Security
                </span>

                <span class="desc semibold-font-family"
                    data-arb="نحن نعطي الأولوية لأمن وخصوصية بياناتك. يستخدم حل تتبع الحيوانات الخاص بنا تشفيرا قويا وإجراءات أمنية لحماية معلوماتك، مما يمنحك راحة البال."
                    data-en="We prioritize the security and privacy of your data. Our Animal Tracking Solution employs robust encryption and security measures to safeguard your information, giving you peace of mind.">
                    We prioritize the security and privacy of your data. Our Animal Tracking Solution employs robust
                    encryption and security measures to safeguard your information, giving you peace of mind.
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