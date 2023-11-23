@extends('layout.main')
<style>
@media (max-width: 800px) {
        {
        font: 10px;
    }
}

@media (min-width: 1312px) and (max-width: 1430px) {
    #packages-main {
        padding-top: 1900px !important;
    }
}

@media (min-width: 1211px) and (max-width: 1312px) {
    #packages-main {
        padding-top: 2100px !important;
    }
}

@media (min-width: 1115px) and (max-width: 1210px) {
    #packages-main {
        padding-top: 2300px !important;
    }
}

@media (min-width: 1070px) and (max-width: 1114px) {
    #packages-main {
        padding-top: 2600px !important;
    }
}

@media (min-width: 1036px) and (max-width: 1070px) {
    #packages-main {
        padding-top: 2800px !important;
    }
}

@media (min-width: 1026px) and (max-width: 1036px) {
    #packages-main {
        padding-top: 3000px !important;
    }
}

@media (min-width: 862px) and (max-width: 902px) {
    #packages-main {
        padding-top: 900px !important;
    }
}

@media (min-width: 806px) and (max-width: 862px) {
    #packages-main {
        padding-top: 1000px !important;
    }
}

@media (min-width: 769px) and (max-width: 806px) {
    #packages-main {
        padding-top: 1100px !important;
    }
}

@media (min-width: 700px) and (max-width: 769px) {
    #packages-main {
        padding-top: 3000px !important;
    }
}

@media (max-width:339px) {
    #packages-main {
        padding-top: 3000px !important;
    }
}
</style>
@section('content')

<!-- video start -->
<div class="container-fluid ">
    <div class="index-headline-main-tracking-pakistan">
        <div class="row p-0">
            <div class="video-player p-0">
                <video playsinline preload muted autoplay loop id="myVideo" style="width: inherit;">
                    <source src="{{asset('video/tracking-vid2.mp4')}}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <script>
                var bgvideo = document.getElementById("myVideo");
                bgvideo.muted = true;
                bgvideo.play();
                </script>
            </div>
            <div class="video-player-text-main position-absolute flex flex-column  w-100">
                <div>
                    <h1 class="video-player-title text-white fw-bold bold-font-family"
                        data-arb="تراكينج جلوبال الخاصة المحدودة" data-en="Telematics Masters (Private) Limited">
                        Telematics Masters (Private) Limited</h1>
                    <p class="video-player-desc text-white medium-font-family" data-arb="استحوذت تراكينج® ، وهي علامة تجارية مسجلة لشركة الحلول المبردة المحدودة. وشركة تقنية إقليمية ، على تراكينج جلوبال الخاصة المحدودة في عام 2022. وقد كانت واحدة من أكبر مزودي حلول وخدمات إنترنت الأشياء و حلول آلة إلى آلة القائمة على التكنولوجيا لقطاع النقل البري في باكستان والمملكة العربية السعودية منذ عام 2012.
                    "
                        data-en="Tracking, a registered trademark of Cold Solutions LLC and a regional-based Technology company, acquired Telematics Masters (Private) Limited in 2022. It has been one of the largest providers of technology-enabled loT and M2M solutions & services to the road transportation sector in Pakistan and Saudi Arabia since 2012.">
                        Tracking, a registered trademark of Cold Solutions LLC and a regional-based Technology
                        company, acquired Telematics Masters (Private) Limited in 2022. It has been one of
                        the largest providers of technology-enabled loT and M2M solutions & services to the road
                        transportation sector in Pakistan and Saudi Arabia since 2012.
                    </p>
                    <p class="video-player-desc text-white medium-font-family"
                        data-arb="  مع مجموعة من حلول الأعمال والخدمات لعمليات النقل الجاهزة للنشر من خلال شبكة تراكينج جلوبال الخاصة المحدودة مع خبرة واسعة عبر مجالات متنوعة ونهج مبتكر تجاه حلول محددة ، أنشأت موجات جديدة في مجال تقنيات المعلوماتية وإنترنت الأشياء."
                        data-en=" With a range of Business Solutions and services for Transport operations that are ready to deploy through the Telematics Masters (Private) Limited network with extensive experience across diverse domains and innovative approach towards specific solutions, and it has created new waves in the field of Telematics and Internet of Things.">
                        With a range of Business Solutions and services for Transport operations that are ready to
                        deploy through the Telematics Masters (Private) Limited network with extensive
                        experience across diverse domains and innovative approach towards specific solutions, and it
                        has created new waves in the field of Telematics and Internet of Things.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- video end -->

