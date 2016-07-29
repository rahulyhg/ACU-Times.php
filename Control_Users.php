<?php
//########################################################################################## Validate ##########################################################################################
//=========================================Name=========================================
 function valName($Check) {
	$pattern = '/^[A-Za-z\s]+$/';
	return preg_match($pattern, $Check);
}
//=========================================ID=========================================
 function valID($Check) {
	$pattern = '/^\d+$/';
	return preg_match($pattern, $Check);
}
//=========================================Email=========================================
 function valEmail($Check) {
	$pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	return preg_match($pattern, $Check);
}
//=========================================Password=========================================
 function valPassword($Check) {
	$pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/';
	return preg_match($pattern, $Check);
}
//=========================================RePassword=========================================
 function valRePassword($Check , $PW) {
	return $Check===$PW;
}
//=========================================PhoneNo=========================================
 function valPhoneNo($Check) {
	$pattern = '/^\d+$/';
	return preg_match($pattern, $Check)||$Check="";
}
//=========================================Gender=========================================
//=========================================BrithDay=========================================
function valBirthday ( $Month , $Year , $Day) {
	$DaysInEatchMonth = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if (((int)$Year % 4 === 0) && ((int)$Year % 100 !== 0) || ((int)$Year % 400 === 0))
		$DaysInEatchMonth[2]=29;
	return ((int)$Day<=$DaysInEatchMonth[(int)$Month]);
}
//########################################################################################## MangeUsers ##########################################################################################
$Order = array("ID", "Password", "name", "email", "PhoneNo", "Gender", "BirthdayDay", "BirthdayMonth", "BirthdayYear", "RegisterDay", "RegisterMonth", "RegisterYear", "Photo", "About");
$OrderSize = 14;
$Seperator = "~#*$%#";
$FileLoc = "Data\Users\UsersList.txt";
//=========================================appendUser=========================================
function appendUser($User) {
		$file = fopen($FileLoc, "a+") or die("Unable to open file!");
		fwrite($file, UserToString($User));
		fclose($file);
	}
//=========================================ArrToUser=========================================	
function ArrToUser($arr) {
	$user;
	for ($i = 0; $i < $OrderSize; $i++) {
		if(isset($arr[$i])){
			$User[$Order[$i]] = $arr[$i];
		}
	}
	return $user;
	}
//=========================================UserToString=========================================
function UserToString($User) {
		$txt = "";
		for ($i = 0; $i < $OrderSize; $i++) {
			$txt .= $User[$Order[$i]].$Seperator;
		}
		return $txt ."\r\n";
	}
//=========================================LoadUser=========================================
function LoadUser($ID) {
	$file = fopen($FileLoc, "a+") or die("Unable to open file!");
	while ((!feof($file))) {
		$arr = explode("~#*$%#", fgets($file));
		if ($arr[0] == $ID) {
			fclose($file);
			return getUser($arr);
		}
	}
	fclose($file);
	return false;
}
//=========================================UpdateRecord=========================================
	function UpdateRecord($Newrecord,$OldRecord)
{
	$file = fopen($FileLoc, "a+") or die("Unable to open file!");
	$contents = file_get_contents($file);
	$contents = str_replace($OldRecord,$Newrecord, $contents);
	file_put_contents($file, $contents);
}
?>