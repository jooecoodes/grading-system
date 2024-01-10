<?php
$data = [ // create an array of data
  ['id', 'title', 'poster', 'overview', 'release_date', 'genres'],
  [181808, 'Star Wars: The Last Jedi', 'https://.../mWII.jpg', 'Rey develops her newly discovered abilities with the guidance of Luke Skywalker, [...]', 1513123200, 'Documentary'],
  [383498, 'Deadpool 2', 'https://.../3VAd.jpg', 'Wisecracking mercenary Deadpool battles the evil and powerful Cable and other bad [...]', 1526346000, 'Action, Comedy, Adventure'],
  [157336, 'Interstellar', 'https://.../BvIx.jpg', 'Interstellar chronicles the adventures of a group of explorers who make use of a [...]', 1415145600, 'Adventure, Drama, Science Fiction']
];
$path = '../../assets/csv/movies.csv'; // specify the path to the CSV file
$handle = fopen($path, "w"); // open the file in write mode
foreach ($data as $row) { // loop through each row
  fputcsv($handle, $row); // write the row to the file
}
fclose($handle); // close the file

?>