<!-- Customized Solutions Start -->
<div class="container-fluid section services-solutions-main">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                <h3 class="section-title text-center" data-arb="الخدمات والميزات" data-en="Services & Features">
                    Services & Features
                </h3>
            </div>
        </div>
        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">

            <div class="services-features-imagelist">

                <div class="solution-item">
                    <img src="{{asset('img/Fleet Tracking & Monitoring.png')}}" alt="Fleet Tracking & Monitoring"
                        class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="تتبع ومراقبة الأسطول"
                        data-en="Fleet Tracking & Monitoring">
                        Fleet Tracking & Monitoring
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Preventative Maintenance.png')}}" alt="Preventative Maintenance"
                        class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="الصيانة الوقائية"
                        data-en="Preventative Maintenance">
                        Preventative Maintenance
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Statutory Management.png')}}" alt="Statutory Management"
                        class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="الإدارة القانونية"
                        data-en="Statutory Management">
                        Statutory Management
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Dispatching Solution.png')}}" alt="Dispatching Solution"
                        class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="حل الإرسال"
                        data-en="Dispatching Solution">
                        Dispatching Solution
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Fuel Monitoring.png')}}" alt="Fuel Monitoring" class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="مراقبة الوقود"
                        data-en="Fuel Monitoring">
                        Fuel Monitoring
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Temperature Monitoring.png')}}" alt="Temperature Monitoring"
                        class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="مراقبة درجة الحرارة"
                        data-en="Temperature Monitoring">
                        Temperature Monitoring
                    </span>
                </div>


                <div class="solution-item">
                    <img src="{{asset('img/Custom Solution.png')}}" alt="Custom Solution" class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="حل مخصص"
                        data-en="Custom Solution">
                        Custom Solution
                    </span>
                </div>

                <div class="solution-item">
                    <img src="{{asset('img/Green Driving.png')}}" alt="Green Driving" class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="القيادة البيئية"
                        data-en="Green Driving">
                        Green Driving
                    </span>
                </div>

                <div class="solution-item">
                    <img src="{{asset('img/Insurance Tracker.png')}}" alt="Insurance Tracker" class="solution-img">
                    <span class="solution-name semibold-font-family text-black" data-arb="تعقب التأمين"
                        data-en="Insurance Tracker">
                        Insurance Tracker
                    </span>
                </div>


            </div>


        </div>
    </div>
</div>
<!-- Customized Solutions End -->


