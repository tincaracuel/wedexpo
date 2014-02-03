
<html>
<head>
	<title>Themes and Motifs - Wedding Expo Philippines</title>
	<link rel="stylesheet" type="text/css" href="styles/css/index.css">
	
	<!--Lock navigation bar on top-->
	<script type="text/javascript" src="styles/jquery-1.8.3.js"></script>  
	<script>
		$(document).scroll(function(){
			if($(window).scrollTop() > 550){ //200 = height of the top section
				$("#navigation2duplicate").css("display", "inline");
				$("#navigation2").css("display", "none");
			}
			else {
				$("#navigation2").css("display", "inline");
				$("#navigation2duplicate").css("display", "none");
			}
		});
	</script>

	<!--Accordion-->
	<script src="js/jquery.ui.accordion.js"></script>
		<script>
		  $(function() {
			    $("#accordion" ).accordion({
			        collapsible: true,
			        autoHeight: false
			    });
			});
		  $(function() {
			    $(".accordion" ).accordion({
			        collapsible: true,
			        autoHeight: false
			    });
			});	
		  </script>
	
	<!--Animate hover-->
	<script type="text/javascript" src="styles/jquery.min.js"></script>  
	<script type="text/javascript" src="styles/jquery-ui.min.js"></script>
	<script type="text/javascript">                                         
		$(function() {
			$("a").hover(
				function() {
					$(this).animate({ color: "#ba779d" }, 'fast');
				},function() {
					$(this).animate({ color: "#555555" }, 'fast');
			});
			$("a.navi2").bind("click", function (event) {
		        event.preventDefault ? event.preventDefault() : event.returnValue = false;
		        var target = $(this).attr("href");
		        $("html, body").stop().animate({
		                scrollLeft: $(target).offset().left,
		                scrollTop: $(target).offset().top
		            }, 1200);

		    });
			$("a.navi3").bind("click", function (event) {
		        event.preventDefault ? event.preventDefault() : event.returnValue = false;
		        var target = $(this).attr("href");
		        $("html, body").stop().animate({
		                scrollLeft: $(target).offset().left,
		                scrollTop: $(target).offset().top
		            }, 1200);

		    });
			$("#majspon").click(function(){
				$("#media").fadeOut(00);
				$("#eventpartners").fadeOut(00);
				$("#major").fadeIn(2000);
			});
			$("#medpart").click(function(){
				$("#major").fadeOut(0);
				$("#eventpartners").fadeOut(0);
				$("#media").fadeIn(2000);
			});
			$("#evpart").click(function(){
				$("#media").fadeOut(0);
				$("#major").fadeOut(0);
				$("#eventpartners").fadeIn(2000);
			});
		});
	</script> 
	
