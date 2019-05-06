
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{!! url('public/assets/img/favicon-16x16.png')!!}" sizes="16x16">
    <link rel="icon" type="image/png" href="{!! url('public/assets/img/favicon-32x32.png')!!}" sizes="32x32">

    <title>Procurement</title>


    <link rel="stylesheet" href="{!! url('public/bower_components/chartist/dist/chartist.min.css')!!}">

    <!-- uikit -->
    <link rel="stylesheet" href="{!! url('public/bower_components/uikit/css/uikit.almost-flat.min.css')!!}" media="all">


    <!-- style switcher -->
    <link rel="stylesheet" href="{!! url('public/assets/css/style_switcher.min.css')!!}"  media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{!! url('public/assets/css/main.min.css')!!}" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="{!! url('public/assets/css/themes/themes_combined.min.css')!!}" media="all">
    <link rel="stylesheet" href="{!! url('public/assets/css/select2.min.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url('public/assets/css/dropify.css') !!}" media="all">
    <link rel="stylesheet" href="{!! url( 'datatables/css/jquery.dataTables.min.css')  !!}" >
    <link rel="stylesheet" href="{!! url( 'datatables/css/dataTables.uikit.min.css')  !!}" >

    <link rel="stylesheet" href="{!! url('public/assets/css/ie.css')!!}"media="all">
    <style>
        input{
            text-transform: uppercase;
        }
    </style>
    @yield('css')
</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
<!-- main header -->
<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">

            <!-- main sidebar switch -->
            <a href="index.html#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>

            <!-- secondary sidebar switch -->
            <a href="index.html#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                <span class="sSwitchIcon"></span>
            </a>

            <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                    <a href="index.html#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                    <div class="uk-dropdown uk-dropdown-width-3">
                        <div class="uk-grid uk-dropdown-grid">
                            <div class="uk-width-2-3">
                                <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                    <a href="page_mailbox.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                        <span class="uk-text-muted uk-display-block">Mailbox</span>
                                    </a>
                                    <a href="page_invoices.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                        <span class="uk-text-muted uk-display-block">Invoices</span>
                                    </a>
                                    <a href="page_chat.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                                        <span class="uk-text-muted uk-display-block">Chat</span>
                                    </a>
                                    <a href="page_scrum_board.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                        <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                    </a>
                                    <a href="page_snippets.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-blue-600">&#xE86F;</i>
                                        <span class="uk-text-muted uk-display-block">Snippets</span>
                                    </a>
                                    <a href="page_user_profile.html" class="uk-margin-top">
                                        <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                        <span class="uk-text-muted uk-display-block">User profile</span>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <ul class="uk-nav uk-nav-dropdown uk-panel">
                                    <li class="uk-nav-header">Components</li>
                                    <li><a href="components_accordion.html">Accordions</a></li>
                                    <li><a href="components_buttons.html">Buttons</a></li>
                                    <li><a href="components_notifications.html">Notifications</a></li>
                                    <li><a href="components_sortable.html">Sortable</a></li>
                                    <li><a href="components_tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav user_actions">
                    <li><a href="index.html#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">fullscreen</i></a></li>
                    <li><a href="index.html#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                    <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="index.html#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                        <div class="uk-dropdown uk-dropdown-xlarge">
                            <div class="md-card-content">
                                <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                    <li class="uk-width-1-2 uk-active"><a href="index.html#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                    <li class="uk-width-1-2"><a href="index.html#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                </ul>
                                <ul id="header_alerts" class="uk-switcher uk-margin">
                                    <li>
                                        <ul class="md-list md-list-addon">
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <span class="md-user-letters md-bg-cyan">tt</span>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading"><a href="page_mailbox.html">Minus maxime quia.</a></span>
                                                    <span class="uk-text-small uk-text-muted">Dolorem nostrum itaque rerum saepe delectus eaque qui nisi.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading"><a href="page_mailbox.html">Ex eius est.</a></span>
                                                    <span class="uk-text-small uk-text-muted">Vitae dicta officiis praesentium voluptas quasi minus.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <span class="md-user-letters md-bg-light-green">we</span>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading"><a href="page_mailbox.html">Eligendi rerum asperiores.</a></span>
                                                    <span class="uk-text-small uk-text-muted">Sapiente aut est ut maxime facere cum ut neque est reprehenderit.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading"><a href="page_mailbox.html">Dolor laborum.</a></span>
                                                    <span class="uk-text-small uk-text-muted">Reprehenderit dignissimos eos unde facere incidunt ut modi aperiam nihil qui sunt.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading"><a href="page_mailbox.html">Reiciendis autem.</a></span>
                                                    <span class="uk-text-small uk-text-muted">Voluptas recusandae voluptas sint doloremque cupiditate.</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                            <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="md-list md-list-addon">
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Quam amet.</span>
                                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Itaque velit magni sed ullam minima cum.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Praesentium sequi.</span>
                                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Aliquam est perferendis dolorem quia.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Dolor ut suscipit.</span>
                                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Qui distinctio ut consequatur maiores.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-addon-element">
                                                    <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                </div>
                                                <div class="md-list-content">
                                                    <span class="md-list-heading">Placeat assumenda magnam.</span>
                                                    <span class="uk-text-small uk-text-muted uk-text-truncate">Atque aut itaque quo quia rerum quae facere.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        @if(Auth::check())
                        <a href="" style="color:white">Welcome {{@Auth::user()->name}}</a>
                        @endif
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav js-uk-prevent">

                                <li><a href='{!! url("/biodataUpdate") !!}'>My Profile </a></li>
                                <li><a href='{!! url("password/reset") !!}'>Reset password</a></li>
                                <li>

                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_main_search_form">
        <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
        <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
            <input type="text" class="header_main_search_input" />
            <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>

        </form>
    </div>