<!-- About Us Start -->
<div class="container-fluid bg-dark section about-main-index about-main-index-tracking">
    <div class="container-fluid">
        <div class="section-header  mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title m-0 text-white text-start" data-arb="الميزات الإضافية التي نقدمها"
                data-en="Additional features we offers">Additional features we offers</h1>
        </div>

        <div class="feature-item-list">

            <div class="list" style="padding-left: 0;">
                <span data-en="Real Time Location" data-arb="الموقع في الوقت الفعلي
                    "></span>
                <span data-en="Driver Information" data-arb="معلومات السائق
                    "></span>
                <span data-en="Idle Information" data-arb="معلومات الخمول
                    "></span>
                <span data-en="Engine Status [On/Off]" data-arb="حالة المحرك [تشغيل / إيقاف]
                    "></span>
                <span data-en="Speed Chec" data-arb="فحص السرعة
                    "></span>
                <span data-en="Temperature Repor" data-arb="تقرير درجة الحرارة
                    "></span>
                <span data-en="Temperature Grap" data-arb="الرسم البياني لدرجة الحرارة
                    "></span>
                <span data-en="Performance Tracke" data-arb="متتبع الأداء
                    "></span>
                <span data-en="Savings Tracking" data-arb="تتبع التوفير
                    "></span>
                <span data-en="Driver Behavior Trackin" data-arb="تتبع سلوك السائق
                    "></span>
                <span data-en="Analytical Report" data-arb="التقارير التحليلية
                    "></span>
                <span data-en="Recognize Driver From History" data-arb="التعرف على السائق من السجل"></span>
            </div>


            <div class="list">
                <span data-en="Control Of Vehicle Misuse" data-arb="السيطرة على إساءة استخدام المركبات
                    "></span>
                <span data-en="Real Time Driver Identification" data-arb="تحديد هوية السائق في الوقت الفعلي
                    "></span>
                <span data-en="Plug & Play" data-arb="التوصيل والتشغيل
                    "></span>
                <span data-en="Car Healt" data-arb="صحة السيارة
                    "></span>
                <span data-en="Wifi Hotspot" data-arb="واي فاي هوت سبوت
                    "></span>
                <span data-en="Green Driving" data-arb="القيادة البيئية
                    "></span>
                <span data-en="Bluetooth " data-arb="بلوتوث
                    "></span>
                <span data-en="Ios & Android Ap" data-arb="تطبيق iOS و أندرويد
                    "></span>
                <span data-en="Live Streamin" data-arb="البث المباشر
                    "></span>
                <span data-en="Video On Deman" data-arb="فيديو حسب الطلب
                    "></span>
                <span data-en="Video Communication" data-arb="الاتصال المرئي"></span>

            </div>

            <div class="list" style="border: none  ;">
                <span class="title" data-arb="التنبيهات" data-en="Alerts">Alerts</span>
                <div class="list-features">
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Route Deviation" data-arb="انحراف المسار
                            ">Route Deviation</span>
                    </p>

                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Harsh Braking & Accelerating" data-arb="الكبح القاسي والتسارع
                            ">Harsh Braking & Accelerating
                        </span>
                    </p>
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="High & Low Temperature Alert" data-arb="تنبيه درجات الحرارة العالية والمنخفضة
                            ">High & Low Temperature Alert
                        </span>
                    </p>
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Overspeeding" data-arb="الاسراف
                            ">Overspeeding</span>
                    </p>
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Stop Violation" data-arb="وقف الانتهاك
                                ">Stop Violation
                        </span>
                    </p>
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Arrival & Departure" data-arb="الوصول والمغادرة
                            ">Arrival & Departure
                        </span>
                    </p>
                    <p>
                        <img src="{{asset('img/point-ic.png')}}" alt="bullet arrow">
                        <span data-en="Geo Fence " data-arb="السياج الجغرافي ">Geo Fence </span>
                    </p>

                </div>
            </div>

        </div>
    </div>

    <!-- Our Vision Start -->
    <div class="bg-dark our-vision-section our-vision-section-p">
        <div class="our-vision-main">
            <div class="our-vision-row">
                <div class="our-vision-image">
                    <img src="{{asset('img/vision.png')}}" alt="vision" />
                </div>

                <div class="our-vision-content">
                    <span class="title bold-font-family text-white" data-arb="مهمتنا" data-en="Mission">Mission</span>

                    <span class="desc medium-font-family text-white"
                        data-arb="مهمة تراكينج جلوبال الخاصة المحدودة أن تصبح شركة رائدة في السوق في مجال تتبع المركبات المتقدمة وحلول إدارة الأسطول جنبًا إلى جنب مع خدمات الاتصالات عن بُعد الشاملة مع تشجيع بيئة عمل ودية وعادلة ؛ كل ذلك بطريقة ائتمانية تدعم الشركة والقطاع والمجتمع."
                        data-en="The mission of Telematics Masters (Private) Limited is to become a predominant market leader in advanced vehicle tracking and fleet management solutions along with comprehensive telematics services while encouraging a friendly and fair work environment; all in a fiduciary manner which supports the company, industry and community.">
                        The mission of Telematics Masters (Private) Limited is to become a predominant
                        market leader in advanced vehicle tracking and fleet management solutions along with
                        comprehensive telematics services while encouraging a friendly and fair work environment;
                        all in a fiduciary manner which supports the company, industry and community.
                    </span>


                </div>
            </div>
        </div>
    </div>

    <div class="vision-area default-padding">
        <div class="left-section">
            <span class="title" data-arb="رؤيتنا" data-en="Vision">Vision</span>
            <span class="desc"
                data-en="The Company’s vision is a combination of Core Values, Core Purpose and Visionary Goals."
                data-arb="تتمثل رؤية الشركة في مزيج من القيم الأساسية والغرض الأساسي والأهداف ذات الرؤية.">
                The Company’s vision is a combination of Core Values, Core Purpose and Visionary Goals.
            </span>
        </div>

        <div class="second-section">

            <div class="left-section">
                <span class="title" data-arb="القيم الأساسية" data-en="Core Values">Core Values</span>
                <span class="desc" data-arb="يمثل ما يلي القيم الأساسية للشركة:"
                    data-en="The following represents the Company’s core values:">
                    The following represents the Company’s core values:

                </span>

                <span class="desc" data-arb="- مفهوم رائد وخاص في تتبع المركبات.
                    " data-en="-  Pioneering and proprietary concept in vehicle tracking.">
                    - Pioneering and proprietary concept in vehicle tracking.
                </span>

                <span class="desc" data-arb="- تطوير والحفاظ على قاعدة المستهلكين التي تتطلب تتبع المركبات وإدارة الأسطول ، وهي الخدمة الأساسية للشركة في جميع أنحاء مستخدمي تتبع المركبات والتوسع لاحقا في أسواق جغرافية وديموغرافية جديدة.
                    " data-en="-  Developing and maintaining a consumer base that demands
                    vehicle tracking and fleet management, the Company’s primary
                    service throughout the vehicle tracking users and later expanding
                    into new geographic, psychographic, and demographic markets.">
                    - Developing and maintaining a consumer base that demands
                    vehicle tracking and fleet management, the Company’s primary
                    service throughout the vehicle tracking users and later expanding
                    into new geographic, psychographic, and demographic markets.
                </span>

                <span class="desc"
                    data-arb="- تلبية المسؤولية الائتمانية والاجتماعية من خلال خلق قيمة للمستثمرين وأصحاب المصلحة والشركات والعملاء."
                    data-en="-  Meeting fiduciary and social responsibility by creating value for
                    investors, stakeholders, businesses, and customers.">
                    - Meeting fiduciary and social responsibility by creating value for
                    investors, stakeholders, businesses, and customers.
                </span>
            </div>

            <div class="right-section">
                <span class="title" data-arb="الغرض الأساسي" data-en="Core Purpose">Core Purpose</span>
                <span class="desc" data-arb="يمثل ما يلي الغرض الأساسي للشركة:                    "
                    data-en="The following represents the Company’s core purpose:">
                    The following represents the Company’s core purpose:

                </span>


                <span class="desc" data-arb="- تطوير وتوزيع أنظمة متقدمة لتتبع المركبات وإدارة الأسطول.
                    " data-en="-  Develop and distribute advanced vehicle tracking and fleet
                    management systems.
                ">
                    - Develop and distribute advanced vehicle tracking and fleet
                    management systems.

                </span>

                <span class="desc" data-arb="- إنشاء وتطوير مجموعة متنوعة من الخدمات الإضافية التي تلبي الاحتياجات النهائية للمستخدم النهائي.
                    " data-en="-  Create and develop a variety of additional services which address the
                    ultimate needs of the end user.
                ">
                    - Create and develop a variety of additional services which address the
                    ultimate needs of the end user.

                </span>

                <span class="desc" data-arb="- خلق الولاء مع المستهلكين من خلال فهم فوائد خدمات الشركة." data-en="-  Create loyalty with consumers via an understanding of the benefits of
                    the Company’s services.">
                    - Create loyalty with consumers via an understanding of the benefits of
                    the Company’s services.
                </span>


            </div>


        </div>

    </div>

