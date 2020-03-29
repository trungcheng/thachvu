<!doctype html>
<html class="no-js" lang="vi">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('page')</title>
    
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta property="og:title" content="@yield('ogTitle')" />
    <meta property="og:description" content="@yield('propDesc')" />
    <meta name="robots" content="index, follow" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Thach Vu" />    
    <meta name="author" content="Thach Vu" />
    <meta http-equiv="audience" content="General" /> 
    <meta name="resource-type" content="Document" />  
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="/frontend/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta property="og:site_name" content="Thachvu.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="alternate" href="@yield('alternate')" hreflang="vi-vn">
    <meta itemprop="name" content="@yield('propName')" />
    <meta itemprop="description" content="@yield('propDesc')" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:url" content="@yield('ogUrl')" /> 
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('propDesc')" />
    <meta name="twitter:title" content="@yield('ogTitle')" />
    <meta name="twitter:image" content="https://thachvu.com/frontend/images/Thach-Vu-logo-533x200.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    @section('pageCss')
    @show
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <script src="{{ asset('frontend/js/vendors/modernizr.custom.js') }}"></script>
    {!! ($setting != '') ? $setting->fb_pixel_code : '' !!}
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140305942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140305942-1');
</script>
<script type="application/ld+json">
    {
    "@context" : "https://schema.org",
    "@type" : "FurnitureStore",
    "additionaltype":["https://vi.wikipedia.org/wiki/B%E1%BB%93n_r%E1%BB%ADa",
        "https://en.wikipedia.org/wiki/Sink",
        "https://en.wikipedia.org/wiki/Engineered_stone"],
    "@id" : "https://thachvu.com",
    "url" : "https://thachvu.com",
    "logo" : "https://thachvu.com/frontend/images/logo.png",
    "image" : "https://thachvu.com/frontend/images/logo.png",
    "name" : "Thach Vu",
    "telephone": "094-318-08-88",
    "hasMap": "https://www.google.com/maps/place/Thi%E1%BA%BFt+b%E1%BB%8B+v%E1%BB%87+sinh+Th%E1%BA%A1ch+V%C5%A9/@21.0596849,105.773235,15z/data=!4m5!3m4!1s0x0:0xc6c053c334fa9a63!8m2!3d21.0596849!4d105.773235?shorturl=1",
    "address": {
    	"@type": "PostalAddress",
    	"addressLocality": "Từ Liêm",
        "addressCountry": "Việt Nam",
    	"addressRegion": "Hà Nội",
    	"postalCode":"100000",
    	"streetAddress": "80 Đường Phan Bá Vành, Cổ Nhuế, Từ Liêm, Hà Nội, Việt Nam"
  	},
  	"geo": {
    	"@type": "GeoCoordinates",
   	"latitude": "21.0596849",
    "longitude": "105.773235"
 	},
 	"openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "closes":  "20:00:00",
      "dayOfWeek": "http://schema.org/Sunday",
      "opens":  "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "20:00:00" ,
      "dayOfWeek": "http://schema.org/Saturday",
      "opens": "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes":  "20:00:00",
      "dayOfWeek": "http://schema.org/Thursday",
      "opens": "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "20:00:00",
      "dayOfWeek": "http://schema.org/Tuesday",
      "opens": "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "20:00:00",
      "dayOfWeek":  "http://schema.org/Friday",
      "opens": "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "20:00:00",
      "dayOfWeek": "http://schema.org/Monday",
      "opens": "06:00:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "closes": "20:00:00",
      "dayOfWeek":  "http://schema.org/Wednesday",
      "opens": "06:00:00"
    }
    ],
    "founder" : "Thái Hùng",
    "alternateName" : "Thach Vu - Thiết bị vệ sinh, chậu rửa bát, vòi rửa chính hãng",
    "description" : "Chuyên cung cấp các thiết bị vệ sinh, nội thất nhà bếp: chậu rửa bát bằng đá nhân tạo giá rẻ cao cấp chính hãng, chậu rửa inox, vòi rửa bát.",
    "priceRange" : "Từ 500.000₫",
    "email" : "mailto:cskh.thachvu@gmail.com",
    "sameAs": ["https://www.facebook.com/thachvuvietnam",
    "https://twitter.com/thachvuvn",
    "https://www.instagram.com/thachvuvn/",
    "https://www.linkedin.com/company/thach-vu/about/",
    "https://www.pinterest.com/thachvuvn/",
    "https://about.me/thachvu",
    "https://thachvuvn.tumblr.com",
    "https://myspace.com/thachvu",
    "https://ok.ru/thachvu",
    "https://soundcloud.com/thachvu",
    "https://www.dailymotion.com/thachvuvn",
    "http://thachvu.brandyourself.com",
    "https://500px.com/thachvuvn",
    "https://forums.adobe.com/people/thachvuvn",
    "https://www.reverbnation.com/thachvu",
    "https://www.blogger.com/profile/10062442470731211823",
    "https://www.instapaper.com/p/thachvu",
    "https://www.dmca.com/Protection/Status.aspx?ID=8b01c871-fd90-49f4-b85a-ff04f4db98ad&refurl=https://thachvu.com/",
    "https://www.allmyfaves.com/thachvu/",
    "https://vi.wikipedia.org/wiki/Thành_viên:Chauruabat",
    "https://www.flickr.com/people/thachvu/",
    "https://drive.google.com/drive/folders/19z1x8CDTRS8aVeiOzWxS3KUp9YVTfcvy",
    "https://sites.google.com/view/thachvuvn/",
    "https://thachvuvn.blogspot.com",
    "https://www.youtube.com/channel/UCruMTUGSSu2BtPxUZ8Z7_kw",
    "https://vi.wikipedia.org/wiki/B%E1%BB%93n_r%E1%BB%ADa",
    "https://en.wikipedia.org/wiki/Sink",
    "https://en.wikipedia.org/wiki/Engineered_stone"]
    }
