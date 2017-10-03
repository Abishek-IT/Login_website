<?php

$db = mysqli_connect("localhost","root","","db_user");

$username =$_POST['username'];
$pw = $_POST['password'];
$password=$pw;$count=0;
for($i=0;strlen($pw)>$i;$i++){
	
	$password[$count]=$pw[$i];$count++;
$password[$count]='a';$count++;
}
	
	
$query = "INSERT INTO members(user_name,pass_word) VALUES('$username','$password')";

$result = mysqli_query($db,$query);



if($result == true){
		echo '<script type="text/javascript">'; 
echo 'alert("Registered successfully");'; 
 echo 'window.location = "index.html";';
 echo '</script>'; 


}else{
			echo '<script type="text/javascript">'; 

echo 'alert("Failed");'; 
 echo 'window.location = "register.html";';

 echo '</script>'; 

}


?>

