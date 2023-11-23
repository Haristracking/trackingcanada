@extends('layout.main')
@section('head-scripts')
    <style>
        .col-3 {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            background-color: rgba(128, 128, 128, 0.4);
            /* Grey with 20% opacity */
            margin-right: 30px;
            align-items: center
        }

        .core-team-member-padding {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .hover-text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            /* Orange background with alpha for transparency */
            color: black;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .col-3:hover .hover-text {
            opacity: 1;
            visibility: visible;
        }

        .col-3:hover .name,
        .col-3:hover .job {
            visibility: hidden;
        }

        .video-container {
            width: 100%;
            height: 65%;
            overflow: hidden;
        }

        #bgvid {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container-1 {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <title>Follow SFDA to provide Temperature management Solution in All over Saudi Arabia</title>
    <meta name="description"
        content="We stand ready to provide a complete solution for temperature management and vehicle interior temperature monitor with the best international standards.">
    <meta name="keywords"
        content="vehicle temperature monitor, car temperature monitoring, vehicle interior temperature monitor">
@endsection
@section('content')
    <!-- Solution Header Start -->
    <div class="container-fluid solution-header-section page-margin-navbar">
        <div class="container3 solution-header-main">
            <div class="row solution-header-row">
                <div class="col-12 solution-header-title-area">
                    <span class="solution-title" data-arb="حل الإدارة" data-en="Product Offering" style="padding-left: 160px">
                        Product Offering
                    </span>
                </div>
                <div class="col-12 solution-header-content-area">
                    <span class="content-title"
                        data-arb="وفقًا لهيئة الغذاء والدواء السعودية (SFDA) ، فإن نقل وتخزين الأغذية والأدوية يتطلب التحكم الأمثل في درجة الحرارة لتحقيق أعلى معايير السلامة وصحة الإنسان والتغذية."
                        data-en="Trackingme's advanced telematics solutions can significantly aid Transport Canada in enhancing transportation system efficiency, safety, and environmental sustainability. Through real-time data collection and AI-driven analytics, Trackingme can offer insights into vehicle and fleet operations, contributing to more efficient route planning, traffic management, and predictive maintenance. This aligns with Transport Canada's focus on using technology to optimize supply chains and mobility. Moreover, Trackingme's IoT-enabled devices can aid in monitoring and managing the health of Canada’s transportation infrastructure, providing valuable data for preemptive maintenance and safety improvements. .">
                        Trackingme's advanced telematics solutions can significantly aid Transport Canada in enhancing
                        transportation system efficiency, safety, and environmental sustainability. Through real-time data
                        collection and AI-driven analytics, Trackingme can offer insights into vehicle and fleet operations,
                        contributing to more efficient route planning, traffic management, and predictive maintenance. This
                        aligns with Transport Canada's focus on using technology to optimize supply chains and mobility.
                        Moreover, Trackingme's IoT-enabled devices can aid in monitoring and managing the health of Canada’s
                        transportation infrastructure, providing valuable data for preemptive maintenance and safety
                        improvements.
                    </span>

                    <span class="content-title" style=""
                        data-arb="يقف مهندسونا وموظفو التصنيع ومراكز الخدمة لدينا على استعداد لتقديم حل كامل لإدارة درجة الحرارة وتلبية المواصفات المطلوبة ورسم خرائط درجات الحرارة بأفضل المعايير الدولية."
                        data-en="Additionally, our solutions could support the integration and management of CAVs into the transportation network, offering a platform for monitoring, regulation, and safety assurance. This would align with Transport Canada's need for balancing innovation with a well-articulated safety regime. Overall, Trackingme's technology can contribute to Transport Canada’s goal of a digitally advanced, secure, and efficient transportation system.">
                        Additionally, our solutions could support the integration and management of CAVs into the
                        transportation network, offering a platform for monitoring, regulation, and safety assurance. This
                        would align with Transport Canada's need for balancing innovation with a well-articulated safety
                        regime. Overall, Trackingme's technology can contribute to Transport Canada’s goal of a digitally
                        advanced, secure, and efficient transportation system.

                    </span>

                    <!-- Our Team Start -->
                    <div class="container-fluid bg-dark core-team-section p-0" style="background-color: black;width:100%">
                        <div class="video-container position-absolute">
                            <!-- Add your video element here with the source and other attributes -->
                            <video autoplay muted loop id="bgvid">
                                <source src="{{ asset('video/tracking-vid2.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="container1 core-team-main" id="core-team-main">
                            <span class="title bold-font-family text-white" data-arb="الفريق الأساسي" data-en="Product">
                                Product
                            </span>

                            <div class="row core-team-member-list container-1">
                                <div class="col-3 core-team-member ">
                                    <span class="name bold-font-family text-white " data-en="Predictive Geofencing"
                                        data-arb="عاصم جميل" style="padding-bottom: 60px;padding-top:60px;">Predictive
                                        Geofencing</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        Advanced algorithms for proactive security alerts and seamless integration with law
                                        enforcement databases.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white"
                                        data-en="Intelligent Load Distribution Monitoring" data-arb="عاصم جميل"
                                        style="padding-bottom: 60px;padding-top:60px">⦁
                                        Intelligent Load Distribution Monitoring</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        State-of-the-art sensors combined with AI for dynamic weight monitoring, crucial for
                                        infrastructure safety.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white" data-en="Enhanced IoT Container Tracking"
                                        data-arb="عاصم جميل" style="padding-bottom: 60px;padding-top:60px">Enhanced IoT
                                        Container Tracking</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        In-depth tracking capabilities with predictive logistics and supply chain
                                        optimization.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white"
                                        data-en="AI-Driven Environmental Monitoring" data-arb="عاصم جميل"
                                        style="padding-bottom: 60px;padding-top:60px">AI-Driven
                                        Environmental Monitoring</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        Sophisticated analytics for real-time cargo condition monitoring, including
                                        temperature and humidity.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white" data-en="Predictive Fuel Usage Analytics"
                                        data-arb="عاصم جميل" style="padding-bottom: 60px;padding-top:60px">Predictive Fuel
                                        Usage Analytics</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        AI-based systems for optimizing fuel consumption and reducing environmental impact.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white"
                                        data-en="Comprehensive Driver Behavior Analysis" data-arb="عاصم جميل"
                                        style="padding-bottom: 60px;padding-top:60px">Comprehensive
                                        Driver Behavior Analysis</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        Integrating biometric data with behavioral patterns for improved road safety and
                                        driver wellbeing.
                                    </div>
                                </div>
                                <div class="col-3 core-team-member">
                                    <span class="name bold-font-family text-white"
                                        data-en="Urban-Integrated Automated Driving Systems" data-arb="عاصم جميل"
                                        style="padding-bottom: 60px;padding-top:60px">Urban-Integrated Automated Driving
                                        Systems</span>
                                    <div class="hover-text">
                                        <!-- Add your text here (100 words) -->
                                        Advanced systems integrating with urban infrastructure for improved situational
                                        awareness and accident prevention.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Solution Header End -->
@endsection
