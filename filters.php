<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16"/>
		<title>Prithvi Distributors Jaipur | Auto Parts Distributors</title>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<link rel="stylesheet" href="./css/main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
		<?php
			$fuel=array(
					array("GF9831IN","Cheverolet Tavera","300.00"),
					array("K5000IN","Kit ( Oil+ Fuel Filter)","875.00")
				);
			$oil=array(
					array("PF3310IN","Maruti Car/MPFI","122.00"),
					array("PF4440IN","Cheverolet Spark","165.00"),
					array("PF5550IN","Cheverolet Aveo/Optra","174.00"),
					array("PF7770IN","Cheverolet Tavera",""),
					array("PF7780IN","Toyota Innova","245.00")
				);
			$air=array(
					array("A3321IN","Cheverolet Tavera","698.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Filters
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Filters</p>
						<div class="prd-decp">Fuel filter used in car removes any impurities (rust and dust particles) so as to ensure decreased wear and tear of the engine components and fuel pump.<br>
						The fuel filter gets clogged if not replaced at regular intervals and eventually will decrease the fuel supply to the engine. A clogged fuel filter can be found responsible when there is a decrease in fuel efficiency or when the car takes longer to start.<br><br><br>
						Oil filter removes sludge and other dust particles from engine oil protecting the engine from excessive wear and tear.<br>
						 One of the important purpose Oil Filter serves is when the car is turned off, the oil is drained to the bottom of the engine. This leaves the top parts of the engine without any lubrication. Oil filters retain the oil with the help of its anti drain back valve and when the car is turned on, Oil filter instantly supplies its retained oil to the top parts of the engine lubricating them properly. The oil filter should not offer much resistance to the flow or else the car won't start on a cold day.<br><br><br>
						Air filters in a car removes dust and debris from the incoming air to prevent them from entering the engine cylinder to decrease wear & tear and contamination of oil.<br>
						 If the air filter in a car is not clean, the fuel efficiency  is decreased, performance of the car will deteriorate over time and it can also affect the air flow sensor. White smoke, decrease in mileage, and loss of horse power of the car are the symptoms for a dirty air filter.<br>
						 Air filters need to be replaced depending on the type of place the car is being driven. If the place is dusty, then the car air filter might need to be changed often. 
					</div>
					<img src="./images/filters.jpg"/>
					<img src="./images/fuel-filter.jpg"/>
					<img src="./images/oil-filter.jpg"/>
					<img src="./images/air-filter.jpg"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Fuel Filter</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<2;$i++)
									{
										echo "<tr>"."<td>".$fuel[$i][0]."</td>"."<td>".$fuel[$i][1]."<td><span class='fa fa-rupee'></span> ".$fuel[$i][2]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip2">Oil Filter</div>
						<div class="panel" id="panel2">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<5;$i++)
									{
										echo "<tr>"."<td>".$oil[$i][0]."</td>"."<td>".$oil[$i][1]."<td><span class='fa fa-rupee'></span> ".$oil[$i][2]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip3">Air Filter</div>
						<div class="panel" id="panel3">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Part No.</td>
									<td>Application</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<1;$i++)
									{
										echo "<tr>"."<td>".$air[$i][0]."</td>"."<td>".$air[$i][1]."<td><span class='fa fa-rupee'></span> ".$air[$i][2]."</td>"."</tr>";
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