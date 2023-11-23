@extends('layout.main')
<style>
@media (max-width: 768px) {
    #privacy-policy {
        font-size: 35px !important;
        margin-top: 140px !important;
    }
}
</style>
@section('content')

<h1 class="fw-bold bold-font-family" data-arb="سياسة الخصوصية" id="privacy-policy"
    style="text-align: center; margin-top: 200px; font-size: 60px" data-en="Privacy Policy">
    Privacy Policy
</h1>
<div class="container section services-solutions-main">
    <h2 data-arb="المعلومات التي نجمعها:" data-en="Information We Collect:"
        style="font-family: poppins-bold; letter-spacing: 1px; margin-top: -60px">
        Information We Collect:</h2>
    <h4 data-arb="1.1. المعلومات الشخصية:" style="font-family: poppins-bold; letter-spacing: 1px; margin-top: -20px"
        data-en="1.1. Personal Information:">1.1. Personal Information:</h4>
    <p data-arb="سوف نقوم بجمع ومعالجة المعلومات الشخصية التالية عنك:"
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We may collect and process the following personal information about you:">We may collect
        and process the following personal information about you:</p>
    <ul>
        <li data-arb="الاسم والعنوان وعنوان البريد الإلكتروني ورقم الهاتف"
            style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Name, address, email address, and phone number ">
            Name, address, email address, and
            phone number </li>
        <li data-arb="المعلومات المتعلقة بالمركبة، بما في ذلك رقم لوحة الترخيص ورقم تعريف المركبة (VIN)"
            style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Vehicle-related information, including license plate number and vehicle identification number (VIN)">
            Vehicle-related information, including license plate number and vehicle identification number (VIN)</li>
        <li data-arb="بيانات تحديد الموقع الجغرافي ومعلومات التتبع"
            style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Geolocation data and tracking information">
            Geolocation data and tracking information
        </li>
        <li data-arb="بيانات الاستخدام ، مثل أوقات تسجيل الدخول ومدة الجلسة والتفاعل مع النظام الأساسي"
            style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Usage data, such as login times, session duration, and interaction with the platform">
            Usage data, such as login times, session duration, and interaction with the platform</li>
    </ul>
    <h4 data-arb="1.2. المعلومات غير الشخصية:" style="font-family: poppins-bold; letter-spacing: 1px"
        data-en="1.2. Non-Personal Information:">1.2. Non-Personal Information:
    </h4>
    <p data-arb="قد نقوم أيضا بجمع المعلومات الغير شخصية، بما في ذلك البيانات المجمعة ومجهولة المصدر، والتي لا تحدد هويتك بشكل مباشر."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We may also collect non-personal information, including aggregated and anonymized data, which does not directly">
        We may also collect non-personal information, including aggregated and anonymized data, which does not directly
        identify you.</p>
    <h3 data-arb="
