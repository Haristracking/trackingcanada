<!DOCTYPE html>
<html lang="en">

<head>

<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CI8LF1BC77U4209VH5U0');
  ttq.page();
}(window, document, 'ttq');
</script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start'
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PFVJLRM');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Verification Code -->

    <meta name="facebook-domain-verification" content="jfrloety8hi8esyvdrz9i4e2opwza5" />

    <!-- End Facebook Verification Code -->



    {{--    Linkden Manager--}}
    <script type="text/javascript">
        _linkedin_partner_id = "4952481";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function (l) {
            if (!l) {
                window.lintrk = function (a, b) {
                    window.lintrk.q.push([a, b])
                };
                window.lintrk.q = []
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
             src="https://px.ads.linkedin.com/collect/?pid=4952481&fmt=gif"  />
    </noscript>
    {{--    end linkden manager--}}
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
     {{-- <meta name="facebook-domain-verification" content="jfrloety8hi8esyvdrz9i4e2opwza5"  /> --}}
     {{-- <meta name="facebook-domain-verification" content="nralvo2ivo871pj4xnc1byv58krroa"  /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Favicon -->
    <link href="{{asset('img\favicon.png')}}" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('scss/style.css')}}" rel="stylesheet">
    <link href="{{asset('scss/tablet.css')}}" rel="stylesheet">
    <link href="{{asset('scss/mobile.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '469561691834247');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" alt="facebook"
             src="https://www.facebook.com/tr?id=469561691834247&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Meta Pixel Code -->
    @yield('head-scripts')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XTQ8RE9QM6">

</script>
<script>
    window.dataLayer = window.dataLayer || [];

    $('html').attr('data-arb', data-arb);


    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-XTQ8RE9QM6');
</script>

<body>

<script src="//code.tidio.co/j9tn0mkq94emohb8qyv8clyclk6fqolf.js" async></script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFVJLRM"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

@include('layout.navbar')

@yield('content')

@include('layout.footer')

@include('layout.scripts')
@yield('scripts')
<script src="//code.tidio.co/j9tn0mkq94emohb8qyv8clyclk6fqolf.js" async></script>
</body>
</html>
