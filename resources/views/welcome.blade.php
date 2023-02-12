<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="shortcut icon" href="{{ asset('/storage/favicon.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="main-container">
            <div class="main-content">
                <div class="slide-container" style="background-image: url(/storage/phone-frame.png);">
                    <div class="slide-content" id="slide-content">
                        <img src="{{ asset('/storage/screenshot1.png') }}" alt="slide image" class="active">
                        <img src="{{ asset('/storage/screenshot2.png') }}" alt="slide image">
                        <img src="{{ asset('/storage/screenshot3.png') }}" alt="slide image">
                        <img src="{{ asset('/storage/screenshot4.png') }}" alt="slide image">
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-content box">
                        <div class="logo">
                            <img src="{{ asset('/storage/logo-light.png') }}" alt="Instagram logo" class="logo-light">
                            <img src="{{ asset('/storage/logo-dark.png') }}" alt="Instagram logo" class="logo-dark">
                        </div>
                        <form>
                            <div class="signin-form" id="signin-form">
                                <div class="form-group">
                                    <div class="animate-input">
                                        <span>
                                            Phone number, username or email
                                        </span>
                                        <input type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="animate-input">
                                        <span>
                                            Password
                                        </span>
                                        <input type="password">
                                        <button type="button">Show</button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-login" id="signin-btn" disabled>
                                        Log In
                                    </button>
                                </div>
                                <div class="divine">
                                    <div></div>
                                    <div>OR</div>
                                    <div></div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-fb">
                                        <img src="{{ asset('/storage/facebook-icon.png') }}" alt="">
                                        <span>Log in with Facebook</span>
                                    </button>
                                </div>
                                <a href="#" class="forgot-pw">Forgot password?</a>
                            </div>  
                        </form>
                    </div>
                    <div class="box goto">
                        <p>
                            Don't have an account?
                            <a href="#">Sign up</a>
                        </p>
                    </div>

                    <div class="app-download">
                        <p>Get the app.</p>
                        <div class="store-link">
                            <a href="#">
                                <img src="{{ asset('/storage/app-store.png') }}" alt="app store">
                            </a>
                            <a href="#">
                                <img src="{{ asset('/storage/gg-play.png') }}" alt="google play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="links">
                <a href="#">Meta</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Contact Uploading & Non-Users</a>
            </div>
            <div class="copyright">
                © 2023 Instagram from Meta
            </div>
        </div>
    </div>
    <script src="{{ asset('./js/app.js') }}"></script>
</body>
</html>