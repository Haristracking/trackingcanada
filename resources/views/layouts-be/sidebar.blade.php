<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{URL('/')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/image/logo.png') }}" alt="logo" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{URL('/')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
