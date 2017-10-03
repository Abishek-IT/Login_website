<?php

$db = mysqli_connect("localhost","root","","db_user");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name = mysqli_real_escape_string($db,$_POST['username']);
	$pass = mysqli_real_escape_string($db,$_POST ['password']);
	
	
		$password=$pass;$count=0;
	for($i=0;strlen($pass)>$i;$i++){
	
	$password[$count]=$pass[$i];$count++;
	$password[$count]='a';$count++;
}
	
	$query = "SELECT pass_word FROM members WHERE user_name ='$name'";
	$result = mysqli_query($db,$query);

	$row=mysqli_fetch_row($result);
	
	


	
	if($row[0]==$password){echo '<script type="text/javascript">'; 
echo 'alert("Login successfull");'; 
 echo 'window.location = "index.html";';
 echo '</script>'; 
	}else{
		echo '<script type="text/javascript">'; 
echo 'alert("Login Failed");'; 
 echo 'window.location = "index.html";';
 echo '</script>'; 
	}
	
}




?>