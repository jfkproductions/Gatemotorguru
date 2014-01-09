<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

// $vid example: t1O6Ae0_rNc
function YouTube($vid)
{
    ?>
    <OBJECT height=344 width=425>
        <PARAM NAME="movie" VALUE="http://www.youtube.com/v/<?=$vid?>&amp;hl=en&amp;fs=1"/>
        <PARAM NAME="allowFullScreen" VALUE="true"><PARAM NAME="allowscriptaccess" VALUE="always"/>
        <embed src="http://www.youtube.com/v/<?=$vid?>&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344">
        </embed>
    </OBJECT>
    <?php
}

//Display two you tube video's side by side with H3 headings
function TwoVids($heading1,$vid1,$heading2,$vid2)
{
    ?>
    <div style="float:left">
        <h3><?=$heading1?></h3>
        <?php YouTube($vid1); ?>
    </div>

    <div style="float:left;margin-left:10px">
        <h3><?=$heading2?></h3>
        <?php YouTube($vid2); ?>
    </div>

    <div style="clear:both"><br/></div>
    <?php
}


function OneVid($heading1,$vid1)
{
    ?>
    <div style="float:left">
        <h3><?=$heading1?></h3>
        <?php YouTube($vid1); ?>
    </div>
    <?php
}
?>