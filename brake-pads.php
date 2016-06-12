<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$oth=array(
					array("1","LP602","BMW (Front)","BMW","1538.00"),
					array("2","LP1880","Matiz, Cielo Executive","Daewoo Motors","613.00"),
					array("3","LP587","Linea","Fiat","1388.00"),
					array("4","LP1887","Uno Diesel N, M","Fiat","575.00"),
					array("5","LP1886","Tempo Traveller","Force Motors","888.00"),
					array("6","LP673","Escort","Ford","1200.00"),
					array("7","LP1469","Fiesta","Ford","1475.00"),
					array("8","LP1884","Ikon","Ford","838.00"),
					array("9","LP2260","Optra","General Motors","863.00"),
					array("10","LP629","Tevera","General Motors","663.00"),
					array("11","LP1605A","Astra","General Motors","713.00"),
					array("12","LP2684-IN","Cruz Front","General Motors","1602.00"),
					array("13","LP2466","Cruz Rear","General Motors","1282.00"),
					array("14","LP2685-IN","Captiva","General Motors","1617.00"),
					array("15","LP702A","Corsa","General Motors","713.00"),
					array("16","LP2463-IN","Spark/Matiz Front","General Motors","755.00"),
					array("17","LP2264","Aveo UVA/Beat Front","General Motors","1126.00"),
					array("18","LP1881","Amby Classic(ISZ), Contessa","HM","1125.00"),
					array("19","LP2679-IN","Maximo-Diesel","Mahindra & Mahindra","988.00"),
					array("20","LP2265","Scorpio CRDi","Mahindra & Mahindra","1200.00"),
					array("21","LP2686-IN","XUV500 Front- Diesel","Mahindra & Mahindra","2748.00"),
					array("22","LP2677-IN","Xylo/ Bolero- Diesel CRDI","Mahindra & Mahindra","1555.00"),
					array("23","LP885","Logan","Mahindra Renault","738.00"),
					array("24","LP1885","Lancer","Mitsubishi Motors","650.00"),
					array("25","LP871","Pajero","Mitsubishi Motors","1688.00"),
					array("26","LP1723","Vectra Front","Opel","2338.00"),
					array("27","LP1410","Passat","Volkswagon","4188.00"),
					array("28","LP1601","Polo/ Skoda Fabia","Volkswagon","1300.00"),
					array("29","LP565","Octavia rear","Skoda","913.00"),
					array("30","LP2468-IN","Superb Front","Skoda","2258.00"),
					array("31","LP2470-IN","Laura Front","Skoda","1892.00"),
					array("32","LP2472-IN","Micra Front","Nissan","1404.00"),
				);
			$sz=array(
					array("1","LP1871","MARUTI 800","275.00"),
					array("2","LP1879","Esteem Type2","488.00"),
					array("3","LP1878","Gypsy (Girling Type)","488.00"),
					array("4","LP1014","Baleno","863.00"),
					array("5","LP1015","Grand Vitara","1200.00"),
					array("6","LP967","Grand Vitara N/M","1388.00"),
					array("7","LP684","Grand Vitara Rear","863.00"),
					array("8","LP2266","Swift, Dezire, Ritz","838.00"),
					array("9","LP2267","SX4","1200.00"),
					array("10","LP2680-IN","Ertiga Petrol & Diesel (Front)","1260.00"),
					array("11","LP1872","Zen","463.00"),
					array("12","LP1877","Alto, Wagon R, Zen Estillo","475.00"),
					array("13","LP2450-IN","Versa Front","913.00"),
				);
			$hy=array(
					array("1","LP704","Accent/Getz","725.00"),
					array("2","LP1882","Santro N, M","613.00"),
					array("3","LP1875","Santro O, M","613.00"),
					array("4","LP2682-IN","Eon Petrol Front","1171.00"),
					array("5","LP606","Sonata, Elantra","1475.00"),
					array("6","LP2678-IN","Verna Front","1582.00"),
					array("7","LP1952","Verna rear","838.00"),
					array("8","LP2457-IN","I 10/I 20 Front","1084.00"),
					array("9","LP2454-IN","Sonata Rear","1160.00"),
					array("10","LP2455-IN","Elantra Rear","1526.00")
				);
			$hd=array(
					array("1","LP2262","Accord - Type II","1475.00"),
					array("2","LP869","Accord Front","1550.00"),
					array("3","LP525","Accor Rear","1550.00"),
					array("4","LP1888","City","850.00"),
					array("5","LP809","City Type V Front","1200.00"),
					array("6","LP2453","City Type V Rear","1083.00"),
					array("7","LP2264","Civic","1475.00"),
					array("8","LP872","CRV (Front)","1613.00"),
					array("9","LP2263","CRV Type II","1475.00"),
				);
			$ty=array(
					array("1","LP2102","Altis","1688.00"),
					array("2","LP2103","Altis rear","913.00"),
					array("3","LP1737","Corolla","1563.00"),
					array("4","LP2059","Innova","775.00"),
					array("5","LP1876","Qualis","813.00"),
					array("6","LP2458-IN","Camery Front","2258.00"),
					array("7","LP2462-IN","Fortuner Front","1892.00"),
					array("8","LP-2681","Etios","1279.00")
				);
			$tata=array(
					array("1","LP1874","Indica, Ace","538.00"),
					array("2","LP2268","Indica Vista Diesel","600.00"),
					array("3","LP2269","Indica Vista Petrol","1063.00"),
					array("4","LP2270","Indigo - DSL","1150.00"),
					array("5","LP2271","Indigo - PTL","538.00"),
					array("6","LP1873","Sumo, Safari, Estate","813.00"),
					array("7","LP2272","Winger - Type II","1200.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Disc and Brake Pads
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Disc and Brake Pads</p>
						<div class="prd-decp">In a car's braking system, Brake pads grip the brake rotor when the brake pedal is pushed to stop/slow down the car's wheel. Two  Brake pads are provided to each wheel that need to be replaced when they become too thin than their minimum specified thickness to ensure proper braking.<br><br>
						If a squealing noise can be heard on the application of brakes, then it is a wear indicator warning for the replacement in the brake pads. If a vibrating or pulsating sensation is felt while pressing the brake pedal then it is an indication of worn out brake pads.
					</div>
					<img src="./images/brake-pad.jpg" width="335" height="251"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Maruti Suzuki</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<13;$i++)
									{
										echo "<tr>"."<td>".$sz[$i][0]."</td>"."<td>".$sz[$i][1]."</td>"."<td>".$sz[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$sz[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip2">Hyundai</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<10;$i++)
									{
										echo "<tr>"."<td>".$hy[$i][0]."</td>"."<td>".$hy[$i][1]."</td>"."<td>".$hy[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$hy[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Honda</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<9;$i++)
									{
										echo "<tr>"."<td>".$hd[$i][0]."</td>"."<td>".$hd[$i][1]."</td>"."<td>".$hd[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$hd[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip4">Toyota</div>
						<div class="panel" id="panel4">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<8;$i++)
									{
										echo "<tr>"."<td>".$ty[$i][0]."</td>"."<td>".$ty[$i][1]."</td>"."<td>".$ty[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$ty[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip5">Tata Motors</div>
						<div class="panel" id="panel5">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<7;$i++)
									{
										echo "<tr>"."<td>".$tata[$i][0]."</td>"."<td>".$tata[$i][1]."</td>"."<td>".$tata[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$tata[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip6">Others</div>
						<div class="panel" id="panel6">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Model</td>
									<td>Manufacturer</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<32;$i++)
									{
										echo "<tr>"."<td>".$oth[$i][0]."</td>"."<td>".$oth[$i][1]."</td>"."<td>".$oth[$i][2]."</td>"."<td>".$oth[$i][3]."</td>"."<td><span class='fa fa-rupee'></span> ".$oth[$i][4]."</td>"."</tr>";
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
			$("#panel6").slideDown("slow");
		  $("#flip1").click(function(){
		    $("#panel1").slideToggle(500);
		    $("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  	$("#panel6").slideUp("slow");
		  });
		  $("#flip2").click(function(){
		    $("#panel2").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  	$("#panel6").slideUp("slow");
		  });
		  $("#flip3").click(function(){
		    $("#panel3").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  	$("#panel6").slideUp("slow");
		  });
		  $("#flip4").click(function(){
		    $("#panel4").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  	$("#panel6").slideUp("slow");
		  });
		  $("#flip5").click(function(){
		    $("#panel5").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel6").slideUp("slow");
		  	$("#panel4").slideUp("slow");
		  });
		  $("#flip6").click(function(){
		    $("#panel6").slideToggle(500);
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
		  	$("#panel5").slideUp("slow");
		  	$("#panel4").slideUp("slow");
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