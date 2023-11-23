@extends('layout.main')
@section('content')
    <!-- CONTACT US Start -->
    <div class="container-fluid bg-dark contact-us-section page-margin-navbar" id="contact_us_heading">
        <div class="container contact-us-main">
            <div class="row contact-us-row">
                <div class="col-7 contact-us-content">
            <span
                class="sub-header semibold-font-family text-white"
                data-arb="اتصل بنا"
                data-en="CONTACT US"
            >CONTACT US</span
            >

                    <span
                        class="title bold-font-family text-white"
                        data-arb="هل لديك أسئلة أو بحاجة الى مساعدة؟"
                        data-en="Have questions or need help?"
                    >
              Have questions or need help?
            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT US End -->

    <!-- CONTACT US Start -->
    <div class="container-fluid contact-info-section">
        <div class="container contact-info-main">
            <div class="contact-info-row">
                <div class="contact-info-content">
                    <div class="contact-info-header">
                    <span
                        class="title bold-font-family"
                        data-arb="معلومات التواصل"
                        data-en="Contact Information">
                Contact Information
              </span>

                        <span class="desc medium-font-family col-10"
                              data-arb="املأ النموذج وسيقوم فريقنا بالرد عليك في غضون 24 ساعة."
                              data-en="Fill up the form and our team will get back to you within 24 hours."
                        >
                Fill up the form and our team will get back to you within 24
                hours.
              </span>
                    </div>

                    <div class="contact-info-address">
                        <div class="contact-info-address-p1">
                            <div class="d-flex mb-4 item">
                                <img src="./img/mobile.svg" alt="mobile"/>
                                <div
                                    class="flex flex-column"
                                    style="display: flex; flex-direction: column"
                                >
                                    <span class="medium-font-family">UAN: 920017273</span>
                                    <span class="medium-font-family"
                                    ></span
                                    >
                                </div>
                            </div>

                            <div class="d-flex mb-4 item">
                                <img src="./img/mail.svg" alt="mail"/>
                                <a href="mailto:info@tracking.me" class="medium-font-family"
                                >info@tracking.me
                                </a>
                            </div>
                        </div>

                        <div class="contact-info-address-p2">
                            <div class="d-flex item">
                                <img src="./img/map.svg" alt="map"/>
                                <span
                                    class="medium-font-family"
                                    data-arb="403 برج بلاتيني الفيصلية
                            الحي ، طريق الملك فهد ، جدة ،
                            المملكة العربية السعودية."
                                    data-en="403, Platini Tower, Al Faisaliyah District, King Fahd Road, Jeddah, Saudi Arabia."
                                    style="max-width: 300px; display: block"
                                >403, Platini Tower, Al Faisaliyah District, King Fahd Road,
                    Jeddah, Saudi Arabia.</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact_us_form" class="row" method="POST">
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="الاسم الاو"
                               data-en="First Name">First Name</label><br/>
                        <span id="first_name_validation" class="error_message"></span>
                        <input data-translate="firstname_placeholder"
                               id="first_name"
                               class="input"
                               placeholder="Type your first name"
                               name="first_name"
                               type="text"
                               value=""
                               size="30"/><br/>

                    </div>
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="الاسم الثاني"
                               data-en="Last Name">Last Name</label><br/>
                        <span id="last_name_validation" class="error_message"></span>
                        <input data-translate="lastname_placeholder"
                               id="last_name"
                               class="input"
                               placeholder="Type your last name"
                               name="last_name"
                               type="text"
                               value=""
                               size="30"
                        /><br/>
                    </div>
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="عنوان البريد الالكترونى"
                               data-en="Email Address"
                        >Email Address</label
                        ><br/>
                        <span id="email_validation" class="error_message"></span>
                        <input data-translate="email_placeholder"
                               id="email"
                               class="input"
                               placeholder="Type your email address"
                               name="email"
                               type="email"
                               value=""
                               size="30"
                        /><br/>
                    </div>
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="رقم الجوال"
                               data-en="Phone Number"
                        >Phone Number</label
                        ><br/>
                        <span id="phone_validation" class="error_message"></span>

                        <input data-translate="phone_placeholder"
                               id="phone"
                               class="input"
                               placeholder="Type your phone number"
                               name="phone"
                               type="tel"
                               value=""
                               size="30"
                        /><br/>
                    </div>
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="اسم الشركة"
                               data-en="Company Name"
                        >Company Name</label
                        ><br/>
                        <span id="company_validation" class="error_message"></span>

                        <input data-translate="placeholder_company"
                               id="company_name"
                               class="input"
                               placeholder="Type your company name"
                               name="company_name"
                               type="text"
                               value=""
                               size="30"
                        /><br/>
                    </div>
                    <div class="col-6 input-row">
                        <label for="name"
                               data-arb="العنوان"
                               data-en="Address">Address</label><br/>
                        <span id="address_validation" class="error_message"></span>
                        <input data-translate="placeholder_address"
                               id="address"
                               class="input"
                               placeholder="Type your address"
                               name="address"
                               type="text"
                               value=""
                               size="30"
                        /><br/>
                    </div>

                    <div class="checkbox-row">
                    <span
                        class="title"
                        data-arb="الحلول المطلوبة"
                        data-en=" Solutions">
                 Solutions
              </span>

                        <span id="solution_validation" class="error_message"></span>
                        <br>
                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="StandardTracking"
                                   class="form-check-input"
                            />
                            <label for="StandardTracking"
                                   class="form-check-label"
                                   data-arb="التتبع القياسي"
                                   data-en="Standard Tracking">
                                Standard Tracking</label><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="AdvancedTracking"
                                   class="form-check-input"/>
                            <label for="AdvancedTracking"
                                   class="form-check-label"
                                   data-arb="التتبع المتقدم"
                                   data-en="Advanced Tracking"
                            >
                                Advanced Tracking</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="FleetManagement"
                                   class="form-check-input"
                            />
                            <label for="FleetManagement"
                                   class="form-check-label"
                                   data-arb="إدارة الأسطول"
                                   data-en="Fleet Management"
                            >
                                Fleet Management</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="DriverManagement"
                                   class="form-check-input"
                            />
                            <label for="DriverManagement"
                                   class="form-check-label"
                                   data-arb="إدارة السائق"
                                   data-en="Driver Management"
                            >
                                Driver Management</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="WeightMonitoring"
                                   class="form-check-input"
                            />
                            <label for="WeightMonitoring"
                                   class="form-check-label"
                                   data-arb="مراقبة الوزن"
                                   data-en="Weight Monitoring"
                            >
                                Weight Monitoring</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="FuelManagement"
                                   class="form-check-input"
                            />
                            <label for="FuelManagement"
                                   class="form-check-label"
                                   data-arb="إدارة الوقود"
                                   data-en="Fuel Management"
                            >
                                Fuel Management</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="OilTracking"
                                   class="form-check-input"
                            />
                            <label for="OilTracking"
                                   class="form-check-label"
                                   data-arb="تتبع الزيت"
                                   data-en="Oil Tracking"
                            >

                                Oil Tracking</label
                            ><br/>
                        </div>

                        <div class="col-6 checkbox-item">
                            <input type="checkbox"
                                   id="solution"
                                   name="solution[]"
                                   value="SchoolTracking"
                                   class="form-check-input"
                            />
                            <label for="SchoolTracking"
                                   class="form-check-label"
                                   data-arb="تتبع المدارس"
                                   data-en="School Tracking"
                            >
                                School Tracking</label
                            ><br/>
                        </div>
                    </div>



                    <button class="secondary" type="submit" name="SubmitButton">
              <span data-arb="إرسال" data-en="SEND MESSAGE">
                SEND MESSAGE
              </span>
                        <img src="./img/arrow-black.svg" class="black-arrow" alt="black-arrow"/>
                        <img src="./img/white-arrow.svg" class="white-arrow" alt="white-arrow"/>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTACT US End -->