</div>
<!-- About Us End -->

<!-- Our Customers Start -->
<div class="container-fluid section our-customers-main-index  our-customer-pakistan">
    <div class="container">

        <div class="row  align-items-center">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                <h3 class="section-title text-center" data-arb="عملائنا" data-en="Our Customers">
                    Our Customers
                </h3>
            </div>
        </div>
        <div class="row customer-img-list">
            <img src="{{asset('img/Customers2/Al-Baraka.jpg')}}" class="customer-img acitve-img step1" alt="Al Baraka">
            <img src="{{asset('img/Customers2/Alfalah-Insurance.jpg')}}" class="customer-img acitve-img step1"
                alt="Alfalah Insurance">
            <img src="{{asset('img/Customers2/Al-Fazal-Associates.jpg')}}" class="customer-img acitve-img step1"
                alt="Al Fazal Associates">
            <img src="{{asset('img/Customers2/Al-Khidmat.jpg')}}" class="customer-img acitve-img step1"
                alt="Al Khidmat">
            <img src="{{asset('img/Customers2/Allied-Bank.jpg')}}" class="customer-img acitve-img step1"
                alt="Allied Bank">
            <img src="{{asset('img/Customers2/Al-Murtaza-Associates.jpg')}}" class="customer-img acitve-img step1"
                alt="Al Murtaza Associates">
            <img src="{{asset('img/Customers2/Al-Shahbaz.jpg')}}" class="customer-img acitve-img step1"
                alt="Al Shahbaz">
            <img src="{{asset('img/Customers2/Al-Tameem.jpg')}}" class="customer-img acitve-img step1" alt="Al Tameem">

            <img src="{{asset('img/Customers2/Askari-Bank.jpg')}}" class="customer-img passive-img step2"
                alt="Askari Bank">
            <img src="{{asset('img/Customers2/Bank-Of-Punjab.jpg')}}" class="customer-img passive-img step2"
                alt="Bank Of Punjab">

            <img src="{{asset('img/Customers2/Bari-Malik.jpg')}}" class="customer-img passive-img step2"
                alt="Bari Malik">
            <img src="{{asset('img/Customers2/Century-Insurance.jpg')}}" class="customer-img passive-img step2"
                alt="Century Insurance">
            <img src="{{asset('img/Customers2/CNIPC-BGP.jpg')}}" class="customer-img passive-img step2" alt="CNIPC BGP">
            <img src="{{asset('img/Customers2/Descon.jpg')}}" class="customer-img passive-img step2" alt="Descon">
            <img src="{{asset('img/Customers2/Dubai-Islamic-Bank.jpg')}}" class="customer-img passive-img step2"
                alt="Dubai Islamic Bank">
            <img src="{{asset('img/Customers2/EFU-Life-Insurance.jpg')}}" class="customer-img passive-img step2"
                alt="EFU Life Insurance">

            <img src="{{asset('img/Customers2/Fast-Cables.jpg')}}" class="customer-img passive-img step3"
                alt="Fast Cables">
            <img src="{{asset('img/Customers2/Faysal-Bank.jpg')}}" class="customer-img passive-img step3"
                alt="Faysal Bank">
            <img src="{{asset('img/Customers2/Honda.jpg')}}" class="customer-img passive-img step3" alt="Honda">
            <img src="{{asset('img/Customers2/IGI-General.jpg')}}" class="customer-img passive-img step3"
                alt="IGI General">
            <img src="{{asset('img/Customers2/Lays.jpg')}}" class="customer-img passive-img step3" alt="Lays">
            <img src="{{asset('img/Customers2/LuckyGas-Transport.jpg')}}" class="customer-img passive-img step3"
                alt="LuckyGas Transport">
            <img src="{{asset('img/Customers2/MCB.jpg')}}" class="customer-img passive-img step3" alt="MCB">
            <img src="{{asset('img/Customers2/Meezan-Bank.jpg')}}" class="customer-img passive-img step3"
                alt="Meezan Bank">

            <img src="{{asset('img/Customers2/Miasonette.jpg')}}" class="customer-img passive-img step4"
                alt="Miasonette">
            <img src="{{asset('img/Customers2/Premier-Dairies.jpg')}}" class="customer-img passive-img step4"
                alt="Premier Dairies">
            <img src="{{asset('img/Customers2/Price-Oye.jpg')}}" class="customer-img passive-img step4" alt="Price Oye">
            <img src="{{asset('img/Customers2/Punjab-Modarba-Services.jpg')}}" class="customer-img passive-img step4"
                alt="Punjab Modarba Services">
            <img src="{{asset('img/Customers2/Reliance.jpg')}}" class="customer-img passive-img step4" alt="Reliance">
            <img src="{{asset('img/Customers2/Salama-Logo.jpg')}}" class="customer-img passive-img step4"
                alt="Salama Logo">
            <img src="{{asset('img/Customers2/SPI-Insurance.jpg')}}" class="customer-img passive-img step4"
                alt="SPI Insurance">
            <img src="{{asset('img/Customers2/Swvl.jpg')}}" class="customer-img passive-img step4" alt="SWVL">
        </div>

    </div>
