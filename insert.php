
<?php
include 'Db.php';
$name = $_GET['sname'];
$pass = $_GET['pass'];

echo $name. "<br>";
echo $pass;
if(isset($_GET['submit'])){
   $insert = "INSERT INTO student (sname, pass, created_at)
    VALUES ('$name', '$pass', NOW())";
    if(mysqli_query($conn,$insert)){
        echo "data inserted successfully";
    }
}

?>