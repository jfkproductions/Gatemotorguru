<?php

function createFirstTopicPostHTML($topic,$content,$postedBy)
{
    $html = <<<HTML
    
<div>
        <h1>$topic<h1>
	<div>
		Comment by <b>$postedBy</b> :
	</div>

	<div class="Tab1">
	<pre>
$content
	</pre>
	</div>
</div>
<hr/>


HTML;
    return html;
}


function createTopicPHP()
{
$phpFileContents = <<<EOF
        <?php
            include_once "../include/header.php";
            \$filename = \$_SERVER["SCRIPT_NAME"];
            \$filename = "." .(substr(\$filename,0,(strrpos(\$filename,".")))) . ".txt";
            \$html = file_get_contents(\$filename);
            include_once "../include/footer.php";
        ?>
EOF;
    return $phpFileContents;
}

function showFirstPostForm($postedBy,$text,$challenge,$resultMessage)
{
    ?>
    <b>To post a comment:</b><br/>
    <div style="border-width:1px;border-style:solid;padding: 5px 5px 5px 5px">
    <form method="post" action="<?= "forum_submit.php" ?>">
            Name: <input name="posted-by"/ value="<?= $postedBy ?>"><br/>
            Comment: <textarea name="text" rows="5" cols="60"><?= $text ?></textarea><br/>
            Enter Challenge Number: <input name="challenge-entered"/>
            &nbsp;&nbsp; Challenge - You must Enter this exactly : <span><?= $challenge ?></span><br/>

            <input type="hidden" name="challenge" value="<?= $challenge ?>"/>

            <input type="submit" value="Post Comment"/>

            <div class="Huge Navy">
                    <?= $resultMessage ?>
            </div>

    </form>
    </div>

    <?php
}

?>
