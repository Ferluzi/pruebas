<link rel="stylesheet" href="css/sweetalert.min.css">
<script src"js/sweetalert.min.js" type="text/javascript"></script>
<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$username=$r["username"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../ingreso.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["username"]=$username;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}

?>