</header><!-- main header end -->
<!-- main sidebar -->
<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{!! url('public/assets/img/logo_main.png')!!}" alt="" height="15" width="71"/>
                <img class="logo_light" src="{!! url('public/assets/img/logo_main_white.png')!!}" alt="" height="15" width="71"/>
            </a>
            <a href="index.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="{!! url('public/assets/img/logo_main_small.png')!!}" alt="" height="32" width="32"/>
                <img class="logo_light" src="{!! url('public/assets/img/logo_main_small_light.png')!!}" alt="" height="32" width="32"/>
            </a>
        </div>
        <div class="sidebar_actions">
            <select id="lang_switcher" name="lang_switcher">
                <option value="gb" selected>English</option>
            </select>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            @if(Auth::check())
            <li class="current_section" title="Dashboard">
                <a href="{{route("home")}}">
                    <span class="menu_icon"><i class="material-icons md-24">home</i></span>
                    <span class="menu_title">Home</span>
                </a>

            </li>

            <li title="Invoices">
                <a href="{!! url('/register/buyer') !!}">
                    <span class="menu_icon"><i class="material-icons md-24">account_balance</i></span>
                    <span class="menu_title">Register Company</span>
                </a>

            </li>




            <li title="Chats">
                <a href="index.html#">
                    <span class="menu_icon"><i class="material-icons md-24">work</i></span>
                    <span class="menu_title">Tenders</span>
                </a>
                <ul>
                    <li><a href="{{route("tender.create")}}">Create Tender</a></li>
                    <li><a href="{{route("tender.index")}}">View Tenders</a></li>
                </ul>

            </li>



            <li title="Chats">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons md-24">&#xE53E;</i></span>
                    <span class="menu_title">Opportunities</span>
                </a>
                <ul>
                    <li><a href="{{route("opportunities.create")}}">Create opportunity</a></li>
                    <li><a href="{{route("opportunities.index")}}">View Opportunities</a></li>
                </ul>

            </li>


            <li title="User Profile">
                <a href="page_user_profile.html">
                    <span class="menu_icon"><i class="material-icons md-24">verified_user</i></span>
                    <span class="menu_title">User Profile</span>
                </a>

            </li><li title="User Profile">
                <li>

                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        <span class="menu_icon"><i class="material-icons md-24">lock</i></span>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </li>
                @endif


        </ul>
    </div>
</aside><!-- main sidebar end -->

<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card-content">
            @if(Session::has('success'))
                <div style="text-align: center" class="uk-alert uk-alert-success" data-uk-alert="">
                    {!! Session::get('success') !!}
                </div>
            @endif

            @if(Session::has('error'))
                <div style="text-align: center" class="uk-alert uk-alert-danger" data-uk-alert="">
                    {!! Session::get('error') !!}
                </div>
            @endif
        </div>
        @yield('content')

    </div>
</div>


    <!-- secondary sidebar -->
