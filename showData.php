<?php
include 'Db.php';
$show = 'SELECT * FROM student';
$result = mysqli_query($conn,$show);
if($result){
   while($data=mysqli_fetch_assoc($result)){
    echo '<pre>';
    echo  'ID:'.$data['id'].'<br>';
    echo  'NAME:' .$data['sname'].'<br>';
    echo  'PASSWORD:' .$data['pass'];
    echo '</pre>';
}
}
?>