@extends('layout.main')
@section('content')
    <!-- About Us Start -->
    <div class="container-fluid who-are-we-section page-margin-navbar">
        <div class="container who-are-we-main">
            <div class="row who-are-we-row">
                <div class="col-9 who-are-we-content">
                    <span class="title bold-font-family text-black" data-arb="حول تراكينج® :" data-en="About us">About
                        us</span>

                    <span class="sub-title medium-font-family" style="font-size: 18px"
                        data-arb="
تراكينج® هي شركة قائمة على إنترنت الأشياء متخصصة في تجهيز صناعة السيارات والخدمات اللوجستية بالأدوات والمعدات التكنولوجية المتطورة. الشركة الوحيدة التي تقدم أجهزة  صنع في السعودية
                    للتتبع في السوق مع جميع الاعتمادات والشهادات الرئيسية من الحكومة بما في ذلك منطقة التجارة التفضيلية،
                    إدارة السلع العلاجية و معتمدة من وزارة الاتصالات ووزارة النقل و وزارة التربية والتعليم، السياحة و
                    نقل السيارات. مع التركيز على الاستفادة من تحليلات البيانات المستندة إلى الذكاء الاصطناعي والخدمات
                    القائمة على خدمة السحابة بتطوير برمجيات ، تمكن تراكينج® الشركات من الحصول على رؤى قابلة للتنفيذ ،
                    مما يحدث ثورة في عمليات صنع القرار الخاصة بهم. كجزء من الممر الباكستاني السعودي والرؤية السعودية
                    لسنة 2030 ، تتمتع تراكينج® بوجودها في أكثر من 5 دول عبر المنطقة والآن كخطة توسع ، تلتزم تراكينج®
                    بتحويل تقنية التأمين عن بعد في المملكة العربية السعودية. "
                        data-en="Trackingme is a visionary IoT-based company poised to enter the Canadian market, reshaping the automotive and logistics industry with state-of-the-art technological solutions. Emphasizing innovation, we specialize in equipping businesses with AI-powered data analytics and advanced SaaS services, delivering actionable insights that revolutionize decision-making processes. Our focus shifts to meeting the rigorous safety and cyber security standards set by Transport Canada, which include adherence to the Motor Vehicle Safety Act and collaboration with authorities. 

                        Our commitment extends to complying with cyber security guidelines, ensuring the resilience of vehicle systems throughout their lifecycle, and participating in Transport Canada's Vehicle Cyber Security Assessment Tool (VCAT). With an innovative approach to vehicle cyber security, Trackingme aims to contribute significantly to Canada's status as a leader in researching and developing automated vehicle technologies. In this endeavor, we are attuned to the needs of a connected world, ensuring our technologies align with international standards and best practices, as championed by Transport Canada in collaboration with organizations like ISO and SAE International. Our entry into Canada signifies a new chapter in our journey, aligning with the Canadian vision of driving innovation in the connected vehicle landscape." ">Trackingme
                                                                                                                                                                                                                                                                                is a visionary IoT-based company poised to enter the Canadian market, reshaping the automotive and
                                                                                                                                                                                                                                                                                logistics industry with state-of-the-art technological solutions. Emphasizing innovation, we
                                                                                                                                                                                                                                                                                specialize in equipping businesses with AI-powered data analytics and advanced SaaS services,
                                                                                                                                                                                                                                                                                delivering actionable insights that revolutionize decision-making processes. Our focus shifts to
                                                                                                                                                                                                                                                                                meeting the rigorous safety and cyber security standards set by Transport Canada, which include
                                                                                                                                                                                                                                                                                adherence to the Motor Vehicle Safety Act and collaboration with authorities.

                                                                                                                                                                                                                                                                                Our commitment extends to complying with cyber security guidelines, ensuring the resilience of
                                                                                                                                                                                                                                                                                vehicle systems throughout their lifecycle, and participating in Transport Canada's Vehicle Cyber
                                                                                                                                                                                                                                                                                Security Assessment Tool (VCAT). With an innovative approach to vehicle cyber security, Trackingme
                                                                                                                                                                                                                                                                                aims to contribute significantly to Canada's status as a leader in researching and developing
                                                                                                                                                                                                                                                                                automated vehicle technologies. In this endeavor, we are attuned to the needs of a connected world,
                                                                                                                                                                                                                                                                                ensuring our technologies align with international standards and best practices, as championed by
                                                                                                                                                                                                                                                                                Transport Canada in collaboration with organizations like ISO and SAE International. Our entry into
                                                                                                                                                                                                                                                                                Canada signifies a new chapter in our journey, aligning with the Canadian vision of driving
                                                                                                                                                                                                                                                                                innovation in the connected vehicle landscape."
                        </span>
                        <span class="desc medium-font-family"
                            data-arb="لقد قمنا مؤخرًا بدمج أجهزة إنترنت الأشياء والتي ستقدم الآن أشكال الصناعة المختلفة لأحدث حلول التتبع."
                            data-en="">
                        </span>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Our Vision Start -->
    <div class=" our-vision-section">
        <div class="our-vision-main">
            <div class="our-vision-row">
                <div class="our-vision-image">
                    <img src="{{ asset('img/vision.png') }}" alt="horizon image" />
                </div>

                <div class="our-vision-content bg-dark" style="padding: 20px;padding-left:20px;padding-right:70px">
                    <span class="title bold-font-family text-white" style="font-size: 28px" data-arb="رؤيتنا"
                        data-en="Our Vision">Our Vision</span>
                    <br>
                    <span style="color: black" class="desc medium-font-family text-white"
                        data-arb="تتمثل الرؤية المؤسسية الدقيقة لتراكينج في أن تصبح أحد رواد إدارة الأداء محليًا وإقليميًا ودوليًا وأن يكون لديك واحدة من أفضل منصات سوق إنترنت الأشياء في العالم."
                        data-en="Our mission is to revolutionize Canadian businesses by equipping them with state-of-the-art technological solutions. We aim to foster smarter, more interconnected, and ecologically sustainable operations, leveraging the transformative power of advanced technology to propel businesses into a new era of operational efficiency and environmental responsibility.">
                        Our mission is to revolutionize Canadian businesses by equipping them with state-of-the-art
                        technological solutions. We aim to foster smarter, more interconnected, and ecologically sustainable
                        operations, leveraging the transformative power of advanced technology to propel businesses into a
                        new era of operational efficiency and environmental responsibility.
                    </span>
                    <br>
                    <span class="title bold-font-family text-white" style="font-size: 28px" data-arb="رؤيتنا"
                        data-en="Mission Statement" style="color: black;padding-top:100px">Mission Statement</span>
                    <br>
                    <span class="desc medium-font-family text-white"
                        data-arb="أسواقنا المستهدفة في المستقبل المنظور تتوسع في جميع أنحاء العالم ، مع شراكات عالمية وتحالفات استراتيجية. نحن نركز على ترقية الأنظمة وتقديم حلول إدارة مختلفة."
                        data-en="At Trackingme, we are at the forefront of creating innovative IoT-enabled solutions for the automotive and logistics industries, specifically tailored for the Canadian market. Our approach involves harnessing the power of AI and advanced data analytics to offer transformative insights, significantly enhancing decision-making processes. We are committed to ensuring the highest standards of safety and efficiency in our hardware and software solutions. These range from telematics insurance technology to fuel tracking and advanced driving assistance systems, all designed to meet the unique operational needs and safety regulations of our Canadian clientele, while continuously pushing the boundaries of technological innovation.">
                        At Trackingme, we are at the forefront of creating innovative IoT-enabled solutions for the
                        automotive and logistics industries, specifically tailored for the Canadian market. Our approach
                        involves harnessing the power of AI and advanced data analytics to offer transformative insights,
                        significantly enhancing decision-making processes. We are committed to ensuring the highest
                        standards of safety and efficiency in our hardware and software solutions. These range from
                        telematics insurance technology to fuel tracking and advanced driving assistance systems, all
                        designed to meet the unique operational needs and safety regulations of our Canadian clientele,
                        while continuously pushing the boundaries of technological innovation.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Vision End -->

    <div>
        <div class="col-12 " style="align-items: center">
            <img src="{{ asset('img/Tracking-website-artwork.png') }}" alt="horizon image"
                style="width: 1000px;margin-left:410px" />
        </div>
    </div>


    {{-- <!-- PTA  Start -->
    <div class="container-fluid section bg-dark pta-main-index">
        <div class="container">
            <img class="image accredite-logo" src="{{ asset('img/accredited logo.svg') }}" alt="accredited logo" />

            <span class="title bold-font-family text-white" data-arb="حلول معتمدة من الحكومة"
                data-en="Government Accredited Solutions">
                Government Accredited Solutions
            </span>

            <span class="desc medium-font-family text-white"
                data-arb="نحن نقدم حلولاً مخصصة ومعتمدة للتنفيذ من قبل السلطات الحكومية السعودية. يتضمن ذلك الحلول المعتمدة بموجب:"
                data-en="We provide tailored solutions that are accredited for implementation by relevant Saudi Government Authorities. This includes approved solutions under:">
                We provide tailored solutions that are accredited for implementation
                by relevant Saudi Government Authorities. This includes approved
                solutions under:
            </span>

            <img class="image" src="{{ asset('img/accer.png') }}" style="height: 100" style="width: 500"
                alt="image of government authorities" />
        </div>
    </div>
    <!-- PTA  End -->

    <!-- Our Customers Start -->
    <div class="container-fluid section our-customers-main-index">
        <div class="container">

            <div class="row  align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="section-title text-center" data-arb="عملائنا" data-en="Our Customers">
                        Our Customers
                    </h3>
                </div>
            </div>
            <div class="row customer-img-list">
                <img src="{{ asset('img/Customers/customerNew2.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew3.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew4.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew1.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew5.jpg') }}" class="customer-img passive-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/bayt-aleeba.jpg') }}" class="customer-img acitve-img step1"
                    alt="bayt aleeba">
                <img src="{{ asset('img/Customers/alessa.jpg') }}" class="customer-img passive-img step1"
                    alt="alessa">

                <img src="{{ asset('img/Customers/Al-raya.jpg') }}" class="customer-img passive-img step2"
                    alt="Al raya">
                <!-- <img src="{{ asset('img/Customers/APSCO.jpg') }}" class="customer-img acitve-img step1" alt="APSCO"> -->
                <img src="{{ asset('img/Customers/BST.jpg') }}" class="customer-img acitve-img step2" alt="BST">
                <img src="{{ asset('img/Customers/CGS.jpg') }}" class="customer-img acitve-img step2" alt="CGS">

                <img src="{{ asset('img/Customers/fuchs.jpg') }}" class="customer-img passive-img step2" alt="fuchs">
                <img src="{{ asset('img/Customers/Elm.jpg') }}" class="customer-img passive-img step2" alt="Elm">
                <img src="{{ asset('img/Customers/masarat.jpg') }}" class="customer-img passive-img step2"
                    alt="masarat">
                <img src="{{ asset('img/Customers/Seder-group.jpg') }}" class="customer-img passive-img step2"
                    alt="Seder group">
                <img src="{{ asset('img/Customers/SHL.jpg') }}" class="customer-img passive-img step3" alt="SHL">
                <img src="{{ asset('img/Customers/menabev.jpg') }}" class="customer-img passive-img step3"
                    alt="menabev">

                <img src="{{ asset('img/Customers/naqaba.jpg') }}" class="customer-img passive-img step3"
                    alt="naqaba">
                <img src="{{ asset('img/Customers/orkin.jpg') }}" class="customer-img passive-img step3" alt="orkin">
                <img src="{{ asset('img/Customers/road-logistics.jpg') }}" class="customer-img passive-img step3"
                    alt="road logistics">
                <img src="{{ asset('img/Customers/sankyu.jpg') }}" class="customer-img passive-img step3"
                    alt="sankyu">
                <img src="{{ asset('img/Customers/sasat.jpg') }}" class="customer-img passive-img step3" alt="sasat">
                <img src="{{ asset('img/Customers/gulf-star.jpg') }}" class="customer-img passive-img step4"
                    alt="gulf star">

                <img src="{{ asset('img/Customers/source.jpg') }}" class="customer-img passive-img step4"
                    alt="source">
                <img src="{{ asset('img/Customers/swvl.jpg') }}" class="customer-img passive-img step4" alt="SWVL">
                <img src="{{ asset('img/Customers/The-olayan-group.jpg') }}" class="customer-img passive-img step4"
                    alt="The olayan group">
                <img src="{{ asset('img/Customers/GSC.jpg') }}" class="customer-img passive-img step4" alt="GSC">
                <img src="{{ asset('img/Customers/gulf.jpg') }}" class="customer-img passive-img step4" alt="gulf">
                <img src="{{ asset('img/Customers/inzagr.jpg') }}" class="customer-img passive-img step4"
                    alt="inzagr">
            </div>

        </div>
    </div>
    <!-- Our Customers End -->


    <!-- Our Partners Start -->
    <div class="container-fluid section our-partners-main-index">
        <div class="container">

            <div class="row  align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <h3 class="section-title text-center" data-arb="شركاؤنا" data-en="Our Partners">
                        Our Partners
                    </h3>
                </div>
            </div>
            <div class="row customer-img-list">

                <img src="{{ asset('img/Customers/customerNew2.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew3.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew4.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew1.jpg') }}" class="customer-img acitve-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/customerNew5.jpg') }}" class="customer-img passive-img step1"
                    alt="image">
                <img src="{{ asset('img/Customers/bayt-aleeba.jpg') }}" class="customer-img acitve-img step1"
                    alt="bayt aleeba">
                <img src="{{ asset('img/Customers/alessa.jpg') }}" class="customer-img passive-img step1"
                    alt="alessa">

                <img src="{{ asset('img/Customers/Al-raya.jpg') }}" class="customer-img passive-img step2"
                    alt="Al raya">
                <!-- <img src="{{ asset('img/Customers/APSCO.jpg') }}" class="customer-img acitve-img step1" alt="APSCO"> -->
                <img src="{{ asset('img/Customers/BST.jpg') }}" class="customer-img acitve-img step2" alt="BST">
                <img src="{{ asset('img/Customers/CGS.jpg') }}" class="customer-img acitve-img step2" alt="CGS">

                <img src="{{ asset('img/Customers/fuchs.jpg') }}" class="customer-img passive-img step2" alt="fuchs">
                <img src="{{ asset('img/Customers/Elm.jpg') }}" class="customer-img passive-img step2" alt="Elm">
                <img src="{{ asset('img/Customers/masarat.jpg') }}" class="customer-img passive-img step2"
                    alt="masarat">
                <img src="{{ asset('img/Customers/Seder-group.jpg') }}" class="customer-img passive-img step2"
                    alt="Seder group">
                <img src="{{ asset('img/Customers/SHL.jpg') }}" class="customer-img passive-img step3" alt="SHL">
                <img src="{{ asset('img/Customers/menabev.jpg') }}" class="customer-img passive-img step3"
                    alt="menabev">

                <img src="{{ asset('img/Customers/naqaba.jpg') }}" class="customer-img passive-img step3"
                    alt="naqaba">
                <img src="{{ asset('img/Customers/orkin.jpg') }}" class="customer-img passive-img step3" alt="orkin">
                <img src="{{ asset('img/Customers/road-logistics.jpg') }}" class="customer-img passive-img step3"
                    alt="road logistics">
                <img src="{{ asset('img/Customers/sankyu.jpg') }}" class="customer-img passive-img step3"
                    alt="sankyu">
                <img src="{{ asset('img/Customers/sasat.jpg') }}" class="customer-img passive-img step3" alt="sasat">
                <img src="{{ asset('img/Customers/gulf-star.jpg') }}" class="customer-img passive-img step4"
                    alt="gulf star">

                <img src="{{ asset('img/Customers/source.jpg') }}" class="customer-img passive-img step4"
                    alt="source">
                <img src="{{ asset('img/Customers/swvl.jpg') }}" class="customer-img passive-img step4" alt="SWVL">
                <img src="{{ asset('img/Customers/The-olayan-group.jpg') }}" class="customer-img passive-img step4"
                    alt="The olayan group">
                <img src="{{ asset('img/Customers/GSC.jpg') }}" class="customer-img passive-img step4" alt="GSC">
                <img src="{{ asset('img/Customers/gulf.jpg') }}" class="customer-img passive-img step4" alt="gulf">
                <img src="{{ asset('img/Customers/inzagr.jpg') }}" class="customer-img passive-img step4"
                    alt="inzagr">

            </div>

        </div>
    </div>
    <!-- Our Partners End --> --}}
@endsection
