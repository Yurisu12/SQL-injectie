<?php

    include "db.php";


        echo "Your Username is ".$name = $_POST["name"]."<br>".PHP_EOL;
        echo "Your Password is ".$pass = $_POST["pass"]."<br>".PHP_EOL;

    $username = $_POST["name"];
    $password = $_POST["pass"];

    $myConn = new DB;



    $query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";

    $result = $myConn->executeSQL($query);

    echo "data type is".gettype($result);

    if (!empty($result)) {
        echo "<br> Login as $username <br>";

        print_r($result);
    } else {
        echo "<br> Invalid login! <br>";

    }

    //OPdracht 3: Ik zie een array.
    //Opdracht 4: OR 1=1 is always TRUE.
    //Opdracht 5: SQL parameters gebruiken.
    /*$stmt = $db_VP->prepare("INSERT INTO user (Username,Password)
VALUES (:use, :pass)");
$stmt->bindParam(':use', $txtuse);
$stmt->bindParam(':pass', $txtpass);
$stmt->execute();
*/
    ?>
