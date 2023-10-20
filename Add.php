<?php

$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    echo "Db connected Succesfully";
}

if(isset($_POST['submit'])){

    $frm=$_POST['frm'];
    $dep=$_POST['dep'];
    $to=$_POST['to'];
    $arr=$_POST['arr'];
    $tp=$_POST['tp'];


    if($frm==$to){
        echo "The From and To Location can't be Same";
    }

    else{
        
$sql = "INSERT INTO phpbus (src,dep,dest,arr,`type`) VALUES ('$frm', '$dep','$to','$arr','$tp')";

if ($con->query($sql) === TRUE) {
    echo "<center>New record created successfully</center>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    }
//echo "value stored success";
//print_r($_POST);

}





?>

<html>
<form name='myform' method='post' >


<table border='1px'>
<tr>
    <td>From</td>
    <td><input type='text' name='frm'>
</tr>
<tr>
    <td>Departure</td>
    <td><input type="time" name='dep'>
</tr>
<tr>
    <td>To</td>
    <td><input type='text' name='to'>
</tr>
<tr>
    <td>Arrival</td>
    <td><input type='time' name='arr'>
</tr>
<tr>
    <td>Type</td>
    <td><Select name='tp'>
    <option>------Select--------</option>
        <option value='TNSTC'>TNSTC</option>
        <option value='SETC'>SETC</option>
</select></td>
</tr>
<tr>
    <td><input type='submit' valu='submit' name='submit'></td>
    <td><input type='reset' name='reset' >
</tr>
</table>
<a href='admin-view.php'>View</a>

</form>
</html>
<center>
    <h3>Last 5 Inserted Records</h3>
<table class='table table-dark table-striped table-hover' border='1px'>
    <tr>
        <th>From</th>
        <th>Departure</th>
        <th>Destignation</th>
        <th>Arrival</th>
        <th>Type</th>
        <th colspan=2>Actions</th>
       
    </tr>
<?php

$sql="SELECT * FROM `phpbus` order by id DESC LIMIT 5 ";
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


?>