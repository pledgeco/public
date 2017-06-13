<!DOCTYPE HTML>

<html>
	<head>
		<title>DingDong - Om oss</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<div class="logo">
						<img src="/images/dingdong-logo1.png" class="logo"><a href="hjem">DingDong</a>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="hjem">Hjem</a></li>
							
					
							<li><a href="generic.html">Tjenester</a></li>
							<li><a href="om-oss">Om oss</a></li>
							<li><a href="elements.html">Kontakt</a></li>
						</ul>
					</nav>

			</header>

		<!-- Main -->
			<section id="main" class="wrapper alt">
				<div class="inner">

					<!-- Content -->
						<header>
					
						
						</header>

					<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'vegard1990@gmail.com'; 
    $EmailSubject = 'DingDong - Forespørsel'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "<b>Navn:</b> ".$_POST["name"]."<br /><br />"; 
    $MESSAGE_BODY .= "<b>E-post:</b> ".$_POST["email"]."<br /><br />"; 
    $MESSAGE_BODY .= "<b>Melding:</b> ".nl2br($_POST["message"])."<br /><br />
    ---------------------------<br />
    Dette er en automatisk e-post som har blitt sendt ifra www.dingdongme.com<br /><br />
    

    "; 
    @mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

?> 
					
					<h2 style="color:#071c2c; margin-bottom:-20px; margin-bottom:-10px; border-bottom: 1px solid black; width:30%;">E-posten din ble sendt!</h2><br />
						
<p style="font-size:100%; color:black;">Du vil få svar på e-posten din innen 48 timer.<br /> Du kan også kontakte oss på e-post <b>post@dingdongme.com</b></p>

				
<?php 
} else { 
?> 
<?php 
}; 
?>

							
							</div>
						<br /><br />
						</section>
		
			<style type="text/css">
			.logo {
				width:4%;
				 margin-right:11px;
			}
.boxing {

vertical-align:middle; 
text-align:center;
margin-top:30px !important;

}



  	@media screen and (max-width: 991px) {

  		.boxing {

vertical-align:middle; 
text-align:center;
padding:8px !important;
display:block;
margin:0 auto !important;
float:none !important;

}
				.call-to-action-1 {
				width:100%;
			}

			.call-to-action-1:hover {
				width:100%;
				

			}

				.call-to-action-2 {
				width:100%;
				margin-top:10px;
			}

			.call-to-action-2:hover {
				width:100%;
				margin-top:10px;
			}
   

		  	.logo {
		  		width:50px;
		  	}

   		}
</style>


				<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="split style1">
						<div class="contact">
							<h2>Kontakt oss</h2>
							<ul class="contact-icons">
								<li class="icon fa-home" style="font-size:18px;"><a href="#"><b>Forskningsparken<br />Startuplab</b></a></li>
								<li class="icon "><a href="#">Gaustadalléen 21<br />0349 Oslo</a></li>
								
								<li class="icon fa-envelope-o"><a href="mailto:post@dingdongme.com">post@dingdongme.com</a></li>


								


							</ul>
							<ul class="icons-bordered">
								<li><a class="icon fa-facebook" href="https://www.facebook.com/dingdong.no">
									<span class="label">Facebook</span>
								</a></li>
							
							</ul>
						</div>
						<form action="#" method="post">
							<h2>Send oss en e-post</h2>
							<div class="field half first">
								<input name="name" id="name" placeholder="Navn" type="text" />
							</div>
							<div class="field half">
								<input name="email" id="email" placeholder="E-post" type="email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" rows="6" placeholder="Melding"></textarea>
							</div>
							<ul class="actions">
								<li><input value="Send melding" class="button" type="submit" /></li>
							</ul>
						</form>
					</div>
					<div class="copyright">
						<p>2017 &copy; DingDong AS. Alle rettigheter reservert. <br />Org.nr: 913704665 - Laget av <a href="http://motiwise.no">Motiwise</a</p>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.selectorr.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>