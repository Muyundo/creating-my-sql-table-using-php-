<?php
//attempt mysqlserver connecton. If you dont have a password, use blank in the password section. my password is Brian1234, and my database name is "brian"
$link = mysqli_connect("localhost", "root", "Brian1234", "brian");
//check connection
if($link === false){
	die ("Error: Could not connect."
		.mysqli_connect_error());
}
//attempting to create table query execution
$sql = "CREATE TABLE persons(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, first_name VARCHAR(20) NOT NULL, last_name VARCHAR(20) NOT NULL, email VARCHAR(70) NOT NULL UNIQUE)";
if(mysqli_query($link, $sql)){
	echo "Table created successfully";
}else{
	echo "Error: could not be able to execute the sql."
	.mysqli_error($link);
}
//close connection
mysqli_close($link);

?>