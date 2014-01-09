<?php
/* 
 * Show the Province / Cities selection block(s)
 */


function showAllAreasInSA_boxed()
{
?>
<div style="clear:both"></div>
<br/>
<br/>


<div style="float:left;height:193px;display:table;">
    <div style="vertical-align: middle; display:table-cell;">
        <div>
        <span style="font-size:150%">Find the</span>
        <h2 style="font-size:200%;color: #ED3237">Gate Motor Guru</h2>
        <span style="font-size:150%">closest to you!</span>
        </div>
    </div>
</div>

<div float:right>
        <div class="AreaBox" style="float:right;margin-left:18px">
            <div style="padding:10px">
                <div>
                    <a href="gate-motors-durban.php" title="Gate Motors Durban" class="LargeAreaLink">Durban & KZN</a><br/>
                    <a href="gate-motors-durban.php" title="Gate Motors Durban" class="SmallAreaLink">Durban and Surrounding Areas</a>

                </div>
            </div>
        </div>

        <div class="AreaBox" style="float:right;margin-left:18px">
            <div style="padding:10px">
                <div>
                    <a href="gate-motors-cape.php" title="Gate Motors Cape" class="LargeAreaLink">Cape</a><br/>
                    <a href="gate-motors-cape.php" title="Gate Motors Cape Town" class="SmallAreaLink">Cape Town and Surrounding Areas</a>
                </div>
            </div>
        </div>

            <div class="AreaBox" style="float:right;">
            <div style="padding:10px">
                <div class="SmallAreaLink">
                    <a href="gate-motors-gauteng.php" title="Gate Motors Gauteng" class="LargeAreaLink">Gauteng</a><br/>
                    <a href="gate-motors-pretoria.php" title="Gate Motors Pretora" class="SmallAreaLink">Pretoria</a>,&nbsp;

                    <a href="gate-motors-centurion.php" title="Gate Motors Centurion" class="SmallAreaLink">Centurion</a>,&nbsp;
                    <a href="gate-motors-midrand.php" title="Gate Motors Midrand" class="SmallAreaLink">Midrand</a> <br/>
                    <a href="gate-motors-johannesburg.php" title="Gate Motors Johannesburg" class="SmallAreaLink">Johannesburg</a> <br/>

                    <a href="gate-motors-kempton-park.php" title="Gate Motors Kempton park" class="SmallAreaLink">Kempton Park</a>,&nbsp;
                    <a href="gate-motors-boksburg.php" title="Gate Motors Boksburg" class="SmallAreaLink">Boksburg</a>,&nbsp;
                    <a href="gate-motors-benoni.php" title="Gate Motors Benoni" class="SmallAreaLink">Benoni</a> <br/>

                </div>
            </div>
        </div>


</div>


    <div style="clear:both"></div>
<?php
} //end-showAllAreasInSA-boxed




function findClosestGuru()
{
    ?>
<div style="float:left;height:193px;display:table;">
    <div style="vertical-align: middle; display:table-cell;">
        <div>
        <span style="font-size:150%">Find the</span>
        <h2 style="font-size:200%;color: #ED3237">Gate Motor Guru</h2>
        <span style="font-size:150%">closest to you!</span>
        </div>
    </div>
</div>
    <?php
}//end-findClosestGuru



function largeGearArea($province,$x,$y)
{
    $provinceLC = strtolower($province);
    $extraStyle="";
    if ($province == "Gauteng") $extraStyle='Gauteng';
    if ($province == "KZN") $extraStyle='class="Kzn"';
    if ($province == "Cape") $extraStyle='class="Cape"';


    ?>
    <a class="GearLargeArea"  style="position:absolute;left:<?=$x?>px;top:<?=$y?>px" href="gate-motors-<?=$provinceLC?>.php" title="Gate Motors <?=$province?>"><?=$province?></a>
    <?php
}


function largeGearAreaImageText($province,$x,$y)
{
    $provinceLC = strtolower($province);
    $extraStyle="";
    if ($province == "Gauteng") $image='Gauteng.png';
    if ($province == "KZN") $image='Kzn.png';
    if ($province == "Cape") $image='Cape.png';


    ?>
    <a class="ImageLinkBoxLess" style="position:absolute;left:<?=$x?>px;top:<?=$y?>px" href="gate-motors-<?=$provinceLC?>.php" title="Gate Motors <?=$province?>">
        <img src="images/<?=$image?>" alt="Gate Motors in <?=$province?>"/>
    </a>
    <?php
}


function smallGearArea($area,$x,$y)
{
    $areaLC = strtolower($area);
    $areaLC = str_replace(" ", "-", $areaLC);
    //Special case for other (cape-other)
    if ($area != "...other") {
    ?>
    <a class="GearSmallArea" style="position:absolute;left:<?=$x?>px;top:<?=$y?>px" href="gate-motors-<?=$areaLC?>.php" title="Gate Motors <?=$area?>"><?=$area?></a>
    <?php
    } else { // its "other" meaning cape - other 
    ?>
    <a class="GearSmallArea" style="position:absolute;left:<?=$x?>px;top:<?=$y?>px" href="gate-motors-cape.php" title="Gate Motors Cape">...other</a>
    <?php
    }
}



function showAllAreasInSA()
{
?>
    <div style="clear:both"></div>

<?php findClosestGuru(); ?>

    <div style="float:right">

        <div style="position:relative">
            <div style="position:absolute;left:-700px">
                <img src="images/area-gears-h2.jpg">
                <?php
                largeGearAreaImageText("Gauteng", 100, 116);
                smallGearArea("Pretoria", 123, 65);
                smallGearArea("Centurion", 160, 85);
                smallGearArea("Midrand", 88, 88);
                smallGearArea("Johannesburg", 78, 150);
                smallGearArea("Kempton Park", 194, 155);
                smallGearArea("Fourways", 82, 180);
                smallGearArea("Boksburg", 158, 175);
                smallGearArea("Benoni", 230, 188);
                smallGearArea("Sandton", 120, 206);
                smallGearArea("Randburg", 183, 212);
                smallGearArea("Bryanston", 100, 233);
                smallGearArea("Roodepoort", 136, 257);

                largeGearAreaImageText("Cape", 383, 163);
                smallGearArea("Cape town", 364, 110);
                smallGearArea("Stellenbosch", 400, 136);
                smallGearArea("George", 340, 150);
                smallGearArea("Port Elizabeth", 342, 191);
                smallGearArea("East London", 407, 214);
                smallGearArea("...other", 380, 235);

                largeGearAreaImageText("KZN", 585, 130);
                smallGearArea("Richards Bay", 577, 80);
                smallGearArea("Umshlanga", 600, 98);
                smallGearArea("Durban", 555, 108);
                smallGearArea("Pietermaritzburg", 565, 165);
                smallGearArea("New Castle", 581, 190);

                ?>

            </div>
        </div>

    </div>

    <div style="clear:both"></div>
    <div style="height: 180px"></div>
    <div style="clear:both"></div>
<?php
} //end-showAllAreasInSA







//-- NO WHITE SPACE AFTER THIS !!!!!
?>