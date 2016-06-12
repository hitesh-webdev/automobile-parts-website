<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$full=array(
					array("1","5 231 11 99 PS BKT","MARUTI CAR  800CC","269.00"),
					array("2","5 231 12 99 PS BKT","MARUTI OMNI","269.00"),
					array("3","5 231 13 99 PS BKT","MARUTI ALTO LX / MPFI","335.00"),
					array("4","5 231 32 99 PS GAF","MARUTI ZEN - MPFI","717.00"),
					array("5","5 231 29 99 PS GAF","MARUTI ESTEEM  / SWIFT / VERSA (MPFI)","717.00"),
					array("6","5 231 16 99 00 MLS","MARUTI SWIFT / RITZ / D'ZIRE / Tata VISTA / Fiat - LINEA  / PUNTO - DIESEL","--"),
					array("7","5 231 31 99 PS BKT","MARUTI WAGON  R / MARUTI ALTO VX","689.00"),
					array("8","5 224 22 99 00 MLS","HYUNDAI - SANTRO XING","--"),
					array("9","5 220 42 99 00 AST","TATA  INDICA  VX  DIESEL BS - I","555.00"),
					array("10","5 220 50 99 10 AST","TATA INDIGO / INDICA TURBO- BS -III (MULTI LAYER STEEL)","903.00"),
					array("11","5 150 34 99 PS SAL","AMBASSADOR (PETROL)","541.00"),
					array("12","5 150 30 99 00 AST","HINDUSTAN MOTORS (HM PLUS DIESEL) RICARDO","511.00"),
					array("13","5 220 46 99 00 AST","TATA SUMO / SUMO DLX / TATA MOBILE - 206 / 207 / ESTATE / SIERA","706.00"),
					array("14","5 220 36 99 00 AST","TATA SAFARI DLX BS - I","759.00"),
					array("15","5 580 38 99 PS BKT","M & M MARSHAL DI / UTILITY / MDI 3200","914.00"),
					array("16","5 580 39 99 PS BHR","M & M   BOLERO / VOYAGER","887.00"),
					array("17","5 580 40 99 00 MLS","M & M   SCORPIO","1875.00"),
					array("18","5 239 29 99 20 AST","TOYOTA - QUALIS - (MULTI LAYER STEEL)","1475.00"),
					array("19","5 239 32 99 00 MLS","TOYOTA INNOVA","--"),
					array("20","5 580 30 99 PS BKT","JEEP  DIESEL  ( B - 275  ENGINE )","604.00"),
					array("21","5 580 33 99 PS BKT","PJO XDP-4","925.00"),
					array("22","5 580 34 99 PS BKT","JEEP COMMANDER  (AVL)  -  575 DI  ENGINE","914.00"),
					array("23","5 580 36 99 PS BKT","JEEP COMMANDER  (AVL)   (MILLOR TYPE) ","668.00")
				);
			$half=array(
					array("1","5 231 11 98 PS BKT","MARUTI CAR  800CC","206.00"),
					array("2","5 231 12 98 PS BKT","MARUTI OMNI","206.00"),
					array("3","5 231 28 98 PS BHR","MARUTI ZEN OLD MODEL","689.00"),
					array("4","5 231 31 98 PS BKT","MARUTI WAGON  R / MARUTI ALTO VX","531.00"),
					array("5","5 220 42 98 00 AST","TATA  INDICA  VX  DIESEL BS - I","422.00"),
					array("6","5 150 34 98 PS SAL","AMBASSADOR (PETROL)","295.00"),
					array("7","5 580 38 98 PS BKT","M & M MARSHAL DI / UTILITY / MDI 3200","636.00"),
					array("8","5 580 39 98 PS BHR","M & M   BOLERO / VOYAGER","496.00"),
					array("9","5 580 30 98 PS BKT","JEEP  DIESEL  ( B - 275  ENGINE )","383.00"),
					array("10","5 580 33 98 PS BKT","PJO XDP-4","652.00"),
					array("11","5 580 34 98 PS BKT","JEEP COMMANDER  (AVL)  -  575 DI  ENGINE","668.00"),
					array("12","5 580 36 98 PS BKT","JEEP COMMANDER  (AVL)   (MILLOR TYPE) ","458.00")
				);
			$cyln=array(
					array("1","5 231 11 00 PS BKT","MARUTI CAR  800CC","85.00"),
					array("2","5 231 12 00 PS BKT","MARUTI OMNI","85.00"),
					array("3","5 231 13 00 PS BKT","MARUTI ALTO LX / MPFI","156.00"),
					array("4","5 231 32 00 PS GAF","MARUTI ZEN - MPFI","394.00"),
					array("5","5 231 29 00 PS GAF","MARUTI ESTEEM  / SWIFT / VERSA (MPFI)","389.00"),
					array("6","5 231 16 00 15 MLS","MARUTI SWIFT / RITZ / D'ZIRE / Tata VISTA / Fiat - LINEA  / PUNTO - DIESEL","675.00"),					
					array("7","5 231 31 00 PS BKT","MARUTI WAGON  R / MARUTI ALTO VX","155.00"),
					array("8","5 224 22 00 00 MLS","HYUNDAI - SANTRO XING","870.00"),	
					array("9","5 220 42 00 20 BAF","TATA  INDICA  VX  DIESEL BS - I","630.00"),	
					array("10","5 220 50 00 17 MLS","TATA INDIGO / INDICA TURBO- BS -III (MULTI LAYER STEEL)","850.00"),	
					array("11","5 150 34 00 PS SAL","AMBASSADOR (PETROL)","163.00"),			
					array("12","5 150 30 00 15 BAF","HINDUSTAN MOTORS (HM PLUS DIESEL) RICARDO","842.00"),		
					array("13","5 220 46 00 16 BAF / GNM","TATA SUMO / SUMO DLX / TATA MOBILE - 206 / 207 / ESTATE / SIERA","788.00"),					
					array("14","5 580 39 00 PS BHR","M & M   BOLERO / VOYAGER","390.00"),				
					array("15","5 580 40 00 00 MLS","M & M   SCORPIO","1250.00"),				
					array("16","5 239 29 00 00 ST","TOYOTA - QUALIS - (MULTI LAYER STEEL)","835.00"),
					array("17","5 239 32 00 00 MLS","TOYOTA INNOVA","900.00"),
					array("18","5 580 30 00 PS BKT","JEEP  DIESEL  ( B - 275  ENGINE )","213.00"),
					array("19","5 580 33 00 PS BKT","PJO XDP-4","397.00"),
					array("20","5 580 34 00 PS BKT","JEEP COMMANDER  (AVL)  -  575 DI  ENGINE","500.00"),
					array("21","5 580 36 00 PS BKT","JEEP COMMANDER  (AVL)   (MILLOR TYPE) ","291.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Gaskets
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Gaskets</p>
						<div class="prd-decp">In a car gaskets are used for a variety of engine parts to form a seal between important vehicle components, preventing combustion process from leaking into the coolant passages surrounding each cylinder. They tightly seal the cylinders thus facilitating maximum compression in the engine cylinder.<br><br>
						Some of the important types include head gasket, rocker or cam-cover gasket, valve cover gasket, fuel-pump gasket, sump gasket, cylinder-head gasket, crankcase side-cover gasket, exhaust manifold gasket oil pan gasket etc.<br><br>
						A gasket must be removed and replaced immediately whenever a leak or any signs of wear and tear is detected.
					</div>
					<img src="./images/gasket-logo.jpg" width="275" height="211"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Full Set</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<23;$i++)
									{
										echo "<tr>"."<td>".$full[$i][0]."</td>"."<td>".$full[$i][1]."</td>"."<td>".$full[$i][2]."<td><span class='fa fa-rupee'></span> ".$full[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip2">Half Set</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<12;$i++)
									{
										echo "<tr>"."<td>".$half[$i][0]."</td>"."<td>".$half[$i][1]."</td>"."<td>".$half[$i][2]."<td><span class='fa fa-rupee'></span> ".$half[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Cylinder Head Gasket</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<21;$i++)
									{
										echo "<tr>"."<td>".$cyln[$i][0]."</td>"."<td>".$cyln[$i][1]."</td>"."<td>".$cyln[$i][2]."<td><span class='fa fa-rupee'></span> ".$cyln[$i][3]."</td>"."</tr>";
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