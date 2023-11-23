@extends('layout.main')
<style>
@media (min-width: 300px) and (max-width: 944px) {
    #first-slider {
        margin-top: 100px;
    }
}
</style>
@section('content')

<div class="tracker_slider" style="">
    <input type="radio" class="tracker_slider__nav" name="slider" checked="checked">
    <input type="radio" class="tracker_slider__nav" name="slider">
    <input type="radio" class="tracker_slider__nav" name="slider">
    <input type="radio" class="tracker_slider__nav" name="slider">
    <input type="radio" class="tracker_slider__nav" name="slider">
    <input type="radio" class="tracker_slider__nav" name="slider">
    <input type="radio" class="tracker_slider__nav" name="slider">

    <!-- <input type="radio" class="tracker_slider__nav" name="slider"> -->
    <div class="tracker_slider__inner">
        <div class="tracker_slider__contents" id="first-slider">
            <div><img src="{{asset('img/tracker1.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-en="TFB 404 4G" data-arb="TFB 404 4G"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFB 404 4G</h4>
                <p style="margin-left: 10px; margin-right: 10px"
                    data-en="Tracker with the latest 4G technology, internal GNSS and GSM antennas, backup battery, and a built-in G sensor for a comprehensive understanding of driving behavior. This Equipment Tracking 4G device is manufactured with advanced GPS & GPRS tracking Technology and uses 4G data communication via 4G to secure, monitor, and track both mobile and stationary equipment. The TFB404 4G is ideal for applications where location acquisition of remote objects is needed, such as Fleet Management, Taxi Companies, Public Transport, Logistics companies, and Personal Cars, among others."
                    data-arb="اجهزة تعقب مع أحدث تقنيات 4G، وهوائيات GNSS و GSM الداخلية، وبطارية احتياطية، ومستشعر G مدمج لفهم شامل لسلوك القيادة. تم تصنيع جهاز تتبع المعدات 4G هذا بتقنية تتبع GPS و GPRS المتقدمة ويستخدم اتصال بيانات 4G عبر 4G لتأمين ومراقبة وتتبع كل من المعدات المتنقلة والثابتة. يعد TFB404 4G مثاليا للتطبيقات التي تتطلب الحصول على موقع الأشياء البعيدة، مثل إدارة الأسطول وشركات سيارات الأجرة والنقل العام وشركات الخدمات اللوجستية والسيارات الشخصية وغيرها.">
                    Tracker with the latest 4G technology, internal GNSS and GSM antennas, backup battery, and a
                    built-in G sensor for a comprehensive understanding of driving behavior. This Equipment Tracking 4G
                    device is manufactured with advanced GPS & GPRS tracking Technology and uses 4G data communication
                    via 4G to secure, monitor, and track both mobile and stationary equipment. The TFB404 4G is ideal
                    for applications where location acquisition of remote objects is needed, such as Fleet Management,
                    Taxi Companies, Public Transport, Logistics companies, and Personal Cars, among others.
                </p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div><img src="{{asset('img/tracker2.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-en="TFB303" data-arb="TFB303"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFB303</h4>
                <p data-en="A small tracking device with professional capabilities internally equipped with the latest GNSS antenna network technology. A high-quality GSM chip and an internal backup battery are also integrated with it G-SENSOR to monitor driving behaviour."
                    data-arb="جهاز تتبع صغير وبإمكانيات احترافية مزود داخليا بأحدث تقنيات شبكة هوائيالGNSS
