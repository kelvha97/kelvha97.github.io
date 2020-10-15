<!DOCTYPE HTML>
<!--
	Designed by HTML5UP and heavily modified by Kelvin.
-->
<html>
	<head>
		<title>Kelvin Ha | DSLR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../europe16/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="../dslr/index.php"><strong>DSLR Portfolio</strong> by Kelvin Ha</a></h1>
						<nav>
							<ul>
								<li><a href="../portfolio.html" class="icon fa-info-circle">Back to Full Porfolio</a></li>
							</ul>
						</nav>
					</header>
                    
                    

				<!-- Main -->
					<div id="main">
                        
                        
<?php
    for($i=1; $i<=357; $i++) {
?>
<article class="thumb">
    <a href="images/fulls/dslr-<?php
        if($i>0)
        	echo $i;
			
    ?>.jpg" 
    
    	class="image"><img src="images/thumbs/dslr-<?php
            if($i>0)
            echo $i;
			
    ?>.jpg" alt="" /></a>
</article>
<?php
    }
?>                 
  
                        
					</div>


		<!-- Scripts -->
			<script src="../europe16/assets/js/jquery.min.js"></script>
			<script src="../europe16/assets/js/jquery.poptrox.min.js"></script>
			<script src="../europe16/assets/js/skel.min.js"></script>
			<script src="../europe16/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../europe16/assets/js/main.js"></script>

	</body>
</html>