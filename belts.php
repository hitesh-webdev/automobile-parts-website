<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$raw=array(
					array("1","XV 10-770","Maruti Van/Gypsy/1000WP","17521M71530","91.00"),
					array("2","XV 10-840","Maruti 800 (MPFI)","17521M78050","115.00"),
					array("3","XV 10-850","Maruti Car Std. and A/C 800 DX","17521M78010","94.00"),
					array("4","AVX 10-909","Ambassador-Dynamo","H3003500","124.00"),
					array("5","AVX 10-1145","M&M Jeep Armada 27 Alt. & WP A/C /CL340DP /CDR","9420000335","145.00"),
					array("6","XPZ 660","M&M Vacuum Pump to Water Pump Cielo","56881","96.00"),
					array("7","XPZ 958","M&M Alternator","85216","102.00"),
					array("8","XPZ 1125","Commander / 550DP /540 DP/NC 640DP/Jeep Peugeot XDP","9420000392","177.00"),
					array("9","AVX 10-1020","M&M Peugeot Alt. / Marshal 750 DI/CI","A0000-240-19-762","126.00"),
					array("10","XV 13-1012","M&M Armada Grand/H.M. Plus AC/Bolero","--","173.00"),
					array("11","AVX 10-1040","M&M AVL Engines","--","156.00"),
					array("12","AVX 13-1060","M&M AVL Engines","0306GB0021N","158.00"),
					array("13","AVX-10-720","Mahindra & Mahindra Belt","1102DA27 10M","134.00"),
					array("14","AVX 10-675","Matiz/Bolero/Armada Grand","96239407","98.00"),
					array("15","XPA 1000","Bajaj Tempo","B008089970892","199.00"),
					array("16","AVX 10-1019","Bajaj Tempo Matador (D 301 Engine)","24010762","135.00"),
					array("17","REL 13-865","Toyota Qualis-Power Steering","90916-067NL","171.00"),
					array("18","REL 13-1120","Toyota Qualis-Power Steering","90916-570NL","204.00"),
					array("19","REL 13-1040","Toyota Qualis (Fan & Alt.)","90916-02211","209.00"),
					array("20","REL 13-1220","Toyota Qualis A/C Belt","90080-92022","242.00"),
					array("21","REL 13-1460","Tavera Compressor Belts","8944503950","230.00"),
					array("22","REL 13-1380","Tavera Power Steering Belts","T8979568990","228.00"),
					array("23","XV 15-1017","Tavera Cooling Fan Belts","T8973151530","274.00"),
					array("24","REL 13-1586","Chevrolet Tavera Comp. Belt","T8979576050","290.00"),
					array("25","AVX 10-725","Tata Safari/Sierra Power Steering (LD)","2790-1514-6306","118.00")
				);
			$poly=array(
					array("1","5PK 1145","Ford Ikon (1.8) Diesel","97FF6C301 AD/1093816","322.00"),
					array("2","6PK 1705","Ford Fiesta","--","494.00"),
					array("3","4PK 820","Honda City (1,5) A/C","38920-P3R-N000","157.00"),
					array("4","4PK 1062","Honda  Accord","--","343.00"),
					array("5","5PK 989","Lancer Petrol  A/C","F388-LCYLA-01","323.00"),
					array("6","3PK 720","WagonR   A/C","--","125.00"),
					array("7","4PK 815","Maruti Zen Esteem Alt. & WP","17521M86500A","137.00"),
					array("8","4PK 720","Suzuki Alto / Wagon R / WP","17521 -M79620","118.00"),
					array("9","6 PK 1323","Maruti Swift Dzire/Ritz Diesel","--","504.00"),
					array("10","4PK 730","Tata Indica (D) Subros A/C.AIt.W/P","2790-1514-6307","114.00"),
					array("11","4PK 740","Tata Indica Alt/Dle/AC","2790-2312-6304","116.00"),
					array("12","4PK 875","Tata Indica (D) P/S,Alt & WP, INDIGO PS","2790-2311-6304","141.00"),
					array("13","4PK 1155","Tata Mobile (OLD) TATA 207","2549 1514 6311 N","254.00"),
					array("14","4PK 1040","Tata Sumo/207 (NEW), ALT/WP","2547-1514-6315","231.00"),
					array("15","6PK 1065","Tata Safari (New)","2547-1514-6330 N","315.00"),
					array("16","4PK 720","Indica (P&D) Alt. O/M","2790-1514-6310 N","118.00"),
					array("17","5PK 720","Indigo Alt.(Petrol) GLX/LX, LA  A/c Subros","2791-2311-6304 N","234.00"),
					array("18","6PK 1170","Tata 207 DI","253420156332","349.00"),
					array("19","7PK 1516","Toyota Innova D-4-D","90916T2006","535.00"),
					array("20","4PK 750","Hyundai Accent/Santro","57170-02710","233.00"),
					array("21","5 PK 1848","Hyundai Verna","252122A112","546.00"),
					array("22","7PK 1790","Mahindra Scorpio Chain Drive (Bharat Stage III)","0306GC0210N","591.00"),
					array("23","4 PK 1050","Mahindra Scorpio M2DI W/P","0306GB0051N","208.00"),
					array("24","6 PK 1970","Mahindra Xylo ALT","--","480.00"),
					array("25","4PK 1115","Mahindra Maximo","--","269.00"),
					array("26","6PK 1199","Mahindra Logan","--","332.00"),
					array("27","4 PK 665","Chevrolet Spark A/C","96239408","145.00"),
					array("28","6PK 1120","Skoda","--","314.00")
				);
			$flex=array(
					array("1","WVA 349","Hindustan Ambassador","H 300 3500","84.00"),
					array("2","WVA 355","Hindustan Ambassador & Trekker","H 300 3500","84.00"),
					array("3","WVA 374","Fiat/Premier 1100D-Select (1960-61)","--","93.00"),
					array("4","WVA 379","Fiat/Premier 1100D-Select (1961-64),<br>1964 Sep. on 1100 D","--","82.00")
				);
			$syn=array(
					array("1","111ZA20","HM Contessa Classic with ISUZU Petrol Engine","--","369.00"),
					array("2","88ZA19","Maruti 800 / Omni / Gypsy","--","178.00"),
					array("3","89RU25","Maruti Zen / Esteem 2 Valve","--","497.00"),
					array("4","136PR25","Tata Sumo / Safari / Estate / Mobile / Indica Diesel / Maruti","--","279.50")
				);
		?>
	</head>
	<body>
		<div class="product-wrapper">
			<div id="header">
				<div id="logo"></div>
				<div id="logo-name">Prithvi<br>Distributors</div>
				<div id="nav-bar">
					<a href="./index.php"><div class="nav-icons"><span class="fa fa-home"></span> HOME</div></a>
					<a href="./about.php"><div class="nav-icons"><span class="fa fa-users"></span> ABOUT US</div></a>
					<a href="./lubricants.php"><div class="nav-icons nav-active"><span class="fa  fa-gears"></span> PRODUCTS
						<ul class="drop">
							<a href="./lubricants.php"><li>Lubricants</li></a>
							<a href="./filters.php"><li>Filters</li></a>
							<a href="./belts.php"><li>Belts</li></a>
							<a href="./hoses.php"><li>Hoses</li></a>
							<a href="./gaskets.php"><li>Gaskets</li></a>
							<a href="./radiators.php"><li>Radiators</li></a>
							<a href="./drive-shafts.php"><li>Drive Shafts</li></a>
							<a href="./brake-pads.php"><li>Disc and Brake Pads</li></a>
							<a href="./plug-wires.php"><li>Plug Wires</li></a>
							<a href="./steering.php"><li>Steering & Suspension Range</li></a>
							<a href="./shockers.php"><li>Dicky Shockers</li></a>
							<a href="./bush-kit.php"><li>Bush Kit</li></a>
							<a href="./silencers.php"><li>Silencers & Coolant</li></a>
						</ul>
					</div></a>
					<a href="./contact.php"><div class="nav-icons"><span class="fa  fa-phone"></span> CONTACT US</div></a>
				</div>
			</div>

			<div id="nav-location">
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Belts
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Belts</p>
						<div class="prd-decp">A timing belt, timing chain or cam belt is a part of an internal combustion engine that synchronizes the rotation of the crankshaft and the camshaft(s) so that the engine's valves open and close at the proper times during each cylinder's intake and exhaust strokes.<br>
						Most modern production automobile engines utilize a timing belt or chain to synchronize crankshaft and camshaft rotation.<br>
						When an automotive timing belt is replaced, care must be taken to ensure that the valve and piston movements are correctly synchronized. Failure to synchronize correctly can lead to problems with valve timing, and this in turn, in extremes, can cause collision between valves and pistons in interference engines.
					</div>
					<img src="./images/belt.jpg" width="275" height="211"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Auto Flex Raw Edge Cogged Belts</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Alaska Part No.</td>
									<td>Application</td>
									<td>OE Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<25;$i++)
									{
										echo "<tr>"."<td>".$raw[$i][0]."</td>"."<td>".$raw[$i][1]."</td>"."<td>".$raw[$i][2]."</td>"."<td>".$raw[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$raw[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip2">Microrib Ribbed / Poly Belts</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Alaska Part No.</td>
									<td>Application</td>
									<td>OE Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<28;$i++)
									{
										echo "<tr>"."<td>".$poly[$i][0]."</td>"."<td>".$poly[$i][1]."</td>"."<td>".$poly[$i][2]."</td>"."<td>".$poly[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$poly[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Tough & Flex Wrapped Belts</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Alaska Part No.</td>
									<td>Application</td>
									<td>OE Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<4;$i++)
									{
										echo "<tr>"."<td>".$flex[$i][0]."</td>"."<td>".$flex[$i][1]."</td>"."<td>".$flex[$i][2]."</td>"."<td>".$flex[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$flex[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip4">Timings / Synchronous Belts</div>
						<div class="panel" id="panel4">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Alaska Part No.</td>
									<td>Application</td>
									<td>OE Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<4;$i++)
									{
										echo "<tr>"."<td>".$syn[$i][0]."</td>"."<td>".$syn[$i][1]."</td>"."<td>".$syn[$i][2]."</td>"."<td>".$syn[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$syn[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
					</div>

				</div>
				<div id="product-list">
					<h3 align="center">All Products</h3>
					<ul id="prd-list">
						<a href="./lubricants.php"><li><span class="fa fa-caret-right"></span> Lubricants</li></a>
						<a href="./filters.php"><li><span class="fa fa-caret-right"></span> Filters</li></a>
						<a href="./belts.php"><li><span class="fa fa-caret-right"></span> Belts</li></a>
						<a href="./hoses.php"><li><span class="fa fa-caret-right"></span> Hoses</li></a>
						<a href="./gaskets.php"><li><span class="fa fa-caret-right"></span> Gaskets</li></a>
						<a href="./radiators.php"><li><span class="fa fa-caret-right"></span> Radiators</li></a>
						<a href="./drive-shafts.php"><li><span class="fa fa-caret-right"></span> Drive Shafts</li></a>
						<a href="./brake-pads.php"><li><span class="fa fa-caret-right"></span> Disc and Brake Pads</li></a>
						<a href="./plug-wires.php"><li><span class="fa fa-caret-right"></span> Plug Wires</li></a>
						<a href="./steering.php"><li><span class="fa fa-caret-right"></span> Steering & Suspension Range</li></a>
						<a href="./shockers.php"><li><span class="fa fa-caret-right"></span> Dicky Shockers</li></a>
						<a href="./bush-kit.php"><li><span class="fa fa-caret-right"></span> Bush Kit</li></a>
						<a href="./silencers.php"><li><span class="fa fa-caret-right"></span> Silencers & Coolant</li></a>
					</ul>
				</div>
			</div>
			<div id="footer">
		    	<div class="foot-block">
		    		<h3>KNOW US</h3>
		    		<span class="fa  fa-angle-right"></span>&nbsp;
		    		<a href="./about.php">About Us</a><br><br>
		    		<span class="fa  fa-angle-right"></span>&nbsp;
		    		<a href="./contact.php">Contact Us</a><br>
		    		<a href="#"><span class="fb sm fa fa-facebook-square"></span></a>
		    		<a href="#"><span class="in sm fa fa-linkedin-square"></span></a>
		    		<a href="#"><span class="gplus sm fa fa-google-plus-square"></span></a>
		    	</div>
		    	<div class="foot-block">
		    		<h3>ASK FOR A PART</h3>
		    		<p>If you are in urgent need of a part, let us know.</p>
		    		<div id="foot-btn"><a href="./contact.php">ASK FOR A PART</a></div>
		    	</div>
		    	<div class="foot-block">
		    		<h3>CONTACT US</h3>
		    		<span class="fa fa-map-marker"></span> &nbsp; 53,TRANSPORT NAGAR, JAIPUR, RAJASTHAN-302003<br><br>
		    		<span class="fa fa-phone"></span> &nbsp; +91-9314769997 , +91-8955204166<br><br>
		    		<span class="fa fa-envelope-o"></span> &nbsp; prithvidistributorsjaipur@gmail.com
		    	</div>
		    </div>
		    <button id="spnTop"><span class="fa fa-chevron-up"></span></button>
			<div id="reg">Copyright &copy; 2015 Prithvi Distributors. All Rights Reserved.</div>
		</div>

		<script src="./js/jquery-1.11.2.js"></script>
		<script> 
		$(document).ready(function(){
			$("#panel1").slideDown("slow");
		  $("#flip1").click(function(){
		    $("#panel1").slideToggle(500);
		    $("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  });
		  $("#flip2").click(function(){
		    $("#panel2").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  });
		  $("#flip3").click(function(){
		    $("#panel3").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  });
		  $("#flip4").click(function(){
		    $("#panel4").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  });

		  	$(window).scroll(function(){
		 		if($(this).scrollTop()>400){
		 			$('#spnTop').fadeIn(800);
		 		}
		 		else{
		 			$('#spnTop').fadeOut(800);
		 		}
		 	});
		
			$('#spnTop').on("click",function() {
				$('html, body').animate({ scrollTop: 0 }, 'slow', function () {
				});
			});
		});
		</script>
	</body>
</html>