<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RUBIX</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	
	<link href="css/style.css" rel="stylesheet" />
    <link href="css/perspectiveRules.css" rel="stylesheet" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.rwdImageMaps.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
  </head>
  <body>
  
  <div id="demo1">
    <img alt="background" src="images/mackground5.jpg" />
      <div id="particle-target" ></div> 
    <img alt="logo" src="images/comings.png" />
</div>
  
  
    <div class="jumbotron">
	<div class="container">
	
	<h3 align="center">REGISTERATION FORM</h3>
	</div>	
	</div>
		

	<script src="js/jquery.logosDistort.min.js"></script>
<script src="js/jquery.particleground.min.js"></script>
<script>
    var particles = true,
        particleDensity,
        options = {
            effectWeight: 1,
            outerBuffer: 1.08,
            elementDepth: 220
        };

    $(document).ready(function() {

        $("#demo1").logosDistort(options);

        if (particles) {
            particleDensity = window.outerWidth * 7.5;
            if (particleDensity < 13000) {
                particleDensity = 13000;
				} else if (particleDensity > 20000) {
                particleDensity = 20000;
            }
            return $('#particle-target').particleground({
                dotColor: '#1ec5ee',
                lineColor: '#0a4e90',
                density: particleDensity.toFixed(0),
                parallax: false
            });
        }
    });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
  </body>
</html>