</div>
<!-- Our Customers End -->

<div class="packages-section default-padding">
    <span class="title" data-arb="الحزم المتوفرة" data-en="Packages">Packages </span>

    <span class="sub-title" data-arb="مراقبة متقدمة" data-en="Advanced Monitoring">Advanced Monitoring </span>
    <span class="sub-button" data-arb="مصفوفة الميزات" data-en="Features Matrix">Features Matrix </span>
    <span data-arb="تتضمن حزمة المراقبة المتقدمة جميع ميزات حزمة المراقبة الأساسية بالإضافة إلى الميزات التالية"
        data-en="Advanced Monitoring Pack includes all features of Essential Monitoring Pack in addition to the below features"
        class="desc">Advanced Monitoring Pack includes all features of Essential Monitoring Pack in addition to the
        below features</span>
</div>

<div class="default-padding packages-features">

    <div class="packages-main">

        <div class="packages-list" style="border-start-end-radius: 0 ;border-bottom-right-radius: 0;">
            <div class="title" data-en="Reports" data-arb="التقارير" style="border-top-left-radius: 5px;">
                Reports
            </div>
            <div class="desc-list" style="border-start-start-radius: 0 ;">
                <span data-arb="رؤية حية
                    " data-en="Live Vision">Live Vision</span>
                <span data-arb="تقرير النشاط
                    " data-en="Activity Report">Activity Report</span>
                <span data-arb="تقرير المسافة الإجمالية
                    " data-en="Total Distance Report">Total Distance Report</span>
                <span data-arb="تقرير السرعة
                    " data-en="Speed Report">Speed Report</span>
                <span data-arb="تقرير الإيقاف
                    " data-en="Stop Report">Stop Report</span>
                <span data-arb="تقرير ملخص النشاط اليومي
                    " data-en="Day Wise Activity Summary Report">Day Wise Activity Summary
                    Report</span>
                <span data-arb="التقرير الموجز لإجمالي المسافة
                    " data-en="Total Distance Summary Report">Total Distance Summary Report</span>
                <span data-arb="تقرير المسافة المقطوعة
                    " data-en="Distance Travelled Report">Distance Travelled Report</span>
                <span data-arb="تقرير تنبيه السرعة الزائدة
                    " data-en="Overspeed Alert Report">Overspeed Alert Report</span>
                <span data-arb="تحليل الاستثناءات
                    " data-en="Exception Analysis">Exception Analysis</span>
                <span data-arb="خيار تجميع المركبات
                    " data-en="Vehicle Grouping Option">Vehicle Grouping Option</span>
                <span data-arb="وصول/مغادرة المركز
                    " data-en="Hub Arrival/Hub Departure">Hub Arrival/Hub Departure</span>
                <span data-arb="التقرير
                    " data-en="Report">Report</span>
                <span data-arb="تقرير التيار المتردد
                    " data-en="AC Report">AC Report</span>
                <span data-arb="تقرير مستشعر الباب
                    " data-en="Door Sensor Report">Door Sensor Report</span>
                <span data-arb="تحليل الحدود الخارجية
                    " data-en="Outside Border Analysis">Outside Border Analysis</span>
                <span data-arb="تقرير العجلات الحرة
                    " data-en="Free Wheeling Report">Free Wheeling Report</span>
                <span data-arb="تقرير مؤشرات الأداء الرئيسية
                    " data-en="KPI Report">KPI Report</span>
                <span data-arb="تقرير مستشعر الحركة
                    " data-en="Motion Sensor Report">Motion Sensor Report</span>
                <span data-arb="متوسط تقرير الاحتجاز
                    " data-en="Average Hub Detention Report">Average Hub Detention Report</span>
                <span data-arb="تقرير تحليل الحوادث
                    " data-en="Accident Analysis Report">Accident Analysis Report</span>
                <span data-arb="تقرير مخالفة السرعة
                    " data-en="Speed Violation Report">Speed Violation Report</span>
                <span data-arb="تقرير حالة نظام تحديد المواقع العالمي (GPS)
                    " data-en="GPS Status Report">GPS Status Report</span>
                <span data-arb="جدولة التقارير
                        " data-en="Report Scheduler">Report Scheduler</span>
                <span data-arb="الرسم البياني للوحة المعلومات
                    " data-en="Dash Board Graph">Dash Board Graph</span>
                <span data-arb="الرسم البياني للسفر على مدار 24 ساعة
                    " data-en="24 Hr Travel Graph">24 Hr Travel Graph</span>
                <span data-arb="الرسم البياني لسرعة 24 ساعة
                        " data-en="24 Hr Speed Graph">24 Hr Speed Graph</span>
                <span data-arb="الرسم البياني لحالة السيارة
                    " data-en="Vehicle Status Graph">Vehicle Status Graph</span>
                <span data-arb="مستشعر الباب / تحليل الغطاء
                    " data-en="Door Sensor/Lid Analysis">Door Sensor/Lid Analysis</span>
                <span data-arb="نافذة تحليل الاستثناءات
                    " data-en="Exception Analysis Window">Exception Analysis Window</span>
                <span data-arb="لوحة معلومات تحليل الاستثناءات" data-en="Exception Analysis Dash Board">Exception
                    Analysis Dash Board</span>
            </div>
        </div>

        <div class="packages-list" style="border-radius: 0  ;">
            <div class="title" data-en="Alerts" data-arb="التنبيهات">
                Alerts
            </div>
            <div class="desc-list">
                <span data-arb="السيارة لا تتوصل
                    " data-en="Vehicle Not Communicating">Vehicle Not Communicating</span>
                <span data-arb="تهدئة الطاقة الرئيسية
                    " data-en="Main Power Tempering">Main Power Tempering</span>
                <span data-arb="إشارة GPS غير متوفرة
                    " data-en="GPS Signal Not Available">GPS Signal Not Available</span>
                <span data-arb="حزام الأمان
                        " data-en="Seat Belt">Seat Belt</span>
                <span data-arb="تسارع قاس
                    " data-en="Harsh Acceleration">Harsh Acceleration</span>
                <span data-arb="الكبح القاسي
                    " data-en="Harsh Braking">Harsh Braking</span>
                <span data-arb="انحراف المسار
                    " data-en="Route Deviation">Route Deviation</span>
                <span data-arb="ساعات العمل التقييدية
                    " data-en="Restrictive Hours">Restrictive Hours</span>
                <span data-arb="تنبيهات الحدود
                        " data-en="Border Alerts">Border Alerts</span>
                <span data-arb="تنبيهات ساعة المحرك
                    " data-en="Engine Hr Alerts">Engine Hr Alerts</span>
                <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span>


            </div>
        </div>

        <div class="packages-list" style="border-start-start-radius: 0  ;border-bottom-left-radius: 0;">
            <div class="title" data-en="Events" data-arb="الأحداث" style="border-top-right-radius: 5px;">
                Events
            </div>
            <div class="desc-list">

                <span data-arb="التوقف" data-en="Stoppage">Stoppage</span>
                <span data-arb="السرعة الزائدة
                    " data-en="Over-speed">Over-speed</span>
                <span data-arb="الخمول" data-en="Idling">Idling</span>
                <span data-arb="الوضع المباشر للسيارة
                    " data-en="Vehicle Live Position">Vehicle Live Position</span>
                <span data-arb="وصول / مغادرة المركز
                    " data-en="Hub Arrival/Departure">Hub Arrival/Departure</span>
                <span data-arb="تقارير الحدود
                    " data-en="Border Reports">Border Reports</span>
                <span data-arb="حالة الباب
                    " data-en="Door Status">Door Status</span>
                <span data-arb="تيار متردد
                    " data-en="AC">AC</span>
                <span data-arb="ساعات المحرك
                    " data-en="Engine Hrs">Engine Hrs</span>
                <span data-arb="الغطاء
                    " data-en="Lid">Lid</span>
                <span data-arb="الصمام" data-en="Valve">Valve</span>
                <span data-arb="استغاثة / ذعر
                    " data-en="Distress/Panic">Distress/Panic</span>
                <span data-arb="التقارير اليومية المجدولة
                    " data-en="Daily Scheduled Reports">Daily Scheduled Reports</span>
                <span data-arb="التقارير الأسبوعية المجدولة
                    " data-en="Weekly Scheduled Reports">Weekly Scheduled Reports</span>
                <span data-arb="التقارير المجدولة الشهرية
                    " data-en="Monthly Scheduled Reports">Monthly Scheduled Reports</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-"
                    data-en="-">-</span> <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
                <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span>
            </div>
        </div>
    </div>


    <div class="second" id="packages-main">
        <div class="header">
            <span class="header-title" data-arb="المراقبة الأساسية" data-en="Essential Monitoring">Essential
                Monitoring</span>
            <span class="header-desc" data-arb="مصفوفة الميزات" data-en="Features Matrix"> Features Matrix</span>
        </div>
        <div class="packages-main">
            <div class="packages-list" style="border-start-end-radius: 0  ;border-bottom-right-radius: 0;">
                <div class="title" data-en="Reports" data-arb="التقارير" style="border-top-left-radius: 5px;">
                    Reports
                </div>
                <div class="desc-list" style="border-start-start-radius: 0  ;">
                    <span data-arb="رؤية حية
                        " data-en="Live Vision">Live Vision</span>
                    <span data-arb="تقرير النشاط
                        " data-en="Activity Report">Activity Report</span>
                    <span data-arb="تقرير المسافة الإجمالية
                        " data-en="Total Distance Report">Total Distance Report</span>
                    <span data-arb="تقرير السرعة
                        " data-en="Speed Report">Speed Report</span>
                    <span data-arb="تقرير الإيقاف
                        " data-en="Stop Report">Stop Report</span>
                    <span data-arb="تقرير ملخص النشاط اليومي
                        " data-en="Day Wise Activity Summary Report">Day Wise Activity Summary
                        Report</span>
                    <span data-arb="التقرير الموجز لإجمالي المسافة
                        " data-en="Total Distance Summary Report">Total Distance Summary Report</span>
                    <span data-arb="تقرير المسافة المقطوعة
                        " data-en="Distance Travelled Report">Distance Travelled Report</span>
                    <span data-arb="تقرير تنبيه السرعة الزائدة
                        " data-en="Overspeed Alert Report">Overspeed Alert Report</span>
                    <span data-arb="تحليل الاستثناءات
                        " data-en="Exception Analysis">Exception Analysis</span>
                    <span data-arb="خيار تجميع المركبات
                        " data-en="Vehicle Grouping Option">Vehicle Grouping Option</span>
                </div>
            </div>

            <div class="packages-list" style="border-radius: 0  ;">
                <div class="title" data-en="Alerts" data-arb="التنبيهات">
                    Alerts
                </div>
                <div class="desc-list">
                    <span data-arb="السيارة لا تتوصل
                        " data-en="Vehicle Not Communicating">Vehicle Not Communicating</span>
                    <span data-arb="تهدئة الطاقة الرئيسية
                        " data-en="Main Power Tempering">Main Power Tempering</span>
                    <span data-arb="إشارة GPS غير متوفرة
                        " data-en="GPS Signal Not Available">GPS Signal Not Available</span>
                    <span data-arb="حزام الأمان
                            " data-en="Seat Belt">Seat Belt</span>
                    <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span><span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span><span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span>

                </div>
            </div>

            <div class="packages-list" style="border-start-start-radius: 0  ;border-bottom-left-radius: 0;">
                <div class="title" data-en="Events" data-arb="الأحداث" style="border-top-right-radius: 5px;">
                    Events
                </div>
                <div class="desc-list">
                    <span data-arb="التوقف" data-en="Stoppage">Stoppage</span>
                    <span data-arb="السرعة الزائدة
                        " data-en="Over-speed">Over-speed</span>
                    <span data-arb="الخمول" data-en="Idling">Idling</span>
                    <span data-arb="الوضع المباشر للسيارة
                        " data-en="Vehicle Live Position">Vehicle Live Position</span>
                    <span data-arb="-" data-en="-">-</span> <span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span><span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span><span data-arb="-" data-en="-">-</span><span data-arb="-"
                        data-en="-">-</span>

                </div>
            </div>
        </div>


    </div>



    <div class="packages-list" style="border-radius: 0  ;">
        <div class="title" data-en="Alerts" data-arb="التنبيهات">
            Alerts
        </div>
        <div class="desc-list">
            <span data-arb="السيارة لا تتوصل
                        " data-en="Vehicle Not Communicating">Vehicle Not Communicating</span>
            <span data-arb="تهدئة الطاقة الرئيسية
                        " data-en="Main Power Tempering">Main Power Tempering</span>
            <span data-arb="إشارة GPS غير متوفرة
                        " data-en="GPS Signal Not Available">GPS Signal Not Available</span>
            <span data-arb="حزام الأمان
                            " data-en="Seat Belt">Seat Belt</span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>


        </div>
    </div>

    <div class="packages-list" style="border-start-start-radius: 0  ;border-bottom-left-radius: 0;">
        <div class="title" data-en="Events" data-arb="الأحداث" style="border-top-right-radius: 5px;">
            Events
        </div>
        <div class="desc-list">
            <span data-arb="التوقف" data-en="Stoppage">Stoppage</span>
            <span data-arb="السرعة الزائدة
                        " data-en="Over-speed">Over-speed</span>
            <span data-arb="الخمول" data-en="Idling">Idling</span>
            <span data-arb="الوضع المباشر للسيارة
                        " data-en="Vehicle Live Position">Vehicle Live Position</span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>
            <span data-arb="-" data-en="-"></span>

        </div>
    </div>
</div>


</div>

</div>




</div>

@endsection