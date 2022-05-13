<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>PHP examples</h1>

    <form method="POST" action="add_users.php?attempt">

        <label>ID</label>
        <input type="text" name="uid" />
        <br/>

        <label> User name:</label>
        <input type="text" name="uname" />
        <br />

        <input value="login" type="submit" />
    </form>

    <br/>
    <form method="POST" action="delete_users.php?attempt">

        <label>ID</label>
        <input type="text" name="uid" />
        <br/>

        <label> User name:</label>
        <input type="text" name="uname" />
        <br />

        <input value="delete" type="submit" />
    </form>

    <br/>
    <form method="POST" action="update_users.php?attempt">

        <label>ID</label>
        <input type="text" name="uid" />
        <br/>

        <label> User name:</label>
        <input type="text" name="uname" />
        <br />

        <input value="update" type="submit" />
    </form>
    <br/>
    <br/>

<!--
     <form method="POST" action="show.php?attempt">
        <input type="button" value="Show table" name="show"/>
    </form>
-->

<?php

    global $con;

    $con= new mysqli("localhost","root","","register");

    $result1=$con->connect_error;

    if($result1){
        die("failed".$result1);
    }

    echo "connected!!!!!!!!!!";
    

$sql="SELECT id,name FROM user ";

$result2=$con->query($sql);

if ($result2->num_rows > 0) {
        echo "<br>ok!!!!!!!!!!!!!!!<br>";
    }

    //creating the table
    echo("<table border='1'>");

while($row = $result2->fetch_assoc()) {
        echo ("<tr>");
        echo ("<td>".$row["id"]."</td>");
        echo ("<td>".$row["name"]."</td>");
        echo ("</tr>");

        //echo "<br> id".$row["id"]." name".$row["name"]."<br>";
}
echo ("</table>");

$con->close();

?>

</body>

</html>