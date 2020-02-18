<?php
include_once("CRUD.php");
$crud= new CRUD();
if(isset($_POST['update'])){
    $id =$_POST['id'];
    $Name =$_POST['Name'];
    $student_id =$_POST['student_id'];
    $email =$_POST['email'];
    $department=$_POST['department'];
    $query="UPDATE student_info set Name='$Name',student_id='$student_id',email='$email',department='$department' WHERE id=$id ";
    if($crud->execute($query)){
        header('location:index.php');
    }
    else{
        echo "Update Error";
    }
}
?>