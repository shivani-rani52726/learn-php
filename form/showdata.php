<?php

echo"succesfully";

$name=$_GET['name'];

$showdata = [
    'Name' =>$name,
    // 'password' =>$password,
    // 'confirmpassword' =>$confirmpassword
];

print_r($showdata);

?>

