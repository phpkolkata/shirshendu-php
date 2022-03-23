<?php

// print "hello $_POST[nm] your age is $_POST[age]";
// echo "hello ",$_POST['nm']," your age is ",$_POST['age'];

// $nm = strtoupper($_POST['nm']);
// $age = $_POST['age'];
// echo "hello ",$nm," your age is ",$age;

print "request";
print_r($_REQUEST);
print "<br>";

print "POST";
print_r($_POST);
print "<br>";

print "GET";
print_r($_GET);
print "<br>";

extract($_REQUEST);
// extract($_POST);
// extract($_GET);
$nm = strtoupper($nm);
echo "hello ",$nm," your age is ",$age;


// Query String
// ?nm=raj&age=44


// $_GET
// advantage: it creates url dependant page, so is usefull for future refrence, bookmarking and sharing
// disadvantage: it creates complex url,
                // it expose the passing data (not secure), 
                // it has limit of passing data

// $_POST
// disadvantage: it doesn't create url dependant page, not usefull for future refrence, bookmarking and sharing
// advantage: it creates clean url,
                // it doesn't expose the passing data (secure), 
                // it has no limit of passing data