استخدام المعلومات:" style="font-family: poppins-bold; letter-spacing: 1px;" data-en="Use of Information:">
        Use of Information:
    </h3>
    <h4 data-arb="2.1. تقديم الخدمات:" style="font-family: poppins-bold; margin-top: -30px; letter-spacing: 1px"
        data-en="2.1. Provide Services:">
        2.1. Provide Services:</h4>
    <p data-arb="نقوم بجمع واستخدام معلوماتك الشخصية لتوفير خدمات إدارة الأسطول وتتبع نظام تحديد المواقع العالمي (GPS)، بما في ذلك:"
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px" data-en="We collect and use your personal information to provide fleet management and GPS
        tracking services, including:">We collect and use your personal information to provide fleet management and GPS
        tracking services, including:
    </p>
    <ul>
        <li data-arb="تتبع مواقع المركبات وطرقها" style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Tracking vehicle locations and routes">Tracking vehicle
            locations and routes</li>
        <li data-arb="إنشاء التقارير والتحليلات" style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Generating reports and analytics">Generating reports and
            analytics</li>
        <li data-arb="إرسال الإشعارات والتنبيهات" style="font-family:width: 10%; poppins-bold; letter-spacing: 1px"
            data-en="Sending notifications and alerts">Sending notifications and
            alerts</li>
    </ul>
    <h4 data-arb="2.2. التواصل:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="2.2. Communication:">
        2.2. Communication:</h4>
    <p data-arb="قد نستخدم معلوماتك الشخصية للتواصل معك فيما يتعلق بخدماتنا، تحديثاتنا و عروضنا الترويجية."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px" data-en="We may use your personal information to communicate with you regarding our services,
        updates, and promotional offers.">We may use your personal information to communicate with you regarding our
        services, updates, and promotional offers.</p>
    <h4 data-arb="2.3. الالتزامات القانونية:" style="font-family: poppins-bold; letter-spacing: 1px"
        data-en="2.3. Legal Obligations:">2.3. Legal Obligations:</h4>
    <p data-arb="يمكننا معالجة معلوماتك للامتثال للالتزامات القانونية، مثل الاستجابة للطلبات القانونية، فرض الشروط والأحكام الخاصة بنا، منع الاحتيال أو الأنشطة غير القانونية."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px" data-en="We may process your information to comply with legal obligations, such as responding to
        legal requests, enforcing our terms and conditions, or preventing fraud or illegal activities.">We may process
        your information to comply with legal obligations, such as responding to
        legal requests, enforcing our terms and conditions, or preventing fraud or illegal activities.</p>
    <h3 data-arb="الإفصاح عن المعلومات:" style="font-family: poppins-bold; letter-spacing: 1px"
        data-en="Disclosure of Information:">Disclosure of Information:</h3>
    <h4 data-arb="3.1. مزودي خدمات الطرف الثالث:"
        style="font-family: poppins-bold;margin-top: -30px; letter-spacing: 1px"
        data-en="3.1. Third-Party Service Providers:">3.1. Third-Party Service
        Providers:</h4>
    <p data-arb="قد نشارك معلوماتك الشخصية مع مزودي الخدمات الموثوقين من جهات خارجية يساعدوننا في تقديم خدماتنا، وفقا للالتزامات التعاقدية المناسبة."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px" data-en="We may share your personal information with trusted third-party service providers who
        assist us in delivering our services, subject to appropriate contractual obligations.">We may share your
        personal information with trusted third-party service providers who
        assist us in delivering our services, subject to appropriate contractual obligations.</p>
    <h4 data-arb="3.2. المتطلبات القانونية:" style="font-family: poppins-bold; letter-spacing: 1px"
        data-en="3.2. Legal Requirements:">3.2. Legal Requirements:</h4>
    <p data-arb="قد نكشف عن معلوماتك الشخصية للامتثال للقوانين أو اللوائح أو الإجراءات القانونية المعمول بها ، أو للرد على الطلبات القانونية من السلطات العامة."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px" data-en="We may disclose your personal information to comply with applicable laws, regulations,
        or legal processes, or to respond to lawful requests from public authorities.">We may disclose your personal
        information to comply with applicable laws, regulations,
        or legal processes, or to respond to lawful requests from public authorities.</p>
    <h4 data-arb="3.3. الموافقة:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="3.3. Consent:">3.3.
        Consent:
    </h4>
    <p data-arb="قد نشارك معلوماتك الشخصية بموافقتك أو حسب الضرورة لتحقيق الأغراض الموضحة في سياسة الخصوصية."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We may share your personal information with your consent or as otherwise necessary to fulfill the purposes outlined in this Privacy Policy.">
        We may share your personal information with your consent or as otherwise necessary to fulfill the purposes
        outlined in this Privacy Policy.</p>
    <h3 data-arb="تأمين البيانات:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="Data Security:">Data
        Security:</h3>
    <p data-arb="نحن نستخدم حلول تقنية و منظمة معقولة لحماية معلوماتك الشخصية من الوصول غير المصرح به، الفقدان، سوء الاستخدام أو التغيير. و لذلك، يرجى ملاحظة أنه لا يمكن ضمان أن يكون نقل البيانات أو تخزينها آمنا بنسبة 100٪."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We employ reasonable technical and organizational measures to protect your personal information from unauthorized
        access, loss, misuse, or alteration. However, please note that no data transmission or storage can be guaranteed to be 100% secure.">
        We employ reasonable technical and organizational measures to protect your personal information from
        unauthorized
        access, loss, misuse, or alteration. However, please note that no data transmission or storage can be guaranteed
        to be 100% secure.</p>
    <h3 data-arb="الاحتفاظ بالبيانات:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="Data Retention:">
        Data
        Retention:</h3>
    <p data-arb="نحن نحتفظ بمعلوماتك الشخصية فقط طالما كان ذلك ضروريا لتحقيق الأغراض الموضحة في سياسة الخصوصية، ما لم يكن هناك حاجة إلى فترة احتفاظ أطول أو يسمح بها القانون."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We will retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.">
        We will retain your personal information only for as long as necessary to fulfill the purposes outlined in this
        Privacy Policy, unless a longer retention period is required or permitted by law.</p>

    <h3 data-arb="حقوقك:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="Your Rights:">
        Your Rights:</h3>
    <p data-arb="لديك الحق في الوصول إلى معلوماتك الشخصية، تصحيحها، تحديثها أو حذفها. قد يكون لك أيضا الحق في الاعتراض على أنشطة معالجة بيانات معينة أو تقييدها. لممارسة حقوقك، يرجى الاتصال بنا باستخدام المعلومات الواردة في نهاية سياسة الخصوصية هذه."
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="You have the right to access, correct, update, or delete your personal information. You
        may also have the right to object to or restrict certain data processing activities. To exercise your rights, please contact us using the information provided at the end of this Privacy Policy.">
        You have the right to access, correct, update, or delete your personal information. You
        may also have the right to object to or restrict certain data processing activities. To exercise your rights,
        please contact us using the information provided at the end of this Privacy Policy.</p>
    <h3 data-arb="التغييرات في سياسة الخصوصية:" style="font-family: poppins-bold; letter-spacing: 1px"
        data-en="Changes to the Privacy Policy:">Changes to the Privacy Policy:
    </h3>
    <p data-arb="نحتفظ بالحق في تحديث أو تعديل سياسة الخصوصية في أي وقت. و سنقدم إشعارا بأي تغييرات جوهرية من خلال موقعنا الإلكتروني أو وسائل أخرى، مع استمرار استخدامك لخدماتنا بعد هذه التغييرات يشكل موافقتك على سياسة الخصوصية المحدثة"
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="We reserve the right to update or modify this Privacy Policy at any time. We will provide notice of any material changes through our website or other means, and your continued use of our services after such changes constitutes your acceptance of the updated Privacy Policy.">
        We reserve the right to update or modify this Privacy Policy at any time. We will provide notice of any material
        changes through our website or other means, and your continued use of our services after such changes
        constitutes your acceptance of the updated Privacy Policy.</p>

    <h3 data-arb="اتصل بنا:" style="font-family: poppins-bold; letter-spacing: 1px" data-en="Contact Us:">
        Contact Us:</h3>
    <p data-arb="إذا كانت لديك أي أسئلة أو مخاوف أو طلبات بخصوص سياسة الخصوصية أو ممارسات البيانات الخاصة بنا، يرجى الاتصال بنا. "
        style="font-family:width: 10%; poppins-bold; letter-spacing: 1px; margin-top: -30px"
        data-en="If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us. ">
        If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please
        contact us. </p>
</div>
@endsection