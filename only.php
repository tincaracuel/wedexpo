
<html>
<head>
	<title>Themes and Motifs - Wedding Expo Philippines</title>
	<link rel="stylesheet" type="text/css" href="styles/css/index.css">
	<link rel="stylesheet" type="text/css" href="styles/css/only.css">

	
	<!--Lock navigation bar on top-->
	<script type="text/javascript" src="styles/jquery-1.8.3.js"></script>  
	
	<!--Animate hover-->
	<script type="text/javascript" src="jquery.min.js"></script>  
	<script type="text/javascript" src="jquery-ui.min.js"></script> 
	<script type="text/javascript">                                         
		$(function() {
			$("a").hover(
				function() {
					$(this).animate({ color: "#ba779d" }, 'fast');
				},function() {
					$(this).animate({ color: "#555555" }, 'fast');
			});
			$("a.navi2").bind("click", function (event) {
		        var target = $(this).attr("href");
		        $("html, body").stop().animate({
		                scrollLeft: $(target).offset().left,
		                scrollTop: $(target).offset().top
		            }, 1200);

		    });
			$("#majspon").click(function(){
				$("#media").hide(1000);
				$("#eventpartners").hide(1000);
				$("#major").show(2000);
			});
			$("#medpart").click(function(){
				$("#major").hide(1000);
				$("#eventpartners").hide(1000);
				$("#media").show(2000);
			});
			$("#evpart").click(function(){
				$("#media").hide(1000);
				$("#major").hide(1000);
				$("#eventpartners").show(2000);
			});
		});
	</script>  
</head>
<body>

	<div id ="container">
		 <div id = "main">
			<div id="navigation2duplicate" class="wide clearfix uppercase sans " style="z-index:1">
				<ul class="ulNavi">
					<li><a href="index.php#moreContents" class="navi2" style="color: #555555;">HOME</a></li>
					<li><a href="index.php#eventHighlights" class="navi2">Event Highlights</a></li>
					<li><a href="index.php#exhibitorsList" class="navi2">Exhibitors List</a></li>
					<!-- <li><a href="http://www.themesnmotifs.com/?page_id=47" target="_blank" class="navi100">Event Registration</a></li> -->
					<li><a href="registration.php" target="_blank" class="navi100">Event Registration</a></li>
					<li><a href="index.php#faqs" class="navi2">FAQS</a></li>
					<li><a href="index.php#contactUs" class="navi2">Contact Us</a></li>
					<li><a href="only.php" class="navi100">For Exhibitors Only</a></li>
				</ul>
			</div>
			<div id = "header" style="background-color: green;">
				<div id ="logo"><img src="styles/images/logo.png" width="20%" style="margin-top:40px;"/>
					<img src="styles/images/wreath.png" style="margin-top:60px; height:250px; width:250px; float:right;margin-top: -10px;margin-right:20px; ">
				</div>
			</div>
				
		</div>

		<div id="moreContents">
		<br /><br /><br />
			<div id="exhibitorslogin" >

			<img src="styles/images/weplogo.jpg"/>
				<form method="post" action="">
				<table style='width: 300px; float: center; margin: 0 auto'>
				
					<tr><td>
					<input type="password" placeholder="PASSWORD" id='pw'/></td></tr>
					<tr><td><input type="submit" value="LOGIN" id='submitBtn'/></td></tr>
				
				</table>
				</form>
			</div>
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
							<tr>
							<!-- <td style="width: 20%"><img src="styles/images/spons/spon1.png" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon2.jpg" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon3.gif" style="width: 90%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/spon4.gif" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/spon5.gif" style="width: 90%"/></td>
							</tr>
						</table>
						<table id="media" style="display:none;">
							<tr>
							<!-- <td style="width: 20%"><img src="styles/images/spons/media1.gif" style="width: 100%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/media2.gif" style="width: 90%"/></td>
							<td style="width: 20%"><img src="styles/images/spons/media3.gif" style="width: 90%"/></td>
							<!-- <td style="width: 20%"><img src="styles/images/spons/media4.gif" style="width: 90%"/></td> -->
							<td style="width: 20%"><img src="styles/images/spons/media5.gif" style="width: 90%"/></td>
							</tr>
						</table>
						<table id="eventpartners" style="display:none;">
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