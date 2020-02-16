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
    <td> <h5>View All Solar Panels</h5> </td>
</tr>

<tr>
    <th> Panel Id </th>
    <th>Address</th>
    <th>Latitude</th>
    <th>Longitude</th>
 
</tr>


<?php
include './db.php';
$conn = new mysqli("localhost", "root", "", "solar");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `Id`, `PanelId`, `Address`, `Latitude`, `Longitude` FROM `solarpanels` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $PanelId=$row['PanelId'];

        $Address=$row['Address'];
        
        $Latitude=$row['Latitude'];

        $Longitude=$row['Longitude'];


        echo "<tr>
        <td>  $PanelId</td>
        <td> $Address</td>
        <td>$Latitude</td>
        <td> $Longitude</td>
     
    </tr>";


    }
} else {
    echo "0 results";
}

?>

</table>
</form>


</div>

<div class="col col-12 col-sm-2">

</div>
</div>
</div>


    
</body>
</html>