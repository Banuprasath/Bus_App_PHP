<?php
$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    echo "Db connected Succesfully";
}


//-------------------------------------------DELETE VALUES----------------------------------------------

if(isset($_GET['did'])){
   
    
    $did=$_GET['did'];
        echo $did;
        
       $query="DELETE  FROM phpbus where id='$did'";
       $query_run=mysqli_query($con,$query);
    
    
       if($query_run){
    
            echo "<br><center>Value Delted Successfully</center>";
          // print_r($student);
       }
    else{
        echo "No Data Found".mysql_error();
    }
    }


//-------------------------------------------------UPDATING VALUES-----------------------------------------

if(isset($_POST['submit'])){
    $eid=$_GET['id'];

    $frm=$_POST['frm'];
    $dep=$_POST['dep'];
    $to=$_POST['to'];
    $arr=$_POST['arr'];
    $tp=$_POST['tp'];
  //  print_r($_POST);
//echo "value stored success";
//print_r($_POST);

$sql = "UPDATE phpbus SET src='$frm' , dep='$dep', dest='$to' ,arr='$arr',`type`='$tp' where id = $eid; ";

if ($con->query($sql) === TRUE) {
    echo "<center>Updated Succesfully</center>";
    echo "<br>";
    echo "<a href='Add.php'>View</a>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}






    //--------------------------------------------EDIT VALUES-----------------------------------------------




if(isset($_GET['id'])){
    $eid=$_GET['id'];
    //echo $eid;
   // echo var_dump($eid);
   $query="SELECT *  FROM phpbus where id='$eid'";
   $query_run=mysqli_query($con,$query);


   if(mysqli_num_rows($query_run)>0){

         $val=mysqli_fetch_array($query_run);
      // print_r($student);
   }
else{
    echo "No Data Found".mysql_error();
}



?>

<html>
<form name='myform' method='post' >


<table border='1px'>
<tr>
    <td>From</td>
    <td><input type='text' name='frm' value='<?php echo $val['src'] ?>'>
</tr>
<tr>
    <td>Departure</td>
    <td><input type="time" name='dep'  value='<?php echo $val['dep'] ?>'>
</tr>
<tr>
    <td>To</td>
    <td><input type='text' name='to'  value='<?php echo $val['dest'] ?>'>
</tr>
<tr>
    <td>Arrival</td>
    <td><input type='time' name='arr'  value='<?php echo $val['arr'] ?>'>
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
</form>
</html>
   <?php





}

?>