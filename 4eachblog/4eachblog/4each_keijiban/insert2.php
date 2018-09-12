<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=nemu;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4eachblog/4eachblog/4each_keijiban/4each_contactform.php");

?>
