<?php

$server="localhost";
$user="root";
$pass="";
$db="newdb";

$con=mysqli_connect($server,$user,$pass,$db);
if(!$con){
    die("connection not established".mysqli_connect_error());
}
else{
    echo"connection established successfully";
}
echo"<br>";

//----------------create database-----------
// $con=mysqli_connect($server,$user,$pass);
// if(!$con){
//     die("connection not established".mysqli_connect_error());
// }
// else{
//     echo"connection established successfully";
// }
// echo"<br>";

// $q="CREATE DATABASE formDB";
// $res=mysqli_query($con,$q);
// if($res>0){
//     echo"database created successfully";
// }
// else{
//     echo"databases not created";
// }


//----------------create table-------------------
// $q1="CREATE TABLE students(name varchar(20),age int(2))";
// $res1 = mysqli_query($con,$q1);
// if($res1>0){
//     echo"table created successfully";
// }
// else{
//     echo"table not created";
// }

//---------------------insert data----------------------------
$name=$_GET['uname'];
$age=$_GET['age'];
$q2="INSERT INTO `students`(`name`, `age`) VALUES ('$name','$age')";
$res2=mysqli_query($con,$q2);
if($res2>0){
    echo"data inserted successfully";
}
else{
    echo"data not inserted";
}

//-----------display all data--------------------
// $q3="SELECT * FROM `students`";
// $res3=mysqli_query($con,$q3);
// if(mysqli_num_rows($res3)>0){
//     while($row=mysqli_fetch_assoc($res3)){
//         echo "name - ".$row['name']." age - ".$row['age']."<br>";
//     }
// }
// else{
//     echo"no data";
// }

mysqli_close($con);

?>
