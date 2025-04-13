<?php
session_start();
  include('../db-connectivity/conn.php');


    if(isset($_POST['register'])){
        $adminName=$_POST['adminName'];
$adminEmail=$_POST['adminEmail'];
$adminPass=$_POST['adminPass'];
$stmt=$conn->prepare("INSERT INTO `admin` (`id`, `admin`, `admin_email`, `admin_pass`)
  VALUES (null,?,?,?)");
  $stmt->bind_param("sss",$adminName,$adminEmail,$adminPass);
   $result=$stmt->execute();
$stmt->insert_id;
   if($result){
    $_SESSION['user']=['admin'=>$adminName,'admin_email'=>$adminEmail,'admin_id'=>$stmt->insert_id];
    header("Location: /blogPanel");
   }
 else{
    echo "Form Not submitted";
}
}
else if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
 $query1="select * from admin where admin_email='$email' && admin_pass='$password'";
$result1=$conn->query($query1);

$uname="";
$admin_id=0;
if($result1->num_rows==1){
    foreach($result1 as $row){
        $uname=$row['admin'];
        $admin_id=$row['id'];
        $_SESSION['user']=['admin'=>$uname,'email'=>$email,'password'=>$password,'admin_id'=>$admin_id];
        header("Location:/blogPanel");
    }

} else{
    echo "Invalid Email or Password";
}



}
else if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("Location:/blogPanel");
}







?>