
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

    <title>Procurement- Login</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{!! url('public/bower_components/uikit/css/uikit.almost-flat.min.css')!!}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{!! url('public/assets/css/login_page.min.css')!!}" />

</head>
<body class="login_page login_page_v2">

<div class="uk-container uk-container-center">
    <div>
        <!-- if there are login errors, show them here -->
        @if (count($errors) > 0)

            <div class="uk-form-row">
                <div class="alert alert-danger" style="background-color: red;color: white">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {!!  $error  !!} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
    <div class="md-card">
        <div class="md-card-content padding-reset">
            <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-large-2-3 uk-hidden-medium uk-hidden-small">
                    <div class="login_page_info uk-height-1-1" style="background-image: url('{!! url('public/assets/img/others/sabri-tuzcu-331970.jpg')!!}')">
                        <div class="info_content">
                            <h1 class="heading_b">Create Account</h1>
                             Sign Up to get access to available tenders and opportunities
                            <p>
                                <a class="md-btn md-btn-success md-btn-small md-btn-wave" href="{{url("/")}}">More info</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-3 uk-width-medium-2-3 uk-container-center">

                    <div class="login_page_forms">
                        <div id="login_card">
                            <div id="login_form">
                                <div class="login_heading">
                                    <div class="user_avatar"></div>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="uk-form-row">
                                        <label for="register_email">Name</label>
                                        <input class="md-input" type="text" id="name" name="name" required/>
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="register_username">Email</label>
                                        <input class="md-input" type="text" id="email" name="email" required />
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="register_password">Password</label>
                                        <input class="md-input" type="password" id="register_password" name="password" required />
                                    </div>
                                    <div class="uk-form-row">
                                        <label for="register_password_repeat">Repeat Password</label>
                                        <input class="md-input"  id="password-confirm" type="password"  name="password_confirmation" required />
                                    </div>

                                    <div class="uk-margin-medium-top">
                                        <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
                                    </div>
                                </form>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <center><small>Powered by A&G Microsystems - Cape Coast 0243348522</small></center>
</div>

<!-- common functions -->
<script src="{!! url('public/assets/js/common.min.js')!!}"></script>
<!-- uikit functions -->
<script src="{!! url('public/assets/js/uikit_custom.min.js')!!}"></script>
<!-- altair core functions -->
<script src="{!! url('assets/js/altair_admin_common.min.js')!!}"></script>

<!-- altair login page functions -->
<script src="{!! url('assets/js/pages/login.min.js')!!}"></script>

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
            theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>


</body>
</html>