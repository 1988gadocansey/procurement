
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{!! url( "public/landing/assets/img/favicon-32x32.png")!!}" sizes="16x16">
    <link rel="icon" type="image/png" href="{!! url( "public/landing/assets/img/favicon-32x32.png")!!}" sizes="32x32">
    <link rel="icon" type="image/png" href="{!! url( "public/landing/assets/img/favicon-32x32.png")!!}" sizes="32x32">
    <link rel="stylesheet" href="{!! url('public/assets/css/select2.min.css') !!}" media="all">

    <title>Adongo Procurement</title>

    <!-- uikit -->
    <link rel="stylesheet" href="{!! url( "public/landing/bower_components/uikit/css/uikit.almost-flat.min.css")!!}" media="all">
    <!-- altair landing page -->
    <link rel="stylesheet" href="{!! url( "public/landing/assets/css/main.css")!!}" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
    <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->
</head>
<body>
<!-- navigation -->
<header id="header_main">
    <nav class="uk-navbar">
        <div class="uk-container uk-container-center">
            <a href="#" class="uk-float-left" id="mobile_navigation_toggle" data-uk-offcanvas="{target:'#mobile_navigation'}"><i class="material-icons">&#xE5D2;</i></a>
            <a href="/" class="uk-navbar-brand">
                <img src="{!! url( "public/landing/assets/img/logo_main.png")!!}" alt="" width="71" height="15">
            </a>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav" id="main_navigation">
                    <li>
                        <a href="#sect-overview">
                            Home
                        </a>
                    </li>
                    <li data-uk-dropdown class="uk-hidden-small">
                        <a href="layout_top_menu.html#"><i class="material-icons">&#xE8D2;</i><span>PROCUREMENT LINKS</span></a>
                        <div class="uk-dropdown">
                            <ul class="uk-nav uk-nav-dropdown">

                                <li><a href="forms_advanced.html">National</a></li>
                                <li><a href="{!! url('/register/buyer') !!}">Africa</a></li>
                                <li><a href="{!! url('/register/buyer') !!}">International</a></li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sect-gallery">
                            List of Opportunities
                        </a>
                    </li>

                    <li>
                        <a href="{{route("search.index")}}">
                            Find tenders
                        </a>
                    </li>

                    <li data-uk-dropdown class="uk-hidden-small">
                        <a href="layout_top_menu.html#"><i class="material-icons">&#xE8D2;</i><span>RESOURCES</span></a>
                        <div class="uk-dropdown">
                            <ul class="uk-nav uk-nav-dropdown">

                                <li><a href="forms_advanced.html">Policies</a></li>
                                <li><a href="{!! url('/register/buyer') !!}">Regulations</a></li>
                                <li><a href="{!! url('/register/buyer') !!}">Manuals</a></li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{!! url('/register') !!}">
                            Sign Up
                        </a>
                    </li>
                    {{-- <li data-uk-dropdown class="uk-hidden-small">
                         <a href="layout_top_menu.html#"><i class="material-icons">&#xE8D2;</i><span>REGISTER</span></a>
                         <div class="uk-dropdown">
                             <ul class="uk-nav uk-nav-dropdown">

                                 <li><a href="forms_advanced.html">Register as Vendor</a></li>
                                 <li><a href="{!! url('/register/buyer') !!}">Register as Buyer</a></li>

                             </ul>
                         </div>
                     </li>--}}


                    <li>
                        <a href="{{url("/login")}}">
                            Sign In
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="mobile_navigation" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul>
            <li>
                <a href="#sect-overview" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE417;</i></span>
                    <span class="menu_title">Overview</span>
                </a>
            </li>
            <li>
                <a href="#sect-features" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE896;</i></span>
                    <span class="menu_title">Features</span>
                </a>
            </li>
            <li>
                <a href="#sect-gallery" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE410;</i></span>
                    <span class="menu_title">Gallery</span>
                </a>
            </li>
            <li>
                <a href="#sect-pricing" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE227;</i></span>
                    <span class="menu_title">Pricing<small>Find the perfect plan</small></span>
                </a>
            </li>
            <li>
                <a href="#sect-team" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE7FB;</i></span>
                    <span class="menu_title">Team</span>
                </a>
            </li>
            <li>
                <a href="#sect-contact" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE0E1;</i></span>
                    <span class="menu_title">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="" style="margin-left: 180px"  >


        <form action=" "  method="get" accept-charset="utf-8" novalidate id="group">
            {!!  csrf_field()  !!}
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">

                    <input placeholder="search" type="text" class="input-count md-input" id="input_counter"  />
                </div>
                <div class="uk-width-medium-1-5">
                    <div class="uk-margin-small-top">
                        {!! Form::select('region',
                    (['' => 'All regions'] +$region ),
                      old("program",""),
                        ['class' => 'md-input parent','id'=>"parent",'placeholder'=>'select regions'] )  !!}
                    </div>
                </div>
                <div class="uk-width-medium-1-5 metro">
                    <div class="uk-margin-small-top">
                        {!! Form::select('district',[''=>'--- Select District ---'],null,['id'=>'district',"v-model"=>"district","v-form-ctrl"=>"","style"=>"","v-select"=>"district","required"=>""]) !!}


                    </div>
                </div>
                <div class="uk-width-medium-1-5">
                    <div class="uk-margin-small-top">
                        <button class="md-btn  md-btn-small md-btn-success uk-margin-small-top" type="submit"><i class="material-icons">search</i></button>

                    </div>
                </div>
            </div>

        </form>

</div>



<div class="uk-width-xLarge-1-1">
    <div class="md-card">
        <div class="md-card-content">
            <div class="uk-overflow-container" id='print'>

            </div>
        </div>

    </div>
</div>




<section class="section section_dark md-bg-blue-grey-700">
    <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-3-5 uk-text-center-medium">
                Copyright &copy; {{date("Y")}}, All rights reserved. Powered by A&G Microsystems - 0243348522
            </div>
            <div class="uk-width-medium-2-5">
                <div class="uk-align-medium-right uk-text-center-medium">
                    <a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Facebook"><i class="uk-icon-facebook uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Twitter"><i class="uk-icon-twitter uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="LinkedIn"><i class="uk-icon-linkedin uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" data-uk-tooltip="{offset: 12}" title="Google Plus"><i class="uk-icon-google-plus uk-icon-small md-color-white"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:300,400,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- common functions -->

<script src="{!! url( "public/landing/assets/js/common.min.js")!!}"></script>
<!-- uikit functions -->
<script src="{!! url( "public/landing/assets/js/uikit_custom.min.js")!!}"></script>
<!-- altair common functions/helpers -->
<script src="{!! url( "public/landing/assets/js/altair_lp_common.js")!!}"></script>

<script src="{!! url('public/assets/js/select2.full.min.js') !!}"></script>

<script>
    $(document).ready(function(){
        $('select').select2({ width: "resolve" });


    });


</script>
<script type="text/javascript">
    $('.metro').hide();

    $("select[name='region']").change(function(){


        var region= $(this).val();

        var token = $("input[name='_token']").val();

        $.ajax({

            url: "<?php echo route('ajax_district') ?>",

            method: 'POST',

            data: {region:region, _token:token},


            success: function(data) {



                $('.metro').show();
                $("select[name='district']").html('');

                $("select[name='district']").html(data.options);

            }

        });

    });


</script>

</body>
</html>