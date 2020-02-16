<?php
include './navbar.php';

?>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">

</div>
<div class="col col-12 col-sm-8">

<form action="" method="post">
<table class="table">

<tr>
    <td></td>
    <td> <h5>New user Registration</h5> </td>
</tr>

<tr>
    <td>   Panel Id </td>
    <td><input type="text" class="form-control" name="panelid" required></td>
</tr>
<tr>
    <td>Address</td>
    <td><input type="text" class="form-control" name="addr" required></td>
</tr>

<tr>
    <td>Latitude</td>
    <td><input type="text" class="form-control" name="lat" required></td>
</tr>


<tr>
    <td>Longitude</td>
    <td><input type="text" class="form-control" name="long" required></td>
</tr>






<tr>
    <td></td>
    <td><button  name="but"  class="btn btn-success" type="submit">SUBMIT</button></td>
</tr>


<tr>
    <td></td>
  
</tr>


</table>
</form>


</div>

<div class="col col-12 col-sm-2">

</div>
</div>
</div>


    
</body>
</html>


<?php
include './db.php';
if(isset($_POST['but'])){

$panelid=$_POST['panelid'];

$addr=$_POST['addr'];

$lat=$_POST['lat'];

$long=$_POST['long'];


$sql = "INSERT INTO `solarpanels`(`PanelId`, `Address`, `Latitude`, `Longitude`)
 VALUES($panelid, '$addr', '$lat','$long')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully') </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>