<aside id="sidebar_secondary" class="tabbed_sidebar">
    <ul class="uk-tab uk-tab-icons uk-tab-grid" data-uk-tab="{connect:'#dashboard_sidebar_tabs', animation:'slide-horizontal'}">
        <li class="uk-active uk-width-1-3"><a href="index.html#"><i class="material-icons">&#xE422;</i></a></li>
        <li class="uk-width-1-3 chat_sidebar_tab"><a href="index.html#"><i class="material-icons">&#xE0B7;</i></a></li>
        <li class="uk-width-1-3"><a href="index.html#"><i class="material-icons">&#xE8B9;</i></a></li>
    </ul>

    <div class="scrollbar-inner">
        <ul id="dashboard_sidebar_tabs" class="uk-switcher">
            <li>
                <div class="timeline timeline_small uk-margin-bottom">
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                        <div class="timeline_date">
                            09<span>Jul</span>
                        </div>
                        <div class="timeline_content">Created ticket <a href="index.html#"><strong>#3289</strong></a></div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                        <div class="timeline_date">
                            15<span>Jul</span>
                        </div>
                        <div class="timeline_content">Deleted post <a href="index.html#"><strong>Eos ipsa voluptas eos mollitia.</strong></a></div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                        <div class="timeline_date">
                            19<span>Jul</span>
                        </div>
                        <div class="timeline_content">
                            Added photo
                            <div class="timeline_content_addon">
                                <img src="assets/img/gallery/Image16.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                        <div class="timeline_date">
                            21<span>Jul</span>
                        </div>
                        <div class="timeline_content">
                            New comment on post <a href="index.html#"><strong>In omnis quis sunt enim.</strong></a>
                            <div class="timeline_content_addon">
                                <blockquote>
                                    Ipsum quia deserunt placeat labore pariatur illum a.&hellip;
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                        <div class="timeline_date">
                            29<span>Jul</span>
                        </div>
                        <div class="timeline_content">
                            Added to Friends
                            <div class="timeline_content_addon">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Makayla Mann</span>
                                            <span class="uk-text-small uk-text-muted">Tempore quos sed sit repellat.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <ul class="md-list md-list-addon chat_users">
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-success"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading">Delphia Bahringer</span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate">Labore ea eligendi.</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-success"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_09_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading">Dayna Cummerata</span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate">Est eos.</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-danger"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading">Rowena Haag</span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate">Et aliquid.</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-addon-element">
                            <span class="element-status element-status-warning"></span>
                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                        </div>
                        <div class="md-list-content">
                            <div class="md-list-action-placeholder"></div>
                            <span class="md-list-heading">Leola Satterfield</span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate">Fugit aliquid dicta.</span>
                        </div>
                    </li>
                </ul>
                <div class="chat_box_wrapper chat_box_small" id="chat">
                    <div class="chat_box chat_box_colors_a">
                        <div class="chat_message_wrapper">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/>
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
                                </li>
                                <li>
                                    <p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper chat_message_right">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus distinctio dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis quae quasi, quis recusandae, saepe, sunt totam.
                                        <span class="chat_message_time">13:34</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/>
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia pariatur porro quae sed sequi sint tenetur ut veritatis.
                                        <span class="chat_message_time">23 Jun 1:10am</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="chat_message_wrapper chat_message_right">
                            <div class="chat_user_avatar">
                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                            </div>
                            <ul class="chat_message">
                                <li>
                                    <p> Lorem ipsum dolor sit amet, consectetur. </p>
                                </li>
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <span class="chat_message_time">Friday 13:34</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <h4 class="heading_c uk-margin-small-bottom uk-margin-top">General Settings</h4>
                <ul class="md-list">
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" checked id="settings_site_online" name="settings_site_online" />
                            </div>
                            <span class="md-list-heading">Site Online</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" id="settings_seo" name="settings_seo" />
                            </div>
                            <span class="md-list-heading">Search Engine Friendly URLs</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" id="settings_url_rewrite" name="settings_url_rewrite" />
                            </div>
                            <span class="md-list-heading">Use URL rewriting</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                </ul>
                <hr class="md-hr">
                <h4 class="heading_c uk-margin-small-bottom uk-margin-top">Other Settings</h4>
                <ul class="md-list">
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" checked id="settings_top_bar" name="settings_top_bar" />
                            </div>
                            <span class="md-list-heading">Top Bar Enabled</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#7cb342" id="settings_api" name="settings_api" />
                            </div>
                            <span class="md-list-heading">Api Enabled</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <div class="uk-float-right">
                                <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#d32f2f" id="settings_minify_static" checked name="settings_minify_static" />
                            </div>
                            <span class="md-list-heading">Minify JS files automatically</span>
                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <button type="button" class="chat_sidebar_close uk-close"></button>
    <div class="chat_submit_box">
        <div class="uk-input-group">
            <input type="text" class="md-input" name="submit_message" id="submit_message" placeholder="Send message">
            <span class="uk-input-group-addon">
                    <a href="index.html#"><i class="material-icons md-24">&#xE163;</i></a>
                </span>
        </div>
    </div>

