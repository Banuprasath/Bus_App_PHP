<?php

$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    echo "Db connected Succesfully";
}
?>


<form name='myform' method='post'>

From:<input type='text' placeholder='From' name='frm'></br>
To:<input type='text' placeholder='To' name='to'></br>
<input type='submit' value='submit' name='submit'></br>

</form>
<table border='1px'>
    <tr>
        <th>From</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Arrival</th>
        <th>Type</th>
</tr>
<?php


if(!isset($_POST['submit'])){
    $sql="select * from phpbus";
    $result=$con->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
    
            echo "<tr>";
           
            echo "<td>".$row["src"]."</td>";
          
            echo "<td>".$row["dep"]."</td>";
            echo "<td>".$row["dest"]."</td>";
            echo "<td>".$row["arr"]."</td>";
            echo "<td>".$row["type"]."</td>";
            ?>
        <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>View</a></td>
        <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
            <?php
            echo "</tr>";
        }
    }
    }





if(isset($_POST['submit'])){
    $frm=$_POST['frm'];
    $to=$_POST['to'];

    $sql="select * from phpbus where src LIKE '%$frm%' and dest LIKE '%$to%'; ";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        echo "<tr>";
       
        echo "<td>".$row["src"]."</td>";
      
        echo "<td>".$row["dep"]."</td>";
        echo "<td>".$row["dest"]."</td>";
        echo "<td>".$row["arr"]."</td>";
        echo "<td>".$row["type"]."</td>";

        ?>
         <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>View</a></td>
    <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
        <?php
        echo "</tr>";
    }
}




}




?>