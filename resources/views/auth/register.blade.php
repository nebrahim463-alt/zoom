<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Register</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
            
            

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="Enter your fullname" required autofocus>
                    @error('name')
                        <span class="text-danger tx-12 mg-t-5 d-block">{{ $message }}</span>
                    @enderror
                </div>

                
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="Enter your email" required>
                    @error('email')
                        <span class="text-danger tx-12 mg-t-5 d-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Enter your password" required>
                    @error('password')
                        <span class="text-danger tx-12 mg-t-5 d-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Confirm your password" required>
                </div>

                <div class="form-group tx-12">By clicking register button below, you agreed to our privacy policy and
                    terms of use of our website.</div>
                <button type="submit" class="btn btn-info btn-block">register</button>
            </form>

            <div class="mg-t-40 tx-center">Already have an account? <a href="{{ route('login') }}" class="tx-info">Sign
                    In</a></div>
        </div>
    </div>

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>
    <script>
        $(function() {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>

</body>

</html>
