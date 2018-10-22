<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['probtn'])){
    session_start();
    echo "procesing...";
    $_SESSION['shirt'] = $_POST['shirt'];
    $_SESSION['clothing'] = $_POST['clothing'];
    $_SESSION['quan'] = $_POST['quan'];
    $_SESSION['size'] = $_POST['size'];
    $_SESSION['color'] = $_POST['color'];
    header("location:./address.php");
}



?>
