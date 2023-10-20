<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
form {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background */
    border-radius: 10px;
}

/* Style the input fields and buttons */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #009E60; /* Bootstrap's primary color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #00b300; /* Darker shade for hover effect */
}

/* Center the table and add some spacing */
table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 100%;
}

/* Style the table header */
th {
    background-color: #007bff;
    color: #fff;
    font-size:22px;
}

/* Style the table cells */
/* Add custom CSS here */

/* ... (previous styles) */

/* Increase the font size inside the table */
td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
    font-size: 20px; /* Adjust the font size as needed */
}

.d-block w-100 {
  max-width: 100%;
  height: 150px;
}
/* Apply a background image */
body {
   /* background-image: url('three.jpg'); */
    background-size: cover;
    background-attachment: fixed;
}

#ndf{
    color:red;
}


/* -------------------------------------------leave it for carousel------------------------------------------------*/




.carousel-item.active, .carousel-item .view {
        height: 50vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 50vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    
      .content h1 {
        font-size: 55px;
      }
      .content h5 {
        font-size: 23px;
        margin-left: 80px;
        margin-right: 80px;
      }
    
      /*MEDIA QUERIES RESPONSIVE DESIGN */
    
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        /* Carousel 1/2 of screen */
    
    .carousel-item.active, .carousel-item .view {
        height: 30vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 30vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    } 
    
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
            /* Carousel 1/2 of screen */
    
    .carousel-item.active, .carousel-item .view {
        height: 30vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 30vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    
    } 
    
    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
    /* Carousel 1/2 of screen */
    
    .carousel-item.active, .carousel-item .view {
        height: 30vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 30vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    } 
    
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        /* Carousel 1/2 of screen */
    
    .carousel-item.active, .carousel-item .view {
        height: 50vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 50vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    
    } 
    
    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        /* Carousel 1/2 of screen */
    
    .carousel-item.active, .carousel-item .view {
        height: 50vh!important;
      }
      .carousel-item.active, .carousel-item  {
        height: 50vh!important;
      }
    
      .carousel-item img {
        object-fit: cover;
        width:100%!important;
        height: 100% !important;
      }
    
    }



</style>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="three.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
   // echo "Db connected Succesfully";
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
        echo "</tr>";
    }
}
else{
    echo "<tr id='ndf'>";
    echo "<center><td colspan='6' id='ndf' >No Bus Found</td></center>";
    echo "</center>";
}




}



?>