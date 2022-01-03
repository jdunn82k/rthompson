<?php

include 'includes/classes/iCalExport.php';



$ics = new \rt\iCalExport(array(
    'location' => $_POST['location'],
    'description' => $_POST['description'],
    'dtstart' => $_POST['date_start'],
    'dtend' => $_POST['date_end'],
    'summary' => $_POST['summary'],
    'url' => $_POST['url']
));

header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename=robyn-thompson-'.date("Ymd").'ics');
echo $ics->to_string();
exit;