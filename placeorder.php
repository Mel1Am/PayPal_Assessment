<?php

include('conn.php');

if (isset($_POST['placeOrderBtn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $qty = mysqli_real_escape_string($con, $_POST['inp_qty']);
    $price =  $qty * 25;
    $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);

    $inset_query = "INSERT INTO `details`(`name`, `email`, `phone`, `zipcode`, `address`, `qty`, `price`, `payment_id`) VALUES ('$name','$email','$phone','$zipcode','$address','$qty','$price','$payment_id') ";
    $insert_query_run = mysqli_query($con, $inset_query);
    if ($insert_query_run) {
        echo 201;
    } else {
        echo 500;
    }
}