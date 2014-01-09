<?php
    include_once __DIR__."/forumHTML.php";
/* 
 * Functions to create,validate and retrieve forums
 */


function getTopicList()
{

}

//Function I ripped from the NET, should convert sentence to url friendly filename
function create_slug($str, $lowercase = FALSE)
{

    if ($lowercase === TRUE) $str = strtolower($str);

    $str = strip_tags($str);

    // Use dash or underscore as separator
    $replace = '-';

    $trans = array(
                    '&\#\d+?;'                => '',
                    '&\S+?;'                => '',
                    '\s+'                    => $replace,
                    '[^a-z0-9\-]'        => '',
                    $replace.'+'            => $replace,
                    $replace.'$'            => $replace,
                    '^'.$replace            => $replace,
                    '\.+$'                    => ''
                  );

    foreach ($trans as $key => $val)
    {
        $str = preg_replace("#".$key."#i", $val, $str);
    }

    $str = trim(stripslashes($str));

    return $str;
}


function convertToSafeName($name)
{
    $safeName = $name;
    
  
    //convert double white spaces of all types to single spaces
    $safeName = preg_replace('!\s+!', ' ', $safeName);
    //Strip all leading and trailing spaces
    $safeName = trim($safeName);

    //Strip out dangerous characters - ie all chacters other than a-z A-Z 0-0
    $safeName = create_slug($safeName);

    //remove trailing and leading - dash chars
    $safeName = trim($safeName, "-");

    //cut the string if it is longer than 200 characters
    if (strlen($safeName) > 200) $safeName = substr ($safeName, 0, 200);

    //convert all spaces to - hyphens, and process through uber safe string processor
    

    return $safeName;
}




function appendToFile($filename,$string)
{
    $fh = fopen($filename, 'a') or die("can't open file");
    fwrite($fh, $string."\n");
    fclose($fh);
}

function createTopic($topic,$content,$postedBy)
{
    $safeTopicName = convertToSafeName($topic);

    if (file_exists($safeTopicName)) {
        echo "<br/>Topic already appears to exist<br/>";
        return;
    }
    //Add topic to central list
    appendToFile("forumtopics.txt",$safeTopicName);


    //Create the content file for the topic
    $html = createFirstTopicPostHTML($topic,$content,$postedBy);
    appendToFile($safeTopicName.".txt");

    //Create the php file for the topic
    $phpFileContents = createTopicPHP();
    file_put_contents($safeTopicName.".php", $phpFileContents);

}

// Display list of hyperlinked forum topics
function showForumTopicList()
{
    if (!file_exists("forumtopics.txt")) return;

    //Read each line of text as a topic into a string array
    $lines = file("forumtopics.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $topic)
    {
        echo "$topic<br/>";
    }

}



?>
