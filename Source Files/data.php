<?php
//GET ALL DATA -> array($publication)

require_once 'classes.php';

$publications = array();


/*$news1 = new NewsPublication();
$news2 = new NewsPublication();
$news3 = new NewsPublication();
$article1 = new ArticlePublication();
$article2 = new ArticlePublication();
$photo1 = new PhotoReportPublication();
$photo2 = new PhotoReportPublication();
$photo3 = new PhotoReportPublication();


$publications = array($news1,$news2,$article1,$photo1);

//echo '<pre>';
//print_r($publications);

*/

//$publications[] = new NewsPublication();
//$publications[] = new NewsPublication();
//$publications[] = new NewsPublication();

//echo '<pre>';
//print_r($publications);

//CONNECT TO DATABASE

//$con = mysqli_connect("localhost","root","","testsite2");


define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "testsite2");

$con =@mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);


if (@mysqli_connect()) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error();
}

//make query
$result = mysqli_query($con,"SELECT * FROM publication");

//work with results

while ($row = mysqli_fetch_array($result)){
    //echo '<br>' . $row ['type'];
    $publications[] = new $row['type']($row);
}

echo '<pre>';
//print_r($publications);


















