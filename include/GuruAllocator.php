<?php
    //include "db.php";


function nextGuru($city)
{
    $filename = "data/".strtoupper($city). ".txt";
    if (!file_exists($filename)) {
        return "ANDRIES";
    }

    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //read text file as array of strings for each line
    $nextItemPos = (int)$lines[0]; //1..Number of Items
    //Clip Incorrect Values;
    if ($nextItemPos > count($lines)-1) $nextItemPos = 1;
    if ($nextItemPos < 1) $nextItemPos = 1;

    $nextItem = $lines[$nextItemPos-1];

    //Advance to the next item
    $nextItemPos++;
    if ($nextItemPos > count($lines)-1) $nextItemPos = 1; //Wrap Around

    //Write the updated contents back to the file (mainly it will be the counter value that has changed)
    $lines[0] = $nextItemPos;
    $data = implode("\n", $lines) . "\n";
    file_put_contents($filename, $data);

    //return the result
    return $nextItem;
}

function nextGuruEmailAddress($city)
{
    return "<andries.malan@gmail.com"; //HARD-CODED for now


    //openDB();
    $guruID = nextGuru($city); //Fetch Guru and Advance Next Guru
    $guru = getGuru($guruID);

    if (isset($guru) && $guru['guruID'] == $guruID) {
        return $guru['email'];
    }
    else {
        return "ERROR<andries.malan@gmail.com>";
    }

}

?>
