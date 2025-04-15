<!-- <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    $host ="localhost";
    $dbusrname ="root"
    $dbpassword="";
    $dbname="verification";

    $conn=new mysql($host,$dbusername,$dbpassword,,$dbname);

    if($conn->connect_error)
    {
        die("conncetion failed".$conn->connection_error);
    }
}

$query="select * from login where usernmae='$username' and password='$password'";

$result =$conn->query($query);

if($result->num_rows==1)
{
    header("location: main.html");
exit(); 
}
else{
    echo("failed to login");
    exit();
}
$conn->close();
?> -->