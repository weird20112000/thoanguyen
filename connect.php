<?php
$server='localhost';
$user='root';
$pass='';
$data='quanlywebphim';
$conn=mysqli_connect($server,$user,$pass,$data) 
or die ('Not connect');
mysqli_query($conn,'set names"utf8"');
?>
