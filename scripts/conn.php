<?php

$conn= mysqli_connect("localhost","root","","Dolphin_crm");

    if(!$conn){
        echo "Connection Failed";
    }