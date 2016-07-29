<?php 
require_once ("ControlUsers.php");
require_once ("ControlSession.php");
Check_Login();
Check_Admin();
$user = $_SESSION['user'];

if(Null===@$_GET["Search"]||""===@$_GET["Search"]){
	$userArr = LoadAllUser();
}
else{
	$userArr= SearchAllUser($_GET["Search"]);
}
	

function printUser( $ID , $name , $ImgPath , $Status ){
	 if(!isset($ImgPath) || $ImgPath==""|| $ImgPath==" "){
	 	$ImgPath = "images/User.png";
	 }
	 $MakeAdmin = "";
	 if($Status!="A"){
	 	$MakeAdmin = "<a class='btn btn-primary' href='Redir_MakeAdminUser.php?ID={$ID}'>Make Admin</i></a>";
	 }
	return
	"	<hr>
	<div class='row'>
		<div class='col-md-2 text-center'><a href='Profile.php?ID={$ID}'><img src='{$ImgPath}' style='height:90px; width:90px;' class='avatar img-circle' alt='avatar'></a></div>
		<div class='col-md-10'>
			<h4 class='col-xs-2 text-right'>Name:</h4>
			<h4 class='col-xs-10'>{$name}</h4>
			<h4 class='col-xs-2 text-right'>ID:</h4>
			<h4 class='col-xs-10'>{$ID}</h4>
			<div class='btn-group  pull-right'>
				{$MakeAdmin}
				<a class='btn btn-primary' href='Redir_DeleteUser.php?ID={$ID}'><i class='fa fa-trash-o'></i></i></a>
				<a class='btn btn-primary' href='MangeUsers_ChangePW.php?ID={$ID}'><i class='fa fa-key'></i></a> 
			</div>
		</div>
	</div>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ACU Times | Title</title>
<?php require_once("Header.php");?>
</head>
<body>
<?php include ("Navbar.php");?>
<div class="container"> 
	<!-------------------------------- Search -------------------------------->
	<div class="col-md-6 col-md-offset-3">
		<form action="MangeUsers.php" method="get">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for..." id="Search" name="Search">
				<span class="input-group-btn">
				<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</span> </div>
		</form>
	</div>
	<!-------------------------------- content -------------------------------->
	<div class="clearfix"></div>
<?php 
foreach ($userArr as &$user){
	if(isset($user["ID"])&&$user["ID"]!=""&&$user["ID"]!=" "&&$user["ID"]!=$_SESSION['user']['ID']){
		echo printUser( $user["ID"],$user["name"] , $user["Photo"] , $user["Status"]  ); 
	}
}
?>
	<hr>
	<!-------------------------------- pagination -------------------------------->
	<div class="text-center center-block">
		<ul class = "pagination">
			<li><a href = "#">&laquo;</a></li>
			<li><a href = "?Page=1">1</a></li>
			<li><a href = "#">&raquo;</a></li>
		</ul>
	</div>
</div>
<?php include ("Footer.php");?>
</body>
</html>