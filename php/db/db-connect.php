<?php
// $con = mysqli_connect("localhost","root","", "mobile_store_arun"); // host,user,pass,db
$con = mysqli_connect("localhost","asif","asif", "mobile_store_arun"); // host,user,pass,db

if(!$con){
    die("error connecting db....!");
}