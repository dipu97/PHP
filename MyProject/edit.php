<?php
include_once("../classes/CRUD.php");
$crud=new CRUD();
$id=$_GET['id'];
$query="SELECT * FROM student_info WHERE id=$id";
$result=$crud->getData($query);
foreach($result as $res){
    $name=$res['Name'];
    $student_id=$res['student_id'];
    $email=$res['email'];
    $department=$res['department'];

}
?>
<form action="update.php" method="post">
    <input name="id" value="<?php echo $id;?>" hidden/>
    <label>Name </label></br>
<input type="text" name="Name" value="<?php echo $name;?>"/></br>
<label> Student ID</label></br>
<input type="text" name="student_id" value="<?php echo $student_id;?>"/></br>
<label> Email</label></br>
<input type="text" name="email" value="<?php echo $email;?>"/></br>
<label>Department</label>
<input type="text" name="department" value="<?php echo $department;?>"/></br>
<input type="submit" value="update" name="update"/>

</form>