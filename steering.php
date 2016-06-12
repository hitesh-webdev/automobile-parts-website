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
					array("1  Chevrolet Aveo","TA2981KIN","Tie Rod End","1152.00"),
					array("2","TC2774IND","Suspension Ball Joint","1073.00"),
					array("3  Chevrolet Optra (1.6, 1.8, Magna)","TC2775IND","Suspension Ball Joint","1192.00"),
					array("4","TA2982KIN","Tie Rod End","1009.00"),
					array("5 Ford Endeavor","TA2961KIN","Tie Rod End","1132.00"),
					array("6","TA2944KIN","Suspension Ball Joint","1415.00"),
					array("7","TC2766IND","Suspension Linkage","825.00"),
					array("8  Ford Ikon","TA2974IND","Tie Rod End - RH","506.00"),
					array("9","TA1611IND","Rack End/Steering Ball Joint","694.00"),
					array("10","TC2811IND","SUSPENSION BALL JOINT LH/RH","537.00"),
					array("11  FORD FUSION/FIESTA","TA2979KIN","TIE ROD END LH/RH","809.00"),
					array("12","TA2946IND","STEERING BALL JOINT LH/RH- Inner Tie Rod","519.00"),
					array("13","TC1158IND","SUSPENSION BALL JOINT LH/RH","694.00"),
					array("14","TC2773IND","FRONT STABILIZER LINK LH/RH","451.00"),
					array("15  Skoda Laura","TA2959KIN","Tie Rod End","979.00"),
					array("16","TA1905IND","Steering Ball Joint","1415.00"),
					array("17","TC2806KIN","Suspension Ball Joint","1523.00"),
					array("18  Skoda Octavia","TA2980KIN","Tie Rod End","930.00"),
					array("19","TC2800KIN","Suspension Ball Joint (RH/LH)","1081.00"),
					array("20  Tata Sumo Victa","TL544IND","Tie Rod Assembly","1338.00"),
					array("21","TA2965IND","Tie Rod End RH/LH","555.00"),
					array("22","TL545IND","Centre Link Assembly","1651.00"),
					array("23","TA2966KIN","Tie Rod End - Pair","982.00"),
					array("24  GM Tavera","TA2978KIN","Tie Rod End","795.00"),
					array("25","TC2771IND","Ball Joint Assembly- Lower","869.00"),
					array("26","TC2772IND","Ball Joint Assembly- Upper","638.00"),
					array("27","TL546IND","Tie Rod Assy","1099.00"),
					array("28","TC2779KIN","Ball Suspension joint ( Full Set)","2888.00"),
					array("29","TC2804KIN","TRE+BSJ U & L( Kit Set)","4783.00")
				);
			$sz=array(
					array("1  Maruti Suzuki SX4","TC2754IND","Stabilizer Joint","480.00"),
					array("2","TA2951KIN","Tie Rod End - LH & RH","950.00"),
					array("3","TA2952IND","Rack End","762.00"),
					array("4  Maruti Swift","TA2987KIN","Tie Rod End","902.00"),
					array("5","TA2457IND","Rack End/Steering Ball Joint","704.00"),
					array("6","TC2767IND","Stabilizer Joint","477.00"),
					array("7  Maruti Zen/Alto","TA2983KIN","Tie Rod End","545.00"),
					array("8","TA2984IND","Rack End- Inner Tie Rod","377.00"),
					array("9","TA2985KIN","Rack End (Pair) Inner + Outer Tie Rod","742.00"),
					array("10","TC2776IND","Track Control Arm","992.00"),
					array("11","TC2802KIN","Track Control Arm Set","1785.00"),
					array("12","TC2805KIN","TRE+RE+TCA (Kit Set)","2975.00")
				);
			$hy=array(
					array("1  Hyundai Verna","TA2986KIN","Tie Rod End","981.00"),
					array("2","TC1910IND","Ball Suspension joint","710.00"),
					array("3","TA2953IND","Rack End/Steering Ball Joint- Inner Tie Rod","708.00"),
					array("4","TC2193IND","Stabilizer joint- LH","645.00"),
					array("5","TC2194IND","Stabilizer joint-RH","649.00"),
					array("6  Hyundai I20","TA2630IND","Steering Ball Joint- Inner Tie Rod","1284.00"),
					array("7","TC2001IND","Suspension Ball Joint","846.00"),
					array("8","TA2963KIN","Tie Rod End","1240.00"),
					array("9","TC2807KIN","Suspension Stabilizer Link","1088.00"),
					array("10  Hyundai Santro","TA2988KIN","Tie Rod End","652.00"),
					array("11","TA1861IND","Rack End","428.00"),
					array("12","TC2808KIN","Ball Joint","962.00"),
					array("13","TA1924IND","Rack End ( Power Strg)- Inner Tie Rod","446.00"),
					array("14","TA2967KIN","TRE+RE+BJ( Kit Set)","2228.00"),
					array("15  Hyundai Accent","TA2990KIN","Tie Rod End","710.00"),
					array("16","TA2006IND","Rack End/Steering Ball Joint","486.00"),
					array("17","TC2004KIN","Stabilizer joint- Rear- RH & LH","456.00"),
					array("18","TC2813IND","Stabilizer joint- Front-RH","476.00"),
					array("19","TC2812IND","Stabilizer joint- Front- LH","526.00"),
					array("20  Hyundai I 10","TA2991KIN","Tie Rod End - LH & RH","710.00"),
					array("21","TA2591IND","Rack End/Steering Ball Joint- Inner Tie Rod","499.00"),
					array("22  Hyundai Getz","TA2989KIN"," Tie Rod End","770.00"),
					array("23","TA2968IND","Rack End/Steering Ball Joint- Inner Tie Rod","539.00"),
					array("24","TC1402IND","Stabilizer joint- LH","496.00"),
					array("25","TC1403IND","Stabilizer joint- RH","496.00")
				);
			$hd=array(
					array("1  Honda Accord - I","TA2957KIN","Tie Rod End","1339.00"),
					array("2","TA2112IND","Steering Ball Joint","1008.00"),
					array("3  Honda Accord - II","TA2958KIN","Tie Rod End","1351.00"),
					array("4","TA2111IND","Steering Ball Joint  - Inner Tie Rod","971.00"),
					array("5","TC2763IND","Suspension Ball Joint","958.00"),
					array("6","TC2764KIN","Suspension Stabilizer Link","937.00"),
					array("7  Honda Civic","TA2962KIN","Tie Rod End","1132.00"),
					array("8","TA2945IND","Steering Ball Joint- Inner Tie Rod","1197.00"),
					array("9  Honda City","TA2975KIN","Tie Rod End ( Type 1 & 2)","893.00"),
					array("10","TA2976IND","Rack End ( Type 1 & 2)- Inner Tie Rod","564.00"),
					array("11","TA2977IND","Rack End ( Type 1 & 2)- TRW Type- Inner Tie Rod","558.00")
				);
			$ty=array(
					array("1  Toyota Innova","TA2955KIN","Tie Rod End","873.00"),
					array("2","TA2956IND","Rack End/Steering Ball Joint- Inner Tie Rod","674.00"),
					array("3","TC2760IND","Ball Suspension Joint- Upper","674.00"),
					array("4","TC2761IND","Ball Suspension Joint- Lower","859.00"),
					array("5","TC2762IND","Stabilzer Link - Front - RH/LH","873.00"),
					array("6  Toyota Corolla","TA2960KIN","Tie Rod End","1180.00"),
					array("7","TA1935IND","Streering Ball Joint","898.00"),
					array("8","TC747IND","Suspension Ball Joint","729.00"),
					array("9","TC1455IND","Suspension Linkage","555.00"),
					array("10  Toyota Qualis","TA2970KIN","Tie Rod End","867.00"),
					array("11","TA2971KIN","Rack End/Steering Ball Joint- Inner Tie Rod","518.00"),
					array("12","TC2769IND","Ball Suspension Joint- Upper","635.00"),
					array("13","TC2770IND","Ball Suspension Joint- Lower","807.00"),
					array("14","TC2810KIN","Ball Suspension Joint - Full set","2811.00"),
					array("15","TA2972KIN","TRE + RE( Kit)","1805.00")
				);
			$mm=array(
					array("1  Mahindra Scorpio","TA2954KIN","Tie Rod End","883.00"),
					array("2","TC2755IND","Link Stabilizer Bar LH ( New Model )","445.00"),
					array("3","TC2756IND","Link Stabilizer Bar RH ( New Model )","444.00"),
					array("4","TC2757IND","Ball Suspension Joint- Lower","843.00"),
					array("5","TC2758IND","Ball Suspension Joint- Upper","561.00"),
					array("6","TC2759IND","Stabilizer Link Assy","438.00"),
					array("7","TC2777KIN","BSJ ( Full Set)","2901.00"),
					array("8  Mahindra Logan","TA2969KIN","TIE ROD END LH/RH","1100.00"),
					array("9","TA2992KIN","STEERING BALL JOINT LH/RH- Inner Tie Rod","1088.00"),
					array("10","TC2809KIN","SUSPENSION BALL JOINT LH/RH","772.00")
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
				<a href="./index.php"><span class="main-category">Home <span class="fa fa-caret-right"></span></span></a> Products <span class="fa fa-caret-right"></span> Steering and Suspension
 			</div>

			<div id="product-content">
				<div id="product-decp">
					<p id="product-title">Steering and Suspension</p>
						<div class="prd-decp">Suspension and Steering systems are basic but essential parts of your vehicle. Car suspension endures a lot of wear and tear - potholes and road humps take their toll over time and can easily damage the suspension and steering.<br><br>
						Car steering systems that are not correctly operational can become dangerous, making the car unroadworthy and illegal. It is always best to fit high quality car steering parts and car suspension parts.<br><br>
						We offer Steering and suspension parts for cars of every make & model, with a large range of steering racks & power steering essentials. 
					</div>
					<img src="./images/ss-logo.jpg" width="320" height="251"/>

					<div id="catalog">
						<p id="catalog-title">Catalog : </p>
						<div class="flip" id="flip1">Maruti Suzuki</div>
						<div class="panel" id="panel1">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<12;$i++)
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
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<25;$i++)
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
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<11;$i++)
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
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<15;$i++)
									{
										echo "<tr>"."<td>".$ty[$i][0]."</td>"."<td>".$ty[$i][1]."</td>"."<td>".$ty[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$ty[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip5">Mahindra & Mahindra</div>
						<div class="panel" id="panel5">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<10;$i++)
									{
										echo "<tr>"."<td>".$mm[$i][0]."</td>"."<td>".$mm[$i][1]."</td>"."<td>".$mm[$i][2]."</td>"."<td><span class='fa fa-rupee'></span> ".$mm[$i][3]."</td>"."</tr>";
									} 
								?>
							</table>
						</div>
						<div class="flip" id="flip6">Others</div>
						<div class="panel" id="panel6">
							<table border="0" align="center" cellpadding="5" cellspacing="0" width="700">
								<tr>
									<td>Sr. No.</td>
									<td>DPSS Part No.</td>
									<td>Product Description</td>
									<td>MRP</td>
								</tr>
								<?php
									error_reporting(0);
									for($i=0;$i<29;$i++)
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