</aside>
<!-- secondary sidebar end -->

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
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
<script src="{!! url('public/assets/js/common.min.js')!!}"></script>
<!-- uikit functions -->
<script src="{!! url('public/assets/js/uikit_custom.min.js')!!}"></script>
<!-- altair common functions/helpers -->
<script src="{!! url('public/assets/js/altair_admin_common.min.js')!!}"></script>

<!-- altair common functions/helpers -->
<script src="{!! url('public/assets/js/altair_admin_common.min.js') !!}"></script>

<script src="{!! url('public/assets/js/vue.min.js') !!}"></script>
<script src="{!! url('public/assets/js/vue-form.min.js') !!}"></script>
<script src="{!! url('public/assets/js/jquery-ui.min.js') !!}"></script>

<script src="{!! url('public/datatables/js/dataTables.uikit.min.js') !!}"></script>
<script src="{!! url('public/datatables/js/plugins_datatables.min.js') !!}"></script>
<script src="{!! url('public/datatables/js/datatables_uikit.min.js') !!}"></script>


@yield('js')
<script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "{!! url('public/assets/js/custom/dense.min.js')!!}", function(data) {
                // enable hires images
                altair_helpers.retina_images();
            });
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script>



<div id="style_switcher">
    <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
    <div class="uk-margin-medium-bottom">
        <h4 class="heading_c uk-margin-bottom">Colors</h4>
        <ul class="switcher_app_themes" id="theme_switcher">
            <li class="app_style_default active_theme" data-app-theme="">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_a" data-app-theme="app_theme_a">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_b" data-app-theme="app_theme_b">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_c" data-app-theme="app_theme_c">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_d" data-app-theme="app_theme_d">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_e" data-app-theme="app_theme_e">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_f" data-app-theme="app_theme_f">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_g" data-app-theme="app_theme_g">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_h" data-app-theme="app_theme_h">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_i" data-app-theme="app_theme_i">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_dark" data-app-theme="app_theme_dark">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
        </ul>
    </div>
    <div class="uk-visible-large uk-margin-medium-bottom">
        <h4 class="heading_c">Sidebar</h4>
        <p>
            <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
            <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
        </p>
        <p>
            <input type="checkbox" name="style_sidebar_slim" id="style_sidebar_slim" data-md-icheck />
            <label for="style_sidebar_slim" class="inline-label">Slim Sidebar</label>
        </p>
    </div>
    <div class="uk-visible-large uk-margin-medium-bottom">
        <h4 class="heading_c">Layout</h4>
        <p>
            <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
            <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
        </p>
    </div>
    <div class="uk-visible-large">
        <h4 class="heading_c">Main menu accordion</h4>
        <p>
            <input type="checkbox" name="accordion_mode_main_menu" id="accordion_mode_main_menu" data-md-icheck />
            <label for="accordion_mode_main_menu" class="inline-label">Accordion mode</label>
        </p>
    </div>
</div>

