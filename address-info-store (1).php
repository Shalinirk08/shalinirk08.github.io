<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['address-btn'])){
    session_start();
    $_SESSION['first-name'] = $_POST['fist-name'];
    $_SESSION['last-name'] = $_POST['last-name'];
    $_SESSION['street-address'] = $_POST['street-address'];
    $_SESSION['addres-line-2'] = $_POST['addres-line-2'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zipcode'] = $_POST['zipcode'];
      $_SESSION['phone-no'] = $_POST['phone-no'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['payment'] = $_POST['payment'];
    header('location:./summary.php');
}
?>
