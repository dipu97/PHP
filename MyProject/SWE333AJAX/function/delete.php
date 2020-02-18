<?php
include_once("CRUD.php");
$crud =new CRUD();
$id = $_GET['id'];
$sql="DELETE FROM student_info where id=$id";
if($crud->execute($sql)){
//echo "Delete Successfully";
    header("location:index.php");
}
else{
echo "Problem in Deletion";
}
?>