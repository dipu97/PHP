<?php
include_once("CRUD.php");
$crud = new CRUD();
$sql="SELECT * FROM student_info ORDER BY ID DESC";
$result=$crud->getData($sql);

?>

<html>
    <head>
    <title></title>
        <body>
        <table border="1">
            <tr>
            <th>Name:</th>
            <th>Student ID:</th>
            <th>Email:</th>
            <th>Action:</th>
            <th>Department: </th>
            </tr>
            
<?php
    foreach($result as $res)
    {
        echo "<tr>";
        echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['student_id']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['department']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\"> Edit </a>
        <a href=\"delete.php?id=$res[id]\"> Delete </a></td></tr>";
            
    }
?>
            </table>
        </body>
    </head>
</html>