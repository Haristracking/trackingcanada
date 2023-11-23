<style>
    @media (max-width: 768px) {
        .mx-2.yt {
            margin-top: px;
        }

        .copy-right {
            margin-bottom: 10px;
            font-size: 15px;
        }
    }
</style>

<!-- Footer Start -->
<div class="container-fluid bg-dark footer wow fadeI p-0" data-wow-delay="0.1s" style="padding-right:40px">
    <div class="container footer-top ">
        <div class="row ">
            <div class="col-4 ">
                <img src="{{ asset('img/logo.svg') }}" alt="logo" class="footer-logo"
                    style="max-width: 175px;margin-bottom:40px">
                {{-- <p class="text-white medium-font-family footer-desc"
                    data-arb="تراكينج® هي علامة تجارية مسجلة لشركة الحلول المبردة المحدودة. وهي شركة تقنية إقليمية تركز بشكل أساسي على صناعة النقل لتزويدهم بجميع الأدوات والمعدات التكنولوجية."
                    data-en="Tracking® Canada, a telematics LLC trademark, specializes in technology solutions for the transport
                    industry. Our mission: empower businesses with cutting-edge tools, driving efficiency and
                    connectivity.">
                    Tracking Canada, a telematics LLC trademark, specializes in technology solutions for the transport
                    industry. Our mission: empower businesses with cutting-edge tools, driving efficiency and
                    connectivity. </p> --}}
                <!-- <div class="d-flex footer-social">
                    <a class="mx-2 " style="margin-left: 0;" href=""><img src="./img/twitter.svg"></a>
                    <a class="mx-2" target="_blank" href="contact.us.store"><img src="./img/facebook.svg"></a>
                    <a class="mx-2" target="_blank" href="https://www.instagram.com/trackingksa/"><img src="./img/insta.svg"></a>
                    <a class="mx-2" href="https://www.linkedin.com/company/trackingksa/"target="_blank"target="_blank"><img src="./img/linkedin.svg"></a>

                </div> -->
                {{-- 
                <div class="saudi-made-logo-main">
                    <img src="{{ asset('img/saudi-made-logo.svg') }}" alt="saudi made logo"
                        class="saudi-made-logo en-saudi-made-logo">
                    <img src="{{ asset('img/saudi-made-arabic-logo-arb.svg') }}" alt="saudi made logo"
                        class="saudi-made-logo  arb-saudi-made-logo">
                </div> --}}
            </div>
            <div class="col-4 d-flex flex-column footer-link-list">
                <h4 class="text-white semibold-font-family footer-title" data-arb="الشركة" data-en="Company">
                    Company</h4>
                <a href="{{ route('home') }}" class="footer-link text-white medium-font-family" data-arb="الرئيسية"
                    data-en="Home"> Home</a>
                <a href="{{ route('about') }}" class="footer-link text-white medium-font-family" data-arb="من نحن"
                    data-en="About"> About </a>
                {{-- <a href="{{ route('tracking_pakistan') }}" class="footer-link text-white medium-font-family"
                    data-en="Tracking Pakistan" data-arb="تراكينج باكستان"> Tracking Pakistan </a>  --}}

                <a href="{{ url('/our_team') }}" class="footer-link text-white medium-font-family" data-arb="الفريق"
                    data-en="Team">
                    Team </a>
                <a href="{{ url('/product') }}" class="footer-link text-white medium-font-family" data-arb="الفريق"
                    data-en="Product">
                    Product </a>
                {{-- 
                <a href="{{ url('/contact_us') }}" class="footer-link text-white m-0 medium-font-family"
                    data-arb="تواصل معنا" data-en="Contact"> Contact</a>

                <a href="{{ route('privacy-policy') }}" class="footer-link text-white medium-font-family"
                    data-en="Privacy policy" data-arb="تراكينج باكستان" style="margin-top: 10px"> privacy-policy </a> --}}


            </div>
            <div class="col-4 d-flex flex-column footer-contact">
                <h4 class="text-white semibold-font-family footer-title" data-arb="تواصل معنا" data-en="Contact us">
                    Contact us</h4>

                {{-- <div class="d-flex mb-4">
                    <img src="{{ asset('img/mobile.svg') }}" alt="mobile" style="margin:0 20px">
                    <div class="flex flex-column" style="display:flex; flex-direction:column;">
                        <span class="text-white medium-font-family">UAN: 920017273</span>
                    </div>
                </div> --}}

                <div class="d-flex mb-4">
                    <img src="{{ asset('img/mail.svg') }}" alt="mail" style="margin:0 20px">
                    <a href="mailto:info@trackingme.ca" class="text-white medium-font-family">info@trackingme.ca </a>
                </div>

                <div class="d-flex">
                    <img src="{{ asset('img/map.svg') }}" alt="map" style="margin:0 20px">
                    <div>
                        <span class="text-white medium-font-family"
                            data-arb="403 برج بلاتيني الفيصلية
                            الحي ، طريق الملك فهد ، جدة ،
                            المملكة العربية السعودية."
                            data-en="325 Front W St, 325, Toronto, Ontario, Canada, M5V2Y1"
                            style="max-width:300px;display: block;">325 Front W St, 325, Toronto, Ontario, Canada,
                            M5V2Y1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="align-items-center bg-dark container-fluid copyright d-flex p-0">
        <div class="container">
            <div class="row">

                {{-- <div class="d-flex footer-social col-4">
                    <a class="mx-2" target="_blank" style="margin-left: 0;" href="https://twitter.com/trackingksa">
                        <img src="{{ asset('img/twitter.svg') }}" style="height: 20px" alt="twitter">
                    </a>
                    <a class="mx-2" target="_blank" href="https://www.facebook.com/trackingksa">
                        <img src="{{ asset('img/facebook.svg') }}" style="height: 20px" alt="facebook"></a>
                    <a class="mx-2" target="_blank" href="https://www.instagram.com/trackingksa/">
                        <img src="{{ asset('img/insta.svg') }}" style="height: 20px" alt="instagram"></a>
                    <a class="mx-2" href="https://www.linkedin.com/company/trackingksa/" target="_blank">
                        <img src="{{ asset('img/linkedin.svg') }}" style="height: 20px" alt="LinkedIn">
                    </a>
                    <a class="mx-2 yt" href="https://www.youtube.com/@trackingksa" target="_blank">
                        <img src="{{ asset('img/youtube.svg') }}" alt="YouTube"
                            style="margin-top: -3px; margin-right: -4px">
                    </a>
                    <a class="mx-2" href="https://www.tiktok.com/@trackingksa?_t=8dhViY0WoOf&_r=1" target="_blank">
                        <img src="{{ asset('img/tiktok.svg') }}" alt="TikTok" style="margin-top: 2">
                    </a>

                </div> --}}
    <div class="p-0 col-12  text-white semibold-font-family footer-copyright-text text-start" style="color: white"
        target="_blank">
        <h5 class="copy-right " style="text-align: center; padding-bottom: 20px">Copyright © 2023 Tracking, All Rights
            Reserved. Powered by <a target="_blank" href="https://www.quaidventures.com/">Quaid Ventures</a>
            <a target="_blank" href="{{ route('privacy-policy') }}">
                <u>Privacy Policy</u>
            </a>
        </h5>
    </div>
    <div class="col-4">
        {{-- <div class="footer-text float-end">
                        <select id="switchlang" class="form-select">
                            <option value="en" id="en">English</option>
                            <option value="arb" id="arb"> Arabic</option>
                        </select>
                    </div> --}}
    </div>
</div>
</div>
</div>
</div>
<div class="align-items-center bg-dark container-fluid copyright d-flex p-0">
    <div class="container">
        <div class="row">



            </select>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Footer End -->