وا GSMعالية الجودة وبطارية احتياطيةداخلية كذلك مدمج معه
مستشعرG-SENSOR لمراقبة سلوك القيادة.">
                    A small tracking device with professional capabilities internally equipped with the latest GNSS
                    antenna network technology. A high-quality GSM chip and an internal backup battery are also
                    integrated with it G-SENSOR to monitor driving behaviour.
                </p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div class="tracker_slider__image"><img src="{{asset('img/tracker3.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-en="TFA 412" data-arb="TFA 412"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFA 412</h4>
                <p data-en="TFA412 is 4G CATI/CATMI tracking device, which combined with positioning, monitor, alarm and tracking functions, with small size it's easy to use and operate, main applies to vehicles and other mobile object location and tracking service."
                    data-arb="TFA412 هو جهاز تتبع 4G CATI / CATMI، والذي يقترن بوظائف تحديد المواقع والمراقبة والإنذار والتتبع، يتميز بصغر حجمه و أنه سهل الاستخدام والتشغيل، وينطبق بشكل رئيسي على المركبات وغيرها من مواقع الأجسام المتنقلة وخدمات التتبع.">
                    TFA412 is 4G CATI/CATMI tracking device, which combined with positioning, monitor, alarm and
                    tracking functions, with small size it's easy to use and operate, main applies to vehicles and other
                    mobile object location and tracking service.</p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div class="tracker_slider__image"><img src="{{asset('img/tracker4.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-arb="TFB 313" data-en="TFB 313"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFB 313</h4>
                <p data-arb="متتبع مصغر واحترافي يستخدم بأحدث التقنيات. يحتوي على هوائيات داخلية عالية الكسب ل GNSS و GSM، وبطارية احتياطية. كما يأتي مع مستشعر G لاكتشاف أنماط القيادة."
                    data-en="Miniature, professional tracker that utilizes the latest technology. It has internal high gain antennas for GNSS and GSM, and a backup battery. It I also comes with a G-sensor for detecting driving patterns.">
                    Miniature, professional tracker that utilizes the latest technology. It has internal high gain
                    antennas for GNSS and GSM, and a backup battery. It I also comes with a G-sensor for detecting
                    driving patterns.</p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div class="tracker_slider__image"><img src="{{asset('img/tracker5.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-arb="TFB323" data-en="TFB323"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFB 323</h4>
                <p data-arb="TFB323 هو جهاز تعقب 2G متقدم والذي يقترن بوظائف تحديد المواقع والمراقبة والإنذار والتتبع، وينطبق بشكل رئيسي على المركبات وغيرها من خدمات تحديد موقع الجوال وتتبعه. يمكن دعم العمل مع مستشعرات البلوتوث الخارجية (الاستخدام الحالي لمستشعر الرطوبة و درجة حرارة BLE)."
                    data-en="TFB323 is 2G advanced GPS tracker which combined with positioning, monitor, alarm and tracking functions, the main applies to vehicles and other mobile object location and tracking services. With Bluetooth, it can support to working with external Bluetooth sensors (current use for BLE temp & humidity sensor).">
                    TFB323 is 2G advanced GPS tracker which combined with positioning, monitor, alarm and tracking
                    functions, the main applies to vehicles and other mobile object location and tracking services. With
                    Bluetooth, it can support to working with external Bluetooth sensors (current use for BLE temp &
                    humidity sensor).</p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div class="tracker_slider__image"><img src="{{asset('img/tracker6.png')}}" class="tracker_slider__image">
            </div>
            <div class="tracker_slider__txt">
                <h4 class="slider__head" data-en="Temperature Sensor: TS-TH01" data-arb="مستشعر درجة الحرارة: TS-TH01"
                    style="font-family: poppins-bold; margin-bottom: 10px; margin-top: -40px">
                    Temperature Sensor: TS-TH01</h4>
                <p data-en="This temperature and humidity sensor product. Including Bluetooth temperature and humidity sensor. It has a built in 2477 button battery,which can be removed. It is equipped with multiple installation auxiliary accessories to help users simply install in different scenarios."
                    data-arb="هذا المنتج هو استشعار درجة الحرارة والرطوبة. بما في ذلك مستشعر درجة الحرارة والرطوبة عبر البلوتوث. يحتوي على بطارية زر مدمجة 2477، والتي يمكن إزالتها. وهي مجهزة بالعديد من الملحقات المساعدة للتثبيت و مساعدة المستخدمين على التثبيت ببساطة في سيناريوهات مختلفة.">
                    This temperature and humidity sensor product. Including Bluetooth temperature and humidity sensor.
                    It has a built in 2477 button battery,which can be removed. It is equipped with multiple
                    installation auxiliary accessories to help users simply install in different scenarios.</p>
            </div>
        </div>
        <div class="tracker_slider__contents">
            <div class="tracker_slider__image"><img src="{{asset('img/tracker7.png')}}" class="tracker_slider__image">
            </div>

            <div class="tracker_slider__txt" style="margin-left: 20px">
                <h4 class="slider__head" data-ent="TFB402" data-arb="TFB402"
                    style="font-family: poppins-bold; margin-bottom: 10px">
                    TFB402</h4>

                <p data-en="TFB402 is 4G CAT1 tracking device, which combined with positioning, monitor, alarm and tracking functions, with small size it's easy to use and operate, main applies to vehicles and other mobile object location and tracking service, with widely voltage support, it can also be used for Cars, Trucks, motorcycle and even electric vehicles."
                    data-arb="TFB402 هو جهاز تتبع 4G CAT1، والذي يقترن بوظائف تحديد المواقع والمراقبة والإنذار والتتبع، يتميز بصغر حجمه وسهولة استخدامه وتشغيله، وينطبق بشكل رئيسي على المركبات وغيرها من مواقع الجوال وخدمات التتبع. على نطاق واسع، يمكن استخدامه أيضا للسيارات والشاحنات والدراجات النارية وحتى السيارات الكهربائية.">
                    TFB402 is 4G CAT1 tracking device, which combined with positioning, monitor, alarm and tracking
                    functions, with small size it's easy to use and operate, main applies to vehicles and other mobile
                    object location and tracking service, with widely voltage support, it can also be used for Cars,
                    Trucks, motorcycle and even electric vehicles.</p>
            </div>
        </div>
    </div>
</div>

<script>
// Function to change the active slider
function changeSlider() {
    const sliders = document.querySelectorAll('.tracker_slider__nav');
    const currentIndex = Array.from(sliders).findIndex((slider) => slider.checked);
    const nextIndex = (currentIndex + 1) % sliders.length;
    sliders[nextIndex].checked = true;
}

// Function to start the auto-change timer
function startAutoChange() {
    setInterval(changeSlider, 4000); // Change slider every 3000 milliseconds (3 seconds)
}

// Start the auto-change timer when the page loads
window.addEventListener('load', startAutoChange);
</script>
@endsection