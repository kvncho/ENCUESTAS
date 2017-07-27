<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/core.css" rel="stylesheet" type="text/css">
	<link href="/css/components.css" rel="stylesheet" type="text/css">
	<link href="/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="/js/core/app.js"></script>
	<script type="text/javascript" src="/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
	 <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="login-container">

	<!-- Main navbar -->
 	
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form   role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Username">

								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group has-feedback has-feedback-left form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input id="password" type="password" class="form-control" name="password" required placeholder="Password">

								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
								 
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot Your password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						Av. Gral. Garzón 654 - 658 <br>
						Jesús María Lima-Perú <br>
						&copy; 2017.   DNCN - INEI <br>			
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->
		 
	</div>
	<!-- /page container -->

</body>
</html>
