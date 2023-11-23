@extends('layout.main')
<style>
    .col-3 {
        position: relative;
        overflow: hidden;
        background-color: rgba(128, 128, 128, 0.4);
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .popup {
        display: none;
        position: absolute;
        background: #fff;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1;
        transition: opacity 0.3s;
        border-radius: 10px;
        font-size: 13px;
        height: 100%;
    }

    .col-3:hover .popup {
        display: block;
    }

    .close-btn {
        cursor: pointer;
        color: #333;
        font-weight: bold;
        position: absolute;

    }

    .core-team-member-list {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* Optional: Set the height to make it vertically centered within the viewport */
    }

    .core-team-member {
        text-align: center;
        margin: 20px;
        /* Optional: Adjust the margin between team members */
    }

    @media (min-width: 1200px) and (max-width: 1360px) {
        .name {
            font-size: 20px !important;
        }

        .job {
            font-size: 17px !important;
        }
    }

    @media (min-width: 769px) and (max-width: 1025px) {
        #team-row {
            margin-right: 40px;
        }
    }

    @media (min-width: 769px) and (max-width: 836px) {
        #core-team-main {
            margin-left: -60px !important;
        }

        #image {
            width: 100%;
            height: 100%;
        }
    }
</style>
@section('content')
    <div class="container-fluid bg-dark core-team-section" style="padding-top: 170px">
        <div class="container core-team-main" id="core-team-main">
            <span class="title bold-font-family text-white" data-arb="الفريق الأساسي" data-en="Core Team"
                style="margin-left: 155px">
                Core Team
            </span>
            <div class="row core-team-member-list">
                <div class="col-3 core-team-member" onmouseenter="openPopup('asim-popup')"
                    onmouseleave="closePopup('asim-popup')">
                    <img class="image" id="image" src="{{ asset('team/asim.png') }}" alt="Asim" width="200px"
                        height="200px" />
                    <span class="name bold-font-family text-white" data-en="Asim Jamil" data-arb="عاصم جميل">Asim
                        Jamil</span>
                    <span class="job medium-font-family text-white" data-en="Co Founder & CEO"
                        data-arb="المؤسس المشارك والرئيس التنفيذي" id="img-description">Co Founder & CEO</span>

                    <!-- Popup Content -->
                    <div class="popup" id="asim-popup">
                        <div class="popup-content">
                            <p>
                                Asim Jamil (CEO) is the driving force behind the strategic direction and overall vision of
                                the company. With extensive experience in the IoT and telematics industry, Asim has a proven
                                track record in leading companies through phases of growth and international expansion,
                                especially in technology-driven sectors.

                                Asim Jamil is a seasoned professional with a diverse background in leadership roles.
                                Currently serving as the Co-Founder & CEO of Tracking, he has demonstrated his
                                entrepreneurial spirit as the Founder of Quaid Ventures. As a Strategic Advisor and Board
                                Member for Gorex, Board Member of Rafeeqi, and Advisory Board Member of Digital Khokha, Asim
                                provides invaluable insights. His extensive executive experience includes positions such as
                                COO of Saudi Fast Corporation, General Manager of Mena Logistics, and Key Account Manager at
                                Shell. With a foundation in Mechanical Engineering from UET, Asim blends his educational
                                background with a wealth of hands-on expertise, making him a dynamic leader in various
                                strategic ventures.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3 core-team-member" onclick="openPopup('imran-popup')">
                    <img class="image" style="border-radius: 150px" id="image" src="{{ asset('team/sir-imran.png') }}"
                        alt="Imran Ahmed" />
                    <span class="name bold-font-family text-white" data-en="Imran Ahmed" data-arb="عمران احمد">Imran
                        Ahmed</span>
                    <span class="job medium-font-family text-white" data-en="CFO" data-arb="المدير المالي"
                        id="img-description">CFO</span>

                    <!-- Popup Content -->
                    <div class="popup" id="imran-popup">
                        <div class="popup-content">
                            <p style="font-size: 12px">
                                Imran Ahmed brings in-depth expertise in financial management and strategy. Their background
                                includes managing financial operations in technology companies, with a strong focus on
                                supporting international expansion, cost management, and capital investment strategies.

                                Experienced Chief Financial Officer (CFO) with a strong professional background in IFRS,
                                mergers and acquisitions (M&A), and business valuation. Proven track record in offering
                                valuable strategic guidance to executive teams, ensuring financial management adheres to
                                IFRS standards and effectively managing VAT-related processes. Expertise in financial
                                management, risk assessment, and internal controls, contributing to informed decision-making
                                and optimized financial performance. Successfully led and executed complex M&A transactions,
                                including loan structuring and business valuation. Demonstrated strong leadership skills,
                                successfully managing finance teams and implementing training programs for professional
                                growth. Committed to excellence, innovation, and driving positive change within
                                organizations while maintaining a high level of professionalism.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3 core-team-member" onclick="openPopup('salman-popup')">
                    <img class="image" style="border-radius: 150px" id="image"
                        src="{{ asset('team/salman-ikram.jpg') }}" alt="Imran Ahmed" />
                    <span class="name bold-font-family text-white" data-en="Salman Ikram" data-arb="عمران احمد">Imran
                        Ahmed</span>
                    <span class="job medium-font-family text-white" data-en="COO" data-arb="سجع"
                        id="img-description">COO</span>

                    <!-- Popup Content -->
                    <div class="popup" id="salman-popup">
                        <div class="popup-content">
                            <p>
                                Salman Ikram oversees the company's operational aspects. With a background in supply chain
                                management and operations in the tech industry, the COO ensures operational efficiency and
                                effectiveness, especially in adapting to new markets like Canada.

                                Salman is a highly accomplished professional with a rich background in diverse leadership
                                roles. Currently serving as the COO at Tracking, he is instrumental in driving operational
                                excellence. Salman's expertise extends to serving as an IOT Advisor at Gorex and as the
                                COO/head of the Telematics Division at Arabitra EPC, showcasing his strategic acumen in
                                technology and operations. He has held key positions such as Regional Director at Track
                                Keeper, CTO at Euro Tracks, and Head of IT at Trakker. Salman's educational foundation in
                                computer science from COMSATS provides a solid base for his dynamic career, reflecting a
                                blend of academic knowledge and hands-on experience.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3 core-team-member" onclick="openPopup('ummer-popup')">
                    <img class="image" style="border-radius: 150px" id="image" src="{{ asset('team/umer-malik.png') }}"
                        alt="Imran Ahmed" />
                    <span class="name bold-font-family text-white" data-en="Muhammad Ummer" data-arb="عمران احمد">Muhammad
                        Ummer</span>
                    <span class="job medium-font-family text-white" data-en="CFO" data-arb="المدير المالي"
                        id="img-description">CFO</span>

                    <!-- Popup Content -->
                    <div class="popup" id="ummer-popup">
                        <div class="popup-content">
                            <p>
                                Muhammad Ummer is responsible for the development and implementation of strategic
                                initiatives. They bring a wealth of experience in market analysis, strategic partnerships,
                                and business development, crucial for navigating the company's expansion into new
                                territories.

                                Ummer, as the Chief Strategy Officer at Tracking, brings extensive expertise in steering
                                strategic initiatives. With a background in Computer Science from Petoman Institute, Ummer
                                has held key leadership roles, including General Manager at Tefco, Ecommerce Advisor at
                                Gorex, and Operation Manager at SMSA. His entrepreneurial spirit shines through as the
                                Co-Founder of Qareeb and as a Board Member at Fleet Systems. With managerial experience at
                                Ahejob, Ummer's multifaceted career reflects a blend of academic acumen and practical
                                insights, making him a valuable asset in the fields of strategy, management, and technology.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3 core-team-member" onclick="openPopup('ayesha-popup')">
                    <img class="image" style="border-radius: 150px" id="image"
                        src="{{ asset('team/girl-image.jpeg') }}" alt="ayesha" />
                    <span class="name bold-font-family text-white" data-en="Ayesha Waqar" data-arb="عمران احمد">Ayesha
                        Waqar</span>
                    <span class="job medium-font-family text-white" data-en="CFO" data-arb="المدير المالي"
                        id="img-description">CFO</span>

                    <!-- Popup Content -->
                    <div class="popup" id="ayesha-popup">
                        <div class="popup-content">
                            <p style="font-size: 14px">
                                Ayesha Waqar leads product development and innovation. Their expertise lies in IoT product
                                development and management, ensuring that our products remain cutting-edge and meet the
                                evolving needs of our diverse customer base.

                                Ayesha, the Chief Product Officer at Tracking, is a forward-thinking professional with a
                                solid educational foundation. Holding a bachelor’s degree in computer sciences and an MBA,
                                she seamlessly integrates technical knowledge with strategic thinking. Ayesha has
                                demonstrated her analytical skills in roles such as Business Analyst at Infotech, Product
                                Owner at Aircod, and Business Analyst at Alchemative.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openPopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = 'flex';
        }

        function closePopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = 'none';
        }
    </script>
@endsection
