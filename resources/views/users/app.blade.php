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
		<script type="text/javascript" src="/js/plugins/forms/styling/uniform.min.js"></script>
		<script type="text/javascript" src="/js/plugins/ui/nicescroll.min.js"></script>
		<script type="text/javascript" src="/js/pages/layout_fixed_custom.js"></script>
		<script type="text/javascript" src="/js/core/app.js"></script>
		<script type="text/javascript" src="/js/pages/login.js"></script>

		<script type="text/javascript" src="/js/plugins/ui/ripple.min.js"></script>
		<script type="text/javascript" src="/js/encuestas.js"></script>

		<!-- /theme JS files -->
		<script>
	        window.Laravel = <?php echo json_encode([
	            'csrfToken' => csrf_token(),
	        ]); ?>
    	</script>
		<script type="text/javascript">

       /*   $(document).ready(function(){
              $('.step-2').hide();
              $('.step-3').hide();
              $('.step-4').hide();

                  var current = 1, current_step,next_step,steps;
                  steps = $(".step").length;
            	  //console.log("Current count : ", steps);
                  $("#next").click(function(){
                      current_step = $(".step").parent ();
                      console.log("Current count : ", current_step);
                      next_step = $(".step").parent().next();
                      next_step.show();
                      current_step.hide();
                      setProgressBar(++current);
                  });
                  $("#back").click(function(){
                      current_step = $(".step").parent();
                      next_step = $(".step").parent().prev();
                      next_step.show();
                      current_step.hide();
                      setProgressBar(--current);
                  });
                  setProgressBar(current);
                  // Change progress bar action
                  function setProgressBar(curStep){
                      var percent = parseFloat(100 / steps) * curStep;
                      percent = percent.toFixed();
                      $(".progress-bar")
                          .css("width",percent+"%")
                          .html(percent+"%");
                  }


             /* $("#next").click(function () {
                  var step = $(this).parents(".step");
                  console.log("Esto es mi primer parents", step);
                  if (step.next().length) {
                      step.fadeOut("slow");
                      step.next().fadeIn("slow");
                  }
                  return false;
              });

               $("#back").click(function () {
                  var step = $(this).parents(".step");
                  if (step.prev().length) {
                      step.fadeOut("slow");
                      step.prev().fadeIn("slow");
                  }
                  return false;
              });
            });
         */






		</script>



	</head>

	<body class="navbar-top">
  		 @yield('content')


	</body>
</html>
