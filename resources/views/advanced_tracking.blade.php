@extends('layout.main')
@section('content')
<!-- Solution Header Start -->
<div class="container-fluid solution-header-section page-margin-navbar">
    <div class="container solution-header-main">
        <div class="row solution-header-row">
            <div class="col-4 solution-header-title-area">
                <span class="solution-tag" data-arb="متقدم" data-en="Advanced">
                    Advanced
                </span>
                <span class="solution-title" data-arb="حل التتبع" data-en="Tracking Solution">
                    Tracking Solution
                </span>

                <span class="solution-sub-title" data-arb="حل متقدم لتتبع المركبات وإدارة الأسطول."
                    data-en="Advanced vehicle tracking and fleet management solution.">
                    Advanced vehicle tracking and fleet management solution.
                </span>
            </div>
            <div class="col-8 solution-header-content-area">
                <span class="content-title"
                    data-arb="يمكن لأجهزة التتبع المتقدمة المدمجة مع أنظمتنا أن تضمن تتبع ليس فقط السائقين ومركباتهم ولكن تقريبًا أي شئ."
                    data-en="Advanced Tracking devices that are integrated with our systems can ensure tracking of not only drivers and their vehicles but almost any object.">
                    Advanced Tracking devices that are integrated with our systems can
                    ensure tracking of not only drivers and their vehicles but almost
                    any object.
                </span>

                <div class="solution-feature-list">
                    <div class="feature">
                        <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="arrow" />
                        <span class="feature-desc" data-arb="مراقبة والتحكم في جميع الميزات المتاحة للمركبة والسائق."
                            data-en="Monitor & control all available features of Vehicle & Driver.">
                            Monitor & control all available features of Vehicle & Driver.
                        </span>
                    </div>

                    <div class="feature">
                        <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="arrow" />
                        <span class="feature-desc" data-arb="مراقبة الامتثال لإرشادات وقت العمل."
                            data-en="Monitor working-time guidelines compliance.">
                            Monitor working-time guidelines compliance.
                        </span>
                    </div>

                    <div class="feature">
                        <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="arrow" />
                        <span style="max-width: 800px; display: block" class="feature-desc"
                            data-arb="اسمح لمديري الأساطيل والسائقين بالتنقل حول الاختناقات المرورية والتعامل مع عمليات تسليم الطلبات في الوقت المناسب وبطريقة فعالة."
                            data-en="Allow fleet managers & drivers to navigate around traffic jams & handle order deliveries in a timely and efficient manner.">
                            Allow fleet managers & drivers to navigate around traffic jams
                            & handle order deliveries in a timely and efficient manner.
                        </span>
                    </div>

                    <div class="feature">
                        <img src="{{asset('img/arrow-orange.svg')}}" class="feature-arrow" alt="arrow" />
                        <span class="feature-desc" data-arb="تعزيز المدخرات التشغيلية وإنتاجية السائق."
                            data-en="Boosting operational savings and driver productivity.">
                            Boosting operational savings and driver productivity.
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
            <div class="right-image-solution-content default-margin-solutions-right">
                <span class="title bold-font-family text-white"
                    data-arb="تتبع المركبات عبر نظام تحديد المواقع العالمي (GPS)" data-en="GPS Vehicle Tracking">
                    GPS Vehicle Tracking
                </span>

                <span class="desc semibold-font-family text-white"
                    data-arb="تتبع جميع مركباتك وأصولك من خلال نظام تتبع المركبات عبر نظام تحديد المواقع العالمي (GPS) المباشر. تتبع السائقين والمركبات عندما تكون متوقفة أو أثناء التنقل ، واحصل على خريطة دقيقة للموقع وأوقات التباطؤ وسرعة السفر باستخدام CS."
                    data-en="Track all your vehicles and assets with our live GPS vehicle tracking system. Track drivers and vehicles when they are parked or on the move, and get their precise mapped location, idling times, and traveling speed with CS.">
                    Track all your vehicles and assets with our live GPS vehicle
                    tracking system. Track drivers and vehicles when they are parked
                    or on the move, and get their precise mapped location, idling
                    times, and traveling speed with CS.
                </span>
            </div>

            <div class="right-image-solution-image">
                <div class="dark-gradiant"></div>

                <div class="image image-solution image-gps"></div>
                <!-- <img src="{{asset('img/gps.svg')}}" class="image"> -->
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
                <div class="image image-solution image-assets"></div>
                <!-- <img src="{{asset('img/asset.svg')}}" class="image"> -->
            </div>

            <div class="left-image-solution-content default-margin-solutions-left">
                <span class="title bold-font-family" data-arb="تتبع الأصول" data-en="Driver Behavior Tracking">
                    Driver Behavior Tracking
                </span>

                <span class="desc semibold-font-family"
                    data-arb="تتبع الأصول الخاصة بك أثناء النقل ، وكن على دراية بمواقعها في جميع الأوقات. تكيف بسرعة ، واتخذ قرارات ذكية وذكية بناءً على المعلومات الحية التي يوفرها حل تتبع المركبات وإدارة الأسطول لدينا."
                    data-en="Track your assets in transit, and be aware of their location at all times. Adapt quickly, and make smart and intelligent decisions based on the live information provided by our Vehicle Tracking and Fleet Management Solution. ">
                    Track your assets in transit, and be aware of their location at
                    all times. Adapt quickly, and make smart and intelligent decisions
                    based on the live information provided by our Vehicle Tracking and
                    Fleet Management Solution.
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
            <div class="right-image-solution-content default-margin-solutions-right">
                <span class="title bold-font-family text-white" data-arb="إدارة الوقود" data-en="Fuel Management">
                    Fuel Management
                </span>

                <span class="desc semibold-font-family text-white"
                    data-arb="يعد التحكم في استهلاك الوقود ومراقبته أحد أكبر عوامل التكلفة المرتبطة بتتبع وإدارة الأسطول."
                    data-en="Control and monitoring of fuel consumption are one of the biggest cost factors associated with fleet tracking and management.">
                    Control and monitoring of fuel consumption are one of the biggest
                    cost factors associated with fleet tracking and management.
                </span>
            </div>

            <div class="right-image-solution-image">
                <div class="dark-gradiant"></div>
                <div class="image image-solution image-fuel"></div>

                <!-- <img src="{{asset('img/fuel.svg')}}" class="image"> -->
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
                <div class="image image-solution image-driver"></div>

                <!-- <img src="{{asset('img/driver.svg')}}" class="image reverse-image-in-arabic height-unset"> -->
            </div>

            <div class="left-image-solution-content default-margin-solutions-left">
                <span class="title bold-font-family" data-arb="تتبع سلوك السائق" data-en="Driver Behavior Tracking">
                    Driver Behavior Tracking
                </span>

                <span class="desc semibold-font-family"
                    data-arb="راقب سلوك السائق ، وإمكانية الوصول ، والفواصل المفاجئة ، والتسارع غير الضروري ، وما إلى ذلك. سيساعدك تتبع سلوك السائق على تقليل تكلفة الوقود وصيانة المركبات."
                    data-en="Keep an eye on the driver’s behavior, access, and sudden breaks, needless accelerations, and so on. Keeping track of the driver’s behavior will help you reduce the cost of fuel and maintenance of the vehicles. ">
                    Keep an eye on the driver’s behavior, access, and sudden breaks,
                    needless accelerations, and so on. Keeping track of the driver’s
                    behavior will help you reduce the cost of fuel and maintenance of
                    the vehicles.
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