</script>
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Person",
    "name": "Thái Hùng",
    "givenName" : "Thái Bảo Hùng",
    "jobTitle": "CEO",
    "worksFor": "Thach Vu",
    "url": "https://thachvu.com",
    "sameAs":["https://www.facebook.com/tieutu888",
    "https://www.youtube.com/channel/UCz7JN34aiY_UI0Ve5h2HXTA"], 
    "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ha Noi",
    "addressRegion": "vietnam"
	 }
    }
</script>
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v3.3'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v3.3&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=590845398084862&autoLogAppEvents=1"></script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="346169519331102"
      theme_color="#0088cc"
      logged_in_greeting="Xin chào, chúng tôi hỗ trợ được gì cho bạn?"
      logged_out_greeting="Xin chào, chúng tôi hỗ trợ được gì cho bạn?">
    </div>
    
    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1"> 
        <!-- Top bar -->
        {{--@include('layouts.user.topbar')--}}
        <!-- Header -->
        @include('layouts.user.header')
        <!-- Content -->
        <div id="content"> 
            @yield('content')
            <!-- Newslatter -->
            <section class="newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 style="font-size:20px;">Đăng ký để nhận những thông tin mới nhất từ chúng tôi</h3>
                        </div>
                        <div class="col-md-6">
                            <form>
                              <input type="email" placeholder="Nhập địa chỉ email...">
                              <button type="submit">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        @include('layouts.user.footer')
        <!-- GO TO TOP  --> 
        <!-- <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>  -->
        <!-- GO TO TOP End --> 

        <div class="social-button">
            <div class="social-button-content" style="display:none">
                <a href="tel:0943180888" class="call-icon" rel="nofollow">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="animated alo-circle"></div>
                    <div class="animated alo-circle-fill"></div>
                    <span>Hotline: 0943 180 888</span>
                </a>
                <a href="sms:0943180888" class="sms">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                    <span>SMS: 0943 180 888</span>
                </a>
                <a href="https://www.facebook.com/thachvuvietnam" class="mes" rel="nofollow">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <span>Nhắn tin Facebook</span>
                </a>
                <a href="http://zalo.me/0943180888" class="zalo" rel="nofollow">
                    <img style="width:40px;height:40px;border-radius:50%;box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.25);" src="{{ asset('frontend/images/zalo.png') }}">
                    <span>Zalo: 0943 180 888</span>
                </a>
            </div>
           
            <a class="user-support">
                <i class="fa fa-user" aria-hidden="true"></i>
                <!-- <div class="animated alo-circle"></div> -->
                <div class="animated alo-circle-fill lantoa"></div>
            </a>
        </div>

    </div>
    <!-- End Page Wrapper --> 

    <!-- JavaScripts --> 
    <script src="{{ asset('frontend/js/vendors/modernizr.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery/jquery.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/wow.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/own-menu.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/jquery.sticky.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/owl.carousel.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/vendors/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('frontend/js/vendors/jquery.magnific-popup.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script src="{{ asset('frontend/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
    <script src="{{ asset('frontend/rs-plugin/js/jquery.tp.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js?').time() }}"></script>

    @section('pageJs')
    @show

    <script type="text/javascript">
        $(function () {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-bottom-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
            $('.user-support').click(function(event) {
                $('.social-button-content').slideToggle();
            });
        });
    </script>
</body>
</html>