<script>
    $(function() {
        var $switcher = $('#style_switcher'),
            $switcher_toggle = $('#style_switcher_toggle'),
            $theme_switcher = $('#theme_switcher'),
            $mini_sidebar_toggle = $('#style_sidebar_mini'),
            $slim_sidebar_toggle = $('#style_sidebar_slim'),
            $boxed_layout_toggle = $('#style_layout_boxed'),
            $accordion_mode_toggle = $('#accordion_mode_main_menu'),
            $html = $('html'),
            $body = $('body');


        $switcher_toggle.click(function(e) {
            e.preventDefault();
            $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function(e) {
            e.preventDefault();
            var $this = $(this),
                this_theme = $this.attr('data-app-theme');

            $theme_switcher.children('li').removeClass('active_theme');
            $(this).addClass('active_theme');
            $html
                .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i app_theme_dark')
                .addClass(this_theme);

            if(this_theme == '') {
                localStorage.removeItem('altair_theme');
                $('#kendoCSS').attr('href','bower_components/kendo-ui/styles/kendo.material.min.css');
            } else {
                localStorage.setItem("altair_theme", this_theme);
                if(this_theme == 'app_theme_dark') {
                    $('#kendoCSS').attr('href','bower_components/kendo-ui/styles/kendo.materialblack.min.css')
                } else {
                    $('#kendoCSS').attr('href','bower_components/kendo-ui/styles/kendo.material.min.css');
                }
            }

        });

        // hide style switcher
        $document.on('click keyup', function(e) {
            if( $switcher.hasClass('switcher_active') ) {
                if (
                    ( !$(e.target).closest($switcher).length )
                    || ( e.keyCode == 27 )
                ) {
                    $switcher.removeClass('switcher_active');
                }
            }
        });

        // get theme from local storage
        if(localStorage.getItem("altair_theme") !== null) {
            $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
        }


        // toggle mini sidebar

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
            $mini_sidebar_toggle.iCheck('check');
        }

        $mini_sidebar_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_mini", '1');
                localStorage.removeItem('altair_sidebar_slim');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            });

        // toggle slim sidebar

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_slim") !== null && localStorage.getItem("altair_sidebar_slim") == '1') || $body.hasClass('sidebar_slim')) {
            $slim_sidebar_toggle.iCheck('check');
        }

        $slim_sidebar_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_slim", '1');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_slim');
                location.reload(true);
            });

        // toggle boxed layout

        if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
            $boxed_layout_toggle.iCheck('check');
            $body.addClass('boxed_layout');
            $(window).resize();
        }

        $boxed_layout_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_layout", 'boxed');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_layout');
                location.reload(true);
            });

        // main menu accordion mode
        if($sidebar_main.hasClass('accordion_mode')) {
            $accordion_mode_toggle.iCheck('check');
        }

        $accordion_mode_toggle
            .on('ifChecked', function(){
                $sidebar_main.addClass('accordion_mode');
            })
            .on('ifUnchecked', function(){
                $sidebar_main.removeClass('accordion_mode');
            });


    });
</script>

