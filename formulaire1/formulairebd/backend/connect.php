<?php
$con = mysqli_connect('localhost','root','','stage');
if (!$con) {
    echo mysqli_connect($e);
}
// else{
//     echo 'Connected';
// }