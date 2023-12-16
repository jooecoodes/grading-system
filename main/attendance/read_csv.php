<?php
$path = '../../assets/csv/movies.csv'; // specify the path to the CSV file
$handle = fopen($path, "r"); // open the file in read mode
$data = array(); // create an empty array to store the data
while (($row = fgetcsv($handle)) !== false) { // loop through each row
  $data[] = $row; // append the row array to the data array
}
fclose($handle); // close the file
print_r($data); // print the data array
?>