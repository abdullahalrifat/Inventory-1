<?php

require_once 'core.php';

$sql = "SELECT * FROM contact where Type='2'";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";

    while($row = $result->fetch_array()) {
        $output['data'][] = array(
            'name'=>$row[2],
            'phone'=>$row[4]
        );

    } // /while

}// if num_rows

$connect->close();

echo json_encode($output);