<?php
include_once("CRUD.php");
$crud=new CRUD();
if(isset($_POST['addData'])){
    $Name=$_POST['Name'];
     $student_id=$_POST['student_id'];
     $email=$_POST['email'];
     $department=$_POST['department'];
    $query="INSERT INTO student_info(Name,student_id,email,department) VALUES('$Name','$student_id','$email','$department')";
    if($crud->execute($query)){
        echo "Insert Successfully!";
    }
    else{
        echo " Insertion Failed";
    }
}
?>
<form action="add.php" method="post">
    <input type="text" name="Name">
    <input type="text" name="student_id">
    <input type="email" name="email">
    <input type="text" name="department">
    <input type="submit" name="addData" value="Add Data To Server">
    
</form>