<script>
    $(function () {
        var $switcher = $('#style_switcher'),
            $switcher_toggle = $('#style_switcher_toggle'),
            $theme_switcher = $('#theme_switcher'),
            $mini_sidebar_toggle = $('#style_sidebar_mini'),
            $boxed_layout_toggle = $('#style_layout_boxed'),
            $accordion_mode_toggle = $('#accordion_mode_main_menu'),
            $body = $('body');


        $switcher_toggle.click(function (e) {
            e.preventDefault();
            $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function (e) {
            e.preventDefault();
            var $this = $(this),
                this_theme = $this.attr('data-app-theme');

            $theme_switcher.children('li').removeClass('active_theme');
            $(this).addClass('active_theme');
            $body
                .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                .addClass(this_theme);

            if (this_theme == '') {
                localStorage.removeItem('altair_theme');
            } else {
                localStorage.setItem("altair_theme", this_theme);
            }

        });

        // hide style switcher
        $document.on('click keyup', function (e) {
            if ($switcher.hasClass('switcher_active')) {
                if (
                    ( !$(e.target).closest($switcher).length )
                    || ( e.keyCode == 27 )
                ) {
                    $switcher.removeClass('switcher_active');
                }
            }
        });

        // get theme from local storage
        if (localStorage.getItem("altair_theme") !== null) {
            $theme_switcher.children('li[data-app-theme=' + localStorage.getItem("altair_theme") + ']').click();
        }


        // toggle mini sidebar

        // change input's state to checked if mini sidebar is active
        if ((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
            $mini_sidebar_toggle.iCheck('check');
        }

        $mini_sidebar_toggle
            .on('ifChecked', function (event) {
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_mini", '1');
                location.reload(true);
            })
            .on('ifUnchecked', function (event) {
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            });


        // toggle boxed layout

        if ((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
            $boxed_layout_toggle.iCheck('check');
            $body.addClass('boxed_layout');
            $(window).resize();
        }

        $boxed_layout_toggle
            .on('ifChecked', function (event) {
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_layout", 'boxed');
                location.reload(true);
            })
            .on('ifUnchecked', function (event) {
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_layout');
                location.reload(true);
            });

        // main menu accordion mode
        if ($sidebar_main.hasClass('accordion_mode')) {
            $accordion_mode_toggle.iCheck('check');
        }

        $accordion_mode_toggle
            .on('ifChecked', function () {
                $sidebar_main.addClass('accordion_mode');
            })
            .on('ifUnchecked', function () {
                $sidebar_main.removeClass('accordion_mode');
            });


    });
</script>





<script type="text/javascript">
    $(document).ready(function () {


        $.ajax({
            type: "GET",
            url: "{% url 'live' %}",
            success: function (data) {

                {% comment %} modal = UIkit.modal.blockUI("<div class='uk-text-center'>Wait fetching data...<br/><img class='uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' alt=''>");


                //modal.show();
                modalTimeout = setTimeout(function () {
                    if (modal.isActive()) {

                        modal.hide();
                    }
                }, 2000);{% endcomment %}


                var trHTML = '';
                $.each(data, function (i, item) {


                    trHTML += '<tr><td>' + item.name.toUpperCase() + '</td><td>' + item.applicants + '</td><td>' + item.admittedApplicants + '</td></tr>';


                });
                $('.gad').append(trHTML);


//modal.hide();

            },


            error: function (error) {

                jsonValue = jQuery.parseJSON(error.responseText);
                alert("error" + error.responseText);
            }
        });
    });
</script>
<script>

    $(document).ready(function () {

        $(".parent").on('change', function (e) {

            $("#group").submit();
        });
    });
    $(document).ready(function () {
        $('.admit').on('click', function (e) {


            var applicant = $(this).closest('tr').find('.app').val();
            var program = $(this).closest('tr').find('.programs').val();
            var hall = $(this).closest('tr').find('.halls').val();
            var admit = $(this).closest('tr').find('.admit').val();
            var type = $(this).closest('tr').find('.type').val();
            var applicant_id = $(this).closest('tr').find('.applicant').val();
            var name = $(this).closest('tr').find('.names').val().toUpperCase();
            var resident = $(this).closest('tr').find('.resident').val();
            //alert(resident);
            if (program == "" || type == "" || hall == "" || resident == "") {
                alert("please select program,admission type,hall and residential status ");
            }
            else {
                UIkit.modal.confirm("Are you sure you want to admit this applicant?? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Admitting Applicant " + name.toUpperCase() + " <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "GET",
                            url: "{% url 'admit' %}",
                            data: {
                                applicant: applicant,
                                program: program,
                                hall: hall,
                                admit: admit,
                                type: type,
                                resident: resident
                            }, //your form data to post goes
                            dataType: "json",
                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(name + " Admitted successfully ");

                                location.reload(true);
                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(" Error admitting " + name + "check if the selected programme has fees and courses assigned.");
                        }


                    });
            }
        );
    }
    });


    // reversing admissions

    $('.reverse').on('click', function (e) {


            var applicant = $(this).closest('tr').find('.app').val();
            var reverse = $(this).closest('tr').find('.reverse').val();
            var name = $(this).closest('tr').find('.names').val().toUpperCase();


            UIkit.modal.confirm("Are you sure you want to cancel " + name + " admission?"
                , function () {
                    modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok reversing the admission of " + name.toUpperCase() + " <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                    //setTimeout(function(){ modal.hide() }, 500) })()
                    $.ajax({

                        type: "GET",
                        url: "{% url 'revoke_admission' %}",
                        data: {
                            applicant: applicant,

                        }, //your form data to post goes
                        dataType: "json",
                    }).done(function (data) {
                        //  var objData = jQuery.parseJSON(data);

                        modal.hide();
                        //
                        //                                     UIkit.modal.alert("Action completed successfully");

                        //alert(data.status + data.data);
                        if (data.status == 'success') {
                            UIkit.modal.alert(name + " Admission reversed successfully ");


                            {% comment %}  $(".uk-alert-success").show();

                            $(".uk-alert-success").text(data.status + " " + data.message);
                            $(".uk-alert-success").fadeOut(4000);
                        }{% endcomment %}
                    } else {
                        {% comment %} $(".uk-alert-danger").show();
                        $(".uk-alert-danger").text(data.status + " " + data.message);
                        $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                        UIkit.modal.alert(" Error reversing " + name + " admission.Try again later");
                    }


                });
        }
    );

    });


    });
    // sending custom sms

    $('.sms').on('click', function (e) {


            var message = $('.message').val();
            var phone = $('.phone').val();


            UIkit.modal.confirm("Are you sure you want to send this sms?"
                , function () {
                    modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok send sms to  " + phone.split(",") + " <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                    //setTimeout(function(){ modal.hide() }, 500) })()
                    $.ajax({

                        type: "POST",
                        url: "{% url 'fireCustomSMS' %}",
                        data: {
                            message: message,
                            phone: phone

                        }, //your form data to post goes
                        dataType: "json",
                    }).done(function (data) {
                        //  var objData = jQuery.parseJSON(data);

                        modal.hide();
                        //
                        //                                     UIkit.modal.alert("Action completed successfully");

                        //alert(data.status + data.data);
                        if (data.status == 'success') {
                            UIkit.modal.alert(data.message);


                            {% comment %}  $(".uk-alert-success").show();

                            $(".uk-alert-success").text(data.status + " " + data.message);
                            $(".uk-alert-success").fadeOut(4000);
                        }{% endcomment %}
                    } else {
                        {% comment %} $(".uk-alert-danger").show();
                        $(".uk-alert-danger").text(data.status + " " + data.message);
                        $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                        UIkit.modal.alert(" Error sending sms to " + phone.split(",") + "Try again later");
                    }


                });
        }
    );

    });


