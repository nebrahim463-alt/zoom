<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Forget Password</title>

    <!-- vendor css -->
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
    
        <div class="tx-center mg-b-30">Reset Your Password</div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autofocus>
              @error('email')
                  <span class="text-danger tx-12 mg-t-5 d-block">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-info btn-block">Email Password Reset Link</button>
        </form>

        <div class="mg-t-40 tx-center">Remembered your password? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div>
    </div>

    <script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/bootstrap.js')}}"></script>

  </body>
</html>