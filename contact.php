<!DOCTYPE HTML>
<html>
	<head>
		<title>UberDonation</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />	
		<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>		
		<script src="js/skel.min.js">
		{
			prefix: 'css/style',
			preloadStyleSheets: true,
			resetCSS: true,
			boxModel: 'border',
			grid: { gutters: 30 },
			breakpoints: {
				wide: { range: '1200-', containers: 1140, grid: { gutters: 50 } },
				narrow: { range: '481-1199', containers: 960 },
				mobile: { range: '-480', containers: 'fluid', lockViewport: true, grid: { collapse: true } }
			}
		}
		</script>
		<script>
			$(function() {

				// Note: make sure you call dropotron on the top level <ul>
				$('#main-nav > ul').dropotron({ 
					offsetY: -10 // Nudge up submenus by 10px to account for padding
				});

			});
		</script>
		<script>
			// DOM ready
			$(function() {
    
			// Create the dropdown base
			$("<select />").appendTo("nav");
   
			// Create default option "Go to..."
			$("<option />", {
				"selected": "selected",
				"value"   : "",
				"text"    : "Menu"
			}).appendTo("nav select");
   
			// Populate dropdown with menu items
			$("nav a").each(function() {
			var el = $(this);
			$("<option />", {
				"value"   : el.attr("href"),
				"text"    : el.text()
			}).appendTo("nav select");
			});
   
			// To make dropdown actually work
			// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
			$("nav select").change(function() {
				window.location = $(this).find("option:selected").val();
			});
  
			});
		</script>	
	</head>
	<body>
		<div id="header_container">		
		    <div class="container">
			 <div mapid="height: 180px;"></div>
			<!-- Header -->
				<div id="header" class="row">
					<div class="4u">
						<div class="wrapper">
							<h1><a href="index.html">Uber<span class="header_colour">Donation Program</span></a></h1>
							<h2>Give them a ride with one Click</h2>
					    </div>
					</div>
					
					<nav id="main-nav" class="8u">
						<ul>
							<li><a href="index.html">Home</a></li>
							<!--<li><a href="examples.html">Examples</a></li>
							<li><a href="apage.html">A Page</a></li>
							<li><a href="anotherpage.html">Another Page</a></li>-->							
							<li>
								<a href="#">Helpful links</a>			
									<ul>
										<li>
											<a href="">More information</a>
												<ul>
													<a href="http://time.com/money/4410746/uber-rides/">Number of Uber rides to date</a>
												</ul>
										</li>
										<li><a href="index1.html">Donations</a></li>
										<!--<li><a href="#">Drop Down 3</a></li>-->
									</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>	
			
		    <div class="container">						
				<div class="12u">
					<div id="wrapper-banner">						
						<!-- Banner -->								
						<div id="banner">
							<a href="index1.html"><img src="images/banner.jpg" alt="banner image" /></a>
						</div>	
					</div>
				</div>						
			</div>
			
        </div>		

		<div id="site_content">
			<div class="container">			
			
				<!-- Features -->			
				<div class="row">									
					
					<section class="4u">
						<div id="sidebar">
							<section class="12u">
								<h3>Subscribe Now</h3>
								<ul>
									<li><a href="https://itunes.apple.com/us/app/uber/id368677368?mt=8">Click here to subscribe</a></li>
								</ul>
								<h4>Sponsor a ride for the homeless</h4>
								<h4>Get a Chance to Win Free Rides</h4>
							</section>
							<section class="12u">
								<h3>Get Uber</h3>
								<ul>
									<li><a href="https://itunes.apple.com/us/app/uber/id368677368?mt=8">Download Uber for IOS</a></li>
									<li><a href="https://play.google.com/store/apps/details?id=com.ubercab&hl=en">Download Uber for Android</a></li>
								</ul>
							</section>
							<section class="12u">
								<h3>Hewlett Packard Enterprise</h3>
								<ul>
									<li><a href="https://www.hpe.com/us/en/home.html">Visit Hewlett Packard Enterprise</a></li>
								</ul>
							</section>
						</div>
					</section>

					<section class="8u">				
						
						<h1>Contact Us</h1>
						<p>For more information or clarification, please email us at: <a href="http://hackertyper.net/">donateuber@gmail.com</a></p>						
					</section>	
					
					<section class="8u">  
						<h2>OR</h2>
                        <h1>Please fill out the form below</h1>
                        <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
return true; }
</script>
<table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>
<label for="Name">Name*:</label>
</td> <td>
<input name="Name" type="text" maxlength="60" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="PhoneNumber">Phone number:</label>
</td> <td>
<input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="FromEmailAddress">Email address*:</label>
</td> <td>
<input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
</td> </tr> <tr> <td>
<label for="Comments">Comments*:</label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
</td> </tr> <tr> <td>
* - required fields
</td> <td>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<input name="skip_Submit" type="submit" value="Submit" />
<script src="https://www.100forms.com/js/FORMKEY:5WK6R28NUGAR/SEND:shash14@vt.edu" type="text/javascript"></script>
</td> </tr>
</table>
</form>
                    </section>                  
				</div>
			</div>
        </div>		
		
		<div class="container">					
			<!-- Footer -->
				<footer>
					<p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
					<!--<p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="apage.html">A Page</a> | <a href="anotherpage.html">Another Page</a> | <a href="contact.php">Contact Us</a></p>-->
					<!--<p>Copyright &copy; CSS3_water | <a href="http://skeljs.org/">skel.js</a> | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>-->
				</footer>		
		</div>		
			
	</body>
</html>
