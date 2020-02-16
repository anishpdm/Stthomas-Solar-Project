<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">

</div>
<div class="col col-12 col-sm-8">


<form method="GET">

    <table class="table">
    <center><h1>Solar Tracking system</h1> </center><br>
    <center><h4>ADMIN</h4></center>   
            <tr>
                <td>Username</td>
                <td><input type="text" name=name class="form-control" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name=passwd class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type ="submit" name="mybutn" class="btn btn-success">SUBMIT</button></td>
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

if(isset($_GET["mybutn"]))
{

    $name=$_GET["name"];
    $getpass=$_GET["passwd"];
    if($_GET['name']=="admin" && $_GET['passwd']=="12345")
    {
        echo "<script> window.location.href='main.php'  </script>";
        
    }
    else
    echo "<script> alert('LogIn Failed') </script>";

}
