
<?php 

// echo htmlspecialchars($_SERVER["PHP_SELF"]);

$username=$_POST['uid'];
$password=$_POST['uname'];

// building the configaration settings
$con= new mysqli("localhost","root","","register");

$result1=$con->connect_error;

if($result1){
    die("failed".$result1);
}

echo "connected!!!!!!!!!!";

$sql="INSERT INTO user VALUES ('$username', '$password')";

$result2=$con->query($sql);

if($result2){
    echo "added!!!!!!!!";
}else {
    echo "failed!!!!!!!!!".$con->error;
}

$con->close();

?>
