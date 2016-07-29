<!DOCTYPE html>

<html>
<head>
<title>ACU Times | Search</title>
<meta charset="iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="layout/styles/mediaqueries.css" type="text/css" media="all">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
.AdvSearchBox {
	width: 100%;
	border: 1px solid #686868;
	border-radius: 6px;
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
	float: right;
	border-bottom-right-radius: 6px;
	border-top-right-radius: 6px;
}
.MyadvSearchButton {
	background-image: url(images/demo/setting.png);
	background-color: #ABABAB;
	width: 35px;
	height: 100%;
	background-repeat: no-repeat;
	cursor: pointer;
	background-position: center;
	color: #FFFFFF;
	border: none;
	float: right;
	font-size: 14px;
	color: black;
	border: 1px solid #686868;
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
	width: 80%;
	height: 100%;
	float: left;
	margin: 0;
	padding: 0 10px;
	border: none;
}
</style>
</head>
<body>
<?php include ("Header.html");?>
<!-- content -->

<div class="wrapper row3">
	<div id="container"> 
		
		<!-- ################################################################################################ -->
		<div class="pad">
			<form action="#" method="post">
				<fieldset>
					<div style="width:100%">
						<div style="height:35px; width:100% ;border:1px solid #686868;border-radius:6px; margin:0;">
							<div style="float:left">&nbsp; </div>
							<input type="text" value="Search Our Website&hellip;" class="MySearchBar">
							<input type="submit" id="Search" value="" class="MySearchButton" >
							<input type="button" id="AdvSearch" value="&#9660;" class="MyadvSearchButton" onClick="AdvSR()" >
						</div>
						<div class="clear"></div>
						<div id="AdvSearchBox" class="AdvSearchBox" >
							<div class="AdvSearchLine"><br>
								<label class="MyLable">Category:</label>
								<br>
							</div>
							<div class="AdvSearchLine">
								<select class="MyImput">
									<option>News</option>
									<option>Art</option>
									<option>Sport</option>
									<option>Interviews</option>
									<option>tech &amp; science</option>
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
							<div class="clear"><BR>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
			<div class="clear"><BR>
				<BR>
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