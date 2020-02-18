<?php
include_once("../classes/CRUD.php");
$crud = new CRUD();
$sql="SELECT * FROM student_info ORDER BY ID DESC";
$result=$crud->getData($sql);

?>

          <button id="AddData" >Add new Data</button>
        <table border="1">
            <tr>
            <th>Name:</th>
            <th>Student ID:</th>
            <th>Email:</th>
            <th>Department: </th>
            <th>Action:</th>
            </tr>

<?php
    foreach($result as $res)
    {
        echo "<tr>";
        echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['student_id']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['department']."</td>";
        echo "<td><button id='$res[id]' class='dataAdd'> Edit </button>
        <button id='$res[id]' class='dataDelete'> Delete </button></td></tr>";

    }
?>
            </table>
            <script type="text/javascript">
            $('#AddData').click(function(){
              $.get('layout/dataadd.php',function(response){
                $('#DataAdd').html(response);
              });
            })

            </script>