@endsection
@section('scripts')

    <script type="text/javascript">
        function scroll() {
            $('form').animate({
                scrollTop: $(".page-margin-navbar").offset().top
            }, 2000);
            return false;
        }

        function clearContents(element) {
            element.value = '';
        }
    </script>

    <script type="text/javascript">
        $('#contact_us_form').submit(function (e) {

            e.preventDefault();
            let bool = false;
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let company_name = $('#company_name').val();
            let address = $('#address').val();
            let fleet_value = $('.fleet-value').val();
            fleet_value = fleet_value.replace(/\D/g, "");
            const checkboxes = Array.from(document.querySelectorAll("#solution"));
            var solution_bool = checkboxes.reduce((acc, curr) => acc || curr.checked, false);

            if (first_name === '') {
                $('#first_name_validation').text('Please provide First Name');
                bool = true;
            } else {
                $('#first_name_validation').text('');
                bool = false;
            }
            if (last_name === '') {
                $('#last_name_validation').text('Please provide Last Name');
                bool = true;

            } else {
                $('#last_name_validation').text('');
                bool = false;
            }
            if (email === '') {
                $('#email_validation').text('Please provide Email Address');
                bool = true;

            } else {
                $('#email_validation').text('');
                bool = false;
            }
            if (phone === '') {
                $('#phone_validation').text('Please provide Phone number');
                bool = true;

            } else {
                $('#phone_validation').text('');
                bool = false;
            }
            if (company_name === '') {
                $('#company_validation').text('Please provide Company Name');
                bool = true;

            } else {
                $('#company_validation').text('');
                bool = false;
            }
            if (address === '') {
                $('#address_validation').text('Please provide complete address');
                bool = true;
            } else {
                $('#address_validation').text('');
                bool = false;
            }
            if (fleet_value == 0) {
                $('#fleet_validation').text('Please add Fleet Size');
                bool = true;
            } else {
                $('#fleet_validation').text('');
                bool = false;
            }
            if (!solution_bool) {
                $('#solution_validation').text('Please check at least one of the Solution you are intrested in');
                bool = true;
            } else {
                $('#solution_validation').text('');
                bool = false;
            }
            if (!bool) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{route('contact.us.store')}}',
                    method: "POST",
                    dataType: "json",
                    cache: false,
                    data: $('form#contact_us_form').serialize(),
                    success: function (result) {
                        if (result == 'success') {
                            swal.fire(
                                'Success!',
                                "Our Team will contact you ASAP",
                                'success'
                            ).then(function () {
                                location.replace('/thankyou');

                            });
                        }
                    },
                    error: function (xhr, error) {
                        swal.fire(
                            'Error!',
                            "Something Went Wrong, Please try again.",
                            'error'
                        );
                    }
                });
            }
        });
    </script>

@endsection