</script>


<script>


    $(document).ready(function () {
        $('.createForm').on('click', function (e) {

            e.preventDefault();

            var name = $('.name').val();
            var deadline = $('.deadline').val();
            var medicals_starts = $('.medicals_start').val();
            var medicals_ends = $('.medicals_end').val();
            var orient_ends = $('.orient_ends').val();
            var orient_starts = $('.orient_starts').val();
            var reporting = $('.reporting').val();
            var year = $('.year').val();


            //alert(resident);
            if (year == "" || name == "" || deadline == "" ||  medicals_starts == "" || medicals_ends == "") {
                alert("please fill all fields");
            }
            else {
                UIkit.modal.confirm("Sure you want to save? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok saving configuration with name " + name.toUpperCase() + " <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "POST",
                            url: "{% url 'create_settings' %}",
                            data: {
                                year: year,
                                name: name,
                                deadline: deadline,
                                medicals_starts: medicals_starts,
                                medicals_ends: medicals_ends,
                                orient_starts: orient_starts,
                                orient_ends: orient_ends,
                                reporting: reporting


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();
                            location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );
    }
    });


    });


    $(document).ready(function () {
        $('.recover').on('click', function (e) {


                var phone = $('.phone').val();


                UIkit.modal.confirm("Are you sure of this action? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok recoving lost voucher.  <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "POST",
                            url: "{% url 'recover_voucher' %}",
                            data: {
                                phone: phone


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();
                            location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );

    });


    });




    $(document).ready(function () {
        $('.edit_button').on('click', function (e) {
            //alert();
            e.preventDefault();

            var name = $('.nameedit').val();
            var deadline = $('.deadlineedit').val();
            var medicals_starts = $('.medicalseditstarts').val();
            var medicals_ends = $('.medicalseditsend').val();
            var orient_ends = $('.orient_endsedit').val();
            var orient_starts = $('.orient_startsedit').val();
            var reporting = $('.reportingedit').val();
            var year = $('.yearedit').val();


            //alert(resident);
            if (year == "" || name == "" || deadline == "" || medicals_ends == "" || medicals_starts == "") {
                alert("please fill all fields");
            }
            else {
                UIkit.modal.confirm("Sure you want to update this settings? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok updating configuration with name " + name.toUpperCase() + " <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "POST",
                            url: "{% url 'create_settings' %}",
                            data: {
                                year: year,
                                name: name,
                                deadline: deadline,
                                medicals_starts: medicals_starts,
                                medicals_ends: medicals_ends,
                                orient_starts: orient_starts,
                                orient_ends: orient_ends,
                                reporting: reporting


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();
                            location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );
    })












    $(document).ready(function () {
        $('.deletes').on('click', function (e) {


                var id = $('.id').val();


                UIkit.modal.confirm("Are you sure you want to delete this setting? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok deleting setting  <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "GET",
                            url: "{% url 'setting-delete' %}",
                            data: {
                                id: id


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();
                            location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );

    });


    });


    $(document).ready(function () {
        $('.delete_sales').on('click', function (e) {


                var id = $('.ids').val();

                //alert(id);
                UIkit.modal.confirm("Are you sure you want to delete this sale? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok deleting sales  <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "GET",
                            url: "{% url 'delete_sales' %}",
                            data: {
                                id: id


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);
                            console.log(data)
                            modal.hide();
                            location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );

    });


    });

    // applicant form settings


    $(document).ready(function () {
        $('.actions_command').on('click', function (e) {


                var name = $('.applicant_name').val();
                var applicant = $('.applicant').val();
                var action = $('.action').val();


                UIkit.modal.confirm("Are you sure you want to perform this action? "
                    , function () {
                        modal = UIkit.modal.blockUI("<div class='uk-text-center'>Ok updating" + name + " admission forms  <br/><img class='uk-thumbnail uk-margin-top' src='{% static 'assets/img/spinners/spinner.gif'%}' /></div>");
                        //setTimeout(function(){ modal.hide() }, 500) })()
                        $.ajax({

                            type: "POST",
                            url: "{% url 'modify_applicant_form' %}",
                            data: {
                                name: name,
                                applicant: applicant,
                                action: action


                            }, //your form data to post goes
                            dataType: "json",

                        }).done(function (data) {
                            //  var objData = jQuery.parseJSON(data);

                            modal.hide();

                            //location.reload(true);
                            //
                            //                                     UIkit.modal.alert("Action completed successfully");

                            //alert(data.status + data.data);
                            if (data.status == 'success') {
                                UIkit.modal.alert(data.message.toString());


                                {% comment %}  $(".uk-alert-success").show();

                                $(".uk-alert-success").text(data.status + " " + data.message);
                                $(".uk-alert-success").fadeOut(4000);
                            }{% endcomment %}
                        } else {
                            {% comment %} $(".uk-alert-danger").show();
                            $(".uk-alert-danger").text(data.status + " " + data.message);
                            $(".uk-alert-danger").fadeOut(4000);{% endcomment %}
                            UIkit.modal.alert(data.message.toString());
                        }


                    });
            }
        );

    });


    });


    $(document).ready(function () {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function () {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logo-id").change(function () {
            readURL(this);
        });
    });



    $('.edit').on('click', function () {
        //var myModal = $('#edit');
        var myModal = UIkit.modal("#edit");

        // now get the values from the table
        var name = $(this).closest('tr').find('.name').html();
        var medicals_start = $(this).closest('tr').find('.medicals_start').html();
        var medicals_end = $(this).closest('tr').find('.medicals_end').html();
        var year = $(this).closest('tr').find('.year').html();
        var orient_starts = $(this).closest('tr').find('.orient_starts').html();
        var orient_ends = $(this).closest('tr').find('.orient_ends').html();
        var reporting = $(this).closest('tr').find('.reporting').html();
        var deadline = $(this).closest('tr').find('.deadline').html();


        // and set them in the modal:
        $('.nameedit').val(name);
        $('.medicalseditstarts').val(medicals_start);
        $('.medicalseditend').val(medicals_end);
        $('.yearedit').val(year);
        $('.orient_endsedit').val(orient_ends);
        $('.orient_startsedit').val(orient_starts);
        $('.reportingedit').val(reporting);
        $('.deadlineedit').val(deadline);


        // and finally show the modal
        myModal.show();


    });



</script>

<script type="text/javascript">
    //Javascript
    $(function () {
        $("#q").autocomplete({
            source: {% url 'applicant_live_search' %},
        minLength: 3,
            select: function (event, ui) {
            $('#q').val(ui.item.value);

        }
    });
    });
</script>


<script>


    //code for ensuring vuejs can work with select2 select boxes
    Vue.directive('select', {
        twoWay: true,
        priority: 1000,
        params: ['options'],
        bind: function () {
            var self = this
            $(this.el)
                .select2({
                    data: this.params.options,
                    width: "resolve"
                })
                .on('change', function () {
                    self.vm.$set(this.name, this.value)
                    Vue.set(self.vm.$data, this.name, this.value)
                })
        },
        update: function (newValue, oldValue) {
            $(this.el).val(newValue).trigger('change')
        },
        unbind: function () {
            $(this.el).off().select2('destroy')
        }
    })




</script>




</body>
</html>