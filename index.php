<?php

//  Importing required files
include 'config/util.php';
include 'xl_reader.php';


//  Opens a excel file for reading
$excelData = openFile('sample.xlsx');

//  Data easy access
extract($excelData);

//  Generates data in key value pairs
$keyValueArray = generateKeyValuePairs($keys, $rows);
 
//  Outputs data in required format
displayResponse('success', 'Excel Data in json format', $keyValueArray);




?>