</head>
<body>
	<div id ="container">
		<div id="main">
			<div id="header">
				<div id="logo"><img src="styles/images/logo.png" width="20%" style="margin-top:40px;"></div>
				<div id='logo2'><img src="styles/images/Samadhi-2.jpg" style="width: 100%;"></div>
				
				<div id="navigation2" class="wide clearfix uppercase sans">
				<ul class="ulNavi">
					<li><a href="#moreContents" id="home" class="navi2" style="color: #555555;">HOME</a></li>
					<li><a href="#eventHighlights" class="navi2">Event Highlights</a></li>
					<li><a href="#exhibitorsList" class="navi2">Exhibitors List</a></li>
					<!-- <li><a href="http://www.themesnmotifs.com/?page_id=47" target="_blank" class="navi100">Event Registration</a></li> -->
					<li><a href="registration.php" target="_blank" class="navi100">Event Registration</a></li>
					<li><a href="#faqs" class="navi2">FAQS</a></li>
					<li><a href="#contactUs" class="navi2">Contact Us</a></li>
					<li><a href="only.php" class="navi100">For Exhibitors Only</a></li>
				</ul>
				</div>
			</div>
		</div>
		
		<div id = "content">
			<div id="navigation2duplicate" class="wide clearfix uppercase sans ">
				<ul class="ulNavi">
					<li><a href="#moreContents" class="navi2" style="color: #555555;">HOME</a></li>
					<li><a href="#eventHighlights" class="navi2">Event Highlights</a></li>
					<li><a href="#exhibitorsList" class="navi2">Exhibitors List</a></li>
					<!-- <li><a href="http://www.themesnmotifs.com/?page_id=47" target="_blank" class="navi100">Event Registration</a></li> -->
					<li><a href="registration.php" target="_blank" class="navi100">Event Registration</a></li>
					<li><a href="#faqs" class="navi2">FAQS</a></li>
					<li><a href="#contactUs" class="navi2">Contact Us</a></li>
					<li><a href="only.php" class="navi100">For Exhibitors Only</a></li>
				</ul>
			</div>
			<div id="moreContents">
				<img width="80%" src="styles/images/weplogo.jpg" />
				<h1>Mabuhay and Welcome!</h1>
				<p id="paragraph">Welcome to the biggest, most comprehensive, and longest running gathering of wedding suppliers from all over the Philippines as they showcase the latest trends and newest styles in saying "I Do".  As the most awaited wedding fair in the country,  WEDDING EXPO PHILIPPINES is the grand event that the entire Philippine wedding industry gears up for. 
				Join us as WEDDING EXPO PHILIPPINES celebrates its milestone 23rd edition of being the grandest & most prestigious wedding fair in the country and the BIGGEST IN ASIA.</p>
				<hr width="300">
				<table id="wh">
				<tr><td id="wh"> When: </span>
					</td>
					<td> 8-9 March 2014
					</td>
				</tr>
				<tr><td id="wh"> Where: </span>
					</td>
					<td> Ground Floor, SMX Convention Center, SM Mall of Asia
					</td>
				</tr>
				</table>
			</div>

			<hr class="divider" />

			<div id="eventHighlights">
				<h1 style="text-align: center;">Event Highlights</h1>

				<table style="width: 90%; margin: 0 auto">
					<tr>
						<td style="text-align:center; text-indent: 0"><a href="#weddingBanquets" class="navi3"> Wedding Banquets Manila </a></td>
						<td style="text-align:center; text-indent: 0"><a href="#floralFete" class="navi3"> Floral Fete </a></td>
						<td style="text-align:center; text-indent: 0"><a href="#weddingFashion" class="navi3"> Wedding Fashion Extravaganza </a></td>
					</tr>

					<tr>
						<td style="text-align:center; text-indent: 0"><a href="#kasaLitrato" class="navi3"> KasaLitrato (Photo/Video Festivale) </a></td>
						<td style="text-align:center; text-indent: 0"><a href="#others" class="navi3"> Others </a></td>
						<td style="text-align:center; text-indent: 0"><a href="#sched" class="navi3"> Schedule of Activities </a></td>
					</tr>

					<tr id="weddingBanquets"></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>

					<tr>
						<td colspan="3">
							<img border="0" src="styles/images/pvp2.jpg" style="width: 100%; margin-left: -50px; margin-top: 20px"><br /><br />
							<p style="margin: 0 10px;">
								<b>Wedding Banquets Manila</b>.
								Wedding Expo Philippines - March 2014 celebrates the artistry of some of the finest food caterers in the Philippines. The fabulous 
								banquet set ups that simulate wedding day grandeur and the caterers' amiable staff on hand to assist soon-to-weds, make it a breeze to 
								choose the one that best suits their taste and budget.
							</p><br />
							<p style="margin: 10px;">
								Newcomers and veteran caterers alike outdo each other in offering nothing but the best deals and the most 
								elegant of set ups for Wedding Expo Philippines soon-to-weds.
							</p><br />
						</td>
					</tr>

					<tr id="floralFete"></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr>
						<td colspan="3">
							<img border="0" src="styles/images/eh2.png" style="width: 100%; margin-left: -50px"><br /><br />
							<p style="margin: 0 10px;">
								<b>Event Stylists Showcase. </b>
								Wedding Expo Philippines is known to be the grand display venue of the country's leading florists and event stylists. The breathtaking 
								floral showcase during the previous issues of Wedding Expo Philippines set the standards for floral and event styling in weddings in the country.
							</p><br />
							<p style="margin: 0 10px;">
								In <b>Floral Fete,</b> a Wedding Expo Philippines special feature and the country's first and only grand showcase of 
								wedding styling and floral styling, soon-to-wed couples will experience the fine, tasteful artistry of their favorite florists in 
								the well organized and elegant ambience that Wedding Expo Philippines is famous for. Its strong track record of success and 
								unique position as an elegant, well attended, and professionally managed fair.
							</p><br />
							<p style="margin: 0 auto; font-size: 12px; text-indent: 0; text-align: center">
								Photos taken from INSPIRATIONS for Weddings Magazine issue 2 featuring stylemeister Henry Pascual, WEPM14 official event stylist.
							</p><br />
						</td>
					</tr>

					<tr id="weddingFashion"></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr>
						<td colspan="3">
							<img border="0" src="styles/images/eh3.png" style="width: 100%; margin-left: -50px"><br /><br />
							<p style="margin: 0 10px;">
								<b>Wedding Fashion Extravaganza</b>.
								Fashion designers enjoy particular prominence in 
								Wedding Expo Philippines. There is a growing number of soon-to-weds 
								who actually book their couturiers on-site. This may be due to the 
								never-before seen gowns put in a dazzling array in catwalk style in 
								the middle of Wedding Expo Philippines main exhibit hall, the 
								special discounts for on-site bookings, or the tasteful set ups to 
								be expected only from top fashion designers. Whatever it is, 
								soon-to-weds and fashion designers find a lot of reasons to have a 
								mighty fine time in Wedding Expo Philippines.
							</p><br />
						</td>
					</tr>


					<tr id="kasaLitrato"></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr>
						<td colspan="3">
							<img border="0" src="styles/images/SS3.jpg" style="width: 100%; margin-left: -50px"><br /><br />
							<p style="margin: 0 10px;">
								<b>Cream of the Crop Photographers.</b> 
								Only the best and brightest togs make it to Wedding Expo 
								Philippines. Even among their ranks, photographers acknowledge the 
								prestige of being a part of Wedding Expo Philippines and look 
								forward to it as the launch venue of choice where they show their 
								state-of-the-art equipment and latest photographic techniques. Some 
								photographers join no other fair but Wedding Expo Philippines.
							</p><br />				
						</td>
					</tr>

					<tr id="others"></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr><td colspan="3"><br /></td></tr>
					<tr>
						<td colspan="3">
							<hr id='divider' />
							<div style="margin: 10px; padding: 0px;">
								Others:
								<ul>
									<li><p>Bridal Jewelry Showcase by <a href='http://www.goldenhillsjewelry.com/' style="font-weight: bold; display: inline">Goldenhills Jewelry</a>(Major Sponsor)</p></li>
									<li><p>Photo Exhibit of <a href='http://www.smarstshotstudio.com/' style="font-weight: bold; display: inline">Smart Shot Studio</a>(Major Sponsor)</p></li>
									<li><p>The widest variety of photo booths with FREE trial shots. Come early and avoid the line.</li>
									<li><p>The most dazzling display of wedding invitations in 
									different shapes, sizes, and styles.</li>
									<li><p>The biggest display of cakes and dessert buffets (<b style="margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline;">WARNING:</b>&nbsp; 
									Free product samples available&nbsp;&nbsp; ;-0)</li>
									<li><p>"I Do" HMU, a hair &amp; makeup festival for the bride. Enjoy FREE trial sessions with some of the country's 
									most sought after hair &amp; make up artists.</li>
									<li><p>New companies, new products, new services being introduced in Wedding Expo Philippines 24th Edition.</li>
									<li><p>Freebies, samples, and tons of the best, finest, latest, 
									brightest, smartest ideas!</li>
									<li><p>Distribution of FREE copies the latest issue of &nbsp;
									<span style="padding: 5px; background-color: rgb(255, 192, 203)">INSPIRATIONS for Wedding Magazine</span></li>
								</ul>
							</div>
						</td>
					</tr>

				</table>

				<hr id='divider' />

				<br /><br />

				<table style="width: 90%; margin: auto; border: 1px solid grey" id='sched'>
					<tr id="schedule"></tr>

					<tr>
						<td colspan="2" style="text-align: center"><h4>Schedule of Activities</h4></td>
					</tr>

					<tr>
						<td colspan="2"><p style="font-size: 20px; font-weight: bold">Saturday, 8 March 2014</p>
					</tr>

					<tr>
						<td>10 am</td>
						<td>Start On-site Registration</td>
					</tr>

					<tr>
						<td>11 am &mdash; 12pm</td>
						<td>Opening Ceremonies</td>
					</tr>

					<tr>
						<td>10 am &mdash; 8pm</td>
						<td>Tour of exhibit of special guests</td>
					</tr>

					<tr><td></td><td>Exhibit Proper &mdash; grand showcase of exhibitors' product/service portfolios</td></tr>
					<tr><td></td><td>Bridal Jewelry Showcase by <a href='http://www.goldenhillsjewelry.com/' style="display: inline; text-transform: none">Goldenhills Jewelry</a></td></tr>
					<tr><td></td><td>Photo exhibit of <a href='http://www.smarstshotstudio.com/' style="text-transform: none; display: inline">Smart Shot Studio</a></td></tr>
					<tr><td></td><td><a href='http://www.themesnmotifs.com/wep/WEPM13/hourlyraffle.html' style="text-transform: none; display: inline">Hourly Raffle Draws</a></td></tr>
					<tr><td></td><td><a href='http://www.themesnmotifs.com/wep/WEPM13/specials.html' style="text-transform: none; display: inline">Wedding Expo Specials</a> per participating exhibitor</td></tr>
					<tr><td></td><td>Distribution of FREE copy of <a href='http://www.themesnmotifs.com/?p=6964' style="text-transform: none; display: inline">Inspirations for Weddings Magazine</a></td></tr>
					<tr><td></td><td>Distribution of FREE loot bag by Themes &amp; Motifs</td></tr>
					<tr><td></td><td>Paris &amp; Diamonds Raffle Promo</td></tr>

					<tr>
						<td colspan="2"><p style="font-size: 20px; font-weight: bold">Sunday, 9 March 2014</p>
					</tr>

					<tr>
						<td>10 am</td>
						<td>Start On-site Registration</td>
					</tr>

					<tr><td></td><td>Exhibit Proper &mdash; grand showcase of exhibitors' product/service portfolios</td></tr>

					<tr>
						<td>11 am &mdash; 8pm</td>
						<td>Opening Ceremonies</td>
					</tr>

					<tr>
						<td>10 am &mdash; 8pm</td>
						<td>Tour of exhibit of special guests</td>
					</tr>

					<tr><td></td><td>Bridal Jewelry Showcase by <a href='http://www.goldenhillsjewelry.com/' style="display: inline; text-transform: none">Goldenhills Jewelry</a></td></tr>
					<tr><td></td><td>Photo exhibit of <a href='http://www.smarstshotstudio.com/' style="text-transform: none; display: inline">Smart Shot Studio</a></td></tr>
					<tr><td></td><td>Grand Food Tasting of <a href='http://www.richcolgweddings.com/' style="text-transform: none; display: inline">Richgold Weddings</a></td></tr>
					<tr><td></td><td><a href='http://www.themesnmotifs.com/wep/WEPM13/hourlyraffle.html' style="text-transform: none; display: inline">Hourly Raffle Draws</a></td></tr>
					<tr><td></td><td><a href='http://www.themesnmotifs.com/wep/WEPM13/specials.html' style="text-transform: none; display: inline">Wedding Expo Specials</a> per participating exhibitor</td></tr>
					<tr><td></td><td>Distribution of FREE copy of <a href='http://www.themesnmotifs.com/?p=6964' style="text-transform: none; display: inline">Inspirations for Weddings Magazine</a></td></tr>
					<tr><td></td><td>Distribution of FREE loot bag by Themes &amp; Motifs</td></tr>
					<tr><td></td><td>Honeymoon Trip Raffle Promo</td></tr>
					<tr><td></td><td>Limousine Showcase</td></tr>

					<tr>
						<td>8pm</td>
						<td>End of Wedding Expo Philippines &mdash; March 2014</td>
					</tr>
					
				</table>

				<p style="font-family: Open Sans; font-size: 15px; text-align: center">Photos courtesy of Lito Genilo of Smart Shot Studio and 
				from themesnmotifs.com collection.</p>

			</div> <!--end hightlights-->

	<!--
		<tr>
			<td colspan="2">
			<p style="text-indent: 0px; text-align: center"><b>Wedding Banquets Manila</b>&nbsp;&nbsp;&nbsp;
			<b>&nbsp;&nbsp;&nbsp;&nbsp; Floral Fete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Wedding Fashion Extravaganza&nbsp;&nbsp; </b><br /><b>KasaLitrato (Photo/Video Festivale)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			Schedule of Activities</b></p>
			<br /></td>
		</tr>
		<tr>
			<td colspan="2" >
			<img border="0" src="styles/images/pvp2.jpg" style="width: 100%; margin-left: -50px"><br /><br />
				<p style="margin: 0px;"><b>Wedding Banquets Manila</b>. 
			Wedding Expo Philippines - March 2014 celebrates the artistry of 
			some of the finest food caterers in the Philippines. The fabulous 
			banquet set ups that simulate wedding day grandeur and the caterers' 
			amiable staff on hand to assist soon-to-weds, make it a breeze to 
			choose the one that best suits their taste and budget. </p><br />
				<p style="margin: 0px;">Newcomers and veteran caterers alike outdo 
				each other in offering nothing but the best deals and the most 
				elegant of set ups for Wedding Expo Philippines soon-to-weds.
				</p>
				<br />
			</td>
		</tr>
		<tr >
			<td width="48%" rowspan="2"> 
			<img src="styles/images/pvp4.jpg" style="width: 100%; margin-left: -50px;"></td>
			<td width="50%">
			<img src="styles/images/pvp1.jpg" style="width: 100%; margin-left: -50px"></td>
		</tr>
		<tr>
			<td width="50%" style="margin-top: auto; margin-bottom: auto;">
			<p style="margin: 0 10px;"><b>Event Stylists Showcase. 
			</b>Wedding Expo Philippines is known to be the grand display venue of 
			the country's leading florists and event stylists. The breathtaking 
			floral showcase during the previous issues of Wedding Expo 
			Philippines set the standards for floral and event styling in 
			weddings in the country.</p>
			<p style="margin: 0 10px;">In
			<b>Floral Fete,</b> a Wedding Expo Philippines 
			special feature and the country's first and only grand showcase of 
			wedding styling and floral styling, soon-to-wed couples will 
			experience the fine, tasteful artistry of their favorite florists in 
			the well organized and elegant ambience that Wedding Expo 
			Philippines is famous for. Its strong track record of success and 
			unique position as an elegant, well attended, and professionally 
			managed fair.</p>
			<p style="margin: 10px; font-size: 10px;">
			Photos taken from INSPIRATIONS for Weddings Magazine issue 2 
			featuring stylemeister Henry Pascual, WEPM14 official event stylist.</p></td>
		</tr>
		<tr>
			<td width="48%" rowspan="2">
			<p align="center">
			<img border="0" src="styles/images/SS1.jpg" style="width: 100%; margin-left: -50px"></td>
			<td width="50%">
			<p style="text-align: justify; margin-left:10px; margin-right:10px">
			<img border="0" src="styles/images/SS2.jpg" style="width: 100%; margin-left: -50px"></p>
			</td>
		</tr>
		<tr>
			<td width="50%">
			<table width="100%">
				<tr>
					<td>
					<p style="margin: 0 10px;"><b>Wedding Fashion 
			Extravaganza.</b> Fashion designers enjoy particular prominence in 
			Wedding Expo Philippines. There is a growing number of soon-to-weds 
			who actually book their couturiers on-site. This may be due to the 
			never-before seen gowns put in a dazzling array in catwalk style in 
			the middle of Wedding Expo Philippines main exhibit hall, the 
			special discounts for on-site bookings, or the tasteful set ups to 
			be expected only from top fashion designers. Whatever it is, 
			soon-to-weds and fashion designers find a lot of reasons to have a 
			mighty fine time in Wedding Expo Philippines.</p></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			
			<img src="styles/images/SS3.jpg" style="margin-left: -50px; width: 100%">
			<p style="margin: 10px;">
			<b>Cream of the Crop Photographers.</b> 
			Only the best and brightest togs make it to Wedding Expo 
			Philippines. Even among their ranks, photographers acknowledge the 
			prestige of being a part of Wedding Expo Philippines and look 
			forward to it as the launch venue of choice where they show their 
			state-of-the-art equipment and latest photographic techniques. Some 
			photographers join no other fair but Wedding Expo Philippines.</p></td>
		</tr>
		-->
		
			<hr class="divider"/>

			<div id="exhibitorsList">
				<br /><br /><br />
				<h1>Exhibitors List</h1>
				<?php
					$link = mysql_connect('localhost', 'root', '')or die('Could not connect: ' . mysql_error());
					mysql_select_db('wedexpo') or die('Could not select database');
				
			        $query = "SELECT * FROM exhibitor";
					$result = mysql_query($query) or die('Query failed: ' . mysql_error());
									
					print("<table>");
					
					while($row=mysql_fetch_array($result)){

						echo("<tr>
								<td colspan='2' id='exhibitorsListbusname'><span id='icon'> > </span>$row[1]</td>
							</tr> ");

						if($row[2]!='')
							echo("<tr>
									<td>Supplier Category: </td>
									<td>$row[2]</td>
								</tr>");

						if($row[3]!='')
							echo("<tr>
									<td>Contact Person: </td>
									<td>$row[3]</td>
								</tr>");

						if($row[4]!='')
							echo("<tr>
									<td>Phone Number: </td>
									<td>$row[4]</td>
								</tr>");

						if($row[5]!='')
							echo("<tr>
									<td>Mobile Phone: </td>
									<td>$row[5]</td>
								</tr>");

						if($row[7]!='')
							echo("<tr>
									<td>Email: </td>
									<td>$row[7]</td>
								</tr>");
						
						if($row[6]!='')
							echo("<tr>
									<td>Website: </td>
									<td>$row[6]</td>
								</tr>");

						echo("<tr>
								<td><br /></td>	
								</tr>");
					}
					print("</table><br /><br />");
				?>
				
			</div><!--end exhibitors list-->

			<hr class="divider" />

			<div id="faqs">
				<h1>Frequently Asked Questions (FAQs)</h1>
				<div id="accordion">

				<h4>What makes Wedding Expo Philippines different from other fairs? Aside from being the benchmark of most other local wedding fairs, Wedding Expo Philippines is unique because of a variety of reasons:</h4>
				<h5>
					<p>Wedding Expo Philippines is the biggest and most comprehensive among local wedding fairs. Biggest because it has no less than 400 of the country's wedding suppliers and most comprehensive because it provides representation of all the wedding essentials you will need in planning your wedding. It covers 6,000 sqm of exhibit space.  After all, this is Asia's biggest & most prestigious wedding fair.</p>
					<p>Most sought after and most respected by local wedding industry professionals. The track record of Wedding Expo Philippines demands a high level of professionalism among its exhibitors thereby assuring soon-to-wed couples of above par business ethics from its participants in a well organized and worthwhile event.</p>
					<p>Launch venue of choice of wedding suppliers. Products, services, and even new companies get their official public introduction in Wedding Expo Philippines.</p>
					<p>Couples book in Wedding Expo Philippines. Traditionally, soon-to-weds would scout around for ideas and even visit other fairs before they finalize and book their choices at the Wedding Expo Philippines. Not only do they want to avail of the exclusive Wedding Expo Specials (i.e. special promos, discounts, deals, etc. that are available only in Wedding Expo Philippines) but because of the fun and special feeling of enjoyment they have while at the Wedding Expo.</p>
				</h5>

				<h4>Who exhibits at Wedding Expo Philippines? </h4>
				<h5>
					<p>Only legitimate and reliable wedding suppliers exhibit at Wedding Expo Philippines. Veteran suppliers are acknowledged leaders in their fields while the new ones are background checked for legitimacy to help ensure the integrity of the fair.</p>
				</h5>

				<h4>Is there an entrance fee? </h4>
				<h5>
					<p>Admission is FREE to those who pre-register online.  Walk-ins pay a P100.00 entrance fee.  You may also get FREE passes from Themes &amp; Motifs – Makati Shangri-la (+632 818.9794 / +632 613.2368) &amp;	selected exhibitors of Wedding Expo Philippines.</p>
				</h5>

				<h4>Will I get a confirmation email when I pre-register for FREE Admission? </h4>
				<h5>
					<p>When you pre-register, you automatically create your T&amp;M wedding website where you can download &amp; print out your customized event pass at your convenience.</p>
				</h5>

				<h4>Can I use the same ID I used on the first day if I visit on the 2nd day? </h4>
				<h5>
					<p>Yes. Just wear the same ID given to you on the first day of the event and go straight to the exhibit area to revisit your favorite wedding suppliers.</p>
				</h5>

				<h4>Can I bring my friends and parents? </h4>
				<h5>
					<p>Sure. We encourage you to bring your family and friends to make your experience in Wedding Expo Philippines truly memorable and your decision-making expedient. Your may either ask them to pre-register online or get FREE passes from Themes &amp; Motifs Makati Shangri-la or participating exhibitors of Wedding Expo Philippines.</p>
				</h5>

				<h4>I'm soon-to-wed, can I also bring along my friends?</h4>
				<h5>
					<p>Guests, family, and friends of soon-to-weds may get free entrance  for so long as they pre-register. Otherwise, non-pre-registrants pay a P100.00 entrance fee. You may also get FREE passes from Themes &amp; Motifs &dash; Makati Shangri-la (+632 818.9794 / +632 613.2368) &amp; selected exhibitors of Wedding Expo Philippines.</p>
				</h5>

				<h4>What can we see in Wedding Expo Philippines? </h4>
				<h5>
					<p>Aside from photographers, videographers, photo booths, fashion designers, florists, caterers, reception venues, hotels, honeymoon destinations, cakes, invitation makers/stationers, souvenir/giveaways manufacturers, etc. you will get IDEAS, IDEAS, and more IDEAS. Great deals, special discounts, exclusive promos, freebies, etc. await you.</p>
				</h5>

				<h4>What pioneering efforts have been done by Wedding Expo Philippines?</h4>
				<h5>
					<p> Wedding Expo introduced a lot of FIRSTS in the conduct of wedding fairs in the country. Among them:</p>

					<ul style="">
						<li>Computerized online and on-site registration system</li>
						<li>It's very own URL</li>
						<li>Supplier Category Zoning and quota system</li>
						<li>Color coded ID system that distinguishes the couples from the non-couples</li>
						<li>It's very own commercial jingle (by internationally renowned singer-songwriter Trina Belamide)</li>
						<li>The first Grand Food Tasting Session</li>
						<li>A loot bag for every couple!</li>
					</ul>
				</h5>
				<br />
				</div>

			</div> <!--end faqs-->

			<hr class="divider" />

			<div id="contactUs">
				<h1>Contact Us</h1>
				<p>Only Wedding Expo Philippines by Themes & Motifs can give you</p>

				<ul style="font-weight: bold;">
					<li>6,000 sqm wedding wonderland...</li>
					<li>1,001 fine wedding ideas...</li>
					<li>400 plus top wedding suppliers...</li>
					<li>ONE AWESOME EVENT!</li>
				</ul>

				<br /><br />

				<table>
					<tr>
						<td>
							<h4>Showroom</h4>
							<p>Retail Arcade & Lifestyle Center</p>
							<p>Unit 126 G/F Makati Shangri-la</p>
							<p>Rizal Drive cor. Ayala Ave.</p>
							<p><small>(Along Ayala Ave. beside 6750 fronting The Peninsula Manila)</small></p>
							<br />
						</td>

						<td>
							<h4>Quezon City Head Office</h4>
							<p>Telephone:	(632) 371-9783; (632) 409.2555; (632) 413.7892</p>
							<p>Telefax No:	(632) 410.0032</p>
							Email Address: <a href='mailto:info@themesnmotifs.com'> info@themesnmotifs.com </a>
							Website URL: <a href='www.themesnmotifs.com'>www.themesnmotifs.com</a>
						</td>
					</tr>
				</table>
			</div> <!--end contact us-->

		</div>

		<footer role="contentinfo">
			<div id = "footer">
				<table id='tablefooter' width="100%" style=" margin: 0 auto;">
				<tr>
				<td>
				<div id="follow" class="wide clearfix uppercase sans " style="	background-color: #EBF7F4;">
					<span style="">Follow us on</span>
					<ul>
						<li><a href="index.php" class="navi3"><img src="styles/images/buttons/facebook.png" style="background-color: transparent;"/></a></li>
						<li><a href="index.php" class="navi3"><img src="styles/images/buttons/twitter.png" style="background-color: transparent;"/></a></li>
						<li><a href="index.php" class="navi3"><img src="styles/images/buttons/flickr.png" style="background-color: transparent;"/></a></li>
					</ul>
					
				</div>
				</td></tr>
				<tr>
				<td style="width:100%; height: auto; overflow: hidden; margin: 0 auto; background-color: white;">
				<div id="footercontent">
					<div id="sponsors">
					</div>
					<div id="spons">
						<table id="sponh">
							<tr>
							<td><span id="majspon" value="major"><h4>Major Sponsors</h4></span></td>
							
							<td><span id="medpart" value="media"><h4>Media Partners</h4></span></td>
							
							<td><span id="evpart" value="eventpartners"><h4>Event Partners</h4></span></td>
							
						</table><br />
						<table id="major" style="">
							<!-- <tr>
							<td><img src="styles/images/spons/major_all.png" style="width: 100%"/>
							</td> 
							</tr>-->
							<tr>
							<!-- <td style="width: 20%"><img src="styles/images/spons/spon1.png" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon2.jpg" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon3.gif" style="width: 90%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/spon4.gif" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon5.gif" style="width: 90%"/></td>
							</tr>
						</table>
						<table id="media" style="display:none;">
							<!-- <tr>
							<td><img src="styles/images/spons/media_all.png" style="width: 100%"/>
							</td> -->
							<tr>
							<!-- <td style="width: 20%"><img src="styles/images/spons/media1.gif" style="width: 100%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/media2.gif" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/media3.gif" style="width: 90%"/></td>
							<!-- <td style="width: 20%"><img src="styles/images/spons/media4.gif" style="width: 90%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/media5.gif" style="width: 90%"/></td>
							</tr>
						</table>
						<table id="eventpartners" style="display:none;">
							<!-- <tr>
							<td><img src="styles/images/spons/event_all.png" style="width: 100%"/>
							</td> -->
							<tr>
							<td style="width: 20%"><img src="styles/images/spons/event1.gif" style="width: 90%"/></td>
							<!-- <td style="width: 20%"><img src="styles/images/spons/event2.jpg" style="width: 90%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/event3.jpg" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/event4.png" style="width: 90%"/></td>
							<!-- <td style="width: 20%"><img src="styles/images/spons/event5.gif" style="width: 90%"/></td> -->
							</tr>
						</table>
					</div>
				</div>
				<td>
				</tr>
				</table>
				
			</div>
		</footer>
	</div>
	
	
	
</body>
</html>