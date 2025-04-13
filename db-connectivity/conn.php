<?php
$host='localhost';
$name='root';
$pass='';
$db_name='blogPanel';
$conn=new mysqli($host,$name,$pass,$db_name);
if($conn->error){
    die("Error: " . $conn->error);
}
// else{
//     echo "Connected successfully";
// }

?>