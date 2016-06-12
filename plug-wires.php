<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$sz=array(
					array("1","25190322","MARUTI 800 CC (CARBURATOR)","332.00"),
					array("2","25190323","MARUTI 800 (4 speed) (MPFI)","768.00"),
					array("3","25190324","MARUTI 800 (5 speed) / ALTO  (MPFI)","1533.00"),
					array("4","25190325","OMNI VAN (CARBURATOR)","387.00"),
					array("5","25190326","OMNI VAN MPFI","590.00"),
					array("6","25190327","MARUTI GYPSY JEEP  MG410","454.00"),
					array("7","25190328","ESTEEM / GYPSY JEEP  MPFI / ZEN","620.00"),
					array("8","25190329","BALENO / SWIFT / SX4 / VERSA","725.00"),
					array("9","25190331","ALTO LX / ALTO VX / WAGON R / ZEN ESTILLO","728.00")
				);
			$hy=array(
					array("1","25190332","SANTRO","712.00"),
					array("2","25190333","GETZ / SANTRO Zing","676.00"),
					array("3","25190334","ACCENT / GETZ","1129.00")
				);
			$fd=array(
					array("1","25190335","IKON 1.3 ENDURA ENGINE","1429.00"),
					array("2","25190336","IKON 1.3 / 1.6 ROCAM ENGINE","1508.00")
				);
			$ta=array(
					array("1","25190337","INDICA Xeta","922.00"),
					array("2","25190339","INDICA (CARBURATOR)","719.00"),
					array("3","25190340","INDICA / INDICA GLX / INDIGO  (MPFI)","958.00")
					);
			$oth=array(
					array("1","25190338","FIAT PALIO","949.00"),
					array("2","25190341","HONDA CITY","2228.00"),
					array("3","25190342","MITSUBISHI LANCER","950")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Plug Wires
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Plug Wires</p>
						<div class="prd-decp">Spark plug wires are the wires that connect a distributor, ignition coil, or magneto to each of the spark plugs in some types of internal combustion engine.<br><br>
						Each lead contains only one wire, as the current does not return through the same lead, but through the earthed/grounded engine which is connected to the opposite battery terminal.<br><br>
						Fouled, damaged, or worn out spark plugs can lead to a variety of engine problems, such as misfires, hard starts, increased emissions, and poor fuel economy. For most vehicles, you should replace your spark plugs every 30,000 miles.
					</div>
					<img src="./images/plugwire.jpg" width="320" height="251"/>
					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Maruti</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<9;$i++)
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
									<td>Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<3;$i++)
									{
										echo "<tr>"."<td>".$hy[$i][0]."</td>"."<td>".$hy[$i][1]."</td>"."<td>".$hy[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$hy[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Ford</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<2;$i++)
									{
										echo "<tr>"."<td>".$fd[$i][0]."</td>"."<td>".$fd[$i][1]."</td>"."<td>".$fd[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$fd[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip4">Tata</div>
						<div class="panel" id="panel4">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<3;$i++)
									{
										echo "<tr>"."<td>".$ta[$i][0]."</td>"."<td>".$ta[$i][1]."</td>"."<td>".$ta[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$ta[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip5">Others</div>
						<div class="panel" id="panel5">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>Part No.</td>
									<td>Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<3;$i++)
									{
										echo "<tr>"."<td>".$oth[$i][0]."</td>"."<td>".$oth[$i][1]."</td>"."<td>".$oth[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$oth[$i][3]."</td>"."</tr>";
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
		    $("#panel1").slideUp("slow");
		  	$("#panel2").slideUp("slow");
		  	$("#panel3").slideUp("slow");
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