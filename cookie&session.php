<!-- ---------------COOKIE------------ -->
<?php
setcookie("name","nisha");
if($_COOKIE["name"]){
    echo"cookie set <br>";
    echo"welcome ".$_COOKIE["name"]."<br>";
}
else{
    echo"not set cookie";
}
?>


<!--   -------------SESSION --------------- -->
<?php
session_start();
?>

<html>
    <body>
<?php
$_SESSION["name"]="bittu";
$_SESSION["favcolor"]="blue";
echo"session set<br>";
echo"name - ".$_SESSION["name"];
echo"<br> favourite color - ".$_SESSION["favcolor"];

?>
    </body>
</html>
