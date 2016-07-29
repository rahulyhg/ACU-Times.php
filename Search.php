<!DOCTYPE html>

<html>
<head>
<title>ACU Times | Search</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="layout/styles/mediaqueries.css" type="text/css" media="all">
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
.AdvSearchBox {
	width: 100%;
	border: 1px solid #686868;
	border-top: none;
	border-bottom-left-radius:4px;
	border-bottom-right-radius:4px;
	box-shadow: 3px 3px 10px #999999;
}
.AdvSearchLine {
	padding: 10px;
	clear: both;
	width: 100%;
}
.MySearchButton {
	background-image: url(images/demo/search.png);
	background-color: #FF8238;
	width: 45px;
	height: 100%;
	background-repeat: no-repeat;
	cursor: pointer;
	background-position: center;
	color: #FFFFFF;
	border: none;
	position: absolute;
	border-bottom-right-radius: 3px;
	border-top-right-radius: 3px;
	top: 0px;
	right: 0px;
}
.MyadvSearchButton {
	background-image: url(images/demo/setting.png);
	background-color: inherit;
	width: 35px;
	height: 100%;
	background-repeat: no-repeat;
	cursor: pointer;
	background-position: center;
	border: none;
	position: absolute;
	font-size: 14px;
	color: black;
	top: 0px;
	right: 45px;
}
.MyLable {
	padding: 4px;
}
.MyImput {
	width: 85%;
	padding: 4px;
	margin: 1px;
	float: left;
	border-radius: 3px;
}
.MySearchBar {
	width: 90%;
	height: 100%;
	position:absolute;
	margin: 0;
	padding: 0 10px;
	border: none;
	background-color:transparent;
}
#SNAV { display:none; }
</style>
</head>
<body>
<?php include ("Header.php");?>
<!-- content -->

<div class="wrapper row3">
	<div id="container"> 
		
		<!-- ################################################################################################ -->
	
		<div class="pad">
			<form action="Search.php" method="get">
				<fieldset>
					<div style="width:100%">
						<div style="height:35px; width:100% ;border:1px solid #686868;border-radius:3px; margin:0; position:relative;">
							<input id="advSearch" name="advSearch" type="text" value="Search Our Website&hellip;" class="MySearchBar" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
							<input type="submit" value="" class="MySearchButton" >
							<input type="button" value="&#9660;" class="MyadvSearchButton" onClick="AdvSR()" >
						</div>
						<div class="clear"></div>
						<div id="AdvSearchBox" class="AdvSearchBox" >
							<div class="AdvSearchLine"><br>
								<label class="MyLable" style="border-color:#686868;">Category:</label>
								<br>
							</div>
							<div class="AdvSearchLine">
								<select id="advCategory" name="advCategory" class="MyImput">
									<option selected>All</option>
									<optgroup label="News">
									<option>World News</option>
									<option>ACU College News</option>
									</optgroup>
									<optgroup label="Art">
									<option>Cinema</option>
									<option>Drama</option>
									<option>Theater</option>
									</optgroup>
									<optgroup label="Sport">
									<option>Local Footaball</option>
									<option>International Football</option>
									<option>Other</option>
									</optgroup>
									<option>Interviews</option>
									<option>Tech &amp; Science</option>
									<option>Economy</option>
									<option>Multimedia</option>
									<option>Gallery</option>
								</select>
								<br>
							</div>
							<div class="AdvSearchLine"><br>
								<label class="MyLable">Author :</label>
								<br>
							</div>
							<div class="AdvSearchLine">
								<input type="text" value="" class="MyImput">
							</div>
							<div class="clear"><br>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
			<div class="clear"><br>
				<br>
			</div>
		</div>
		
		<!-- ################################################################################################ --> 
		<!-- content body -->
		
		<section id="portfolio" class="clear">
			<ul>
				<li class="first">
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li>
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li class="first">
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li>
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li class="first">
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li>
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li class="first">
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
				<li>
					<article>
						<figure><img src="images/demo/440x190.gif" alt="">
							<figcaption>
								<header>Metridiculis conseque quis</header>
								<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
								<footer><a href="#">Read more &raquo;</a></footer>
							</figcaption>
						</figure>
					</article>
				</li>
			</ul>
		</section>
		<!-- ####################################################################################################### --> 
		<!-- ####################################################################################################### -->
		<div class="pagination">
			<ul>
				<li class="prev"><a href="#">&laquo; Previous</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li class="splitter"><strong>&hellip;</strong></li>
				<li><a href="#">6</a></li>
				<li class="current"><strong>7</strong></li>
				<li><a href="#">8</a></li>
				<li class="splitter"><strong>&hellip;</strong></li>
				<li><a href="#">14</a></li>
				<li><a href="#">15</a></li>
				<li class="next"><a href="#">Next &raquo;</a></li>
			</ul>
		</div>
		<!-- / content body --> 
		<!-- ################################################################################################ -->
		<div class="clear"></div>
	</div>
	<!-- ################################################################################################ --> 
</div>
</div>
<?php include ("Footer.html");?>
<script type="text/javascript">
	document.getElementById("AdvSearchBox").style.display="none";
	function AdvSR( ) 
	{
		if(document.getElementById("AdvSearchBox").style.display == "none")
		{
			document.getElementById("AdvSearchBox").style.display = "block";
		}
		else
		{
			document.getElementById("AdvSearchBox").style.display = "none";
		}
	}
</script>
</body>
</html>