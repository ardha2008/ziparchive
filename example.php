<?php


require_once 'zip.php';

$files=array('hello.txt','introduction.txt');
$check=zip($files,'name_zip.zip');

if($check==true){
    echo 'done';
}
?>
