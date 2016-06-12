<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$car=array(
					array("1","OPEL ASTRA (TURBO DIESEL)","8145112080ALU","6302011/90510645","6175.00"),
					array("2","TATA VISTA QUADRAJET / TATA MANZA QUADRAJET (DIESEL)","8220362080ALU","5703 5010 0101",""),
					array("3","TATA INDICA VISTA TDI / INDIGO TDI CAC","8220392010CAC","27901 46 00108","6500.00"),
					array("4","TATA INDIGO (DIESEL)","8220412080ALU","2790 5010 0180","2520.00"),
					array("5","TATA INDICA (DIESEL)","8220422080ALU","2790 5010 0202","2520.00"),
					array("6","HYUNDAI SANTRO XING","8224122080ALU","2531005500","2190.00"),
					array("7","HYUNDAI I10 ( 1.2  KAPPA / SPORTZ/ MEGNA)","8224132080ALU","253100X100","2600.00"),
					array("8","HYUNDAI I 20 DIESEL","8224152080ALU","--","4400.00"),
					array("9","HYUNDAI ACCENT PETROL","8224182080ALU","25310-1A000","2400.00"),
					array("10","MARUTI CAR 800 (AC & NON AC)","8231112070ALU","17700M842F1","1525.00"),
					array("11","MARUTI ALTO LX /VX/CNG/ WAGON R","8231132080ALU","17700M79F11","1825.00"),
					array("12","MARUTI SUZUKI SWIFT DIESEL (NEW MODEL) / ERTIGA DIESEL","8231142080ALU","17700 M 74L50","3960.00"),
					array("13","MARUTI SWIFT PETROL / SWIFT D'ZIRE PETROL","8231152080ALU","177005175J01","3115.00"),
					array("14","MARUTI SWIFT D'ZIRE DIESEL","8231162080ALU","1770M86J00","3100.00"),
					array("15","MARUTI A STAR","8231172080ALU","--","2950.00"),
					array("16","MARUTI RITZ/SPLASH PETRO1","8231182080ALU","--","2850.00"),
					array("17","MARUTI SUZUKI EECO","8231202080ALU","--","2900.00"),
					array("18","MARUTI SUZUKI ZEN DIESEL/ESTEEM DIESEL","8231272080ALU","--","2800.00"),
					array("19","QUALIS RADIATOR WITHOUT SIDE FRAME","8239292080ALU","--","3400.00"),
					array("20","TOYOTA INNOVA - DIESEL","8239322070ALU","164000L200","4500.00"),
					array("21","HONDA CITY - TYPE 3 - 4","8284012080ALU","3400.00"),
					array("22","AVEO (PETROL)","8340282080ALU","--","3395.00"),
					array("23","GM TAVERA","8340292080ALU","T-97595149","3600.00"),
					array("24","FORD IKON (PETROL & DIESEL)","8352122080ALU","1091349","3150.00"),
					array("25","FORD FIGO ( PETROL)","8352132080ALU","N.A.","2950.00"),
					array("26","FORD FIGO ( DIESEL)","8352142080ALU","N.A.","3375.00"),
					array("27","SKODA  OCTAVIA  AC 1.9 TDI","8545112080ALU","1 JO 121 253 P","3160.00")
				);
			$muv=array(
					array("1","M & M Maximo (M&M L TV W/O PC Mini Van)","8580122080ALU","--","2250.00"),
					array("2","JEEP DIESEL/CJ550/LOAD KING/UTILITY","B-8580302070ALU","0304 AB0100N","3360.00"),
					array("3","JEEP DIESEL ( 24 MM )","8580292070ALU","0304 AB0100N","2790.00"),
					array("4","MAHINDRA BOLERO SLX / DXL / SLE , PLUS (AC MODEL)","B-8580312070ALU","0304 AB0191N","3745.00"),
					array("5","MAHINDRA BOLERO (NON-A/C)","8580322070ALU","0304 AB0131N","2750.00"),
					array("6","MAHINDRA BOLERO MAXI TRUCK","8580332070ALU","0304AAB00840N",""),
					array("7","MAHINDRA BOLERO MARSHAL LOOK (N/AC)","8580342070ALU","0304AB0141N","2975.00"),
					array("8","MAHINDRA SCORPIO CRDE","8580402080ALU","0304 AC0070N","4200.00")
				);
			$ace=array(
					array("1","TATA ACE","8220202080ALU","2788 5010 0104","1830.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Radiators
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Radiators</p>
						<div class="prd-decp">Radiators are heat exchangers used for cooling internal combustion engines.<br><br>
						Internal combustion engines are often cooled by circulating a liquid called engine coolant through the engine block, where it is heated, then through a radiator where it loses heat to the atmosphere, and then returned to the engine.<br><br>
						Engine coolant is usually water-based, but may also be oil. It is common to employ a water pump to force the engine coolant to circulate, and also for an axial fan to force air through the radiator.The radiator transfers the heat from the fluid inside to the air outside, thereby cooling the fluid, which in turn cools the engine. Radiators are also often used to cool automatic transmission fluids, air conditioner refrigerant, intake air, and sometimes to cool motor oil or power steering fluid.
					</div>
					<img src="./images/radiator1.jpg" height="211" width="275"/>
					<img src="./images/radiator.jpg" height="211" width="275"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">CAR</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Description</td>
									<td>Banco Part No.</td>
									<td>Adaptable Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<27;$i++)
									{
										echo "<tr>"."<td>".$car[$i][0]."</td>"."<td>".$car[$i][1]."</td>"."<td>".$car[$i][2]."</td>"."<td>".$car[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$car[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip2">MAHINDRA  MUV</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Description</td>
									<td>Banco Part No.</td>
									<td>Adaptable Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<8;$i++)
									{
										echo "<tr>"."<td>".$muv[$i][0]."</td>"."<td>".$muv[$i][1]."</td>"."<td>".$muv[$i][2]."</td>"."<td>".$muv[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$muv[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">ACE</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Description</td>
									<td>Banco Part No.</td>
									<td>Adaptable Part No.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<1;$i++)
									{
										echo "<tr>"."<td>".$ace[$i][0]."</td>"."<td>".$ace[$i][1]."</td>"."<td>".$ace[$i][2]."</td>"."<td>".$ace[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$ace[$i][4]."</td>"."</tr>";
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
		  });
		  $("#flip2").click(function(){
		    $("#panel2").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  });
		  $("#flip3").click(function(){
		    $("#panel3").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
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