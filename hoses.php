<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$rad=array(
					array("1","VAI 1001","Maruti 800","3","192.00"),
					array("2","VAI 1002","Maruti Van","3","208.00"),
					array("3","VAI 1005","Wagon R","4","359.00"),
					array("4","VAI 1006","Esteem","3","400.00"),
					array("5","VAI 1007","Zen","2","302.00"),
					array("6","VAI 1008","Gypsy","2","233.00"),
					array("7","VAI 1009","Hyundai Santro","3","392.00"),
					array("8","VAI 1012","Mitsubishi Lancer (Petrol)","2","1004.00"),
					array("9","VAI 1015","TATA Indica","2","1080.00"),
					array("10","VAI 1017","TATA Sumo","5","349.00"),
					array("11","VAI 1019","TATA Safari","6","629.00"),
					array("12","VAI 1020","Toyota Qualis","2","397.00"),
					array("13","VAI 1021","Mahindra Jeep Diesel","2","316.00"),
					array("14","VAI 1023","Jeep Armada","2","492.00"),
					array("15","VAI 1025","Mahindra Bolero","2","404.00"),
					array("16","VAI 1030","Maruti Alto","3","276.00"),
					array("17","VAI 1031","Mahindra Scorpio","2","507.00"),
					array("18","VAI 1032","Ford Ikon","2","538.00"),
					array("19","VAI 1042","TATA Indica V2","6","1246"),
					array("20","VAI 1048","Maruti Swift ( Diesel)","2","379.00"),
					array("21","VAI 1049","Maruti Swift ( Petrol)","2","377.00"),
					array("22","VAI 1050","HYUNDAI i10 ERA MODEL 1.1 GL","2","715.00"),
					array("23","VAI 1051","HYUNDAI i10 KAPPA MODEL","2","571.00"),
					array("24","VAI 1052","TOYOTA INNOVA","2","410.00"),
					array("25","VAI 1053","Chevrolet Travera","3","433.00"),
					array("26","VAI 1054","Max/Pikup","2","408.00"),
					array("27","VAI 1055","MAHINDRA XYLO","2","606.00"),
				);
			$heat=array(
					array("1","VH 7001","Maruti 800","2","112.00"),
					array("","VH 7001 A","","'S' Type Outlet","63.00"),
					array("","VH 7001 B","","'?' Shaped Inlet","50.00"),
					array("2","VH 7005","Maruti Alto / Wagon R","2","125.00"),
					array("","VH 7005 A","","'S' Type","57.00"),
					array("","VH 7005 B","","Multi Bend","68.00"),
					array("3","VH 7006","Maruti Esteem","2","138.00"),
					array("","VH 7006 A","","With Three Bends","52.00"),
					array("","VH 7006 B","","Big Length with Three Bends","86.00"),
					array("4","VH 7007","Maruti Zen","2","122.00"),
					array("","VH 7007 A","","'S' Type Inlet","73.00"),
					array("","VH 7007 B","","'S' Type Outlet","49.00"),
					array("5","VH 7009","Hundai Santro","2","159.00"),
					array("6","VH 7016","Tata Indica","2","184.00"),
					array("7","VH 7030","M&M Scorpio","6","1042.00"),
					array("","VH 7030 A","","Scorpio Thermostat Hose","84.00"),
					array("","VH 7030 B","","Thermostat Hose","104.00"),
					array("","VH 7030 C","","Elbow Hose to Water Pump","51.00"),
					array("","VH 7030 D","","Inlet Hose","253.00"),
					array("","VH 7030 E","","Outlet Hose","231.00"),
					array("","VH 7030 F","","Oil Separator Hose","320.00"),
				);
			$sil=array(
					array("1","VSH-001","Silicon Hump Hose","Tata 1312 TC/Leyland 4018/HINO","399.00"),
					array("2","VSH-002","Silicon Hump Hose","Tata 407/709, Tata LPT 909/1109","349.00"),
					array("3","VSH-003","Silicon Hump Hose","Tata 2515 EXTC","389.00"),
					array("4","VSH-004","Hose Turbo Charger","Tata","227.00"),
					array("5","VSH-005","Silicon Cut Hose","Tata 1613/2515,Bolero/Leyland","187.00"),
					array("6","VSH-006","Silicon Cut Hose","Tata","225.00"),
					array("7","VSH-007","Hose Connecting","Tata TC","116.00"),
					array("8","VSH-008","Hose Bellow","Tata 709 LPT / 909 / 1109","523.00"),
					array("9","VSH-009","Hose Outlet","Tata 709 LPT / 909 / 1109","229.00"),
					array("10","VSH-010","Hose Connecting","Tata TC","74.00"),
					array("11","VSH-011","Hose Turbo Charger","Tata Safari","187.00"),
					array("12","VSH-012","Hose Turbo Charger","Tata Safari","512.00"),
					array("13","VSH-013","Hose Hump","Leyland","575.00"),
					array("14","VSH-014","Hose Bellow","Leyland Euro","567.00"),
					array("15","VSH-015","Hose Kit","Bollero / Max(Set of 2 Pcs.)","586.00"),
					array("16","VSH-015 A","Hose Inlet","Bollero Turbo","410.00"),
					array("17","VSH-015 B","Hose Outlet","Bollero Turbo","187.00"),
					array("18","VSH-016","Hose Turbo Charger","Mahindra/Max/Pikup","410.00"),
					array("19","VSH-017","Hump Hose","Eicher Canter / 709","221.00"),
					array("20","VSH-018","Hose Air Outlet(TC)","Eicher MCV/HCV/LCV","604.00"),
					array("21","VSH-019","Hose inlet","Eicher Canter 1110","452.00"),
					array("22","VSH-020","Hose Intercooler","Eicher MCV","651.00"),
					array("23","VSH-021","Hose Intercooler Inlet","Eicher Canter","546.00"),
					array("24","VSH-022","Silicon Cut Hose Straight in 22mm ID x 12\" Length<br>(as per VSH-007 Specification but length is double)","","231.00")
				);
			$epdm=array(
					array("1","ESH 50","<small>1/2</small>\"","20.0","143.00"),
					array("2","ESH 75","<small>3/4</small>\"","27.0","216.00"),
					array("3","ESH 100","1\"","33.0","274.00"),
					array("4","ESH 125","1 <small>1/4</small>\"","34.0","322.00"),
					array("5","ESH 150","1 <small>1/2</small>\"","46.0","376.00"),
					array("6","ESH 175","1 <small>3/4</small>\"","52.0","462.00"),
					array("7","ESH 200","2\"","58.0","529.00"),
					array("8","ESH 225","2 <small>1/4</small>\"","66.0","635.00"),
					array("9","ESH 250","2 <small>1/2</small>\"","72.0","724.00"),
					array("10","ESH 300","3\"","83.0","799.00"),
					array("11","ESH 350","3 <small>1/2</small>\"","95.0","950.00"),
				);
			$fuel=array(
					array("1","NFH 63","6.3","14.3","116.00"),
					array("2","NFH 80","8.0","16.0","129.00"),
					array("3","NFH 100","10.0","18.0","153.00"),
					array("4","NFH 125","12.5","20.5","205.00"),
					array("5","NFH 150","15.0","23.0","255.00"),
					array("6","NFH 190","19.0","29.0","308.00"),
					array("7","NFH 250","25.0","35.0","448.00"),
					array("8","NFT 45","","","173.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Hoses
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Hoses</p>
						<div class="prd-decp">Radiator hoses are designed to transfer glycol-based coolants to and from the radiator as well as through other components in the vehicle's coolant system. Molded to provide full flow through tight bends, ease of application, and to relieve stress on radiator connections.<br><br>
						Heater hoses are designed to transfer glycol-based coolants to and from the heater core, by-pass to the radiator, as well as through other components in the vehicle's coolant system.<br><br>
						Silicon heater hose is used for coolant transfer applications and higher temperature service.<br><br>
						Fuel hoses can be used as a fuel line, PCV connection, emission control line or fuel return line. These are designed for auxillary gas tanks or as a connection between filler neck and tank where a slight hose bend is required. 
					</div>
					<img src="./images/radiator-hose.jpg" style="margin-left: 100px;"/>
					<img src="./images/heater-hose.jpg" style="margin-left: 100px;"/>
					<img src="./images/fuel-hose.jpg" style="margin-left: 100px;"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Radiator Hoses</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Application</td>
									<td>Set of Pcs.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<27;$i++)
									{
										echo "<tr>"."<td>".$rad[$i][0]."</td>"."<td>".$rad[$i][1]."</td>"."<td>".$rad[$i][2]."</td>"."<td>".$rad[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$rad[$i][4]."</td>"."</tr>";
									} 
								?>
								<tr>
									<td colspan="5" align="center">
										Also Available in "S" Type, "L" Type & "Upper" and "Lower" hoses individually. 
									</td>
								</tr>
							</table>
						</div>
						<div class="flip" id="flip2">Heater Hoses</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Application</td>
									<td>Set of Pcs.</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<21;$i++)
									{
										echo "<tr>"."<td>".$heat[$i][0]."</td>"."<td>".$heat[$i][1]."</td>"."<td>".$heat[$i][2]."</td>"."<td>".$heat[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$heat[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Silicon Hoses</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Description</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<24;$i++)
									{
										echo "<tr>"."<td>".$sil[$i][0]."</td>"."<td>".$sil[$i][1]."</td>"."<td>".$sil[$i][2]."</td>"."<td>".$sil[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$sil[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip4">EPDM Straight Hose (3Ft. Length)</div>
						<div class="panel" id="panel4">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Size(Inch)</td>
									<td>OD (MM)</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<11;$i++)
									{
										echo "<tr>"."<td>".$epdm[$i][0]."</td>"."<td>".$epdm[$i][1]."</td>"."<td>".$epdm[$i][2]."</td>"."<td>".$epdm[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$epdm[$i][4]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip5">Fuel Hose</div>
						<div class="panel" id="panel5">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Size(MM)</td>
									<td>OD (MM)</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<8;$i++)
									{
										echo "<tr>"."<td>".$fuel[$i][0]."</td>"."<td>".$fuel[$i][1]."</td>"."<td>".$fuel[$i][2]."</td>"."<td>".$fuel[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$fuel[$i][4]."</td>"."</tr>";
									} 
								?>
								<tr>
									<td colspan="5" align="center">Available in Roll of 5 mtrs./10 mtrs./15 mtrs. long.</td>
								</tr>
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
		  	$("#panel5").slideUp("slow");
		  });
		  $("#flip2").click(function(){
		    $("#panel2").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  });
		  $("#flip3").click(function(){
		    $("#panel3").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  });
		  $("#flip4").click(function(){
		    $("#panel4").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  });
		  $("#flip5").click(function(){
		    $("#panel5").slideToggle(500);
		    $("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel1").slideUp("slow");
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