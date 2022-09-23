<?php
$servername="localhost";
$database="coffe";
$username="root";
$password="";
//connect to local database
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $typ=$_POST['typee'];
        $quan=$_POST['quantity'];
        $price=$_POST['price'];
       $sql="INSERT INTO myorder VALUES('$fname','$lname','$typ','$quan','$price')";
    }
       if (mysqli_query($connection, $sql))
{
    echo "<br>";
    echo " Data successufully inserted ";
}
       mysqli_close($connection);

}
else
{
    die('could not connect:');
}
?>
